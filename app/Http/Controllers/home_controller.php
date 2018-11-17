<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\master_province;
use App\master_tech_type;
use App\job_post_list_model;

class home_controller extends Controller
{
    public function get_home() {
        $master_province = master_province::get(['province_id','province_name']);
        $master_tech_type = master_tech_type::get(['tech_type_id','tech_type_name']);    
        
        $job_post_list_model = job_post_list_model::join('job_creator','job_post_list.jc_user_id', '=', 'job_creator.user_id')
        ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
        ->where('job_status', '=', '1')
        ->get();

        return view('home', array('job_post_list_model' => $job_post_list_model, 'master_province' => $master_province, 'master_tech_type' => $master_tech_type))->withTitle('Home');
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

        $province_id = $request->province_id;
        $tech_type_id = $request->tech_type_id;
        
        $province_id_condition = '=';
        $tech_type_id_condition = '=';

        if ($province_id == ""){
            $province_id_condition = 'like';
            $province_id = '%' . $province_id . '%';
        }

        if ($tech_type_id == ""){
            $tech_type_id_condition = 'like';
            $tech_type_id = '%' . $tech_type_id . '%';
        }

        $job_post_list_model = job_post_list_model::join('job_creator','job_post_list.jc_user_id', '=', 'job_creator.user_id')
        ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
        ->where([
            ['master_customer.province_id', $province_id_condition, $province_id],
            ['job_post_list.category_id', $tech_type_id_condition, $tech_type_id],
            ['job_status', '=', '1']
            ])
        ->get();
        
        return view('home', array('job_post_list_model' => $job_post_list_model, 'master_province' => $master_province, 'master_tech_type' => $master_tech_type))->withTitle('Home');
    }
}
