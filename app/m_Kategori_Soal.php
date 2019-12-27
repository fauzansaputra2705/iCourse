<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Kategori_Soal extends Model
{
    protected $table = 'm_kategori_soal';

    protected $fillable = [
    	'id', 'kategori_soal',
    ];
}
