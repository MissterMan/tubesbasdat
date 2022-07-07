<?php

namespace App\Models;

use App\Models\Barang;
use App\Models\Petugas;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelayanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pinjam',
        'tanggal_kembali',
        'NIM',
        'barang_id',
        'petugas_id',
    ];


    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
