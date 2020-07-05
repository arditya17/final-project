<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    protected $table = 'magang';
    public $timestamps = false;
    protected $fillable = [
        'nama_magang',
        'nama_perusahaan',
        'nama_mhs1',
        'nama_mhs2',
        'nama_mhs3',
        'nama_mhs4',
        'nama_mhs5',
    ];
}
