<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resume_limit extends Model
{
    //
    protected $table = "resume_limit";
    
    protected $fillable = [
    	'company_id', 
        'limit_group_id',
        'status_id'
    ];
}
