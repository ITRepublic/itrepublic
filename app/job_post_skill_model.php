<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_post_skill_model extends Model
{
    //
    protected $table = "skill_list";
    
    protected $fillable = [
      'jf_user_id',
      'skill_id'
    ];
}
