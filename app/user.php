<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
    protected $table = 'user';
    protected $primarykey='id';
    protected $fillable = ['id','username','password','email'];
    public $timestamps = false;
}
