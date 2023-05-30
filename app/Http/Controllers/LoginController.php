<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    protected function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('dashboard');
        }

        if (Auth::guard('web')->attempt($credentials)) {
            $user = Auth::guard('web')->user();
            if ($user->verify === 1) {
                $request->session()->regenerate();
                return redirect('pasien');
            } else {
                Auth::guard('web')->logout();
                return redirect('notif');
            }
        }

        return back()->with('loginError', 'Login Gagal! Anda Belum Registrasi');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }
}
