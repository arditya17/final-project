<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'perusahaan';
    public $timestamps = false;
    protected $fillable = [
        'nama_perusahaan',
        'daerah_perusahaan',
        'jenis_perusahaan',
        'status'
    ];
}
