<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Sekolah extends Model
{
    protected $table = "m_sekolah";
    protected $fillable = [
    	"id", "npsn", "jenjang", "nama_sekolah", "alamat", "kelurahan_id", "kecamatan_id", "kabupaten_id", "provinsi_id",
    ];
}
