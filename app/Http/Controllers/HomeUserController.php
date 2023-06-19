<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Poli;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\DoctorSchedule;
use App\Models\UserSchedule;
use Illuminate\Support\Facades\DB;

class HomeUserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'title' => 'HomeUser',
        ]);
    }

    public function about()
    {
        return view('user.about', [
            'title' => 'AboutUser',
        ]);
    }

    public function registerpoli()
    {
        return view('user.registerpoli', [
            'title' => 'RegisterPoli',
            'poli' => DB::table('polis')->get()
        ]);
    }

    public function registerdoctors($id)
    {
        $doctor = Doctor::where('poli_id', $id)->get();
        return view('user.registerdoctors', [
            'title' => 'RegisterDoctors',
            'doctor' => $doctor,
            'poli' => DB::table('polis')->get()
        ]);
    }

    public function contact()
    {
        return view('user.contact', [
            'title' => 'ContactUser',
        ]);
    }

    public function jadwal($id)
    {
        $doctor = Doctor::findorfail($id);
        $jadwal = DoctorSchedule::with('doctor')
            ->where('doctor_id', $id)
            ->where('schedule', '>=', date('Y-m-d'))
            ->where('status', 'Tersedia')
            ->whereNotIn('id', function ($query) {
                $query->select('doctorschedule_id')
                    ->from('user_schedules')
                    ->where('status', 'Dipesan');
            })
            ->orderBy('schedule', 'asc')
            ->get();


        $output = [];

        // Define the custom sorting order for the day names
        $dayOrder = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

        // Define the custom sorting order for the time slots
        $timeOrder = ['Pagi', 'Siang', 'Sore', 'Malam'];

        foreach ($jadwal as $schedule) {
            $dayName = $schedule->hari;
            $timeSlot = $schedule->waktu;
            $scheduleTime = Carbon::parse($schedule->schedule)->format('H:i');
            $scheduleDate = Carbon::parse($schedule->schedule)->isoFormat('D MMMM YYYY');

            if (!isset($output[$dayName][$timeSlot])) {
                $output[$dayName][$timeSlot] = [];
            }

            $output[$dayName][$timeSlot][$schedule->id] = [
                'time' => $scheduleTime,
                'date' => $scheduleDate
            ];
        }

        // Sort the output array based on the custom sorting orders
        $output = collect($output)->sortBy(function ($daySchedules, $dayName) use ($dayOrder) {
            return array_search($dayName, $dayOrder);
        })->map(function ($daySchedules) use ($timeOrder) {
            return collect($daySchedules)->sortBy(function ($scheduleTimes, $timeSlot) use ($timeOrder) {
                return array_search($timeSlot, $timeOrder);
            })->map(function ($scheduleTimes) {
                return $scheduleTimes;
            })->all();
        })->all();

        return view('user.jadwal', [
            'title' => 'JadwalDokter',
            'doctor' => $doctor,
            'jadwal' => $output,
            'poli' => DB::table('polis')->get()
        ]);
    }

    public function Riwayat()
    {
        $userSchedules = UserSchedule::with('doctorschedule')->get();
        foreach ($userSchedules as $userSchedule) {
            $userSchedule->doctorSchedule->formattedScheduleDate = Carbon::parse($userSchedule->doctorSchedule->schedule)->isoFormat('DD MMMM YYYY');
            $userSchedule->doctorSchedule->formattedScheduleDay = Carbon::parse($userSchedule->doctorSchedule->schedule)->isoFormat('dddd');
            $userSchedule->doctorSchedule->formattedScheduleTime = Carbon::parse($userSchedule->doctorSchedule->schedule)->format('H:i') . ' WIB';
        }
        return view('user.riwayat', [
            'title' => 'Riwayat',
            'userSchedules' => $userSchedules,
            'poli' => DB::table('polis')->get()
        ]);
    }
}
