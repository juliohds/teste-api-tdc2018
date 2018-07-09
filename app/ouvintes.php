<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ouvintes extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'nome',
        'idade'
    ];
}
