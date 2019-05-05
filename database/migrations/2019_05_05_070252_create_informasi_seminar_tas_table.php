<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformasiSeminarTasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_seminar_tas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nbi');
            $table->string('nama');
            $table->string('judul');
            $table->string('ketua_penguji');
            $table->string('anggota_penguji_1');
            $table->string('anggota_penguji_2');
            $table->string('ruang');
            $table->date('tanggal');
            $table->smallInteger('periode');
            $table->year('tahun');
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
        Schema::dropIfExists('informasi_seminar_tas');
    }
}
