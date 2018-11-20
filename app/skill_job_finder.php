<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skill_job_finder extends Model
{
    //
    protected $table = "skill_job_finder";
    
    protected $fillable = [
    	'jf_user_id', 
    	'skill_name'
    ];
}
