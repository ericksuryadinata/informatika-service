<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PraktikumLaboratorium extends Model
{
    protected $table = 'praktikum_laboratorium';

    protected $fillable = [
        'kode', 'laboratorium_kode', 'nama'
    ];
}
