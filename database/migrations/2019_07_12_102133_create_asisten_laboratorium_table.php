<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenLaboratoriumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asisten_laboratorium', function (Blueprint $table) {
            $table->increments('id');
            $table->string('laboratorium_kode',3);
            $table->string('kode',10);
            $table->string('nama',75);
            $table->string('alamat',100);
            $table->string('no_hp',13);
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
        Schema::dropIfExists('asisten_laboratorium');
    }
}
