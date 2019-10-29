<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    //protected $fillable = [''];
     protected $guarded = [''];
     // protected $dates = ['tanggal'];
     public $timestamps = false;
}
