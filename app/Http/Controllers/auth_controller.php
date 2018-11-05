<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job_create_model;
use App\job_finder_model;
use App\master_user_model;

class auth_controller extends Controller
{
    //job finder login
    public function job_finder_login() 
    {
        return view('job_finder_login')->withTitle('Job Seeker Login');
    }
    public function job_finder_store(Request $request)
    {
        
    	$rules = [
    		'email' => 'required|email',
    		'password' => 'required'
    	];
        
    	$this->validate($request,$rules);

        $credentials = [
            'master_user.user_email_address' => $request->email,
            'master_user.password' => md5($request->password),
            'master_user.status_id' => 'active'
        ];
        
        $isAuthenticated = master_user_model::join('job_finder','master_user.user_id', '=', 'job_finder.finder_id')
                           ->where($credentials)->first();
     
        if($isAuthenticated) {
            session()->put([
                'user_id' => $isAuthenticated->finder_id,
                'user_name' => $isAuthenticated->username,
                'user_email' => $isAuthenticated->email_address,
                'group_check' => $isAuthenticated->group_id
            ]);
        }

    	if($isAuthenticated) {
    		return redirect()->to('/user_home');
    	}
    	else {
    		return back()->withErrors('Your email & password did not match. Please try again!');
    	}
    }
    
    //job creator login
    public function job_creator_login() 
    {
        return view('job_creator_login')->withTitle('Job Recruiter Login');
    }

    public function job_creator_store(Request $request)
    {
    	$rules = [
    		'email' => 'required|email',
    		'password' => 'required'
    	];

    	$this->validate($request,$rules);

        $credentials = [
            'master_user.user_email_address' => $request->email,
            'master_user.password' => md5($request->password),
            'master_user.status_id' => 'active'
        ];
        $isAuthenticated = master_user_model::join('job_creator','master_user.user_id', '=', 'job_creator.user_id')
                           ->where($credentials)->first();
        if($isAuthenticated) {
            session()->put([
                'user_id' => $isAuthenticated->user_id,
                'company_id' => $isAuthenticated->company_id,
                'user_name' => $isAuthenticated->company_name,
                'user_email' => $isAuthenticated->email_address,
                'group_check' => $isAuthenticated->group_id
            ]);
        }

    	if($isAuthenticated) {
    		return redirect()->to('/user_home');
    	}
    	else {
    		return back()->withErrors('Your email & password did not match. Please try again!');
    	}
    }

    public function destroy()
    {
        $group = "";
        if(session("group_check") == "admin") {
            $group = "admin";
        }
        else {
            $group = "user";
        }

        session()->flush();

        if($group != 'admin') {
            return redirect()->to('/');
        }
        else {
            return redirect()->to('/web_admin')->withSuccess('You have been logged out.');
        }
    }
}
