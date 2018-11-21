@extends('layout.master')

@section('title')
    {{ $title }}
@endsection

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">Advanced Search</h1>
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
    <div class="col-lg-12 offset-md-2">@include('error.template')</div>
        <div class="row justify-content-center d-flex">
            <div class="col-lg-12 post-list">
                <form action="{{ route('resume_advance_search_submit') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <?php $user_id = session()->get('user_id'); ?>

                    <div class="form-group">
                        <h3>Keyword Search</h3>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Search In</label>
                        <div class="col-md-5">
                            <select name="search_in" class="form-control">
                                <option value="all">Skills, Position Title</option>
                                <option value="skills">Skills</option>
                                <option value="position_title">Position Title</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Keyword</label>
                        <div class="col-md-5">
                            <input type="text" name="keyword" class="form-control"                            
                                placeholder="for example: 'Android Developer','PHP','Angular JS'" value="">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Resume active in the last</label>
                        <div class="col-md-5">
                            <select name="search_in" class="form-control">
                                <option value="">All</option>
                                <option value="1">1 month</option>
                                <option value="3">3 months</option>
                                <option value="6">6 months</option>
                                <option value="9">9 months</option>
                                <option value="12">12 months</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <h3>Work Experience</h3>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Year of Experience</label>
                        <div class="col-md-5">
                            <select name="year_of_experience" class="form-control">
                                <option value="">All</option>
                                <option value="1 year">1 year</option>
                                <option value="2 years">2 years</option>
                                <option value="3 years">3 years</option>
                                <option value="4 years">4 years</option>
                                <option value="5 years">5 years</option>
                                <option value="above 5 years">Above 5 years</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Current Position Level</label>
                        <div class="col-md-5">
                            <select name="current_position_level" class="form-control">
                                <option value="">All</option>
                                <option value="CEO / GM / Director / Senior Manager">CEO / GM / Director / Senior Manager</option>
                                <option value="Manager / Assistant Manager">Manager / Assistant Manager</option>
                                <option value="Supervisor / Coordinator">Supervisor / Coordinator</option>
                                <option value="Staff (non-management & non-supervisor)">Staff (non-management & non-supervisor)</option>
                                <option value="Fresh Grad / Less than 1 year experience">Fresh Grad / Less than 1 year experience</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Company Name</label>
                        <div class="col-md-5">
                            <input type="text" name="company_name" class="form-control"                            
                                placeholder="input company name" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Specialization</label>
                        <div class="col-md-5">
                        <select id="tech_type_id" class="form-control" name="tech_type_id">
                            <option value="">All</option>
                            @foreach ($master_tech_type as $master_tech_type)
                                <option value="{{ $master_tech_type->tech_type_id }}">
                                    {{ $master_tech_type->tech_type_name }}
                                </option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Industry</label>
                        <div class="col-md-5">
                        <select class="form-control" name="industry">
                            <option value="">All</option>
                            @foreach ($master_industry as $mi)
                                <option value="{{ $mi->industry_id }}">
                                    {{ $mi->industry_name }}
                                </option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <h3>Education Level (Highest)</h3>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Highest Qualification</label>
                        <div class="col-md-5">
                            <select name="current_position_level" class="form-control">
                                <option value="">All</option>
                                @foreach($master_highest_qualification as $mhq)
                                <option value="{{ $mhq->highest_qualification_id }}">{{ $mhq->highest_qualification_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Field of Study</label>
                        <div class="col-md-5">
                            <input type="text" name="field_of_study" class="form-control"                            
                                placeholder="for example: 'Database','Networking'" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Grade (GPA)</label>
                        <div class="col-md-5">
                            <input type="text" name="grade" class="form-control" placeholder="for example: 3.5">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">University</label>
                        <div class="col-md-5">
                            <input type="text" name="university" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <h3>Location</h3>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Residing In</label>
                        <div class="col-md-5">
                        <select id="residing_in" class="form-control" name="residing_in">
                            <option value="all">Any Indonesia State</option>
                            @foreach ($master_province as $mp)
                                <option value="{{ $mp->province_id }}">
                                    {{ $mp->province_name }}
                                </option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">City</label>
                        <div class="col-md-5">
                            <input type="text" name="city" class="form-control" placeholder="for example: 'Jakarta','Bandung'">
                        </div>
                    </div>

                    <div class="form-group">
                        <h3>Personal Data / Others</h3>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Age</label>
                        <div class="col-md-5 form-inline">
                            <input type="text" class="form-control" name="min_age" placeholder="min">
                            <input type="text" class="form-control" name="max_age" placeholder="max">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-2 col-form-label">Gender</label>
                        <div class="col-md-5">
                            <select name="gender" class="form-control">
                                <option value="">Any</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-2 col-form-label">Language</label>
                        <div class="col-md-5">
                            <select name="language" class="form-control">
                                <option value="">Any</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="English">English</option>
                                <option value="Mandarin">Mandarin</option>
                                <option value="Japanese">Japanese</option>
                                <option value="Korean">Korean</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>	
</section>
<!-- End post Area -->
@endsection