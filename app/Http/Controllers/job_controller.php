<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job_post_list_model;
use App\job_create_model;
use App\master_customer;
use App\job_post_search;
use App\job_finder_model;

class job_controller extends Controller
{
    //for job creator
    public function get_job_per_customer() {

        $company_id = session()->get('company_id');
        $job_post_list_model = job_post_list_model::join('job_creator','job_post_list.jc_email_address', '=', 'job_creator.email_address')
        ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
        ->where([
            ['master_customer.company_id', '=', $company_id],
            ['job_status', '=', '1']
            ])
        ->get();

        return view('job_creator_post',array('job_post_list_model' => $job_post_list_model))->withTitle('Job Post');
    }
    public function job_creator_post_register() {
        return view('job_creator_post_register')->withTitle('Job Register');
    }

    public function job_creator_post_store(Request $request) {
        $rules = [
            'job_name'  => 'required',
            'description'   => 'required',
            'benefit_details'         => 'required',
            'payment_range_minimum'      => 'required|numeric',
            'payment_range_maximum'      => 'required|numeric',
            'experience'      => 'required',
    	];
    	$this->validate($request, $rules);

        // store to DB
        $data['job_name'] = $request->job_name;
        $data['description'] = $request->description;
        $data['benefit_details'] = $request->benefit_details;
        $data['payment_range_minimum'] = $request->payment_range_minimum;
        $data['payment_range_maximum'] = $request->payment_range_maximum;
        $data['experience'] = $request->experience;
        $data['jc_email_address'] = $request->jc_email_address;
        $data['has_seen_id'] = '0';
        $data['job_status'] = '1';

        job_post_list_model::create($data);
        return redirect()->to('/get_job_per_customer')->withSuccess('Job Registration is done.');
    }
    // untuk detail view job
    public function get_detail_job_post($id)
    {
        session()->forget('detail_job_post_session');
        session()->put('detail_job_post_session', 'view');

        $job_post_list_model = job_post_list_model::join('master_status','job_post_list.job_status', '=', 'master_status.status_id')
        ->join('job_creator', 'job_post_list.jc_email_address', '=', 'job_creator.email_address')
        ->where('job_post_id', $id)
        ->first();

        return view('job_creator_post_detail', array('job_post_list_model' => $job_post_list_model))->withTitle($job_post_list_model->job_name);

    }
    public function edit_detail_job_post($id)
    {
        session()->forget('detail_job_post_session');
        session()->put('detail_job_post_session', 'edit');

        $job_post_list_model = job_post_list_model::join('master_status','job_post_list.job_status', '=', 'master_status.status_id')
        ->join('job_creator', 'job_post_list.jc_email_address', '=', 'job_creator.email_address')
        ->where('job_post_id', $id)
        ->first();

        return view('job_creator_post_edit_detail', array('job_post_list_model' => $job_post_list_model))->withTitle($job_post_list_model->job_name);

    }
    public function update_detail_job_post(Request $request) {
        $rules = [
            'job_name'  => 'required',
            'description'   => 'required',
            'benefit_details'         => 'required',
            'payment_range_minimum'      => 'required|numeric',
            'payment_range_maximum'      => 'required|numeric',
            'experience'      => 'required',
    	];
    	$this->validate($request, $rules);
        $job_post_id = $request->job_post_id;

        // store to DB
        $data['job_name'] = $request->job_name;
        $data['description'] = $request->description;
        $data['benefit_details'] = $request->benefit_details;
        $data['payment_range_minimum'] = $request->payment_range_minimum;
        $data['payment_range_maximum'] = $request->payment_range_maximum;
        $data['experience'] = $request->experience;

        $jp = job_post_list_model::where('job_post_id',$job_post_id)->update($data);
        return redirect()->to('/get_job_per_customer')->withSuccess('Job Registration is updated.');
    }
    //for job finder
    public function get_job() {
        $job_post_list_model = job_post_list_model::join('job_creator','job_post_list.jc_email_address', '=', 'job_creator.email_address')
        ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
        ->where('job_status', '=', '1')
        ->get();

        return view('job',array('job_post_list_model' => $job_post_list_model))->withTitle('Job Post');
    
    }

    public function get_detail_job($id)
    {
        session()->forget('apply_job_post_session');
        session()->put('apply_job_post_session', 'view');

        $job_post_list_model = job_post_list_model::join('master_status','job_post_list.job_status', '=', 'master_status.status_id')
        ->join('job_creator', 'job_post_list.jc_email_address', '=', 'job_creator.email_address')
        ->where('job_post_id', $id)
        ->first();

        return view('job_detail', array('job_post_list_model' => $job_post_list_model))->withTitle($job_post_list_model->job_name);

    }

    public function apply_detail_job($id) {
        session()->forget('apply_job_post_session');
        session()->put('apply_job_post_session', 'edit');

        $job_post_list_model = job_post_list_model::join('master_status','job_post_list.job_status', '=', 'master_status.status_id')
        ->join('job_creator', 'job_post_list.jc_email_address', '=', 'job_creator.email_address')
        ->where('job_post_id', $id)
        ->first();

        return view('apply_detail_job', array('job_post_list_model' => $job_post_list_model))->withTitle($job_post_list_model->job_name);
    }

    public function apply_detail_job_post(Request $request) {

        $data['job_post_id'] = $request->job_post_id;
        $data['jf_user_id'] = session()->get('user_id');
        $data['status_id'] = '1';

        $job_post_search_model_check = job_post_search::where([
            ['job_post_id', '=', $data['job_post_id']],
            ['jf_user_id', '=', $data['jf_user_id']]
            ])
        ->count();

        if ($job_post_search_model_check == 0)
        {
            job_post_search::create($data);
        }
        

        $job_post_list_model = job_post_list_model::join('job_creator','job_post_list.jc_email_address', '=', 'job_creator.email_address')
        ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
        ->where('job_status', '=', '1')
        ->get();
        return view('job',array('job_post_list_model' => $job_post_list_model))->withTitle('Job Post');
    }

    public function detail_applicant_job_post()
    {
        $job_post_search = job_post_search::join('job_post_list','job_post_list.job_post_id', '=', 'job_post_search.job_post_id')
        ->join('job_finder','job_finder.finder_id', '=', 'job_post_search.jf_user_id')
        ->where('job_status', '=', '1')
        ->get();

        return view('job_detail_applicant',array('job_post_search' => $job_post_search))->withTitle('Job Post Applicant');
    }

    public function get_detail_applicant_job_post($id)
    {
        $job_finder_model = job_finder_model::join('job_post_search','job_post_search.jf_user_id', '=', 'job_finder.finder_id')
        ->where('finder_id', '=', $id)->first();
        return view('detail_applicant',array('job_finder_model' => $job_finder_model))->withTitle('Job Post Applicant');
    }
}
