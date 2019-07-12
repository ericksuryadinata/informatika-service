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
            $table->string('uuid')->unique()->comment('uuid dosen');
            $table->string('nip',11)->primary()->comment('nip dosen');
            $table->string('nama',75)->comment('nama dosen');
            $table->string('jenis_kelamin',1)->comment('jenis kelamin dosen');
            $table->string('alamat',120)->nullable()->comment('alamat dosen');
            $table->string('nomor_telepon',16)->unique()->comment('nomer telepon dosen');
            $table->string('imei',60)->unique()->comment('imei dosen');
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
        Schema::dropIfExists('dosen');
    }
}
