<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_sekolah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('npsn');
            $table->string('jenjang');
            $table->string('nama_sekolah');
            $table->text('alamat');
            $table->int('kelurahan_id');
            $table->int('kecamatan_id');
            $table->int('kabupaten_id');
            $table->int('provinsi_id');
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
        Schema::dropIfExists('m_sekolah');
    }
}
