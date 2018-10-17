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
                <form action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <?php $edit_session = session()->get('detail_job_post_session'); ?>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Job Name</label>
                        <div class="col-md-6">
                            <input type="text" name="job_name" class="form-control" readonly=true                            
                            placeholder="Job Name" value="{{ $job_post_list_model->job_name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Description</label>
                        <div class="col-md-6">
                            <textarea rows="3" name="description" class="form-control" readonly=true
                            placeholder="Description">{{ $job_post_list_model->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Benefit Details</label>
                        <div class="col-md-6">
                            <textarea rows="3" name="benefit_details" class="form-control" readonly=true
                            placeholder="Benefit Details">{{ $job_post_list_model->benefit_details }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Payment Range Minimum</label>
                        <div class="col-md-6">
                            <input type="text" name="payment_range_minimum" class="form-control" readonly=true
                            placeholder="Payment Range Minimum" value="{{ $job_post_list_model->payment_range_minimum }}">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Payment Range Maximum</label>
                        <div class="col-md-6">
                            <input type="text" name="payment_range_maximum" class="form-control" readonly=true
                            placeholder="Payment Range Maximum" value="{{ $job_post_list_model->payment_range_maximum }}">
                        </div>
                    </div>        
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Experience</label>
                        <div class="col-md-6">
                            <textarea rows="3" name="experience" class="form-control" readonly=true
                            placeholder="Experience">{{ $job_post_list_model->experience }}</textarea>
                        </div>
                    </div>             
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Email Address</label>
                        <div class="col-md-6">
                            <input type="email" name="jc_email_address" readonly="true" class="form-control" 
                            value="{{ $job_post_list_model->jc_email_address }}">
                        </div>
                    </div>
                    
                    <a class="btn btn-outline-primary col-md-4" href="{{ route('get_job_per_customer') }}" class="text-white"> Back</a>
                </form>
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