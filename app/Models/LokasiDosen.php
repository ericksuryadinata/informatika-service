<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LokasiDosen extends Model
{
    protected $table = 'lokasi_dosen';

    protected $fillable = [
        'nip', 'latitude', 'longitude', 'geocode', 'lat_long_timestamp',
        'location_rfid', 'location_timestamp'
    ];
}
