<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsentrasi extends Model
{
    protected $table = 'konsentrasi';
    public $timestamps = false;
    protected $fillable = [
        'judul',
        'deskripsi_1',
        'deskripsi_2'
    ];
}
