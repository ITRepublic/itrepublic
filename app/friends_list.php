<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class friends_list extends Model
{
    protected $table = "friends_list";
    
    protected $fillable = [
    	'jf_user_id', 
    	'partner_jf_user_id'
    ];
}
