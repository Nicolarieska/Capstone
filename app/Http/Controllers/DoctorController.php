<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Poli;
use App\Models\Doctor;


class DoctorController extends Controller
{
    public function doctor()
    {
        $poli = DB::table('polis')->get();
        $doctor = Doctor::with('poli')->get();
        return view('doctor.index', [
            'title' => 'Dashboard',
            'poli' => $poli,
            'doctor' => $doctor,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:polis',
            'photo' => 'required|image|file|max:2048',
            'poli_id' => 'required',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->move(public_path('doctor'), $photo->getClientOriginalName())
                ->getPathname();
            $photoPath = 'doctor/' . $photo->getClientOriginalName();
        }

        // Buat dan simpan data pengguna
        $doctor = new Doctor;
        $doctor->name = $request->input('name');
        $doctor->gender = $request->input('gender');
        $doctor->poli_id = $request['poli_id'];
        $doctor->photo = $photoPath;
        $doctor->save();

        return redirect('/doctorshow')->with('add', 'Data Dokter Berhasil Ditambahkan');
    }
}
