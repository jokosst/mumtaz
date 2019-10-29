<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelasiGuru extends Model
{
    protected $table = 'relasi_guru';
    //protected $fillable = [''];
     protected $guarded = [''];
     // protected $dates = ['tanggal'];
     public $timestamps = false;
}
