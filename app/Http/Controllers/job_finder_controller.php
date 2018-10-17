<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\job_finder_model;
use App\master_user_model;

class job_finder_controller extends Controller
{
    public function create()
    {
        return view('job_finder_register')->withTitle('Register Job Finder');
    }

    public function store(Request $request)
    {
        $rules = [
    		'name'      => 'required',
            'address'       => 'required',
            'phone'         => 'required|numeric',
            'email_address'  => 'required|email|unique:master_user,user_email_address',
            'password'      => 'required|min:6',
            'password_confirmation' => 'required|same:password'
    	];

        $this->validate($request, $rules);
        //save db
        $datauser['username'] = $request->email_address;
        $datauser['user_email_address'] = $request->email_address;
        $datauser['password'] = md5($request->password);
        $datauser['group_id'] = 'jf';

        $data['email_address'] = $request->email_address;
        $data['full_name'] = $request->name;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['group_id'] = 'jf';
        $data['total_rating'] = '0';
        $data['profile_pict'] = '';

        master_user_model::create($datauser);

        $master_user_model = master_user_model::where('username', $datauser['username'])->first();

        $data['finder_id'] = $master_user_model->user_id;

        $jf = job_finder_model::create($data);

        $item = [
            'email' => $request->email_address,
            'name' => $request->name,
            'account_type' => 'jf'
        ];

    	// send email to user
        Mail::to($item['email'])->send(new VerifyRegistration($item));

        return redirect('/')->withSuccess("Thank you for registering. Account verification's link has been sent to your email.");
    }
}
