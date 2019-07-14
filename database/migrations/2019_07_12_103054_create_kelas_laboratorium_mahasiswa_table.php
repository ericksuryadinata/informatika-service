<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasLaboratoriumMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_laboratorium_mahasiswa', function (Blueprint $table) {
            $table->unsignedInteger('kelas_laboratorium_id')->comment('kode praktikum');
            $table->char('nbi', 10)->comment('nbi mahasiswa');
            $table->float('p1',3,2)->defaul(0)->comment('nilai praktikum 1');
            $table->float('p2',3,2)->defaul(0)->comment('nilai praktikum 2');
            $table->float('p3',3,2)->defaul(0)->comment('nilai praktikum 3');
            $table->float('p4',3,2)->defaul(0)->comment('nilai praktikum 4');
            $table->float('p5',3,2)->defaul(0)->comment('nilai praktikum 5');
            $table->float('ujian',3,2)->defaul(0)->comment('nilai ujian');
            $table->float('dosen',3,2)->defaul(0)->comment('nilai dosen');
            $table->float('akhir',3,2)->defaul(0)->comment('nilai akhir');
            $table->char('grade',1)->default('E')->comment('grade akhir');
            $table->enum('laporan', ['Valid', 'Belum'])->default('Belum')->comment('laporan praktikum');

            $table->foreign('kelas_laboratorium_id')->references('id')->on('kelas_laboratorium')->onDelete('cascade');
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
        Schema::dropIfExists('kelas_laboratorium_mahasiswa');
    }
}
