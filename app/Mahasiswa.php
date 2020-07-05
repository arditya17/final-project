<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    public $timestamps = false;
    protected $fillable = [
        'nama_mahasiswa',
        'nim',
        'kelas',
        'konsentrasi',
        'jenis_kelamin'
    ];
}
