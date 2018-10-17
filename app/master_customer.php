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
		'status_id'
    ];
}
