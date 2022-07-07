<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    public function addIndex()
    {
        return view('tambah');
    }

    public function addBarang(Request $request)
    {
        Barang::create([
            'nama_barang'  => $request->nama_barang,
            'deskripsi' => $request->deskripsi,
            'kondisi' => $request->kondisi,
        ]);

        return redirect()->route('user_index');
    }
}
