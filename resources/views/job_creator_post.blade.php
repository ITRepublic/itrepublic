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
                <p class="text-white link-nav"><a href="{{ route('job_creator_home') }}">Home </a>  
                <span class="lnr lnr-arrow-right"></span>  
                <a href="{{ route('get_job_per_customer') }}" class="text-white"> Job post</a>
                <br>
                
                <a class="nav-link text-white" href="{{ url('job_creator_post_register') }}">
                Create new job here
                                </a>
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
                                    <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
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
            <div class="col-lg-4 sidebar">
                <div class="single-slidebar">
                    <h4>Jobs by Location</h4>
                    <ul class="cat-list">
                        <li><a class="justify-content-between d-flex" href="category.html"><p>New York</p><span>37</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Park Montana</p><span>57</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Atlanta</p><span>33</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Arizona</p><span>36</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Florida</p><span>47</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Rocky Beach</p><span>27</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Chicago</p><span>17</span></a></li>
                    </ul>
                </div>

                <div class="single-slidebar">
                    <h4>Top rated job posts</h4>
                    <div class="active-relatedjob-carusel">
                        <div class="single-rated">
                            <img class="img-fluid" src="{{ asset('public/themes/img/pages/r1.jpg') }}" alt="">
                            <a href="{{ route('get_job_per_customer') }}"><h4>Creative Art Designer</h4></a>
                            <h6>Premium Labels Limited</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            <a href="#" class="btns text-uppercase">Apply job</a>
                        </div>
                        <div class="single-rated">
                            <img class="img-fluid" src="{{ asset('public/themes/img/pages/r1.jpg') }}" alt="">
                            <a href="{{ route('get_job_per_customer') }}"><h4>Creative Art Designer</h4></a>
                            <h6>Premium Labels Limited</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            <a href="#" class="btns text-uppercase">Apply job</a>
                        </div>
                        <div class="single-rated">
                            <img class="img-fluid" src="{{ asset('public/themes/img/pages/r1.jpg') }}" alt="">
                            <a href="{{ route('get_job_per_customer') }}"><h4>Creative Art Designer</h4></a>
                            <h6>Premium Labels Limited</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            <a href="#" class="btns text-uppercase">Apply job</a>
                        </div>																		
                    </div>
                </div>							

                <div class="single-slidebar">
                    <h4>Jobs by Category</h4>
                    <ul class="cat-list">
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Technology</p><span>37</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Media & News</p><span>57</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Goverment</p><span>33</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Medical</p><span>36</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Restaurants</p><span>47</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Developer</p><span>27</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Accounting</p><span>17</span></a></li>
                    </ul>
                </div>

                <div class="single-slidebar">
                    <h4>Carrer Advice Blog</h4>
                    <div class="blog-list">
                        <div class="single-blog " style="background:#000 url(public/themes/img/blog1.jpg);">
                            <a href="{{ route('get_job_per_customer') }}"><h4>Home Audio Recording <br>
                            For Everyone</h4></a>
                            <div class="meta justify-content-between d-flex">
                                <p>
                                    02 Hours ago
                                </p>
                                <p>
                                    <span class="lnr lnr-heart"></span>
                                    06
                                     <span class="lnr lnr-bubble"></span>
                                    02
                                </p>
                            </div>
                        </div>
                        <div class="single-blog " style="background:#000 url(public/themes/img/blog2.jpg);">
                            <a href="{{ route('get_job_per_customer') }}"><h4>Home Audio Recording <br>
                            For Everyone</h4></a>
                            <div class="meta justify-content-between d-flex">
                                <p>
                                    02 Hours ago
                                </p>
                                <p>
                                    <span class="lnr lnr-heart"></span>
                                    06
                                     <span class="lnr lnr-bubble"></span>
                                    02
                                </p>
                            </div>
                        </div>
                        <div class="single-blog " style="background:#000 url(public/themes/img/blog1.jpg);">
                            <a href="{{ route('get_job_per_customer') }}"><h4>Home Audio Recording <br>
                            For Everyone</h4></a>
                            <div class="meta justify-content-between d-flex">
                                <p>
                                    02 Hours ago
                                </p>
                                <p>
                                    <span class="lnr lnr-heart"></span>
                                    06
                                     <span class="lnr lnr-bubble"></span>
                                    02
                                </p>
                            </div>
                        </div>																		
                    </div>
                </div>							

            </div>
        </div>
    </div>	
</section>
<!-- End post Area -->
@endsection