<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasLaboratoriumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_laboratorium', function (Blueprint $table) {
            $table->increments('id')->comment('primary key');
            $table->char('praktikum_laboratorium_kode', 3)->comment('kode praktikum');
            $table->char('nip',11)->comment('nip dosen');
            $table->unsignedInteger('asisten_laboratorium_id')->comment('id asisten laboratorium');
            $table->string('nama', 75)->comment('nama kelas');
            $table->char('tahun_ajaran',4)->comment('tahun ajaran kelas');
            $table->string('semester',1)->comment('semester kelas');
            $table->char('jam_kode',2)->comment('kode jam');
            $table->char('hari_kode',1)->comment('hari kelas');

            $table->foreign('praktikum_laboratorium_kode')->references('kode')->on('praktikum_laboratorium')->onDelete('cascade');
            $table->foreign('asisten_laboratorium_id')->references('id')->on('asisten_laboratorium')->onDelete('cascade');
            $table->foreign('nip')->references('nip')->on('dosen')->onDelete('cascade');
            $table->foreign('jam_kode')->references('kode')->on('jam')->onDelete('cascade');
            $table->foreign('hari_kode')->references('kode')->on('hari')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas_laboratorium');
    }
}
