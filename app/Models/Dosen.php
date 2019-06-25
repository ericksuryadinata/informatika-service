<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = [
        'nip','nidn','name','imei',
        'latitude','longitude','geocode','lat_long_timestamp',
        'location_rfid','location_rfid_timestamp'
    ];
}
