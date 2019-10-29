<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
     protected $table = 'tentang';
    //protected $fillable = [''];
     protected $guarded = [''];
     // protected $dates = ['tanggal'];
     public $timestamps = false;
}
