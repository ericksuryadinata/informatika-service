<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krs', function (Blueprint $table) {
            $table->char('nip', 11)->comment('nip dosen');
            $table->char('nbi', 10)->comment('nbi mahasiswa');
            $table->char('mata_kuliah_kode')->comment('mata kuliah');
            $table->char('semester',1)->comment('semester');
            $table->char('tahun_ajaran',4)->comment('tahun ajaran');
            $table->char('kelas',2)->comment('kelas mata kuliah');
            $table->char('ruang',4)->comment('ruang mata kuliah');
            $table->unsignedSmallInteger('jumlah',3)->comment('jumlah peserta ruang');
            $table->char('jam',6)->comment('jam mata kuliah');
            $table->char('hari_kode',1)->comment('hari mata kuliah');

            $table->foreign('nbi')->references('nbi')->on('mahasiswa')->onDelete('cascade');
            $table->foreign('nip')->references('nip')->on('dosen')->onDelete('cascade');
            $table->foreign('mata_kuliah_kode')->references('kode')->on('mata_kuliah')->onDelete('cascade');
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
        Schema::dropIfExists('krs');
    }
}
