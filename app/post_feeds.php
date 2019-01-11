<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_feeds extends Model
{
    //
    protected $table = "post_feeds";
    
    protected $fillable = [
    	'post_id', 
    	'post_text', 
    	'post_picture_src',
        'post_videos_src',
        'jf_user_id'
    ];
}
