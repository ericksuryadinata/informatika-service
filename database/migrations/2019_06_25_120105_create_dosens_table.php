<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip');
            $table->string('nidn');
            $table->string('name');
            $table->string('phone_number');
            $table->string('imei')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('geocode')->nullable();
            $table->timestamp('lat_long_timestamp')->nullable();
            $table->string('location_rfid')->nullable();
            $table->timestamp('location_rfid_timestamp')->nullable();
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
        Schema::dropIfExists('dosens');
    }
}
