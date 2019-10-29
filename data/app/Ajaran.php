<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajaran extends Model
{
     protected $table = 'tabel_ajaran';
    //protected $fillable = [''];
     protected $guarded = [''];
     // protected $dates = ['tanggal'];
     public $timestamps = false;
}
