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
            $table->string('nip', 11)->comment('nip dosen');
            $table->string('nbi', 10)->comment('nbi mahasiswa');
            $table->string('mata_kuliah')->comment('mata kuliah');
            $table->string('tahun_ajaran',6)->comment('tahun ajaran');
            $table->string('kelas',2)->comment('kelas mata kuliah');
            $table->string('ruang',4)->comment('ruang mata kuliah');
            $table->integer('jumlah',3)->comment('jumlah peserta ruang');
            $table->string('jam',6)->comment('jam mata kuliah');
            $table->string('hari',7)->comment('hari mata kuliah');
            $table->timestamps();

            $table->foreign('nbi')->references('nbi')->on('mahasiswa')->onDelete('cascade');
            $table->foreign('nip')->references('nip')->on('dosen')->onDelete('cascade');
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
