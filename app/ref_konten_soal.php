<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_konten_soal extends Model
{
    protected $table = "ref_konten_soal";


    protected $fillable = 
    [
    	"id", "soal_id", "no_soal" ,"konten_soal",
    ];
}
