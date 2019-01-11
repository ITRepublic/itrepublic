<?php

namespace App\Http\Controllers;

use App\job_finder_model;
use App\master_user_model;
use App\master_province;
use App\master_tech_type;
use App\master_industry;
use App\job_finder_experience;
use App\master_highest_qualification;
use App\skill_job_finder;
use App\master_job_position;
use App\post_feeds;
use App\post_feeds_likes;
use App\post_feeds_comment;

use Illuminate\Http\Request;

class social_media_controller extends Controller
{
    //
    public function create()
    {
        $master_province = master_province::orderBy('province_name','asc')->get(['province_id','province_name']);
        $master_tech_type = master_tech_type::get(['tech_type_id','tech_type_name']);
        $master_highest_qualification = master_highest_qualification::get(['highest_qualification_id','highest_qualification_name']);
        $user_id = session()->get('user_id');
        $job_finder_model = job_finder_model::join('master_user','job_finder.finder_id', '=', 'master_user.user_id')
        ->where('job_finder.finder_id', '=', $user_id)
        ->get()->first();

        $job_finder_experience = job_finder_experience::join('job_finder','job_finder.finder_id', '=', 'job_finder_experience.finder_id')
        ->join('master_tech_type','master_tech_type.tech_type_id', '=', 'job_finder_experience.tech_type_id')
        ->join('master_industry','master_industry.industry_id', '=', 'job_finder_experience.industry_id')
        ->leftJoin('master_job_position','master_job_position.position_id', '=', 'job_finder_experience.job_position')
        ->where('job_finder_experience.finder_id', '=', $user_id)
        ->orderBy('job_finder_experience.period_to','DESC')
        ->get();

        $skill_job_finder = skill_job_finder::join('job_finder','job_finder.finder_id', '=', 'skill_job_finder.jf_user_id')
        ->where('skill_job_finder.jf_user_id', '=', $user_id)
        ->orderBy('skill_job_finder.skill_name','DESC')
        ->get();
        
        return view('social_media_home',array('job_finder_model' => $job_finder_model, 'master_province' => $master_province, 'master_tech_type' => $master_tech_type, 'job_finder_experience' => $job_finder_experience, 'master_highest_qualification' => $master_highest_qualification, 'skill_job_finder' => $skill_job_finder ))->withTitle('Your Profile');
    }
    public function friends_connect()
    {
        $master_province = master_province::orderBy('province_name','asc')->get(['province_id','province_name']);
        $master_tech_type = master_tech_type::get(['tech_type_id','tech_type_name']);
        $master_highest_qualification = master_highest_qualification::get(['highest_qualification_id','highest_qualification_name']);
        $user_id = session()->get('user_id');
        $job_finder_model = job_finder_model::join('master_user','job_finder.finder_id', '=', 'master_user.user_id')
        ->where('job_finder.finder_id', '=', $user_id)
        ->get()->first();

        $job_finder_experience = job_finder_experience::join('job_finder','job_finder.finder_id', '=', 'job_finder_experience.finder_id')
        ->join('master_tech_type','master_tech_type.tech_type_id', '=', 'job_finder_experience.tech_type_id')
        ->join('master_industry','master_industry.industry_id', '=', 'job_finder_experience.industry_id')
        ->leftJoin('master_job_position','master_job_position.position_id', '=', 'job_finder_experience.job_position')
        ->where('job_finder_experience.finder_id', '=', $user_id)
        ->orderBy('job_finder_experience.period_to','DESC')
        ->get();

        $skill_job_finder = skill_job_finder::join('job_finder','job_finder.finder_id', '=', 'skill_job_finder.jf_user_id')
        ->where('skill_job_finder.jf_user_id', '=', $user_id)
        ->orderBy('skill_job_finder.skill_name','DESC')
        ->get();
        
        return view('friends_connect',array('job_finder_model' => $job_finder_model, 'master_province' => $master_province, 'master_tech_type' => $master_tech_type, 'job_finder_experience' => $job_finder_experience, 'master_highest_qualification' => $master_highest_qualification, 'skill_job_finder' => $skill_job_finder ))->withTitle('Your Profile');
    }
    public function post_feeds_submit(Request $request) 
    {
        $user_id = session()->get('user_id');
        $rules = [
            'post_feeds'  => 'required'
    	];
        $this->validate($request, $rules);

        $data['post_text'] = $request->post_feeds;
       
        if ($request->hasFile('upload_post_image')) {
    		// will store in folder storage/app/image
    		$path = 'storage/app/'.$request->file('upload_post_image')->store('post_picture');
        }
        else{
            $path = '';
            
        }
        $data['post_picture_src'] = $path;
        $data['post_videos_src'] = '';

        $pf = post_feeds::create($data);

        return back()->withSuccess("Your post has been uploaded.");

    }
}
