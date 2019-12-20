<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Kelurahan extends Model
{
    protected $table = "m_kelurahan";
    protected $fillable =
    [
    	"id","nama_kelurahan", "kecamatan_id"
    ];
}
