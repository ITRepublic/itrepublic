<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_finder_model extends Model
{
    //
    protected $table = "job_finder";
    
    protected $fillable = [
		'finder_id',
		'full_name',
		'email_address',
    	'address', 
    	'phone',
		'group_id',
		'total_rating',
		'status',
        'profile_pict'
    ];
}
