<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class friends_list extends Model
{
    //
    protected $table = "detail_group_friends";
    
    protected $fillable = [
    	'jf_user_id', 
    	'partner_jf_user_id'
    ];
}
