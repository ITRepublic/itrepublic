<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\master_province;
use App\master_tech_type;
use App\job_post_list_model;

class home_controller extends Controller
{
    public function get_home() {
        $master_province = master_province::orderBy('province_name','asc')->get(['province_id','province_name']);
        $master_tech_type = master_tech_type::orderBy('tech_type_name','asc')->get(['tech_type_id','tech_type_name']); 
        
        $job_post_list_model = job_post_list_model::join('job_creator','job_post_list.jc_user_id', '=', 'job_creator.user_id')
        ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
        ->join('master_tech_type','job_post_list.category_id','=','master_tech_type.tech_type_id')
        ->where('job_status', '=', '1')
        ->take(10)
        ->get();

        foreach($master_province as $p) {
            $totalJobPostByProvince[$p->province_id] = job_post_list_model::join('job_creator','job_post_list.jc_user_id', '=', 'job_creator.user_id')
            ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
            ->where('master_customer.province_id', $p->province_id)
            ->where('job_status','1')
            ->count();
        }

        foreach($master_tech_type as $mtt) {
            $totalJobPostByCategory[$mtt->tech_type_id] = job_post_list_model::join('job_creator','job_post_list.jc_user_id', '=', 'job_creator.user_id')
            ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
            ->join('master_tech_type','job_post_list.category_id','=','master_tech_type.tech_type_id')
            ->where('master_tech_type.tech_type_id',$mtt->tech_type_id)
            ->where('job_status','1')
            ->count();
        }

        return view('home', compact('job_post_list_model', 'master_province', 'master_tech_type', 'totalJobPostByProvince', 'totalJobPostByCategory'))->withTitle('Home');
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
        $master_province = master_province::orderBy('province_name','asc')->get(['province_id','province_name']);
        $master_tech_type = master_tech_type::orderBy('tech_type_name','asc')->get(['tech_type_id','tech_type_name']); 

        $province_id = $request->province_id;
        $tech_type_id = $request->tech_type_id;
        $search = $request->search;
        $company = $request->company;

        $job_post_list_model = job_post_list_model::join('job_creator','job_post_list.jc_user_id', '=', 'job_creator.user_id')
        ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id');

        if (isset($province_id)){
            $job_post_list_model = $job_post_list_model->where('master_customer.province_id', $province_id);
        }

        if (isset($tech_type_id)){
            $job_post_list_model = $job_post_list_model->where('job_post_list.category_id', $tech_type_id);
        }

        if(isset($search)) {
            $job_post_list_model = $job_post_list_model->where('job_post_list.job_name', 'like', $search.'%');
        }

        if(isset($company)) {
            $job_post_list_model = $job_post_list_model->where('job_creator.company_id', $company);
        }

        $job_post_list_model = $job_post_list_model->where('job_status','1')->get();

        foreach($master_province as $p) {
            $totalJobPostByProvince[$p->province_id] = job_post_list_model::join('job_creator','job_post_list.jc_user_id', '=', 'job_creator.user_id')
            ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
            ->where('master_customer.province_id', $p->province_id)
            ->where('job_status','1')
            ->count();
        }

        foreach($master_tech_type as $mtt) {
            $totalJobPostByCategory[$mtt->tech_type_id] = job_post_list_model::join('job_creator','job_post_list.jc_user_id', '=', 'job_creator.user_id')
            ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
            ->join('master_tech_type','job_post_list.category_id','=','master_tech_type.tech_type_id')
            ->where('master_tech_type.tech_type_id',$mtt->tech_type_id)
            ->where('job_status','1')
            ->count();
        }
        
        return view('job', compact('job_post_list_model', 'master_province', 'master_tech_type', 'totalJobPostByProvince', 'totalJobPostByCategory'))->withTitle('Home');
    }
}
