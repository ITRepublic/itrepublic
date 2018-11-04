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
    public function user_home() {
        $group = session()->get('group_check');
        if($group == "jf") {
            $title_check = 'Job Seeker Home';
        }else{
            $title_check = 'Job Recruiter Home';
        }
        return view('user_home')->withTitle($title_check);
    }
    public function advance_search_home(Request $request) {
        $master_province = master_province::get(['province_id','province_name']);
        $master_tech_type = master_tech_type::get(['tech_type_id','tech_type_name']);
        
        
        return view('home', array('master_province' => $master_province, 'master_tech_type' => $master_tech_type))->withTitle('Home');
    }
}
