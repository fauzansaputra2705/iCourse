<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik');
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->integer('kelurahan_id');
            $table->integer('kecamatan_id');
            $table->integer('kabupaten_id');
            $table->integer('provinsi_id');
            $table->integer('sekolah_id');
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
        Schema::dropIfExists('m_siswa');
    }
}
