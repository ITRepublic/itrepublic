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
                    Resume				
                </h1>	
                <p class="text-white link-nav"><a href="{{ route('user_home') }}">Home </a>  
                <span class="lnr lnr-arrow-right"></span>  
                <a href="{{ route('resume') }}" class="text-white"> Resume</a>
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

            <div class="col-lg-12 text-center" style="margin-bottom: 20px;">
                <a class="btn btn-info" href="{{ route('bookmarked_resume') }}">Bookmarked Resume</a>
                <a class="btn btn-info" href="{{ route('retrieved_resume') }}">Retrieved Resume</a>
            </div>

            <div class="col-lg-12" style="margin-bottom: 20px;">
                <a class="btn btn-info" href="{{ route('resume_advance_search') }}">Advance Search</a>
                <a class="btn btn-info" href="{{ route('resume_simple_search') }}">Simple Search</a>
            </div>
        
            <div class="col-lg-12 post-list">
                @foreach($job_finder_model as $index => $item)
                    <div class="single-post d-flex flex-row">
                        <div class="thumb">
                            <img src="{{ asset('public/themes/img/post.png') }}" alt="">
                        </div>
                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <h4>{{ $item->full_name }}</h4>				
                                </div>
                                &nbsp;
                                
                            </div>
                            <p>
                                Email Address: {{ $item->email_address }}
                            </p>
                            <h5>Last Working As: {{ $item->tech_type_name }}</h5>
                            <p class="address"><span class="lnr lnr-map"></span> {{ $item->address }} at {{ $item->province_name }}</p>
                            <p class="address"><span class="lnr lnr-database"></span> IDR {{ $item->last_salary }}</p>
                            <ul class="btns">
                                <li>
                                    <a href="{{ route('resume_detail', $item->finder_id) }}">
                                        View Detail
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>	
</section>
<!-- End post Area -->
@endsection