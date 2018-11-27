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
		'city_name',
		'highest_qualification',
		'field_of_study',
		'grade',
		'expected_salary',
		'cv_file_name',
		'university',
		'language',
		'last_salary',
		'total_rating',
		'status',
        'profile_pict'
    ];
}
