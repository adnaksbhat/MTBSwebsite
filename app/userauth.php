<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userauth extends Model
{
    //
    protected $table = 'userauth';
    protected $fillable = ['username','password','email'];
    public $timestamps = false;
}
