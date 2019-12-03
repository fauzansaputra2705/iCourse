<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_guru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik');
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin',['L','P']);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->int('kelurahan_id');
            $table->int('kecamatan_id');
            $table->int('kabupaten_id');
            $table->int('provinsi_id');
            $table->int('sekolah_id');
            $table->int('user_id');
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
        Schema::dropIfExists('m_guru');
    }
}
