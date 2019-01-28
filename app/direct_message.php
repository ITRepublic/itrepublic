<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class direct_message extends Model
{
    protected $table = 'direct_message';
    protected $fillable = [
        'user_id','connection_id','message'
    ];
}
