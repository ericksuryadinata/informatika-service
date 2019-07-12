<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KelasLaboratorium extends Model
{
    protected $table = 'kelas_laboratorium';

    protected $fillable = [
        'laboratorium_kode', 'nip', 'asisten_laboratorium_id',
        'nama', 'tahun_ajaran', 'semester', 'jam_kode', 'hari'
    ];
}
