<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Poli;
use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\DoctorSchedule;
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

    public function scheduleshow()
    {
        $schedules = DoctorSchedule::with('doctor')->where('schedule','>=',date('Y-m-d'))->get();

        return view('schedule.indexschedule', [
            'title' => 'Schedule',
            'schedules' => $schedules,
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

            if ($now->hour >= 0 && $now->hour < 12) {
                $waktu = 'Pagi';
            } elseif ($now->hour >= 12 && $now->hour < 17) {
                $waktu = 'Siang';
            } elseif ($now->hour >= 17 && $now->hour < 20) {
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

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
}
