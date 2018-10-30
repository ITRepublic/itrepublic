
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
                        Login			
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
                    <h3 class="py-3">Job Recruiter</h3> <hr>	
                    <form action="{{ route('job_creator_login_submit') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">E-mail</label>
                            <div class="col-md-9"><input type="email" name="email" class="form-control no-border-radius" value="{{ old('email') }}"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-md-9"><input type="password" name="password" class="form-control no-border-radius"></div>
                        </div>
                        <div class="form-group">
                            <p><a href="{{ url('/forgot-password') }}" style="font-size: 12px;">Forgot password?</a></p>
                            <button type="submit" class="btn btn-info no-border-radius">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection