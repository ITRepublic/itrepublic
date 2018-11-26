<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\job_finder_model;
use App\master_user_model;
use App\Mail\VerifyRegistration;
use App\master_province;

class job_finder_controller extends Controller
{
    public function create()
    {
        $master_province = master_province::orderBy('province_name','asc')->get(['province_id','province_name']);
        return view('job_finder_register', compact('master_province'))->withTitle('Register Job Finder');
    }

    public function store(Request $request)
    {
        $rules = [
    		'name'      => 'required',
            'gender'       => 'required',
            'birth_date'       => 'required',
            'province_id'       => 'required',
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
        $data['gender'] = $request->gender;
        $data['birth_date'] = $request->birth_date;
        $data['province_id'] = $request->province_id;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['group_id'] = 'jf';
        $data['total_rating'] = '0';
        $data['profile_pict'] = '';
        $data['cv_file_name'] = '';

        master_user_model::create($datauser);

        $master_user_model = master_user_model::where('username', $datauser['username'])->first();

        $data['finder_id'] = $master_user_model->user_id;

        $jf = job_finder_model::create($data);

        if($_SERVER['SERVER_NAME'] == 'localhost') {
            $link = "http://localhost/itrepublic/account/".$master_user_model->user_id."/verification";
        }
        else {
            $link = "http://itrepublic.id/account/".$master_user_model->user_id."/verification";
        }

        $item = [
            'email' => $request->email_address,
            'name' => $request->name,
            'link' => $link
        ];
    	// send email to user
        Mail::to($request->email_address)->send(new VerifyRegistration($item));

        return back()->withSuccess("Thank you for registering. Account verification's link has been sent to your email.");
    }

    public function verify_account($id) {
        $user = master_user_model::where('user_id',$id)->update(['status_id' => 'active']);
        $job_finder = job_finder_model::where('finder_id', $id)->update(['status' => 'active']);

        if($_SERVER['SERVER_NAME'] == 'localhost') {
            $link = 'http://localhost/itrepublic';
        }
        else {
            $link = 'http://itrepublic.id';
        }

        return 'Account verified. Thank you. <a href="'.$link.'">redirect back</a>';
    }
}
