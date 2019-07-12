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
            $table->string('nip', 11)->comment('nip dosen');
            $table->string('latitude')->nullable()->comment('latitude dari android dosen');
            $table->string('longitude')->nullable()->comment('longitude dari android dosen');
            $table->text('geocode')->nullable()->comment('lokasi geocode dari android dosen');
            $table->timestamp('lat_long_timestamp')->nullable()->comment('timestamp dari android dosen');
            $table->string('location_rfid')->nullable()->comment('lokasi rfid dosen');
            $table->timestamp('location_timestamp')->nullable()->comment('timestamp dari lokasi rfid dosen');
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
