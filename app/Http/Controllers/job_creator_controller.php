<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\job_create_model;
use App\master_user_model;
use App\master_customer;

class job_creator_controller extends Controller
{
    public function create() 
    {
    	return view('job_creator_register')->withTitle('Register Job Creator');
    }
    
    public function store(Request $request) 
    {

    	// Validate, if fails automatically return redirect back and show error messages
    	$rules = [
            'email_address'  => 'required|email|unique:master_customer,email_address',
            'company_name'   => 'required',
            'phone'         => 'required|numeric',
            'summary'      => 'required',
    	];
    	$this->validate($request, $rules);

        // store to DB
        $data['email_address'] = $request->email_address;
        $data['company_name'] = $request->company_name;
        $data['phone'] = $request->phone;
        $data['summary'] = $request->summary;
        $data['status_id'] = '9';

        master_customer::create($data);

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
