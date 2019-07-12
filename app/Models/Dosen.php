<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table= 'dosen';

    protected $fillable = [
        'uuid', 'nip', 'nama', 'jenis_kelamin', 'alamat',
        'nomor_telepon', 'imei'
    ];
}
