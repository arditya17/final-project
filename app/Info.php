<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    //
    public $timestamps = false;
    protected $table = 'info_akademik';
    protected $fillable = [
        'judul_info', 
        'isi_info'
    ];
}
