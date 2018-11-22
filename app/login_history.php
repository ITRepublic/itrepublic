<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login_history extends Model
{
    //
    protected $table = "login_history";
    
    protected $fillable = [
      'user_id',
      'last_login_date'
    ];
}
