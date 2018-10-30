
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
                        Register			
                    </h1>
                    <p class="text-white link-nav">It's free and always be</p>
                </div>											
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
    
    <!-- Start container Area -->
    <section class="blog-posts-area section-gap">
        <div class="container">
            <div class="col-md-8 offset-md-2">@include('error.template')</div>
            <div class="card col-md-8 offset-md-2 no-border-radius">
                <div class="card-body">
                    <h3 class="py-1">Job Recruiter</h3> <hr>	
                    <form action="{{ route('create_job_creator_submit') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Email Address</label>
                            <div class="col-md-8">
                                <input type="email" name="email_address" class="form-control no-border-radius" value="{{ old('email_address') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Company Name</label>
                            <div class="col-md-8">
                                <input type="text" name="company_name" class="form-control no-border-radius" value="{{ old('company_name') }}">
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Phone</label>
                            <div class="col-md-8">
                                <input type="text" name="phone" class="form-control no-border-radius" value="{{ old('phone') }}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Summary</label>
                            <div class="col-md-8">
                                <textarea rows="3" name="summary" class="form-control no-border-radius" value="{{ old('summary') }}"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info no-border-radius">Apply Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End container Area -->
@endsection