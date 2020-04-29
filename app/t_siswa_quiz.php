<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_siswa_quiz extends Model
{
    protected $table = "t_siswa_quiz";
    protected $fillable = 
    [
    	"id","soal_id","konten_soal_id","jawaban_soal_id","ragu_ragu","jawaban_siswa","no_soal","user_id"
    ];
}
