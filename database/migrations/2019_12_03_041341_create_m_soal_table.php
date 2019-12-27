<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_soal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kategori_soal_id');
            $table->text('konten_soal')->nullable();
            $table->string('jenis_soal');
            $table->string('tag_materi');
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
        Schema::dropIfExists('m_soal');
    }
}
