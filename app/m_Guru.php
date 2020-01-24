<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Guru extends Model
{
	protected $table = "m_guru";
    protected $fillable =
    [
    	"id", "nik","nama_lengkap","jenis_kelamin","tanggal_lahir","alamat","kelurahan_id","kecamatan_id","kabupaten_id","provinsi_id","sekolah_id","user_id"
    ];
}
