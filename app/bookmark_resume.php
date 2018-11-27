<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookmark_resume extends Model
{
    //
    protected $table = "bookmark_resume";
    
    protected $fillable = [
    	'jc_user_id', 
        'jf_user_id', 
        'retrieved_by',
        'bookmark_status'
    ];
}
