<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_province extends Model
{
    //
    protected $table = "master_province";
    
    protected $fillable = [
    	'province_id', 
    	'province_name'
    ];
}
