<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefJawabanSoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_jawaban_soal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('soal_id');
            $table->integer('konten_soal_id');
            $table->integer('no_soal');
            $table->text('jawaban');
            $table->text('jawaban_benar');
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
        Schema::dropIfExists('ref_jawaban_soal');
    }
}
