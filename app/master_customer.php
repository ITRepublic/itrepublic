<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_customer extends Model
{
    //
    protected $table = "master_customer";
    
    protected $fillable = [
		'company_id', 
		'email_address', 
    	'company_name', 
    	'phone',
		'summary',
		'authorized_person_name',
		'logo',
		'province_id',
		'address',
		'total_employee',
		'apply_process_time',
		'industry_id',
		'website',
		'working_hours',
		'benefit_details',
		'language',
		'status_id'
    ];
}
