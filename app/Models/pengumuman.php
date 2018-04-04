<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $fillable = ['nama_pengumuman', 'isi', 'waktu_mulai', 'waktu_selesai', 'id_user', 'lampiran'];
}
