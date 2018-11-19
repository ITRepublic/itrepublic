<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job_finder_model;
use App\master_user_model;
use App\master_province;
use App\master_tech_type;
use App\master_industry;
use App\job_finder_experience;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Collection;

class profile_controller extends Controller
{
    //
    public function create()
    {
        $master_province = master_province::orderBy('province_name','asc')->get(['province_id','province_name']);
        $master_tech_type = master_tech_type::get(['tech_type_id','tech_type_name']);
        $user_id = session()->get('user_id');
        $job_finder_model = job_finder_model::join('master_user','job_finder.finder_id', '=', 'master_user.user_id')
        ->where('job_finder.finder_id', '=', $user_id)
        ->get()->first();

        $job_finder_experience = job_finder_experience::join('job_finder','job_finder.finder_id', '=', 'job_finder_experience.finder_id')
        ->join('master_tech_type','master_tech_type.tech_type_id', '=', 'job_finder_experience.tech_type_id')
        ->join('master_industry','master_industry.industry_id', '=', 'job_finder_experience.industry_id')
        ->where('job_finder_experience.finder_id', '=', $user_id)
        ->get();
        return view('job_finder_profile',array('job_finder_model' => $job_finder_model, 'master_province' => $master_province, 'master_tech_type' => $master_tech_type, 'job_finder_experience' => $job_finder_experience ))->withTitle('Your Profile');
    }

    // API
    public function getIndustry() {
        $industries = master_industry::orderBy('industry_name','asc')->get();

        return response()->json($industries);
    }
    public function getSpecialization() {
        $specializations = master_tech_type::orderBy('tech_type_name','asc')->get();
        return response()->json($specializations);
    }
    // END API

    public function store(Request $request)
    {
        
        
        $user_id = session()->get('user_id');
        $rules = [
            'full_name'          => 'required',
            'address'            => 'required',
            'phone'              => 'required|numeric',            
            'gender'             => 'required',
            'birth_date'         => 'required',
            'province_id'        => 'required',
            'last_position'      => 'required',
            'last_level'         => 'required',
            'last_work_history'  => 'required',
            'last_work_category' => 'required',
            'cv_file_name'       => 'required',
            'profile_pict'       => 'required',
            'university'         => 'required',
            'language'           => 'required',
            'last_salary'        => 'required'
    	];

        $this->validate($request, $rules);

        
        //save db        
        $data['full_name'] = $request->full_name;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['gender'] = $request->gender;
        $data['birth_date'] = $request->birth_date;
        $data['province_id'] = $request->province_id;
        $data['last_position'] = $request->last_position;
        $data['last_level'] = $request->last_level;
        $data['last_work_history'] = $request->last_work_history;
        $data['last_work_category'] = $request->last_work_category;
        
        $data['university'] = $request->university;
        $data['language'] = $request->language;
        $data['last_salary'] = $request->last_salary;
        $data['group_id'] = 'jf';
        $data['total_rating'] = '0';
        

        $item = [
            'email' => $request->email_address,
            'name' => $request->name,
            'account_type' => 'jf'
        ];
        if ($request->hasFile('cv_file_name')) {
    		// will store in folder storage/app/image
    		$path = 'storage/app/'.$request->file('cv_file_name')->store('resume');
        }
        else {
            $path = "";
        }

        if ($request->hasFile('profile_pict')) {
    		// will store in folder storage/app/image
    		$pathprof = 'storage/app/'.$request->file('profile_pict')->store('image');
        }
        else {
            $pathprof = "";
        }

        $data['profile_pict'] = $pathprof;
        $data['cv_file_name'] = $path;

        $jfp = job_finder_model::where('finder_id',$user_id)->update($data);

        //to update experience job finder
        $i = 0;
        foreach($request->get('company_name') as $name) {
            $company_name[$i] = $name;
            $i++;
        }
        $j = 0;
        foreach($request->get('period_from') as $from) {
            $period_from[$j] = $from;
            $j++;
        }
        $k = 0;
        foreach($request->get('period_to') as $to) {
            $period_to[$k] = $to;
            $k++;
        }
        $l = 0;
        foreach($request->get('job_title') as $title) {
            $job_title[$l] = $title;
            $l++;
        }
        $m = 0;
        foreach($request->get('job_description') as $description) {
            $job_description[$m] = $description;
            $m++;
        }
        $n = 0;
        foreach($request->get('job_position') as $position) {
            $job_position[$n] = $position;
            $n++;
        }
        $o = 0;
        foreach($request->get('industry') as $indust) {
            $industry[$o] = $indust;
            $o++;
        }
        $p = 0;
        foreach($request->get('specialization') as $special) {
            $specialization[$p] = $special;
            $p++;
        }
        for($a = 0;$a<$i;$a++)
        {
            $data_detail['finder_id'] = $user_id;
            $data_detail['company_name'] = $company_name[$a];
            $data_detail['period_from'] = $period_from[$a];
            
            $data_detail['period_to'] = $period_to[$a];
            $data_detail['job_title'] = $job_title[$a];
            $data_detail['job_description'] = $job_description[$a];
            $data_detail['job_position'] = $job_position[$a];
            $data_detail['industry_id'] = $industry[$a];
            $data_detail['tech_type_id'] = $specialization[$a];

            $jfe = job_finder_experience::create($data_detail);

        }

    	// // send email to user
        // Mail::to($item['email'])->send(new VerifyRegistration($item));

        return redirect('/user_home')->withSuccess("Thank you for registering. Account verification's link has been sent to your email.");
    }
    public function edit_detail_experience($id)
    {
        $master_industry = master_industry::orderBy('industry_name','asc')->get();
        $master_tech_type = master_tech_type::orderBy('tech_type_name','asc')->get();
        
        $job_finder_experience = job_finder_experience::join('job_finder','job_finder.finder_id', '=', 'job_finder_experience.finder_id')
        ->join('master_tech_type','master_tech_type.tech_type_id', '=', 'job_finder_experience.tech_type_id')
        ->join('master_industry','master_industry.industry_id', '=', 'job_finder_experience.industry_id')
        ->where('job_finder_experience.detail_id', '=', $id)
        ->get()->first();
        

        return view('detail_experience', array('job_finder_experience' => $job_finder_experience, 'master_industry' => $master_industry, 'master_tech_type' => $master_tech_type))->withTitle("Detail Experience");

    }
    public function submit_detail_experience(Request $request) 
    {
        $detail_id = $request->detail_id;
    	// Validate, if fails automatically return redirect back and show error messages
    	$rules = [
            'company_name'              => 'required',
            'period_from'               => 'required',
            'period_to'                 => 'required',
            'job_title'                 => 'required',
            'job_description'           => 'required',
            'job_position'              => 'required',
            'industry_id'               => 'required',
            'tech_type_id'              => 'required'
        ];
        
    	$this->validate($request, $rules);
        
        // store to DB
        $data['company_name'] = $request->company_name;
        $data['period_from'] = $request->period_from;
        $data['period_to'] = $request->period_to;
        $data['job_title'] = $request->job_title;
        $data['job_description'] = $request->job_description;
		$data['job_position'] = $request->job_position;
		$data['industry_id'] = $request->industry_id;
		$data['tech_type_id'] = $request->tech_type_id;

        $jfe = job_finder_experience::where('detail_id',$detail_id)->update($data);

    	// send email to user
        // Mail::to($item['email'])->send(new VerifyRegistration($item));
        
        // redirect
        return redirect('/profile')->withSuccess("Thank you for registering. Account verification's link has been sent to your email.");
    }
}
