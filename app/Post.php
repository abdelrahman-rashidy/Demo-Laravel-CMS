<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['title', 'body']; 
    //for no repeat 
    // guarded   X fillable   $guarded = []; at new Model extended form elquent and all other Model extended from Model
}
