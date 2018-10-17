<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_post_list_model extends Model
{
    //
    protected $table = "job_post_list";
    
    protected $fillable = [
    	'job_post_id', 
    	'job_name', 
        'benefit_details',
        'description',
        'has_seen_id', 
        'payment_range_minimum', 
        'payment_range_maximum',
        'experience',
        'job_status',
        'jc_email_address'
    ];

}
