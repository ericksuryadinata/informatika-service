<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KelasLaboratoriumMahasiswa extends Model
{
    protected $table = 'kelas_laboratorium_mahasiswa';

    protected $fillable = [
        'nbi', 'p1', 'p2', 'p3', 'p4', 'p5', 'ujian', 'dosen', 'akhir',
        'grade', 'laporan',
    ];
}
