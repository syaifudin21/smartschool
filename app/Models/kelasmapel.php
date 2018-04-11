<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kelasmapel extends Model
{
    protected $table = 'kelasmapel';
    protected $fillable = ['id_kelas', 'jam', 'id_guru','id_mapel'];
    public $timestamps = false;
}
