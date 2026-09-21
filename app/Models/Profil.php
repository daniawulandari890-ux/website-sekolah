<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = [
        'nama',
        'akreditasi',
        'tahun_berdiri',
        'jumlah_siswa',
        'jumlah_guru',
    ];
}