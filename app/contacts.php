<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    //Mass Assignment

    protected $fillable = ['name','phone','message'];
}
