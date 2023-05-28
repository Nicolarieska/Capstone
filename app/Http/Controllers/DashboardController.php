<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'title' => 'User'
        ]);
    }
}
