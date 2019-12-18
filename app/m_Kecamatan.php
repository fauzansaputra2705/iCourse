<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Kecamatan extends Model
{
    protected $table = "m_kecamatan";
    protected $fillable = [
    	"id", "nama_kecamatan", "kabupaten_id",
    ];
}
