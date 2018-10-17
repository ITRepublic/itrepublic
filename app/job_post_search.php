<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_post_search extends Model
{
    //
    protected $table = "job_post_search";
    
    protected $fillable = [
    	'job_post_id', 
    	'jf_user_id', 
        'status_id'
    ];
}
