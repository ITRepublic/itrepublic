@extends('layout.master')

@section('title')
    {{ $title }}
@endsection

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-12">
                <h1 class="text-white">
                    Welcome to Corporate Site
                </h1>	
                <p class="text-white link-nav" style="font-size: 24px; padding-top: 30px; padding-bottom: -10px;">Hello, {{ session('user_name') }}</p>
                <p class="text-white">{{ session('user_email') }}</p>
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->	
@endsection