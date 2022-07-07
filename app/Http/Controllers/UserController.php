<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Petugas;
use App\Models\Mahasiswa;
use App\Models\Pelayanan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        $pelayanan = Pelayanan::all();
        $report = Pelayanan::whereYear('tanggal_pinjam', 2022)->get();
        return view('user', [
            'barang' => $barang,
            'pelayanan' => $pelayanan,
            'report' => $report,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'tanggal_pinjam'  => 'required',
        //     'tanggal_kembali' => 'required',
        //     'mahasiswa_id' => 'required',
        //     'barang_id' => 'required',
        //     'petugas_id' => 'required',
        // ]);

        Pelayanan::create([
            'tanggal_pinjam'  => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'NIM' => $request->NIM,
            'barang_id' => $request->barang_id,
            'petugas_id' => $request->petugas_id,
        ]);

        return redirect()->route('user_index');

        // if ($layanan) {
        //     //redirect dengan pesan sukses
        //     return redirect()->route('user.index')->with(['success' => 'Data Berhasil Disimpan!']);
        // } else {
        //     //redirect dengan pesan error
        //     return redirect()->route('user.index')->with(['error' => 'Data Gagal Disimpan!']);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $barang = Barang::all();
        $petugas = Petugas::all();
        return view('rent', [
            'barang' => $barang,
            'petugas' => $petugas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
