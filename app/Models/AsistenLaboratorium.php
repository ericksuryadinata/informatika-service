<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsistenLaboratorium extends Model
{
    protected $table = 'asisten_laboratorium';

    protected $fillable = [
        'laboratorium_kode', 'kode', 'nama', 'alamat', 'no_hp'
    ];
}
