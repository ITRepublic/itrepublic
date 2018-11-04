<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_tech_type extends Model
{
    //
    protected $table = "master_tech_type";
    
    protected $fillable = [
    	'tech_type_id', 
    	'tech_type_name'
    ];
}
