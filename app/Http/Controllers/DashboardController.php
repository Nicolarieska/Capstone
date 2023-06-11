<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Poli;
use App\Models\Doctor;
use App\Models\Admin;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $poli = Poli::count();
        $admin = Admin::count();
        $doctor = Doctor::count();
        $user = User::where('verify', '1')->count();
        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'admin' => $admin,
            'poli' => $poli,
            'doctor' => $doctor,
            'user' => $user,
        ]);
    }

    public function admin()
    {
        return view('admin.index', [
            'title' => 'Admin',
            'admin' => DB::table('admins')->get()
        ]);
    }

    public function user()
    {
        return view('admin.user.index', [
            'title' => 'User',
            'user' => DB::table('users')->get()
        ]);
    }

    public function userdetail($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.detail', compact('user'));
    }
}
