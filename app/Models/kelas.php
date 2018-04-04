<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';

    // protected $fillable = [''];
    protected $guarded = ['updated_at', 'created_at']; 
}
