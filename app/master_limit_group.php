<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_limit_group extends Model
{
    //
    protected $table = "master_limit_group";
    
    protected $fillable = [
    	'limit_amount', 
    	'limit_group_price'
    ];
}
