<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Poli;

class HomeUserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'title' => 'HomeUser',
        ]);
    }

    public function about()
    {
        return view('user.about', [
            'title' => 'AboutUser',
        ]);
    }

    public function registerpoli()
    {
        return view('user.registerpoli', [
            'title' => 'RegisterPoli',
            'poli' => DB::table('polis')->get()
        ]);
    }

    public function registerdoctors()
    {
        return view('user.registerdoctors', [
            'title' => 'RegisterDoctors',
        ]);
    }

    public function contact()
    {
        return view('user.contact', [
            'title' => 'ContactUser',
        ]);
    }
}
