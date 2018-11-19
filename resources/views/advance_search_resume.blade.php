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
                <h1 class="text-white">Advanced Search</h1>
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
    <div class="col-lg-12 offset-md-2">@include('error.template')</div>
        <div class="row justify-content-center d-flex">
            <div class="col-lg-12 post-list">
                <form action="{{ route('resume_advance_search_submit') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <?php $user_id = session()->get('user_id'); ?>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Full Name</label>
                        <div class="col-md-7">
                            <input type="text" name="full_name" class="form-control"                             
                            placeholder="Full Name" value="{{ old('full_name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-4 col-form-label">Email Address</label>
                        <div class="col-md-7">
                            <input type="text" name="email_address"
                            class="form-control" value="{{ old('email_address') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Address</label>
                        <div class="col-md-7">
                            <textarea rows="3" name="address" 
                            class="form-control">{{ old('Address') }}</textarea>
                        </div>
                    </div>
                        
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Phone</label>
                        <div class="col-md-7">
                            <input type="text" name="phone" 
                            class="form-control" value="{{ old('Phone') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Gender</label>
                        <div class="col-md-7">
                            <select id="gender" name="gender">
                                <option value="">All Category</option>
                                <option value="man">Man</option>
                                <option value="woman">Woman</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Birth Date</label>
                        <div class="col-md-7">
                            <input type="text" name="birth_date" id="datepicker" class="form-control" 
                            placeholder="Birth Date" value="{{ old('birth_date') }}">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Province</label>
                        <div class="col-md-7">
                        <select id="province_id" name="province_id">
                                <option value="">Select area</option>
                                @foreach ($master_province as $master_province)
                                    <option value="{{ $master_province->province_id }}">
                                        {{ $master_province->province_name }}
                                    </option>
                                @endforeach
                                </select>
                        </div>
                    </div>        
                    <div class="form-group row">
                    <label class="col-md-4 col-form-label">Last Position</label>
                        <div class="col-md-7">
                            <input type="text" name="last_position" class="form-control"                             
                            placeholder="Last Position" value="{{ old('last_position') }}">
                        </div>
                    </div>             
                    <div class="form-group row">
                    <label class="col-md-4 col-form-label">Last Level</label>
                        <div class="col-md-7">
                            <input type="text" name="last_level" class="form-control"                             
                            placeholder="Last Level" value="{{ old('last_level') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Last Work History</label>
                        <div class="col-md-7">
                            <textarea rows="3" name="last_work_history" 
                            class="form-control">{{ old('last_work_history') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Last Work Category</label>
                        <div class="col-md-7">
                        <select id="last_work_category" name="last_work_category">
                                <option value="">Select category</option>
                                @foreach ($master_tech_type as $master_tech_type)
                                    <option value="{{ $master_tech_type->tech_type_id }}">
                                        {{ $master_tech_type->tech_type_name }}
                                    </option>
                                @endforeach
                                </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">University</label>
                        <div class="col-md-7">
                        <input type="text" name="university" class="form-control"                             
                            placeholder="University" value="{{ old('university') }}">
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
                        <label class="col-md-4 col-form-label">Last Salary</label>
                        <div class="col-md-7">
                        <input type="text" name="last_salary" class="form-control" 
                            placeholder="Last Salary" value="{{ old('last_salary') }}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>	
</section>
<!-- End post Area -->
@endsection