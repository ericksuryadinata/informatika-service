<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KRS extends Model
{
    protected $table = 'KRS';

    protected $fillable = [
        'nip', 'nbi', 'mata_kuliah', 'tahun_ajaran',
        'kelas', 'ruang', 'jumlah', 'jam', 'hari'
    ];
}
