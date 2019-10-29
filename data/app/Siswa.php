<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    //protected $fillable = [''];
     protected $guarded = [''];
     // protected $dates = ['tanggal'];
     public $timestamps = false;
}
