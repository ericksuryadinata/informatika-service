<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePraktikumLaboratoriumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('praktikum_laboratorium', function (Blueprint $table) {
            $table->string('kode',6)->primary()->comment('kode praktikum');
            $table->string('laboratorium_kode',3)->comment('nama laboratorium');
            $table->string('nama',75)->comment('nama praktikum');
            $table->timestamps();

            $table->foreign('laboratorium_kode')->references('kode')->on('laboratorium')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('praktikum_laboratorium');
    }
}
