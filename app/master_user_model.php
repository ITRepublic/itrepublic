<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_user_model extends Model
{
    //
    protected $table = "master_user";
    
    protected $fillable = [
    	'user_id', 
    	'user_email_address', 
    	'username',
    	'password',
		'group_id'
    ];

    protected $guarded = ['password'];
}
