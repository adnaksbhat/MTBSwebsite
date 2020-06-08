<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //
     protected $table = 'admin';
    protected $fillable = ['username','password'];
    public $timestamps = false;
}
