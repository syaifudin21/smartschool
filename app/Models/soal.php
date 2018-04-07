<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    protected $table = 'soal';
    protected $fillable = ['id_latih', 'soal', 'lampiran', 'jawaban_1', 'jawaban_2', 'jawaban_3', 'jawaban_4', 'jawaban_5', 'benar_2', 'benar_1', 'benar_3', 'benar_4', 'benar_5', 'lampiran_1', 'lampiran_2', 'lampiran_3', 'lampiran_4', 'lampiran_5'];
}
