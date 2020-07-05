<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';
    public $timestamps = false;
    protected $fillable = [
        'foto',
        'nama_fasilitas',
        'deskripsi'
    ];
}
