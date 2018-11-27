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
                    Forgot Password			
                </h1>	
                <p class="text-white"><a href="{{ route('home') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Forgot Password</a></p>
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @include('error.template')
                <form action="{{ route('reset_password') }}" method="post" class="contact-form text-right form-area">
                    {{ csrf_field() }}
                    <div class="row">	
                        <div class="col-lg-12 form-group">
                            <input name="email" placeholder="Enter your e-mail" class="common-input mb-20 form-control" required type="email">
                        
                            <button type="submit" class="primary-btn mt-20 text-white" style="float: right;">Reset My Password</button>
                        </div>
                    </div>
                </form>	
            </div>
        </div>
    </div>	
</section>
<!-- End contact-page Area -->
@endsection