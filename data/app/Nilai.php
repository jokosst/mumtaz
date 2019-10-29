<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
     protected $table = 'nilai';
    //protected $fillable = [''];
     protected $guarded = [''];
     // protected $dates = ['tanggal'];
     public $timestamps = false;
}
