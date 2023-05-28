<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function verify(Request $request, User $user)
    {

        $user = User::find($request)->first();
        if ($user) {
            $user->verify = '1';
            $user->save();
        }

        return redirect('/showuser')->with(['success' => 'User Berhasil Diverifikasi']);
    }

    public function block(Request $request)
    {

        $user = User::find($request)->first();
        if ($user) {
            $user->verify = '0';
            $user->save();
        }

        return redirect('/showuser')->with(['success' => 'User Berhasil Diblock']);
    }
}
