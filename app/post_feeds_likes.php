<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_feeds_likes extends Model
{
    //
    protected $table = "post_feeds_likes";
    
    protected $fillable = [
    	'post_id', 
    	'jf_user_id'
    ];
}
