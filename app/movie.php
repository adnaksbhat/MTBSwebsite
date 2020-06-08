<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    //
     protected $table = 'movie';
    protected $fillable = ['mname','genre','imdb'];
    public $timestamps = false;
}
