<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prosedur extends Model
{
    protected $table = 'prosedur';

    protected $fillable = [
        'key', 'value'
    ];
}
