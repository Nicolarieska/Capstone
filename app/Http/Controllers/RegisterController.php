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
        User::create([
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'nik' => $request['nik'],
            'name' => $request['name'],
            'place' => $request['place'],
            'birth' => $request['birth'],
            'phonenumber' => $request['phonenumber'],
            'medicalrecords' => $request['medicalrecords'],
            'photo' => $request['photo'],
        ]);
        return redirect('/notif')->with('success');
    }
}
