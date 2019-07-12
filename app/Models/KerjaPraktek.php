<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KerjaPraktek extends Model
{
    protected $table = 'kerja_praktek';

    protected $fillable = [
        'nbi', 'nama', 'judul', 'ketua_penguji', 'anggota_penguji_1', 'anggota_penguji_2',
        'ruang', 'tanggal', 'periode', 'tahun'
    ];
}
