<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = ['mapel', 'deskripsi'];
    public $timestamps = false;
}
