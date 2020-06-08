<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class songs extends Model
{
    //

     protected $table = 'songs';
    protected $fillable = ['sname','mid'];
    public $timestamps = false;
}
