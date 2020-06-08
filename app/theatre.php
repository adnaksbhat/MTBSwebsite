<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theatre extends Model
{
    //
     protected $table = 'theatre';
    protected $fillable = ['tname','location','seats','not'];
    public $timestamps = false;
}
