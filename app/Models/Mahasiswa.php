<?php

namespace App\Models;

use App\Models\Pelayanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'NIM';

    public function pelayanan()
    {
        return $this->hasMany(Pelayanan::class);
    }

    // public function pelayanan()
    // {
    //     return $this->hasMany(Pelayanan::class);
    // }
}
