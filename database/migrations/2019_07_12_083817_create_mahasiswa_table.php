<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nbi',10)->primary()->comment('nbi mahasiswa');
            $table->string('nama',120)->comment('nama mahasiswa');
            $table->string('alamat',120)->nullable()->comment('alamat mahasiswa');
            $table->string('jenis_kelamin',1)->comment('jenis kelamin mahasiswa');
            $table->string('kurikulum',4)->comment('kurikulum mahasiswa');
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
        Schema::dropIfExists('mahasiswa');
    }
}
