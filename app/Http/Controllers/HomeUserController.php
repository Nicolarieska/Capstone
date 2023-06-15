<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Poli;
use App\Models\Doctor;
use App\Models\DoctorSchedule;

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
        return view('user.jadwal', [
            'title' => 'JadwalDokter',
            'doctor' => $doctor,
            'jadwal' => $jadwal,
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
