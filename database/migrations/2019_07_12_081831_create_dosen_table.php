<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->string('uuid')->unique();
            $table->string('nip',11)->primary();
            $table->string('nama',75);
            $table->string('jenis_kelamin',1);
            $table->string('alamat',120)->nullable();
            $table->string('nomor_telepon',16)->unique();
            $table->string('imei',60)->unique();
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
        Schema::dropIfExists('dosen');
    }
}
