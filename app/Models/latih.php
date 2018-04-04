<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class latih extends Model
{
	protected $table = 'latih';
    protected $fillable = ['nama_latih', 'tujuan_latih', 'jenis_latih', 'status', 'waktu_mulai', 'waktu_selesai'];
}
