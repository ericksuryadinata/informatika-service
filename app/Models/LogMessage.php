<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogMessage extends Model
{
    protected $fillable = [
        'messages', 'answer', 'intent', 'target_intent', 'step'
    ];
}
