<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokasiDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_dosen', function (Blueprint $table) {
            $table->string('nip', 11);
            $table->string('latitude');
            $table->string('longitude');
            $table->text('geocode');
            $table->timestamp('lat_long_timestamp');
            $table->string('location_rfid');
            $table->timestamp('location_timestamp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokasi_dosen');
    }
}
