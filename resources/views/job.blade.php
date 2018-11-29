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
                @if(count($job_post_list_model))
                @foreach($job_post_list_model as $index => $item)
                    <div class="single-post d-flex flex-row">
                        <div class="thumb">
                            <img src="{{ asset('public/themes/img/post.png') }}" alt="">
                            <ul class="tags">
                                <li>
                                    <a href="{{ route('advance_search_home') }}?company={{ $item->company_id }}">{{ $item->company_name }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="details" style="margin-left: 20px;">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <h4>{{ $item->job_name }}</h4>				
                                </div>
                                &nbsp;
                                
                            </div>
                            <p>
                                {{ $item->tech_type_name }}
                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> {{ $item->company_address }}</p>
                            <p class="address"><span class="lnr lnr-database"></span> Rp {{ number_format($item->payment_range_minimum) }} - Rp {{ number_format($item->payment_range_maximum) }}</p>
                            <ul class="btns">
                            @if(session('user_id') != "")
                                <li>
                                    <a href="{{ route('apply_detail_job', $item->job_post_id) }}">
                                        Apply
                                    </a>
                                </li>
                            @endif
                                <li>
                                    <a href="{{ route('get_detail_job', $item->job_post_id) }}">
                                        Detail
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
                @else
                    <p>No result.</p>
                @endif
            </div>
            <div class="col-lg-4 sidebar">
                <div class="single-slidebar">
                    <h4>Jobs by Location</h4>
                    <ul class="cat-list">
                        @foreach($master_province as $province)
                        <li><a class="justify-content-between d-flex" href="{{ route('advance_search_home') }}?province_id={{ $province->province_id }}"><p>{{ $province->province_name }}</p><span>{{ number_format($totalJobPostByProvince[$province->province_id]) }}</span></a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="single-slidebar">
                    <h4>Jobs by Category</h4>
                    <ul class="cat-list">
                        @foreach($master_tech_type as $tech_type)
                        <li><a class="justify-content-between d-flex" href="{{ route('advance_search_home') }}?tech_type_id={{ $tech_type->tech_type_id }}"><p>{{ $tech_type->tech_type_name }}</p><span>{{ number_format($totalJobPostByCategory[$tech_type->tech_type_id]) }}</span></a></li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>	
</section>
<!-- End post Area -->
@endsection