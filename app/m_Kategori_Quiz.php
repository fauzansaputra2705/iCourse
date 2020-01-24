<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Kategori_Quiz extends Model
{
    protected $table = "m_kategori_quiz";

    protected $fillable = [
    	"id", "kategori_quiz",
    ];
}
