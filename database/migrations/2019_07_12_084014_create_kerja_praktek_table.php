<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKerjaPraktekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerja_praktek', function (Blueprint $table) {
            $table->char('nbi', 10)->comment('nbi mahasiswa');
            $table->string('judul')->comment('judul seminar mahasiswa');
            $table->string('ketua_penguji', 75)->comment('ketua penguji seminar');
            $table->string('anggota_penguji_1', 75)->comment('anggota penguji seminar');
            $table->string('anggota_penguji_2', 75)->comment('anggota penguji seminar');
            $table->char('ruang', 8)->comment('ruang seminar');
            $table->date('tanggal')->comment('tanggal seminar');
            $table->unsignedSmallInteger('periode', 1)->comment('periode seminar');
            $table->year('tahun')->comment('tahun seminar');

            $table->foreign('nbi')->references('nbi')->on('mahasiswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kerja_praktek');
    }
}
