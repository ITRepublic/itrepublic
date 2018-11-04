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
                {{ $title }}											
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
    <div class="col-lg-8 offset-md-2">@include('error.template')</div>
        <div class="row justify-content-center d-flex">
            <div class="col-lg-8 post-list">
                <form action="{{ route('submit_company_profile') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Email Address</label>
                        <div class="col-md-8">
                            <input type="email" name="email_address" placeholder="Email Address" readonly="true"
                            class="form-control no-border-radius" value="{{ $master_customer->email_address }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Company Name</label>
                        <div class="col-md-8">
                            <input type="text" name="company_name" placeholder="Company Name"
                            class="form-control no-border-radius" value="{{ $master_customer->company_name }}">
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Phone</label>
                        <div class="col-md-8">
                            <input type="text" name="phone" class="form-control no-border-radius" 
                            placeholder="Phone" value="{{ $master_customer->phone }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Authorized Person Name</label>
                        <div class="col-md-8">
                            <input type="text" name="authorized_person_name" placeholder="Authorized Person Name"
                            class="form-control no-border-radius" value="{{ $master_customer->authorized_person_name }}">
                        </select>
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Upload Your Logo Here</label>
                        <div class="col-md-7">
                            <input type="file" class="form-control-file" name="logo">
                        </div>
                    </div>              
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Province</label>
                        <div class="col-md-7">
                        <select id="province_id" name="province_id">
                                <option value="">Select area</option>
                                @foreach ($master_province as $master_province)
                                    @if ($master_province->province_id == $master_customer->province_id)
                                        <option selected="selected" value="{{ $master_province->province_id }}">
                                            {{ $master_province->province_name }}
                                        </option>
                                        @else
                                        <option value="{{ $master_province->province_id }}">
                                            {{ $master_province->province_name }}
                                        </option>
                                    @endif
                                @endforeach
                                </select>
                        </div>
                    </div>       
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Address</label>
                        <div class="col-md-7">
                            <textarea rows="3" name="address" 
                            class="form-control">{{ $master_customer->address }}</textarea>
                        </div>
                    </div> 
                    <div class="form-group row">
                    <label class="col-md-4 col-form-label">Total Employee</label>
                        <div class="col-md-7">
                            <input type="text" name="total_employee" class="form-control"                             
                            placeholder="Total Employee" value="{{ $master_customer->total_employee }}">
                        </div>
                    </div>             
                    <div class="form-group row">
                    <label class="col-md-4 col-form-label">Apply Process Time</label>
                        <div class="col-md-7">
                            <input type="text" name="apply_process_time" class="form-control"                             
                            placeholder="Apply Process Time" value="{{ $master_customer->apply_process_time }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Industry</label>
                        <div class="col-md-7">
                        <select id="industry_id" name="industry_id">
                                <option value="">Select category</option>
                                @foreach ($master_industry as $master_industry)
                                    @if ($master_industry->industry_id == $master_customer->industry_id)
                                        <option selected="selected" value="{{ $master_industry->industry_id }}">
                                            {{ $master_industry->industry_name }}
                                        </option>
                                    @else
                                        <option value="{{ $master_industry->industry_id }}">
                                            {{ $master_industry->industry_name }}
                                        </option>
                                    @endif
                                @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Website</label>
                        <div class="col-md-7">
                        <input type="text" name="website" class="form-control"                             
                            placeholder="Website" value="{{ $master_customer->website }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Working Hours</label>
                        <div class="col-md-7">
                        <input type="text" name="working_hours" class="form-control"                             
                            placeholder="Working Hours" value="{{ $master_customer->working_hours }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Benefit Details</label>
                        <div class="col-md-8">
                            <textarea rows="3" name="benefit_details" 
                            class="form-control no-border-radius">{{ $master_customer->benefit_details }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Language</label>
                        <div class="col-md-7">
                        <div id="default-selects2">
                                <select id="language" name="language">
                                    <option value="">All Category</option>
                                    @if ($master_customer->language == 'Indonesia')
                                        <option selected='selected' value="Indonesia">Indonesia</option>
                                        <option value="English">English</option>
                                    @else
                                        <option value="Indonesia">Indonesia</option>
                                        <option selected='selected' value="English">English</option>
                                    @endif
                                   
                                </select>
                            </div>	
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Summary</label>
                        <div class="col-md-8">
                            <textarea rows="3" name="summary" class="form-control no-border-radius">{{ $master_customer->summary }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <a class="btn btn-outline-primary col-md-4" href="{{ route('user_home') }}" class="text-white"> Back</a>
                        <button type="submit" class="btn btn-outline-primary col-md-4">Submit</button>
                    </div>
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