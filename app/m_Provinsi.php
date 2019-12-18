<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Provinsi extends Model
{
    protected $table = "m_provinsi";
    protected $fillable = [
    	"id", "nama_provinsi",
    ];
}
