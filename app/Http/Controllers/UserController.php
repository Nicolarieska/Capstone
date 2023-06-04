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

        return redirect('/user')->with(['verify' => 'Akun Pasien Berhasil Diverifikasi']);
    }

    public function block(Request $request)
    {

        $user = User::find($request)->first();
        if ($user) {
            $user->verify = '0';
            $user->save();
        }

        return redirect('/user')->with(['block' => 'Akun Pasien Berhasil Diblock']);
    }

    public function deleteuser(Request $request)
    {
        User::destroy($request->id);
        return redirect()->back()
            ->with(['delete' => 'Data Pasien Berhasil Dihapus']);
    }
}
