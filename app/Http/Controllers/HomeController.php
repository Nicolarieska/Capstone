<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'title' => 'Home',
        ]);
    }

    public function about()
    {
        return view('home.about', [
            'title' => 'About',
        ]);
    }

    public function doctors()
    {
        return view('home.doctors', [
            'title' => 'Doctors',
        ]);
    }

    public function contact()
    {
        return view('home.contact', [
            'title' => 'Contact',
        ]);
    }
}
