<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\master_province;
use App\master_tech_type;

class home_controller extends Controller
{
    public function get_home() {
        $master_province = master_province::get(['province_id','province_name']);
        $master_tech_type = master_tech_type::get(['tech_type_id','tech_type_name']);     
        return view('home', array('master_province' => $master_province, 'master_tech_type' => $master_tech_type))->withTitle('Home');
    }
    public function job_creator_home() {
        return view('job_creator_home')->withTitle('Job Recruiter Home');
    }
    public function job_finder_home() {   
        return view('job_finder_home')->withTitle('Job Seeker Home');
    }
}
