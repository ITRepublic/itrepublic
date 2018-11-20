<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_highest_qualification extends Model
{
    //
    protected $table = "master_highest_qualification";
    
    protected $fillable = [
    	'highest_qualification_id', 
    	'highest_qualification_name'
    ];
}
