<?php

namespace App\Http\Controllers;

use App\Traits\WablasTrait;
use Illuminate\Http\Request;
use App\Models\User;

class NotificationController extends Controller
{
    public function notif()
    {
        return view('notification.index', [
            'title' => 'Notification',
        ]);
    }

    public function store($id)
    {
        $user = User::findOrFail($id);
        $kumpulan_data = [];
        $data['phone'] = request('no_wa');
        $data['message'] = request('pesan');
        $data['secret'] = false;
        $data['retry'] = false;
        $data['isGroup'] = false;
        array_push($kumpulan_data, $data);
        WablasTrait::sendText($kumpulan_data);
        return redirect()->back();
    }
}
