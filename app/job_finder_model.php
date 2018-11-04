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
		'gender',
		'birth_date',
		'province_id',
		'last_position',
		'last_level',
		'last_work_history',
		'last_work_category',
		'cv_file_name',
		'university',
		'language',
		'last_salary',
		'total_rating',
		'status',
        'profile_pict'
    ];
}
