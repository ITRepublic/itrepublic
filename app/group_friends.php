<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group_friends extends Model
{
    //
    protected $table = "group_friends";
    
    protected $fillable = [
    	'group_name','owner','group_image'
    ];
}
