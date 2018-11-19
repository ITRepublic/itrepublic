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
                <form action="" method="post" enctype="multipart/form-data">
                <h3 class="py-3">Applicant Profile</h3> <hr>
                <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Email Address</label>
                            <div class="col-md-6">
                                <input type="email" name="email_address" class="form-control" readonly=true
                                placeholder="email address" value="{{ $job_finder_model->email_address }}">
                            </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Full Name</label>
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" readonly=true
                                    placeholder="full name" value="{{ $job_finder_model->full_name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Address</label>
                                <div class="col-md-6">
                                    <textarea rows="3" name="address" class="form-control" readonly=true
                                    placeholder="address">{{ $job_finder_model->address }}</textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Phone</label>
                                <div class="col-md-6">
                                    <input type="text" name="phone" class="form-control" readonly=true
                                    placeholder="phone" value="{{ $job_finder_model->phone }}">
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>	
</section>
<!-- End post Area -->
@endsection