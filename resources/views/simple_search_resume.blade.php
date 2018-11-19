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
                        <label class="col-sm-5 col-form-label">Company Name</label>
                        <div class="col-md-6">
                            <input type="text" name="company_name" class="form-control"                            
                                placeholder="Company Name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Job Title</label>
                        <div class="col-md-6">
                            <input type="text" name="job_title" class="form-control"                            
                                placeholder="Job Title" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Job Description</label>
                        <div class="col-md-6">
                            <textarea rows="3" name="job_description" class="form-control"
                            placeholder="Job Description"></textarea>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Job Position</label>
                        <div class="col-md-6">
                            <input type="text" name="job_position" class="form-control"                            
                                placeholder="Job Position" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5 col-form-label">Industry</label>
                        <div class="col-md-6">
                        <select id="industry_id" name="industry_id">
                            <option value="">Select category</option>
                            @foreach ($master_industry as $master_industry)
                                <option value="{{ $master_industry->industry_id }}">
                                    {{ $master_industry->industry_name }}
                                </option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Specialization</label>
                        <div class="col-md-6">
                        <select id="tech_type_id" name="tech_type_id">
                            <option value="">Select category</option>
                            @foreach ($master_tech_type as $master_tech_type)
                                <option value="{{ $master_tech_type->tech_type_id }}">
                                    {{ $master_tech_type->tech_type_name }}
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