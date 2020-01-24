<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Siswa extends Model
{
    protected $table = "m_siswa";

    protected $fillable = 
    [
    	"id", "nik","nama_lengkap","jenis_kelamin","tanggal_lahir","alamat","kelurahan_id","kecamatan_id","kabupaten_id","provinsi_id","sekolah_id","user_id"
    ];
}
