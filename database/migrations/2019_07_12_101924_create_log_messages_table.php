<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_messages', function (Blueprint $table) {
            $table->increments('id')->comment('primary key');
            $table->text('messages')->comment('pesan dari mahasiswa');
            $table->text('answer')->comment('jawaban dari sistem');
            $table->string('intent')->comment('intent yang berhasil di olah');
            $table->string('target_intent')->nullable()->comment('intent yang ingin dicapai di olah');
            $table->string('step')->comment('step dimana proses ini disimpan');
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
        Schema::dropIfExists('log_messages');
    }
}
