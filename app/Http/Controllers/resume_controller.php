<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job_finder_model;
use App\master_user_model;
use App\master_province;
use App\master_industry;
use App\master_tech_type;
use App\job_finder_experience;

class resume_controller extends Controller
{
    //
    public function create()
    {
        $job_finder_model = job_finder_model::join('master_user','master_user.user_id', '=', 'job_finder.finder_id')
        ->leftJoin('master_tech_type','job_finder.last_work_category', '=', 'master_tech_type.tech_type_id')
        ->leftJoin('master_province','job_finder.province_id', '=', 'master_province.province_id')
        ->get();
        $master_province = master_province::get(['province_id','province_name']);
        $master_tech_type = master_tech_type::get(['tech_type_id','tech_type_name']);   
        return view('resume_grid', array('job_finder_model' => $job_finder_model, 'master_province' => $master_province, 'master_tech_type' => $master_tech_type))->withTitle('Resume');
    }
    public function resume_detail($id)
    {
        session()->forget('detail_job_post_session');
        session()->put('detail_job_post_session', 'view');

        $master_province = master_province::get(['province_id','province_name']);
        $master_tech_type = master_tech_type::get(['tech_type_id','tech_type_name']);

        $job_finder_model = job_finder_model::join('master_user','master_user.user_id', '=', 'job_finder.finder_id')
        ->leftJoin('master_tech_type','job_finder.last_work_category', '=', 'master_tech_type.tech_type_id')
        ->leftJoin('master_province','job_finder.province_id', '=', 'master_province.province_id')
        ->where('finder_id', $id)
        ->first();

        $job_finder_experience = job_finder_experience::join('job_finder','job_finder.finder_id', '=', 'job_finder_experience.finder_id')
        ->join('master_tech_type','master_tech_type.tech_type_id', '=', 'job_finder_experience.tech_type_id')
        ->join('master_industry','master_industry.industry_id', '=', 'job_finder_experience.industry_id')
        ->where('job_finder_experience.finder_id', '=', $id)
        ->get();

        return view('resume_detail', array('job_finder_experience' => $job_finder_experience,'job_finder_model' => $job_finder_model, 'master_province' => $master_province, 'master_tech_type' => $master_tech_type))->withTitle($job_finder_model->full_name);

    }
    
    public function get_advance_search()
    {
        $master_province = master_province::get(['province_id','province_name']);
        $master_tech_type = master_tech_type::get(['tech_type_id','tech_type_name']);   
  
        return view('advance_search_resume', array('master_province' => $master_province, 'master_tech_type' => $master_tech_type))->withTitle('Simple Search');
    }
    
    public function advance_search_submit(Request $request)
    {
        $full_name = $request->full_name;
        $address = $request->address;
        $phone = $request->phone;
        $gender = $request->gender;
        $birth_date = $request->birth_date;
        $province_id = $request->province_id;
        $last_position = $request->last_position;
        $last_level = $request->last_level;
        $last_work_history = $request->last_work_history;
        $last_work_category = $request->last_work_category;
        
        $university = $request->university;
        $language = $request->language;
        $last_salary = $request->last_salary;

        $gender_condition = '=';
        $province_id_condition = '=';
        $last_work_category_condition = '=';
        $language_condition = '=';

        if ($gender == ""){
            $gender_condition = 'like';
            $gender = '%' . $gender . '%';
        }

        if ($province_id == ""){
            $province_id_condition = 'like';
            $province_id = '%' . $province_id . '%';
        }

        if ($last_work_category == ""){
            $last_work_category_condition = 'like';
            $last_work_category = '%' . $last_work_category . '%';
        }

        if ($language == ""){
            $language_condition = 'like';
            $language = '%' . $language . '%';
        }

        $master_province = master_province::get(['province_id','province_name']);
        $master_tech_type = master_tech_type::get(['tech_type_id','tech_type_name']);   
        $job_finder_model = job_finder_model::join('master_user','master_user.user_id', '=', 'job_finder.finder_id')
        ->leftJoin('master_tech_type','job_finder.last_work_category', '=', 'master_tech_type.tech_type_id')
        ->leftJoin('master_province','job_finder.province_id', '=', 'master_province.province_id')
        ->where([
            ['job_finder.full_name', 'like', '%' . $full_name . '%'],
            ['job_finder.address', 'like', '%' . $address . '%'],
            ['job_finder.phone', 'like', '%' . $phone . '%'],
            ['job_finder.gender', $gender_condition, $gender],
            ['job_finder.birth_date', 'like', '%' . $birth_date . '%'],
            ['job_finder.province_id', $province_id_condition, $province_id],
            ['job_finder.last_position', 'like', '%' . $last_position . '%'],
            ['job_finder.last_level', 'like', '%' . $last_level . '%'],
            ['job_finder.last_work_history', 'like', '%' . $last_work_history . '%'],
            ['job_finder.last_work_category', $last_work_category_condition, $last_work_category],
            ['job_finder.university', 'like', '%' . $university . '%'],
            ['job_finder.language', $language_condition, $language],
            ['job_finder.last_salary', 'like', '%' . $last_salary . '%']
            ])
        ->get();
        
        return view('resume_grid', array('job_finder_model' => $job_finder_model, 'master_province' => $master_province, 'master_tech_type' => $master_tech_type))->withTitle('Resume');
    }

    public function get_simple_search()
    {
        $master_industry = master_industry::get(['industry_id','industry_name']);
        $master_tech_type = master_tech_type::get(['tech_type_id','tech_type_name']);   
  
        return view('simple_search_resume', array('master_industry' => $master_industry, 'master_tech_type' => $master_tech_type))->withTitle('Advance Search');
    }
    
    public function simple_search_submit(Request $request)
    {
        $company_name = $request->company_name;
        $job_title = $request->job_title;
        $job_description = $request->job_description;
        $job_position = $request->job_position;
        $industry_id = $request->industry_id;
        $tech_type_id = $request->tech_type_id;

        $industry_id_condition = '=';
        $tech_type_id_condition = '=';

        if ($industry_id == ""){
            $industry_id_condition = 'like';
            $industry_id = '%' . $industry_id . '%';
        }

        if ($tech_type_id == ""){
            $tech_type_id_condition = 'like';
            $tech_type_id = '%' . $tech_type_id . '%';
        }

        $master_industry = master_industry::get(['industry_id','industry_name']);
        $master_tech_type = master_tech_type::get(['tech_type_id','tech_type_name']);   
        $job_finder_model = job_finder_model::join('job_finder_experience','job_finder_experience.finder_id', '=', 'job_finder.finder_id')
        ->leftJoin('master_tech_type','job_finder_experience.tech_type_id', '=', 'master_tech_type.tech_type_id')
        ->leftJoin('master_industry','job_finder_experience.industry_id', '=', 'master_industry.industry_id')
        ->where([
            ['job_finder_experience.company_name', 'like', '%' . $company_name . '%'],
            ['job_finder_experience.job_title', 'like', '%' . $job_title . '%'],
            ['job_finder_experience.job_description', 'like', '%' . $job_description . '%'],
            ['job_finder_experience.job_position', 'like', '%' . $job_position . '%'],
            ['job_finder_experience.industry_id', $industry_id_condition, $industry_id],
            ['job_finder_experience.tech_type_id', $tech_type_id_condition, $tech_type_id]
            ])
        ->get();
        
        return view('resume_grid', array('job_finder_model' => $job_finder_model, 'master_industry' => $master_industry, 'master_tech_type' => $master_tech_type))->withTitle('Resume');
    }
}
