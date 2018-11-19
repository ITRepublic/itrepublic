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
                <a href="{{ route('get_job_per_customer') }}" class="text-white"> Job post</a>
                </p>	
            </div>										
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
        <div class="row justify-content-center d-flex">
            <div class="col-lg-8 post-list">
                <form action="{{ route('job_creator_post_store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Job Name</label>
                        <div class="col-md-6">
                            <input type="text" name="job_name" class="form-control" 
                            placeholder="Job Name" value="{{ old('job_name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Description</label>
                        <div class="col-md-6">
                            <textarea rows="3" name="description" class="form-control" 
                            placeholder="Description" value="{{ old('description') }}"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Job Category</label>
                        <div class="col-md-6">
                        <select id="category_id" name="category_id" readonly="true">
                            <option value="">Select category</option>
                                @foreach ($master_tech_type as $master_tech_type)
                                <option value="{{ $master_tech_type->tech_type_id }}">
                                    {{ $master_tech_type->tech_type_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Benefit Details</label>
                        <div class="col-md-6">
                            <textarea rows="3" name="benefit_details" class="form-control" 
                            placeholder="Benefit Details" value="{{ old('benefit_details') }}"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Payment Range Minimum</label>
                        <div class="col-md-6">
                            <input type="text" name="payment_range_minimum" class="form-control" 
                            placeholder="Payment Range Minimum" value="{{ old('payment_range_minimum') }}">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Payment Range Maximum</label>
                        <div class="col-md-6">
                            <input type="text" name="payment_range_maximum" class="form-control" 
                            placeholder="Payment Range Maximum" value="{{ old('payment_range_maximum') }}">
                        </div>
                    </div>        
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Experience</label>
                        <div class="col-md-6">
                            <textarea rows="3" name="experience" class="form-control" 
                            placeholder="Experience" value="{{ old('experience') }}"></textarea>
                        </div>
                    </div>             
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Email Address</label>
                        <div class="col-md-6">
                            <input type="email" name="jc_email_address" readonly="true" class="form-control" 
                            value="<?php echo session()->get('user_email'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>	
</section>
<!-- End post Area -->
@endsection