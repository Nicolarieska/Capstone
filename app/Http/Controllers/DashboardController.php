<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('admin.index', [
            'title' => 'Dashboard'
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
        return view('admin.user.detail', ['user' => $user]);
    }
}
