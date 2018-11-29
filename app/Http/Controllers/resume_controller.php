<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job_finder_model;
use App\job_create_model;
use App\master_user_model;
use App\master_province;
use App\master_industry;
use App\master_tech_type;
use App\job_finder_experience;
use App\master_highest_qualification;
use App\skill_job_finder;
use App\login_history;
use App\bookmark_resume;
use App\master_job_position;
use DB;
use Carbon\Carbon;

class resume_controller extends Controller
{
    public function create()
    {
        $job_finder_model = job_finder_model::join('master_user','master_user.user_id', '=', 'job_finder.finder_id')
        ->leftJoin('master_province','job_finder.province_id', '=', 'master_province.province_id')
        ->leftJoin('bookmark_resume','job_finder.finder_id', '=', 'bookmark_resume.jf_user_id')
        ->select('job_finder.*','bookmark_resume.jf_user_id')
        ->distinct()
        ->paginate(25);
        
        return view('resume_grid', compact('job_finder_model'))->withTitle('Resume');
    }
    public function resume_detail($id)
    {
        session()->forget('detail_job_post_session');
        session()->put('detail_job_post_session', 'view');

        $master_highest_qualification = master_highest_qualification::get(['highest_qualification_id','highest_qualification_name']);

        $master_province = master_province::orderBy('province_name','asc')->get(['province_id','province_name']);
        $master_tech_type = master_tech_type::orderBy('tech_type_name','asc')->get(['tech_type_id','tech_type_name']); 

        $job_finder_model = job_finder_model::join('master_user','master_user.user_id', '=', 'job_finder.finder_id')
        ->leftJoin('master_province','job_finder.province_id', '=', 'master_province.province_id')
        ->where('finder_id', $id)
        ->first();

        $job_finder_experience = job_finder_experience::join('job_finder','job_finder.finder_id', '=', 'job_finder_experience.finder_id')
        ->join('master_tech_type','master_tech_type.tech_type_id', '=', 'job_finder_experience.tech_type_id')
        ->join('master_industry','master_industry.industry_id', '=', 'job_finder_experience.industry_id')
        ->where('job_finder_experience.finder_id', '=', $id)
        ->get();

        $skill_job_finder = skill_job_finder::join('job_finder','job_finder.finder_id', '=', 'skill_job_finder.jf_user_id')
        ->where('skill_job_finder.jf_user_id', '=', $id)
        ->orderBy('skill_job_finder.skill_name','desc')
        ->get();
        

        return view('resume_detail', array('skill_job_finder' => $skill_job_finder, 'master_highest_qualification' => $master_highest_qualification, 'job_finder_experience' => $job_finder_experience,'job_finder_model' => $job_finder_model, 'master_province' => $master_province, 'master_tech_type' => $master_tech_type))->withTitle($job_finder_model->full_name);

    }
    
    public function get_advance_search()
    {
        $master_highest_qualification = master_highest_qualification::get(['highest_qualification_id','highest_qualification_name']);
        $master_province = master_province::orderBy('province_name','asc')->get(['province_id','province_name']);
        $master_tech_type = master_tech_type::orderBy('tech_type_name','asc')->get(['tech_type_id','tech_type_name']); 
        $master_industry = master_industry::orderBy('industry_name','asc')->get(['industry_id','industry_name']);
        $master_job_position = master_job_position::orderBy('position_name','asc')->get(['position_id','position_name']);

        return view('advance_search_resume', array('master_highest_qualification' => $master_highest_qualification, 'master_province' => $master_province, 'master_tech_type' => $master_tech_type, 'master_industry' => $master_industry, 'master_job_position' => $master_job_position))->withTitle('Advanced Search');
    }
    
    public function advance_search_submit(Request $request)
    {
        //first option
        $first_option = $request->search_in;
        $keyword = $request->keyword;
        $option_value1 = '';
        $option_value2 = '';
        $option_value3 = '';
        $jf_check = job_finder_model::get();
        $jf_check_finder_id = job_finder_model::pluck('finder_id')->toArray();

        if($first_option == 'all'){
            $skill_job_finder = skill_job_finder::where('skill_name', 'like', '%' . $keyword . '%')
            ->pluck('jf_user_id')->toArray();
            $job_finder_experience = job_finder_experience::where('job_position', 'like', '%' . $keyword . '%')
            ->pluck('finder_id')->toArray();
            $jf_check = job_finder_model::whereIn('finder_id',$skill_job_finder)
            ->orWhereIn('finder_id',$job_finder_experience)
            ->orWhereIn('finder_id',$jf_check_finder_id)
            ->pluck('job_finder.finder_id')->toArray();        
        }   
        elseif($first_option == 'skill_name'){
            $jf_check = job_finder_model::join('skill_job_finder','skill_job_finder.jf_user_id', '=', 'job_finder.finder_id')
            ->where('skill_name', 'like', '%' . $keyword . '%')
            ->pluck('job_finder.finder_id')->toArray();  
        }
        elseif($first_option == 'job_position'){
            $jf_check = job_finder_model::join('job_finder_experience','job_finder_experience.finder_id', '=', 'job_finder.finder_id')
            ->where('job_position', 'like', '%' . $keyword . '%')
            ->pluck('job_finder.finder_id')->toArray();  
        }

        //second option
        $search_last_active = $request->search_last_active;
        $jf_check_active = job_finder_model::pluck('finder_id')->toArray();
        $dt_optional = Carbon::now()->subMonths($search_last_active);
        if ($search_last_active != ""){
            $jf_check_active = job_finder_model::join('login_history','login_history.user_id', '=', 'job_finder.finder_id')
            ->where('last_login_date', '>=', $dt_optional)
            ->pluck('user_id')->toArray();
        }

        //third option
        $year_of_experience = $request->year_of_experience;
        $dtnow = Carbon::now()->format('Y');
        $dt_year = $dtnow - $year_of_experience; 

        $job_position = $request->current_position_level;
        $company_name = $request->company_name;

        $job_position_condition = '=';
        $industry_id_condition = '=';
        $tech_type_id_condition = '=';

        $industry_id = $request->industry_id;
        $tech_type_id = $request->tech_type_id;

        if ($job_position == ""){
            $job_position_condition = 'like';
            $job_position = '%' . $job_position . '%';
        }

        if ($industry_id == ""){
            $industry_id_condition = 'like';
            $industry_id = '%' . $industry_id . '%';
        }

        if ($tech_type_id == ""){
            $tech_type_id_condition = 'like';
            $tech_type_id = '%' . $tech_type_id . '%';
        }      
        
        if ($year_of_experience != 0){
            $jf_check_position = job_finder_model::leftJoin('job_finder_experience','job_finder_experience.finder_id', '=', 'job_finder.finder_id')
            ->where([
                ['job_finder_experience.company_name', 'like', '%' . $company_name . '%'],
                ['job_finder_experience.job_position', $job_position_condition, $job_position],
                ['job_finder_experience.industry_id', $industry_id_condition, $industry_id],
                ['job_finder_experience.tech_type_id', $tech_type_id_condition, $tech_type_id]
                ])
            ->whereYear('period_from', '<=', $dt_year)
            ->pluck('job_finder.finder_id')->toArray();
        }elseif($company_name != 0 || $job_position != 0 || $industry_id != 0 || $tech_type_id != 0){
            $jf_check_position = job_finder_model::leftJoin('job_finder_experience','job_finder_experience.finder_id', '=', 'job_finder.finder_id')
            ->where([
                ['job_finder_experience.company_name', 'like', '%' . $company_name . '%'],
                ['job_finder_experience.job_position', $job_position_condition, $job_position],
                ['job_finder_experience.industry_id', $industry_id_condition, $industry_id],
                ['job_finder_experience.tech_type_id', $tech_type_id_condition, $tech_type_id]
                ])
            ->pluck('job_finder.finder_id')->toArray();
        }else{
            $jf_check_position = job_finder_model::pluck('finder_id')->toArray();
        }

        //fourth option
        $highest_qualification_condition = '=';

        $highest_qualification = $request->highest_qualification_id;
        $field_of_study = $request->field_of_study;
        $grade = $request->grade;
        $university = $request->university;

        if ($highest_qualification == ""){
            $highest_qualification_condition = 'like';
            $highest_qualification = '%' . $highest_qualification . '%';
        }

        $jf_check_qualifications = job_finder_model::where([
            ['highest_qualification', $highest_qualification_condition, $highest_qualification],
            ['field_of_study', 'like', '%' . $field_of_study . '%'],
            ['grade', 'like', '%' . $grade . '%'],
            ['university', 'like', '%' . $university . '%']
            ])
        ->pluck('finder_id')->toArray();

        //fifth option
        $min_age = $request->min_age;
        $max_age = $request->max_age;
        $jf_check_age = job_finder_model::pluck('finder_id')->toArray();
        $dt_year_min = $dtnow - $min_age; 
        $dt_year_max = $dtnow - $max_age;
        if ($min_age != 0 || $max_age != 0){
            $jf_check_age = job_finder_model::whereYear('birth_date', '<=', $dt_year_min)
            ->whereYear('birth_date', '>=', $dt_year_max)
            ->pluck('finder_id')->toArray();
        }
        //last option
        $province_id = $request->province_id;
        $city_name = $request->city_name;
        $gender = $request->gender;
        $language = $request->language;

        $province_id_condition = '=';
        $gender_condition = '=';        
        $language_condition = '=';

        if ($province_id == ""){
            $province_id_condition = 'like';
            $province_id = '%' . $province_id . '%';
        }

        if ($gender == ""){
            $gender_condition = 'like';
            $gender = '%' . $gender . '%';
        }        

        if ($language == ""){
            $language_condition = 'like';
            $language = '%' . $language . '%';
        }

        $master_province = master_province::get(['province_id','province_name']);
        $master_tech_type = master_tech_type::get(['tech_type_id','tech_type_name']);  
        $master_industry = master_industry::orderBy('industry_name','asc')->get(['industry_id','industry_name']); 
        $job_finder_model_final = job_finder_model::join('master_user','master_user.user_id', '=', 'job_finder.finder_id')
        ->leftJoin('master_province','job_finder.province_id', '=', 'master_province.province_id')
        ->leftJoin('bookmark_resume','job_finder.finder_id', '=', 'bookmark_resume.jf_user_id')
        ->where([
            ['job_finder.province_id', $province_id_condition, $province_id],
            ['job_finder.city_name', 'like', '%' . $city_name . '%'], 
            ['job_finder.gender', $gender_condition, $gender],            
            ['job_finder.language', $language_condition, $language]
            ])
        ->whereIn('finder_id',$jf_check)
        ->whereIn('finder_id',$jf_check_active)
        ->whereIn('finder_id',$jf_check_position)
        ->whereIn('finder_id',$jf_check_qualifications)
        ->paginate(25);
        $master_highest_qualification = master_highest_qualification::get(['highest_qualification_id','highest_qualification_name']);
        
        return view('resume_grid', array('master_highest_qualification' => $master_highest_qualification, 'job_finder_model' => $job_finder_model_final, 'master_province' => $master_province, 'master_tech_type' => $master_tech_type, 'master_industry' => $master_industry))->withTitle('Resume');
    }

    public function get_simple_search()
    {
        $master_industry = master_industry::orderBy('industry_name','asc')->get(['industry_id','industry_name']);
        $master_province = master_province::orderBy('province_name','asc')->get(['province_id','province_name']);
        $master_tech_type = master_tech_type::orderBy('tech_type_name','asc')->get(['tech_type_id','tech_type_name']); 
        $master_highest_qualification = master_highest_qualification::get(['highest_qualification_id','highest_qualification_name']);
        $master_job_position = master_job_position::orderBy('position_name','asc')->get(['position_id','position_name']); 
        return view('simple_search_resume', array('master_highest_qualification' => $master_highest_qualification, 'master_industry' => $master_industry, 'master_tech_type' => $master_tech_type, 'master_province' => $master_province, 'master_job_position' => $master_job_position))->withTitle('Simple Search');
    }
    
    public function simple_search_submit(Request $request)
    {
        $keyword = $request->keyword;
        $year_of_experience = $request->year_of_experience;
        $dt_simple_now = Carbon::now()->format('Y');
        $dt_simple_year = $dt_simple_now - $year_of_experience; 

        $current_position_level = $request->current_position_level;
        $tech_type_id = $request->tech_type_id;
        $highest_qualification = $request->highest_qualification;
        $residing_in = $request->residing_in;

        $current_position_level_condition = '=';
        $tech_type_id_condition = '=';
        $highest_qualification_condition = '=';
        $residing_in_condition = '=';

        if ($current_position_level == ""){
            $current_position_level_condition = 'like';
            $current_position_level = '%' . $current_position_level . '%';
        }

        if ($tech_type_id == ""){
            $tech_type_id_condition = 'like';
            $tech_type_id = '%' . $tech_type_id . '%';
        }

        if ($highest_qualification == ""){
            $highest_qualification_condition = 'like';
            $highest_qualification = '%' . $highest_qualification . '%';
        }

        if ($residing_in == ""){
            $residing_in_condition = 'like';
            $residing_in = '%' . $residing_in . '%';
        }
        if ($year_of_experience != 0){
            $jf_check_position_simple = job_finder_model::leftJoin('job_finder_experience','job_finder_experience.finder_id', '=', 'job_finder.finder_id')
            ->where([
                ['job_finder_experience.job_description', 'like', '%' . $keyword . '%'],
                ['job_finder_experience.current_position_level', $current_position_level_condition, $current_position_level],
                ['job_finder_experience.tech_type_id', $tech_type_id_condition, $tech_type_id]
                ])
            ->whereYear('period_from', '<=', $dt_simple_year)
            ->pluck('job_finder.finder_id')->toArray();
        }elseif($keyword != 0 || $current_position_level != 0 || $tech_type_id != 0){
            $jf_check_position_simple = job_finder_model::leftJoin('job_finder_experience','job_finder_experience.finder_id', '=', 'job_finder.finder_id')
            ->where([
                ['job_finder_experience.job_description', 'like', '%' . $keyword . '%'],
                ['job_finder_experience.current_position_level', $current_position_level_condition, $current_position_level],
                ['job_finder_experience.tech_type_id', $tech_type_id_condition, $tech_type_id]
                ])
            ->pluck('job_finder.finder_id')->toArray();
        }else{
            $jf_check_position_simple = job_finder_model::pluck('finder_id')->toArray();
        }

        $master_industry = master_industry::orderBy('industry_name','asc')->get(['industry_id','industry_name']);
        $master_tech_type = master_tech_type::orderBy('tech_type_name','asc')->get(['tech_type_id','tech_type_name']);   
        
        $job_finder_model_simple = job_finder_model::join('master_user','master_user.user_id', '=', 'job_finder.finder_id')
        ->leftJoin('master_province','job_finder.province_id', '=', 'master_province.province_id')
        ->leftJoin('bookmark_resume','job_finder.finder_id', '=', 'bookmark_resume.jf_user_id')
        ->where([
            ['job_finder.highest_qualification', $highest_qualification_condition, $highest_qualification],
            ['job_finder.province_id', $residing_in_condition, $residing_in]
            ])
        ->whereIn('finder_id',$jf_check_position_simple)
        ->paginate(25);

        $master_highest_qualification = master_highest_qualification::get(['highest_qualification_id','highest_qualification_name']);

        return view('resume_grid', array('master_highest_qualification' => $master_highest_qualification, 'job_finder_model' => $job_finder_model_simple, 'master_industry' => $master_industry, 'master_tech_type' => $master_tech_type))->withTitle('Resume');
    }
    public function bookmark_resume($id)
    {
        $jc_user_id = session()->get('user_id');
        $data['jc_user_id'] = $jc_user_id;
        $data['jf_user_id'] = $id;
        $data['bookmark_status'] = 'bookmark';
        $data['retrieved_by'] = '';
        bookmark_resume::create($data);
        return redirect('/resume')->withSuccess("Resume has been bookmarked.");

    }
    public function get_bookmarked_resume() {
        $company_id = session()->get('company_id');
        $job_creator_model = job_create_model::join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
        ->where([
            ['master_customer.company_id', '=', $company_id]
            ])
        ->select('user_id','job_creator.company_name')
        ->get();
        // $job_finder_model = job_finder_model::join('bookmark_resume','bookmark_resume.jf_user_id', '=', 'job_finder.finder_id')
        // ->leftJoin('master_province','job_finder.province_id', '=', 'master_province.province_id')
        // ->leftJoin('job_finder_experience','job_finder.finder_id', '=', 'job_finder_experience.finder_id')
        // ->orderBy('full_name','asc')
        // ->get();
        $job_finder_model_details = DB::table('job_finder')
            ->select("job_finder.finder_id","job_finder.full_name","job_finder.full_name","job_finder.birth_date","job_finder.gender","master_province.province_name",
            "job_finder.highest_qualification","master_highest_qualification.highest_qualification_name","job_finder.field_of_study","job_finder.university","lh.last_login_date",
            "bookmark_resume.created_at","bookmark_resume.bookmark_resume_id"
            	,DB::raw("GROUP_CONCAT(
                    DISTINCT CONCAT(`master_job_position`.position_name,' at ',`job_finder_experience`.`company_name`) 
                    ORDER BY `job_finder_experience`.`company_name`
                    SEPARATOR ','
                  ) as `job_position`"))
            ->leftjoin("job_finder_experience","job_finder_experience.finder_id","=","job_finder.finder_id")
            ->leftjoin("master_job_position","job_finder_experience.job_position","=","master_job_position.position_id")
            ->leftJoin('master_province','job_finder.province_id', '=', 'master_province.province_id')
            ->leftJoin('master_highest_qualification','master_highest_qualification.highest_qualification_id', '=', 'job_finder.highest_qualification')
            ->join('bookmark_resume','bookmark_resume.jf_user_id', '=', 'job_finder.finder_id')
            ->join(DB::raw('(
                SELECT    MAX(last_login_date) last_login_date, user_id
                FROM      login_history 
                GROUP BY  user_id
                ) lh'),function($join)
                {
                   $join->on('lh.user_id', '=', 'job_finder.finder_id');
                })
            ->where('bookmark_resume.bookmark_status', '=', 'bookmark')
            ->groupBy("job_finder.finder_id","job_finder.full_name","job_finder.full_name","job_finder.birth_date","job_finder.gender","master_province.province_name",
            "job_finder.highest_qualification","job_finder.field_of_study","job_finder.university","lh.last_login_date","bookmark_resume.created_at",
            "master_highest_qualification.highest_qualification_name","bookmark_resume.bookmark_resume_id")
            ->paginate(25);
        return view('bookmarked_resume', array('job_finder_model' => $job_finder_model_details, 'job_creator_model' => $job_creator_model))->withTitle('Bookmarked Resume');
    }
    public function get_bookmark_search(Request $request) {
        $company_id = session()->get('company_id');
        $job_creator_model = job_create_model::join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
        ->where([
            ['master_customer.company_id', '=', $company_id]
            ])
        ->select('user_id','job_creator.company_name')
        ->get();

        $job_finder = job_finder_model::all();

        $keyword = $request->search;
        $status = $request->status;
        $resume_bookmark_by = $request->resume_bookmark_by;

        $status_condition = '=';
        $resume_bookmark_by_condition = '=';

        if ($status == ""){
            $status_condition = 'like';
            $status = '%' . $status . '%';
        }

        if ($resume_bookmark_by == ""){
            $resume_bookmark_by_condition = 'like';
            $resume_bookmark_by = '%' . $resume_bookmark_by . '%';
        }
        $job_finder_model_details = DB::table('job_finder')
            ->select("job_finder.finder_id","job_finder.full_name","job_finder.full_name","job_finder.birth_date","job_finder.gender","master_province.province_name",
            "job_finder.highest_qualification","master_highest_qualification.highest_qualification_name","job_finder.field_of_study","job_finder.university","lh.last_login_date",
            "bookmark_resume.created_at","bookmark_resume.bookmark_resume_id"
            	,DB::raw("GROUP_CONCAT(
                    DISTINCT CONCAT(`master_job_position`.position_name,' at ',`job_finder_experience`.`company_name`) 
                    ORDER BY `job_finder_experience`.`company_name`
                    SEPARATOR ','
                  ) as `job_position`"))
            ->leftjoin("job_finder_experience","job_finder_experience.finder_id","=","job_finder.finder_id")
            ->leftjoin("master_job_position","job_finder_experience.job_position","=","master_job_position.position_id")
            ->leftJoin('master_province','job_finder.province_id', '=', 'master_province.province_id')
            ->leftJoin('master_highest_qualification','master_highest_qualification.highest_qualification_id', '=', 'job_finder.highest_qualification')
            ->join('bookmark_resume','bookmark_resume.jf_user_id', '=', 'job_finder.finder_id')
            ->join(DB::raw('(
                SELECT    MAX(last_login_date) last_login_date, user_id
                FROM      login_history 
                GROUP BY  user_id
                ) lh'),function($join)
                {
                   $join->on('lh.user_id', '=', 'job_finder.finder_id');
                })
            ->where([
                ['full_name', 'like', '%' . $keyword . '%'],
                ['bookmark_resume.bookmark_status', $status_condition, $status],
                ['jc_user_id', $resume_bookmark_by_condition, $resume_bookmark_by]
                ])
            ->orderBy('full_name','asc')
            ->groupBy("job_finder.finder_id","job_finder.full_name","job_finder.full_name","job_finder.birth_date","job_finder.gender","master_province.province_name",
            "job_finder.highest_qualification","job_finder.field_of_study","job_finder.university","lh.last_login_date","bookmark_resume.created_at",
            "master_highest_qualification.highest_qualification_name","bookmark_resume.bookmark_resume_id")
            ->paginate(25);
        
        return view('bookmarked_resume', array('job_finder_model' => $job_finder_model_details, 'job_creator_model' => $job_creator_model))->withTitle('Bookmarked Resume');
    }
    public function retrieve_resume($id)
    {
        $retrieved_by = session()->get('user_id');
        $data['bookmark_status'] = 'retrieve';
        $data['retrieved_by'] = $retrieved_by;
        $br = bookmark_resume::where('bookmark_resume_id',$id)->update($data);
        return redirect('/resume/bookmark')->withSuccess("Resume has been retrieved.");

    }
    public function get_retrieved_resume() {
        $company_id = session()->get('company_id');
        $job_creator_model = job_create_model::join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
        ->where([
            ['master_customer.company_id', '=', $company_id]
            ])
        ->select('user_id','job_creator.company_name')
        ->get();
        // $job_finder_model = job_finder_model::join('bookmark_resume','bookmark_resume.jf_user_id', '=', 'job_finder.finder_id')
        // ->leftJoin('master_province','job_finder.province_id', '=', 'master_province.province_id')
        // ->leftJoin('job_finder_experience','job_finder.finder_id', '=', 'job_finder_experience.finder_id')
        // ->orderBy('full_name','asc')
        // ->get();
        $job_finder_model_details = DB::table('job_finder')
            ->select("job_finder.finder_id","job_finder.full_name","job_finder.full_name","job_finder.birth_date","job_finder.gender","master_province.province_name",
            "job_finder.highest_qualification","master_highest_qualification.highest_qualification_name","job_finder.field_of_study","job_finder.university","lh.last_login_date",
            "bookmark_resume.updated_at","bookmark_resume.bookmark_resume_id"
            	,DB::raw("GROUP_CONCAT(
                    DISTINCT CONCAT(`master_job_position`.position_name,' at ',`job_finder_experience`.`company_name`) 
                    ORDER BY `job_finder_experience`.`company_name`
                    SEPARATOR ','
                  ) as `job_position`"))
            ->leftjoin("job_finder_experience","job_finder_experience.finder_id","=","job_finder.finder_id")
            ->leftjoin("master_job_position","job_finder_experience.job_position","=","master_job_position.position_id")
            ->leftJoin('master_province','job_finder.province_id', '=', 'master_province.province_id')
            ->leftJoin('master_highest_qualification','master_highest_qualification.highest_qualification_id', '=', 'job_finder.highest_qualification')
            ->join('bookmark_resume','bookmark_resume.jf_user_id', '=', 'job_finder.finder_id')
            ->join(DB::raw('(
                SELECT    MAX(last_login_date) last_login_date, user_id
                FROM      login_history 
                GROUP BY  user_id
                ) lh'),function($join)
                {
                   $join->on('lh.user_id', '=', 'job_finder.finder_id');
                })
            ->where('bookmark_resume.bookmark_status', '=', 'retrieve')
            ->groupBy("job_finder.finder_id","job_finder.full_name","job_finder.full_name","job_finder.birth_date","job_finder.gender","master_province.province_name",
            "job_finder.highest_qualification","job_finder.field_of_study","job_finder.university","lh.last_login_date","bookmark_resume.updated_at",
            "master_highest_qualification.highest_qualification_name","bookmark_resume.bookmark_resume_id")
            ->paginate(25);
        return view('retrieved_resume', array('job_finder_model' => $job_finder_model_details, 'job_creator_model' => $job_creator_model))->withTitle('Retrieved Resume');
    }
    public function get_retrieve_search(Request $request) {
        $company_id = session()->get('company_id');
        $job_creator_model = job_create_model::join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
        ->where([
            ['master_customer.company_id', '=', $company_id]
            ])
        ->select('user_id','job_creator.company_name')
        ->get();

        $job_finder = job_finder_model::all();

        $keyword = $request->search;
        $status = $request->status;
        $resume_bookmark_by = $request->resume_bookmark_by;

        $status_condition = '=';
        $resume_bookmark_by_condition = '=';

        if ($status == ""){
            $status_condition = 'like';
            $status = '%' . $status . '%';
        }

        if ($resume_bookmark_by == ""){
            $resume_bookmark_by_condition = 'like';
            $resume_bookmark_by = '%' . $resume_bookmark_by . '%';
        }
        $job_finder_model_details = DB::table('job_finder')
            ->select("job_finder.finder_id","job_finder.full_name","job_finder.full_name","job_finder.birth_date","job_finder.gender","master_province.province_name",
            "job_finder.highest_qualification","master_highest_qualification.highest_qualification_name","job_finder.field_of_study","job_finder.university","lh.last_login_date",
            "bookmark_resume.updated_at","bookmark_resume.bookmark_resume_id"
            	,DB::raw("GROUP_CONCAT(
                    DISTINCT CONCAT(`master_job_position`.position_name,' at ',`job_finder_experience`.`company_name`) 
                    ORDER BY `job_finder_experience`.`company_name`
                    SEPARATOR ','
                  ) as `job_position`"))
            ->leftjoin("job_finder_experience","job_finder_experience.finder_id","=","job_finder.finder_id")
            ->leftjoin("master_job_position","job_finder_experience.job_position","=","master_job_position.position_id")
            ->leftJoin('master_province','job_finder.province_id', '=', 'master_province.province_id')
            ->leftJoin('master_highest_qualification','master_highest_qualification.highest_qualification_id', '=', 'job_finder.highest_qualification')
            ->join('bookmark_resume','bookmark_resume.jf_user_id', '=', 'job_finder.finder_id')
            ->join(DB::raw('(
                SELECT    MAX(last_login_date) last_login_date, user_id
                FROM      login_history 
                GROUP BY  user_id
                ) lh'),function($join)
                {
                   $join->on('lh.user_id', '=', 'job_finder.finder_id');
                })
            ->where([
                ['full_name', 'like', '%' . $keyword . '%'],
                ['bookmark_resume.bookmark_status', $status_condition, $status],
                ['retrieved_by', $resume_bookmark_by_condition, $resume_bookmark_by]
                ])
            ->orderBy('full_name','asc')
            ->groupBy("job_finder.finder_id","job_finder.full_name","job_finder.full_name","job_finder.birth_date","job_finder.gender","master_province.province_name",
            "job_finder.highest_qualification","job_finder.field_of_study","job_finder.university","lh.last_login_date","bookmark_resume.updated_at",
            "master_highest_qualification.highest_qualification_name","bookmark_resume.bookmark_resume_id")
            ->paginate(25);
        
        return view('retrieved_resume', array('job_finder_model' => $job_finder_model_details, 'job_creator_model' => $job_creator_model))->withTitle('Bookmarked Resume');
    }
}
