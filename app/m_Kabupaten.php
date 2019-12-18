<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Kabupaten extends Model
{
    protected $table = "m_kabupaten";
    protected $fillable =
    [
    	"id", "provinsi_id", "nama_kabupaten", 
    ];
}
