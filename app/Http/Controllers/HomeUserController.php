<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Poli;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\DoctorSchedule;
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
        $jadwal = DoctorSchedule::where('doctor_id', $id)->get();

        $output = [];

        // Define the custom sorting order for the day names
        $dayOrder = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

        // Define the custom sorting order for the time slots
        $timeOrder = ['Pagi', 'Siang', 'Sore', 'Malam'];

        foreach ($jadwal as $schedule) {
            $dayName = $schedule->hari;
            $timeSlot = $schedule->waktu;
            $scheduleTime = Carbon::parse($schedule->schedule)->format('H:i');

            if (!isset($output[$dayName][$timeSlot])) {
                $output[$dayName][$timeSlot] = [];
            }

            $output[$dayName][$timeSlot][$schedule->id] = [$scheduleTime];
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

        // return dd($output);

        return view('user.jadwal', [
            'title' => 'JadwalDokter',
            'doctor' => $doctor,
            'jadwal' => $output,
            'poli' => DB::table('polis')->get()
        ]);
    }


    public function Riwayat()
    {
        return view('user.riwayat', [
            'title' => 'Riwayat',
        ]);
    }
}
