<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\UserSchedule;
use App\Models\DoctorSchedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserScheduleController extends Controller
{
    public function store(Request $request)
    {
        // Ambil nilai dari input tanggal dan jam
        $index = $request->input('tanggal');

        // Cari jadwal berdasarkan nilai $index dan $time di tabel doctor_schedules
        $doctorSchedule = DoctorSchedule::where('hari', $index)
            ->first();

        if ($doctorSchedule) {
            // Jika ditemukan, ambil ID dari tabel doctor_schedules
            $doctorScheduleId = $doctorSchedule->id;

            // Simpan data ke model UserSchedule
            $userSchedule = new UserSchedule();
            $userSchedule->doctorschedule_id = $doctorScheduleId;
            $userSchedule->user_id = $request->input('user_id');

            // Simpan userSchedule ke database
            $userSchedule->save();
            // Lakukan tindakan selanjutnya, seperti mengirim notifikasi, dll.
            $doctorSchedule->update(['status' => 'Dipesan']);

            return redirect('/riwayat')->with('success', 'Data Antrian Berhasil Dibuat');
        } else {
            // Jika tidak ditemukan, lakukan penanganan kesalahan

            // Contoh: Tampilkan pesan kesalahan
            return redirect()->back()->with('error', 'Jadwal tidak valid.');

            // Anda dapat menyesuaikan penanganan kesalahan sesuai kebutuhan
        }
    }

    public function completeform(Request $request, $id)
    {

        $userSchedule = UserSchedule::find($id);

        if ($userSchedule) {
            $doctorSchedule = DoctorSchedule::find($userSchedule->doctorschedule_id);

            if ($doctorSchedule) {
                $doctorSchedule->status = 'Selesai';
                $doctorSchedule->save();
            }
        }

        return redirect('/complete')->with(['complete' => 'Kunjungan Telah Dilakukan']);
    }
}
