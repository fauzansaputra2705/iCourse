<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Soal extends Model
{
    protected $table = "m_soal";

    protected $fillable =
    [
    	"id", "kategori_soal_id", "konten_soal", "jenis_soal", "tag_materi",
    ];
}
