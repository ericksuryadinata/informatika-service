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
            $table->increments('id')->comment('primary key');
            $table->char('laboratorium_kode',3)->comment('kode laboratorium');
            $table->char('kode',10)->unique()->comment('kode asisten laboratorium');
            $table->string('nama',75)->comment('nama asisten laboratorium');
            $table->string('alamat',100)->comment('alamat asisten laboratorium');
            $table->char('no_hp',13)->comment('no hp asisten laboratorium');

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
