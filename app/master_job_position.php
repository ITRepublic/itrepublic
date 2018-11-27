<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_job_position extends Model
{
    //
    protected $table = "master_job_position";
    
    protected $fillable = [
    	'position_id', 
        'position_name'
    ];
}
