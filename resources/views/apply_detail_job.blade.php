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
                <h1 class="text-white">
                    Job post				
                </h1>	
                <p class="text-white link-nav"><a href="{{ route('user_home') }}">Home </a>  
                <span class="lnr lnr-arrow-right"></span>  
                <a href="{{ route('get_job') }}" class="text-white"> Job post</a>
                </p>											
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
        <div class="row justify-content-center d-flex">
            <div class="col-lg-8 post-list">
                <form action="{{ route('apply_detail_job_post') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" id="job_post_id" name="job_post_id" value="{{ $job_post_list_model->job_post_id }}">
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Company Name</label>
                        <div class="col-md-6">
                            <input type="text" name="job_name" class="form-control" readonly=true                            
                                placeholder="Job Name" value="{{ $job_post_list_model->company_name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Job Name</label>
                        <div class="col-md-6">
                            <input type="text" name="job_name" class="form-control" readonly=true                            
                            placeholder="Job Name" value="{{ $job_post_list_model->job_name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Description</label>
                        <div class="col-md-6">
                            <textarea rows="3" name="description" class="form-control" readonly=true
                            placeholder="Description">{{ $job_post_list_model->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Benefit Details</label>
                        <div class="col-md-6">
                            <textarea rows="3" name="benefit_details" class="form-control" readonly=true
                            placeholder="Benefit Details">{{ $job_post_list_model->benefit_details }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Job Category</label>
                        <div class="col-md-6">
                        <select id="category_id" name="category_id" disabled='disabled'>
                            <option value="">Select category</option>
                                @foreach ($master_tech_type as $master_tech_type)
                                    @if ($master_tech_type->tech_type_id == $job_post_list_model->category_id)
                                        <option selected="selected" value="{{ $master_tech_type->tech_type_id }}">
                                            {{ $master_tech_type->tech_type_name }}
                                        </option>
                                    @else
                                        <option value="{{ $master_tech_type->tech_type_id }}">
                                            {{ $master_tech_type->tech_type_name }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Payment Range Minimum</label>
                        <div class="col-md-6">
                            <input type="text" name="payment_range_minimum" class="form-control" readonly=true
                            placeholder="Payment Range Minimum" value="{{ $job_post_list_model->payment_range_minimum }}">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Payment Range Maximum</label>
                        <div class="col-md-6">
                            <input type="text" name="payment_range_maximum" class="form-control" readonly=true
                            placeholder="Payment Range Maximum" value="{{ $job_post_list_model->payment_range_maximum }}">
                        </div>
                    </div>        
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Experience</label>
                        <div class="col-md-6">
                            <textarea rows="3" name="experience" class="form-control" readonly=true
                            placeholder="Experience">{{ $job_post_list_model->experience }}</textarea>
                        </div>
                    </div>             
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Email Address</label>
                        <div class="col-md-6">
                            <input type="email" name="jc_email_address" readonly="true" class="form-control" 
                            value="{{ $job_post_list_model->email_address }}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Apply</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>	
</section>
<!-- End post Area -->
@endsection