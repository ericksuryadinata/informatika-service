<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->char('uuid',25)->unique()->comment('uuid dosen');
            $table->char('nip',11)->primary()->comment('nip dosen');
            $table->string('nama',75)->comment('nama dosen');
            $table->char('jenis_kelamin',1)->comment('jenis kelamin dosen');
            $table->string('alamat',120)->nullable()->comment('alamat dosen');
            $table->char('nomor_telepon',13)->unique()->comment('nomer telepon dosen');
            $table->char('imei',20)->unique()->comment('imei dosen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen');
    }
}
