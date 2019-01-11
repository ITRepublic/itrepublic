<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_group_friends extends Model
{
    //
    protected $table = "detail_group_friends";
    
    protected $fillable = [
    	'group_friends_id', 
        'jf_user_id',
        'role'
    ];
}
