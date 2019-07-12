<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jam extends Model
{
    protected $table = 'jam';

    protected $fillable = [
        'kode', 'jam_kuliah'
    ];
}
