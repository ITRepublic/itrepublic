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
                <h1 class="text-white">{{ $title }}</h1>
                <p class="text-white link-nav"><a href="{{ route('user_home') }}">Home </a>  
                <span class="lnr lnr-arrow-right"></span>  
                <a href="#" class="text-white"> Company Profile</a>
                </p>
            </div>											
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
                        <label class="col-md-4 col-form-label">Summary <br> (Company Description)</label>
                        <div class="col-md-8">
                            <textarea rows="3" name="summary" class="form-control no-border-radius">{{ $master_customer->summary }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Resume Limit</label>
                        <div class="col-md-7">
                        <select id="limit_group" name="limit_group">
                                <option value="0">Select amount</option>
                                @foreach ($master_limit_group as $master_limit_group)
                                    <option value="{{ $master_limit_group->limit_group_id }}">
                                        {{ $master_limit_group->limit_amount }} at {{ $master_limit_group->limit_group_price }}
                                    </option>
                                @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Current Resume Limit</label>
                        <div class="col-md-7">
                            {{ $current_limit }}
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>	
</section>
<!-- End post Area -->
@endsection