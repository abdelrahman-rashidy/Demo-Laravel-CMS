<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	
	protected $fillable = ['body', 'user_id' , 'post_id'];  // is it avialable here to make USER_ID  => FILLABLE 

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
