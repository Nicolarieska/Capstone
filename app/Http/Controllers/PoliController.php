<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Poli;

class PoliController extends Controller
{

    public function poli()
    {
        return view('poli.index', [
            'title' => 'Poli',
            'poli' => DB::table('polis')->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:polis',
            'photo' => 'required|image|file|max:2048'
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->move(public_path('poli'), $photo->getClientOriginalName())
                ->getPathname();
            $photoPath = 'poli/' . $photo->getClientOriginalName();
        }

        // Buat dan simpan data pengguna
        $poli = new Poli;
        $poli->name = $request->input('name');
        $poli->photo = $photoPath;
        $poli->save();

        return redirect('/polishow')->with('add', 'Data Poli Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $update = Poli::findorfail($id);
        $poli = $update->photo;

        $data = [
            'name' => $request['name'],
            'photo' => $poli,
        ];

        $request->photo->move(public_path() . '/poli', $poli);
        $update->update($data);
        return redirect('/polishow')->with('update', 'Data Poli Berhasil Diedit');
    }

    public function delete($id)
    {
        $delete = Poli::findorfail($id);

        $file = public_path('poli') . $delete->photo;

        if (file_exists($file)) {
            @unlink($file);
        }

        $delete->delete();

        return redirect('/polishow')->with('delete', 'Data Poli Berhasil Dihapus');
    }
}
