<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_finder_experience extends Model
{
    //
    protected $table = "job_finder_experience";
    
    protected $fillable = [
        'detail_id',
		'finder_id', 
		'company_name',
		'period_from', 
    	'period_to',
    	'job_description',
    	'job_position',
		'industry_id',
		'tech_type_id'
    ];
}
