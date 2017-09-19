<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'user_id']; 
    //for no repeat 
    // guarded   X fillable   $guarded = []; at new Model extended form elquent and all other Model extended from Model
     public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

}
