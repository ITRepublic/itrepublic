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
                    <span>{{ count($job_post_list_model) }}</span> Jobs posted			
                </h1>	
                <form method="get" action="{{ route('advance_search_home') }}" class="search-form-area">
                    <div class="row justify-content-center form-wrap">
                        <div class="col-lg-4 form-cols">
                            <input type="text" 
                                    class="form-control" name="search" 
                                    placeholder="what are you looking for?">
                        </div>
                        <div class="col-lg-3 form-cols">
                            <div class="default-select" id="default-selects">

                                <select id="province_id" name="province_id">
                                <option value="">Select area</option>
                                @foreach ($master_province as $p)
                                    <option value="{{ $p->province_id }}">
                                        {{ $p->province_name }}
                                    </option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 form-cols">
                            <div class="default-select" id="default-selects2">
                                <select id="tech_type_id" name="tech_type_id">
                                    <option value="">All Category</option>
                                    @foreach ($master_tech_type as $mtt)
                                    <option value="{{ $mtt->tech_type_id }}">
                                        {{ $mtt->tech_type_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>										
                        </div>
                        <div class="col-lg-2 form-cols">
                            <button type="submit" class="btn btn-info">
                              <span class="lnr lnr-magnifier"></span> Search
                            </button>
                        </div>								
                    </div>
                </form>	
                <p class="text-white"> <span>Search by tags:</span> Technology, Consultant, IT, Design, Development</p>
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start features Area -->
<section class="features-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <h4>Searching</h4>
                    <p>
                        Search job that suitable with you.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <h4>Applying</h4>
                    <p>
                        Apply the job that suitable with you.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <h4>Security</h4>
                    <p>
                        We protect your data.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <h4>Notifications</h4>
                    <p>
                        You will get some notifications.
                    </p>
                </div>
            </div>																		
        </div>
    </div>	
</section>
<!-- End features Area -->

<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
        <div class="row justify-content-center d-flex">
            <div class="col-lg-8 post-list">
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
                
                <a class="text-uppercase loadmore-btn mx-auto d-block" href="{{ route('get_job') }}">Load More job Posts</a>

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