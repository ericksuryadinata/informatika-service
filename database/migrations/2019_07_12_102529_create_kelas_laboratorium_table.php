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
            $table->increments('id');
            $table->string('praktikum_laboratorium_kode', 3);
            $table->string('nip',11);
            $table->unsignedInteger('asisten_laboratorium_id');
            $table->string('nama', 75);
            $table->string('tahun_ajaran',4);
            $table->string('semester',1);
            $table->string('jam_kode',2);
            $table->string('hari',7);
            $table->timestamps();

            $table->foreign('praktikum_laboratorium_kode')->references('kode')->on('praktikum_laboratorium')->onDelete('cascade');
            $table->foreign('asisten_laboratorium_id')->references('id')->on('asisten_laboratorium')->onDelete('cascade');
            $table->foreign('nip')->references('nip')->on('dosen')->onDelete('cascade');
            $table->foreign('jam_kode')->references('kode')->on('jam')->onDelete('cascade');
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
