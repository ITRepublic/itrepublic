<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_industry extends Model
{
    //
    protected $table = "master_industry";
    
    protected $fillable = [
    	'industry_id', 
    	'industry_name'
    ];
}
