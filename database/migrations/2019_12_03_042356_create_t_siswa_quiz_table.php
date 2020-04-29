<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSiswaQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_siswa_quiz', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('soal_id');
            $table->integer('konten_soal_id');
            $table->integer('jawaban_soal_id');
            $table->string('ragu_ragu');
            $table->string('jawaban_siswa');
            $table->integer('no_soal');
            $table->integer('user_id');
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
        Schema::dropIfExists('t_siswa_quiz');
    }
}
