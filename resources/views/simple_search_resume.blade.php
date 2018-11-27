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
                <h1 class="text-white">Simple Search</h1>
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
                <form action="{{ route('resume_simple_search_submit') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Keyword</label>
                        <div class="col-md-5">
                            <input type="text" name="keyword" class="form-control"                            
                                placeholder="for example: 'Android Developer'" value="">
                        </div>
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
                                @foreach ($master_job_position as $master_job_position)
                                    <option value="{{ $master_job_position->position_id }}">
                                        {{ $master_job_position->position_name }}
                                    </option>
                                @endforeach
                            </select>
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
                        <label class="col-md-2 col-form-label">Highest Qualification</label>
                        <div class="col-md-5">
                            <select name="highest_qualification" class="form-control">
                                <option value="">Choose Highest Qualification</option>
                                @foreach($master_highest_qualification as $mhq)
                                    <option value="{{ $mhq->highest_qualification_id }}">{{ $mhq->highest_qualification_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Residing In</label>
                        <div class="col-md-5">
                        <select id="residing_in" class="form-control" name="residing_in">
                            <option value="">Any Indonesia State</option>
                            @foreach ($master_province as $mp)
                                <option value="{{ $mp->province_id }}">
                                    {{ $mp->province_name }}
                                </option>
                            @endforeach
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