<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direktorat extends Model
{
    protected $table = 'direktorat';
    protected $fillable = [
        'nama', 
        'jabatan',
        'image'
    ];
}
