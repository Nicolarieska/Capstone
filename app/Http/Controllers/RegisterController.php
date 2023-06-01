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
        // Pindahkan file foto ke direktori publik
        $photo = $request->file('photo');
        $photoPath = $photo->move(public_path('photos'), $photo->getClientOriginalName())->getPathname();

        // Validasi request
        $user = new User;
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->nik = $request->input('nik');
        $user->name = $request->input('name');
        $user->place = $request->input('place');
        $user->birth = $request->input('birth');
        $user->gender = $request->input('gender');
        $user->phonenumber = $request->input('phonenumber');
        $user->medicalrecords = $request->input('medicalrecords');
        $user->photo = 'photos/' . $photo->getClientOriginalName();
        $user->save();

        return redirect('/notif')->with('success');
    }
}
