<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'deskripsi',
        'kondisi'
    ];

    public function pelayanan()
    {
        return $this->hasMany(Pelayanan::class);
    }

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
}
