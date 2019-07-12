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
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->text('geocode')->nullable();
            $table->timestamp('lat_long_timestamp')->nullable();
            $table->string('location_rfid')->nullable();
            $table->timestamp('location_timestamp')->nullable();
            $table->timestamps();

            $table->foreign('nip')->references('nip')->on('dosen')->onDelete('cascade');
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
