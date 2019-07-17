<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiUjianTa extends Model
{
    protected $table = 'informasi_ujian_ta';

    public $incrementing = false;

    protected $fillable = [
        'nbi', 'nama', 'judul', 'ketua_penguji', 'anggota_penguji_1', 'anggota_penguji_2',
        'ruang', 'tanggal', 'periode', 'tahun'
    ];
}
