<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_feeds_comment extends Model
{
    //
    protected $table = "post_feeds_comment";
    
    protected $fillable = [
    	'post_id', 
        'jf_user_id',
        'seq',
        'comment'
    ];
}
