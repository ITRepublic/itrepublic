
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
                        Register			
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
                    <h3 class="py-1">Job Recruiter</h3> <hr>	
                    <form action="{{ route('create_job_creator_submit') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Company Name</label>
                            <div class="col-md-8">
                                <input type="text" name="company_name"
                                class="form-control no-border-radius" value="{{ old('company_name') }}">
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Email Address</label>
                            <div class="col-md-8">
                                <input type="email" name="email_address"
                                class="form-control no-border-radius" value="{{ old('email_address') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Phone</label>
                            <div class="col-md-8">
                                <input type="text" name="phone" class="form-control no-border-radius" value="{{ old('phone') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Authorized Person Name</label>
                            <div class="col-md-8">
                                <input type="text" name="authorized_person_name" class="form-control no-border-radius" value="{{ old('authorized_person_name') }}">
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
                                    <option value="">choose province</option>
                                    @foreach ($master_province as $master_province)
                                        <option value="{{ $master_province->province_id }}">
                                            {{ $master_province->province_name }}
                                        </option>
                                    @endforeach
                                    </select>
                            </div>
                        </div>    

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Address</label>
                            <div class="col-md-7">
                                <textarea rows="5" name="address" 
                                class="form-control">{{ old('address') }}</textarea>
                            </div>
                        </div> 

                        <div class="form-group row">
                        <label class="col-md-4 col-form-label">Total Employee</label>
                            <div class="col-md-7">
                                <input type="text" name="total_employee" class="form-control" value="{{ old('total_employee') }}">
                            </div>
                        </div>    

                        <div class="form-group row">
                        <label class="col-md-4 col-form-label">Apply Process Time</label>
                            <div class="col-md-7">
                                <input type="text" name="apply_process_time" class="form-control" value="{{ old('apply_process_time') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Industry</label>
                            <div class="col-md-7">
                            <select id="industry_id" name="industry_id">
                                    <option value="">Choose industry</option>
                                    @foreach ($master_industry as $master_industry)
                                        <option value="{{ $master_industry->industry_id }}">
                                            {{ $master_industry->industry_name }}
                                        </option>
                                    @endforeach
                                    </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Website</label>
                            <div class="col-md-7">
                            <input type="text" name="website" class="form-control" value="{{ old('website') }}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Working Hours</label>
                            <div class="col-md-7">
                            <input type="text" name="working_hours" class="form-control" value="{{ old('working_hours') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Benefit Details</label>
                            <div class="col-md-8">
                                <textarea rows="5" name="benefit_details" 
                                class="form-control no-border-radius" value="{{ old('benefit_details') }}"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Language</label>
                            <div class="col-md-7">
                            <div id="default-selects2">
                                    <select id="language" name="language">
                                        <option value="">All Category</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="English">English</option>
                                    </select>
                                </div>	
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Company Description (Summary)</label>
                            <div class="col-md-8">
                                <textarea rows="5" name="summary" class="form-control no-border-radius" value="{{ old('summary') }}"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info no-border-radius">Apply Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End container Area -->
@endsection