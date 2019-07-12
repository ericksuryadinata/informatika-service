<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformasiUjianTaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_ujian_ta', function (Blueprint $table) {
            $table->string('nbi', 10)->comment('nbi mahasiswa');
            $table->string('judul')->comment('judul ta mahasiswa');
            $table->string('ketua_penguji', 75)->comment('penguji ta');
            $table->string('anggota_penguji_1', 75)->comment('anggota penguji ta');
            $table->string('anggota_penguji_2', 75)->comment('anggota penguji ta');
            $table->string('ruang', 25)->comment('ruang ta');
            $table->date('tanggal')->comment('tanggal ta');
            $table->smallInteger('periode', 1)->comment('periode ta');
            $table->year('tahun')->comment('tahun ta');
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
        Schema::dropIfExists('informasi_ujian_ta');
    }
}
