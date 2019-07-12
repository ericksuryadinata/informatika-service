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
            $table->string('nbi', 10);
            $table->string('judul');
            $table->string('ketua_penguji', 75);
            $table->string('anggota_penguji_1', 75);
            $table->string('anggota_penguji_2', 75);
            $table->string('ruang', 25);
            $table->date('tanggal');
            $table->smallInteger('periode', 1);
            $table->year('tahun');
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
