<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job_create_model;
use App\master_customer;
use App\master_user_model;

class maintain_user_controller extends Controller
{
    //
    public function job_creator_maintain_user() {

        $company_id = session()->get('company_id');
        $master_user_model = master_user_model::join('job_creator','master_user.user_id', '=', 'job_creator.user_id')
        ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
        ->where([
            ['master_customer.company_id', '=', $company_id]
            ])
        ->get();

        return view('job_creator_maintain_user',array('master_user_model' => $master_user_model))->withTitle('Maintain User');
    }
    //register new user
    public function job_creator_create_user() {
        $company_id = session()->get('company_id');
        $master_customer = master_customer::where('master_customer.company_id', '=', $company_id)
        ->first();

        return view('job_creator_maintain_user_register',array('master_customer' => $master_customer))->withTitle('Maintain User');
    }

    public function store(Request $request) 
    {

    	// Validate, if fails automatically return redirect back and show error messages
    	$rules = [
            'username'   => 'required|unique:master_user,username',
            'phone'         => 'required|numeric',
            'email_address'  => 'required|email|unique:master_user,user_email_address',
            'password'      => 'required|min:6',
            'password_confirmation' => 'required|same:password'
    	];
    	$this->validate($request, $rules);

        // store to DB
        $datauser['username'] = $request->username;
        $datauser['user_email_address'] = $request->email_address;
        $datauser['password'] = md5($request->password);
        $datauser['group_id'] = 'jc';
        $datauser['status_id'] = $request->ddl_active;

        $data['email_address'] = $request->email_address;
        $data['company_name'] = $request->company_name;
        $data['company_address'] = '';
        $data['company_profile'] = '';
        $data['phone'] = $request->phone;
        $data['group_id'] = 'jc';
        $data['status'] = $request->ddl_active;
        
        master_user_model::create($datauser);

        $master_user_model = master_user_model::where('username', $datauser['username'])->first();

        $data['user_id'] = $master_user_model->user_id;
        $data['company_id'] = session()->get('company_id');
        
        job_create_model::create($data);

        $item = [
            'email' => $request->email_address,
            'name' => $request->company_name,
            'account_type' => 'jc'
        ];

    	// send email to user
        // Mail::to($item['email'])->send(new VerifyRegistration($item));
        
        // redirect
        return redirect('/job_creator_maintain_user')->withSuccess("Thank you for registering. Account verification's link has been sent to your email.");
    }
    //edit user
    public function job_creator_detail_user($id)
    {
        session()->forget('detail_maintain_user_session');
        session()->put('detail_maintain_user_session', 'view');
        $master_user_model = master_user_model::join('job_creator','master_user.user_email_address', '=', 'job_creator.email_address')
        ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
        ->where('job_creator.user_id', '=', $id)
        ->first();

        return view('job_creator_maintain_user_detail',array('master_user_model' => $master_user_model))->withTitle('Maintain User Detail');

    }
    public function job_creator_update_user($id)
    {
        session()->forget('detail_maintain_user_session');
        session()->put('detail_maintain_user_session', 'view');
        $master_user_model = master_user_model::join('job_creator','master_user.user_email_address', '=', 'job_creator.email_address')
        ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
        ->where('job_creator.user_id', '=', $id)
        ->first();

        return view('job_creator_update_user_detail',array('master_user_model' => $master_user_model))->withTitle('Maintain User Detail');
    }
    public function update_detail_user(Request $request)
    {
        $rules = [
            'username'   => 'required|unique:master_user,username',
            'phone'         => 'required|numeric',
            'email_address'  => 'required|email|unique:master_user,user_email_address',
            'password'      => 'required|min:6',
            'password_confirmation' => 'required|same:password'
    	];
        $this->validate($request, $rules);
        
        $user_id = $request->user_id;
        // store to DB
        $datauser['username'] = $request->username;
        $datauser['user_email_address'] = $request->email_address;
        $datauser['password'] = md5($request->password);
        $datauser['group_id'] = 'jc';
        $datauser['status_id'] = $request->ddl_active;

        $data['email_address'] = $request->email_address;
        $data['company_name'] = $request->company_name;
        $data['company_address'] = '';
        $data['company_profile'] = '';
        $data['phone'] = $request->phone;
        $data['group_id'] = 'jc';
        $data['status'] = $request->ddl_active;
        
        $mu = master_user_model::where('user_id',$user_id)->update($datauser);
        $jc = job_create_model::where('user_id',$user_id)->update($data);

        $item = [
            'email' => $request->email_address,
            'name' => $request->company_name,
            'account_type' => 'jc'
        ];

    	// send email to user
        // Mail::to($item['email'])->send(new VerifyRegistration($item));
        
        // redirect
        return redirect('/job_creator_maintain_user')->withSuccess("Thank you for registering. Account verification's link has been sent to your email.");
    }

}
