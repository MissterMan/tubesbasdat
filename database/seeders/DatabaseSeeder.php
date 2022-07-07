<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Petugas;
use App\Models\Mahasiswa;
use App\Models\Pelayanan;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Mahasiswa::create([
            'NIM' => 202010370311514,
            'nama_depan' => 'Pratama Putra',
            'nama_belakang' => 'Prayogi',
            'nomor_hp' => '085156664358',
            'alamat' => 'JL. Rumah',
            'email' => 'putrayogi4545@gmail.com',
        ]);

        Petugas::create([
            'nama_petugas' => 'Romli',
            'nomor_hp' => '081234569012',
        ]);

        Barang::create([
            'nama_barang' => 'Mouse RGB Gamink',
            'deskripsi' => 'Main Game Auto GG',
            'kondisi' => 'Baik',
        ]);
        Barang::create([
            'nama_barang' => 'Keyboard RGB Gamink',
            'deskripsi' => 'Main Game Auto GG',
            'kondisi' => 'Baik',
        ]);
        Barang::create([
            'nama_barang' => 'Monitor RGB Gamink',
            'deskripsi' => 'Main Game Auto GG',
            'kondisi' => 'Baik',
        ]);

        Pelayanan::create([
            'tanggal_pinjam' => Carbon::now(),
            'tanggal_kembali' => Carbon::now()->addDays(4),
            'NIM' => 202010370311514,
            'petugas_id' => '1',
            'barang_id' => '1',
        ]);
    }
}
