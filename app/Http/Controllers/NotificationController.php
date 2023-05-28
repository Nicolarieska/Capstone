<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notif()
    {
        return view('notification.index', [
            'title' => 'Notification',
        ]);
    }
}
