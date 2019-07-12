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
            $table->string('nbi', 10)->comment('nbi mahasiswa');
            $table->string('judul')->comment('judul kerja praktek');
            $table->string('ketua_penguji', 75)->comment('ketua penguji kerja praktek');
            $table->string('anggota_penguji_1', 75)->comment('anggota penguji kerja praktek');
            $table->string('anggota_penguji_2', 75)->comment('anggota penguji kerja praktek');
            $table->string('ruang', 25)->comment('ruang ujian kerja praktek');
            $table->date('tanggal')->comment('tanggal ujian kerja praktek');
            $table->smallInteger('periode', 1)->comment('periode ujian kerja praktek');
            $table->year('tahun')->comment('tahun ujian kerja praktek');
            $table->timestamps();

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
