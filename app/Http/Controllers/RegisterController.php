<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->move(public_path('pasien'), $photo->getClientOriginalName())->getPathname();
            $photoPath = 'pasien/' . $photo->getClientOriginalName();
        }

        //kodingan buat ngasih no rek medis

        $medicalRecords = $request->input('medicalrecords');

        // Buat dan simpan data pengguna
        $user = new User;
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->nik = $request->input('nik');
        $user->name = $request->input('name');
        $user->place = $request->input('place');
        $user->birth = $request->input('birth');
        $user->gender = $request->input('gender');
        $user->phonenumber = $request->input('phonenumber');
        if (is_null($medicalRecords)) {
            $medicalRecords = "P" . rand(100000, 999999);
        }
        $user->medicalRecords = $medicalRecords;
        $user->photo = $photoPath; // Tetapkan null atau path foto tergantung pada keberadaan file foto
        $user->save();

        return redirect('/notif')->with('success');
    }
}
