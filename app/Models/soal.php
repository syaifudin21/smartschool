<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    protected $table = 'soal';
    protected $fillable = ['id_latih', 'soal', 'lampiran', 'jawaban_1', 'benar_1', 'jawaban_2', 'benar_2', 'jawaban_3', 'benar_3', 'jawaban_4', 'benar_4', 'jawaban_5', 'benar_5'];
}
