<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job_finder_model;
use App\master_user_model;
use App\master_province;
use App\master_tech_type;
use App\master_industry;
use Illuminate\Support\Facades\Mail;

class profile_controller extends Controller
{
    //
    public function create()
    {
        $master_province = master_province::get(['province_id','province_name']);
        $master_tech_type = master_tech_type::get(['tech_type_id','tech_type_name']);
        $user_id = session()->get('user_id');
        $job_finder_model = job_finder_model::join('master_user','job_finder.finder_id', '=', 'master_user.user_id')
        ->where('job_finder.finder_id', '=', $user_id)
        ->get()->first();
        return view('job_finder_profile',array('job_finder_model' => $job_finder_model, 'master_province' => $master_province, 'master_tech_type' => $master_tech_type))->withTitle('Your Profile');
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

    	// // send email to user
        // Mail::to($item['email'])->send(new VerifyRegistration($item));

        return redirect('/user_home')->withSuccess("Thank you for registering. Account verification's link has been sent to your email.");
    }
}
