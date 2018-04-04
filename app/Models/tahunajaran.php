<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tahunajaran extends Model
{
    protected $table = 'ta';

    // protected $fillable = [''];
    protected $guarded = ['updated_at', 'created_at']; 
}
