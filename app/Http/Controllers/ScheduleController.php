<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Poli;
use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\DoctorSchedule;
use App\Models\UserSchedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

class ScheduleController extends Controller
{
    public function indexpoli()
    {
        $poli = DB::table('polis')->get();
        return view('schedule.indexpoli', [
            'title' => 'Poli',
            'poli' => $poli,
        ]);
    }

    public function available()
    {
        $schedules = DoctorSchedule::with('doctor')
            ->where('schedule', '>=', date('Y-m-d'))
            ->where('status', 'Tersedia')
            ->orderBy('schedule', 'asc')
            ->get();

        return view('schedule.available', [
            'title' => 'Schedule',
            'schedules' => $schedules,
        ]);
    }

    public function booked()
    {
        $userSchedules = UserSchedule::with('doctorschedule')
            ->whereHas('doctorschedule', function ($query) {
                $query->where('status', 'Dipesan');
            })
            ->get();
        foreach ($userSchedules as $userSchedule) {
            $userSchedule->doctorSchedule->formattedScheduleDate = Carbon::parse($userSchedule->doctorSchedule->schedule)->isoFormat('DD MMMM YYYY');
            $userSchedule->doctorSchedule->formattedScheduleDay = Carbon::parse($userSchedule->doctorSchedule->schedule)->isoFormat('dddd');
            $userSchedule->doctorSchedule->formattedScheduleTime = Carbon::parse($userSchedule->doctorSchedule->schedule)->format('H:i') . ' WIB';
        }

        return view('schedule.booked', [
            'title' => 'Schedule',
            'schedules' => $userSchedules,
        ]);
    }

    public function complete()
    {
        $userSchedules = UserSchedule::with('doctorschedule')
            ->whereHas('doctorschedule', function ($query) {
                $query->where('status', 'Selesai');
            })
            ->get();
        foreach ($userSchedules as $userSchedule) {
            $userSchedule->doctorSchedule->formattedScheduleDate = Carbon::parse($userSchedule->doctorSchedule->schedule)->isoFormat('DD MMMM YYYY');
            $userSchedule->doctorSchedule->formattedScheduleDay = Carbon::parse($userSchedule->doctorSchedule->schedule)->isoFormat('dddd');
            $userSchedule->doctorSchedule->formattedScheduleTime = Carbon::parse($userSchedule->doctorSchedule->schedule)->format('H:i') . ' WIB';
        }

        return view('schedule.complete', [
            'title' => 'Schedule',
            'schedules' => $userSchedules,
        ]);
    }


    public function indexdoctor($id)
    {
        $doctor = Doctor::where('poli_id', $id)->get();
        return view('schedule.indexdoctor', [
            'title' => 'Doctor',
            'doctor' => $doctor,
            'poli' => DB::table('polis')->get()
        ]);
    }

    public function scheduleform($id)
    {
        $doctor = Doctor::findorfail($id);
        return view('schedule.scheduleform', [
            'title' => 'Schedule Form',
            'doctor' => $doctor,
        ]);
    }

    public function store(Request $request)
    {
        $doctorId = $request->doctor_id;
        $scheduledates = $request->scheduledate;
        // Simpan scheduledate ke dalam tabel schedules
        foreach ($scheduledates as $scheduledate) {
            Carbon::setLocale('id');
            $now = Carbon::parse($scheduledate);
            $dayName = $now->isoFormat('dddd');
            $waktu = '';

            if ($now->hour >= 0 && $now->hour < 11) {
                $waktu = 'Pagi';
            } elseif ($now->hour >= 11 && $now->hour < 14) {
                $waktu = 'Siang';
            } elseif ($now->hour >= 14 && $now->hour < 18) {
                $waktu = 'Sore';
            } else {
                $waktu = 'Malam';
            }
            DoctorSchedule::create([
                'doctor_id' => $doctorId,
                'schedule' => $scheduledate,
                'hari' => $dayName,
                'waktu' => $waktu
            ]);
        }
        // Menghubungkan tabel doctors dan schedules melalui pivot table doctor_schedules
        $doctor = Doctor::find($doctorId);
        // Cek apakah dokter ditemukan
        if (!$doctor) {
            return redirect()->back()->with('error', 'Dokter tidak ditemukan.');
        }

        return redirect('/available')->with('success', 'Jadwal Dokter Berhasil Ditambahkan');
    }

    public function delete($id)
    {
        $schedule = DoctorSchedule::find($id);

        // Cek apakah jadwal ditemukan
        if (!$schedule) {
            return redirect()->back()->with('error', 'Jadwal tidak ditemukan.');
        }

        // Hapus jadwal
        $schedule->delete();

        return redirect('/available')->with('delete', 'Jadwal Dokter Berhasil Dihapus');
    }
}
