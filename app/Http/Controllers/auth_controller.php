<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job_create_model;
use App\job_finder_model;
use App\master_user_model;
use App\login_history;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;

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
            $history['user_id'] = $isAuthenticated->finder_id;
            $history['last_login_date'] = Carbon::now()->format('m/d/Y');
            $login_history = login_history::create($history);
    		return redirect()->to('/');
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
            $history['user_id'] = $isAuthenticated->user_id;
            $history['last_login_date'] = Carbon::now()->format('m/d/Y');
            $login_history = login_history::create($history);
    		return redirect()->to('/corporate');
    	}
    	else {
    		return back()->withErrors('Your email & password did not match. Please try again!');
    	}
    }

    public function destroy()
    {
        session()->flush();
        return redirect()->to('/');
    }

    public function get_forgot_password() {
        return view('forgot_password')->withTitle('Forgot Password');
    }

    public function do_forgot_password(Request $request) {
        $this->validate($request, [
            'email' => 'required'
        ]);

        $user = master_user_model::where('user_email_address',$request->email)->first();
        
        if($user) {
            if($user->status_id == 'inactive') {
                return back()->withErrors('Your account is inactive. Please contact our service customer.');
            }
            else {
                if($user->group_id == 'jf') {
                    // generate new password
                    $new_password = rand('100000','999999');

                    // update password
                    master_user_model::where('user_id', $user->user_id)->update(['password' => md5($new_password)]);

                    // send new password to email
                    $data = ['password' => $new_password];
                    Mail::to($request->email)->send(new ResetPassword($data));

                    return back()->withSuccess('Your new password has been sent to your e-mail. Please check your e-mail.');
                }
                else {
                    return back()->withErrors('Invalid e-mail address. Please make sure to use your registered e-mail.');
                }
            }
        }
        else {
            return back()->withErrors('Invalid e-mail address. Please make sure to use your registered e-mail.');
        }
    }
}
