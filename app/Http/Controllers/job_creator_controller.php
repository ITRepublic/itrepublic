<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\job_create_model;
use App\master_user_model;
use App\master_customer;
use App\master_province;
use App\master_industry;

class job_creator_controller extends Controller
{
    public function create() 
    {
        $master_province = master_province::get(['province_id','province_name']);
        $master_industry = master_industry::get(['industry_id','industry_name']);
    	return view('job_creator_register', array('master_province' => $master_province, 'master_industry' => $master_industry))->withTitle('Register Job Creator');
    }
    
    public function store(Request $request) 
    {

    	// Validate, if fails automatically return redirect back and show error messages
    	$rules = [
            'email_address'             => 'required|email|unique:master_customer,email_address',
            'company_name'              => 'required',
            'phone'                     => 'required|numeric',
            'summary'                   => 'required',
            'authorized_person_name'    => 'required',
            'logo'                      => 'required',
            'province_id'               => 'required',
            'address'                   => 'required',
            'total_employee'            => 'required',
            'apply_process_time'        => 'required',
            'industry_id'               => 'required',
            'website'                   => 'required',
            'working_hours'             => 'required',
            'benefit_details'           => 'required',
            'language'                  => 'required'
    	];
    	$this->validate($request, $rules);

        // store to DB
        $data['email_address'] = $request->email_address;
        $data['company_name'] = $request->company_name;
        $data['phone'] = $request->phone;
        $data['summary'] = $request->summary;
        $data['authorized_person_name'] = $request->authorized_person_name;

		$data['province_id'] = $request->province_id;
		$data['address'] = $request->address;
		$data['total_employee'] = $request->total_employee;
		$data['apply_process_time'] = $request->apply_process_time;
		$data['industry_id'] = $request->industry_id;
		$data['website'] = $request->website;
		$data['working_hours'] = $request->working_hours;
		$data['benefit_details'] = $request->benefit_details;
		$data['language'] = $request->language;
        $data['status_id'] = '9';

        if ($request->hasFile('logo')) {
    		// will store in folder storage/app/image
    		$pathprof = 'storage/app/'.$request->file('logo')->store('logo');
        }
        else {
            $pathprof = "";
        }

        $data['logo'] = $pathprof;

        master_customer::create($data);

        $item = [
            'email' => $request->email_address,
            'name' => $request->company_name,
            'account_type' => 'jc'
        ];

    	// send email to user
        // Mail::to($item['email'])->send(new VerifyRegistration($item));
        
        // redirect
        return back()->withSuccess("Thank you for registering. Account verification's link has been sent to your email.");
    }
    public function company_profile() {

        $master_province = master_province::get(['province_id','province_name']);
        $master_industry = master_industry::get(['industry_id','industry_name']);
        $company_id = session()->get('company_id');
        $master_customer = master_customer::leftJoin('master_industry','master_customer.industry_id', '=', 'master_industry.industry_id')
        ->leftJoin('master_province','master_customer.province_id', '=', 'master_province.province_id')
        ->where('master_customer.company_id', '=', $company_id)
        ->get()->first();
        return view('company_profile', array('master_customer' => $master_customer, 'master_province' => $master_province, 'master_industry' => $master_industry))->withTitle('Company Profile');
    }
    public function submit_company_profile(Request $request) 
    {
        $company_id = session()->get('company_id');
    	// Validate, if fails automatically return redirect back and show error messages
    	$rules = [
            'company_name'              => 'required',
            'phone'                     => 'required|numeric',
            'summary'                   => 'required',
            'authorized_person_name'    => 'required',
            'logo'                      => 'required',
            'province_id'               => 'required',
            'address'                   => 'required',
            'total_employee'            => 'required',
            'apply_process_time'        => 'required',
            'industry_id'               => 'required',
            'website'                   => 'required',
            'working_hours'             => 'required',
            'benefit_details'           => 'required',
            'language'                  => 'required'
    	];
    	$this->validate($request, $rules);

        // store to DB
        $data['email_address'] = $request->email_address;
        $data['company_name'] = $request->company_name;
        $data['phone'] = $request->phone;
        $data['summary'] = $request->summary;
        $data['authorized_person_name'] = $request->authorized_person_name;
		$data['logo'] = $request->logo;
		$data['province_id'] = $request->province_id;
		$data['address'] = $request->address;
		$data['total_employee'] = $request->total_employee;
		$data['apply_process_time'] = $request->apply_process_time;
		$data['industry_id'] = $request->industry_id;
		$data['website'] = $request->website;
		$data['working_hours'] = $request->working_hours;
		$data['benefit_details'] = $request->benefit_details;
		$data['language'] = $request->language;
        $data['status_id'] = '9';

        $mcp = master_customer::where('company_id',$company_id)->update($data);

        $item = [
            'email' => $request->email_address,
            'name' => $request->company_name,
            'account_type' => 'jc'
        ];

    	// send email to user
        // Mail::to($item['email'])->send(new VerifyRegistration($item));
        
        // redirect
        return redirect('/')->withSuccess("Thank you for registering. Account verification's link has been sent to your email.");
    }
}
