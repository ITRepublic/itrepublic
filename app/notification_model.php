<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notification_model extends Model
{
    //
    protected $table = "notification_model";
    
    protected $fillable = [
    	'log_message', 
        'sent_user_id',
        'read_user_id',
        'status_id'
    ];
}
