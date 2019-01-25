<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group_discussion extends Model
{
    protected $table = 'group_discussion';
    protected $fillable = [
        'user_id', 'group_id', 'message'
    ];
}
