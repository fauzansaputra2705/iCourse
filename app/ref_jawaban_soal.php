<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ref_jawaban_soal extends Model
{
    protected $table = "ref_jawaban_soal";

    protected $fillable = [
    	"id", "soal_id", "no_soal", "jawaban", "jawaban_benar",
    ];
}
