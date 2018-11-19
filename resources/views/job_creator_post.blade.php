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
                <br>
                <div style="text-align: center; margin: 0 auto; padding: 0 auto;" class="col-md-3">
                    <a class="nav-link text-white btn btn-lg btn-info" href="{{ url('job_creator_post_register') }}">
                        Post a job
                    </a>
                </div>
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

            <div class="col-lg-12 post-list">
                @foreach($job_post_list_model as $index => $item)
                    <div class="single-post d-flex flex-row">
                        <div class="thumb">
                            <img src="{{ asset('public/themes/img/post.png') }}" alt="">
                            <ul class="tags">
                                <li>
                                    <a href="#">Art</a>
                                </li>
                                <li>
                                    <a href="#">Media</a>
                                </li>
                                <li>
                                    <a href="#">Design</a>					
                                </li>
                            </ul>
                        </div>
                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <h4>{{ $item->job_name }}</h4>				
                                </div>
                                &nbsp;
                                
                            </div>
                            <p>
                                {{ $item->description }}
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class="address"><span class="lnr lnr-database"></span> {{ $item->payment_range_minimum }} - {{ $item->payment_range_maximum }}</p>
                            <ul class="btns">
                                    <li>
                                        <a href="{{ route('edit_detail_job_post', $item->job_post_id) }}">
                                            Edit
                                        </a>
                                    </li>
                                        &nbsp;&nbsp;
                                    <li>
                                        <a href="{{ route('get_detail_job_post', $item->job_post_id) }}">
                                            Detail
                                        </a>
                                    </li>
                                        &nbsp;&nbsp;
                                    <li>
                                        <a href="{{ route('detail_applicant_job_post', $item->job_post_id) }}">
                                            View Applicant
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