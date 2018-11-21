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
                <h1 class="text-white">Resume Detail</h1>
            </div>										
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
    <div class="col-lg-12">@include('error.template')</div>
        <div class="row justify-content-center d-flex">
            <div class="col-lg-12">
                <form action="" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Full Name</label>
                        <div class="col-md-7">
                            <input type="text" name="full_name" class="form-control" readonly=true                             
                            placeholder="Full Name" value="{{ $job_finder_model->full_name }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Gender</label>
                        <div class="col-md-7">
                            <select id="gender" name="gender" disabled>
                                <option value="">Choose Gender</option>
                                    @if ($job_finder_model->gender == 'Male')
                                        <option selected="selected" value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    @else
                                        <option value="Male">Male</option>
                                        <option selected="selected" value="Female">Female</option>
                                    @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-md-4 col-form-label">Email Address</label>
                        <div class="col-md-7">
                            <input type="email" name="email_address" readonly="true"
                            class="form-control" value="{{ $job_finder_model->email_address }}">
                        </div>
                    </div>
                        
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Phone</label>
                        <div class="col-md-7">
                            <input type="text" name="phone" readonly="true"
                            class="form-control" value="{{ $job_finder_model->phone }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Birth Date</label>
                        <div class="col-md-7">
                            <input type="date" name="birth_date" id="datepicker" readonly="true"
                            class="form-control" placeholder="Birth Date" value="{{ $job_finder_model->birth_date }}">
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Province</label>
                        <div class="col-md-7">
                        <select id="province_id" name="province_id" disabled>
                                <option value="">Select area</option>
                                @foreach ($master_province as $master_province)
                                    @if ($master_province->province_id == $job_finder_model->province_id)
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
                            <textarea rows="3" name="address" readonly
                            class="form-control">{{ $job_finder_model->address }}</textarea>
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">University/School</label>
                        <div class="col-md-7">
                        <input type="text" name="university" class="form-control" readonly                          
                            placeholder="University" value="{{ $job_finder_model->university }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Highest Qualification</label>
                        <div class="col-md-7">
                            <div id="default-selects2">
                                <select name="highest_qualification" disabled>
                                    <option value="">Choose highest qualification</option>
                                    @foreach ($master_highest_qualification as $master_highest_qualification)
                                        @if ($master_highest_qualification->highest_qualification_id == $job_finder_model->highest_qualification)
                                        <option selected="selected" value="{{ $master_highest_qualification->highest_qualification_id }}">
                                            {{ $master_highest_qualification->highest_qualification_name }}
                                        </option>
                                        @else
                                        <option value="{{ $master_highest_qualification->highest_qualification_id }}">
                                            {{ $master_highest_qualification->highest_qualification_name }}
                                        </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Language</label>
                        <div class="col-md-7">
                        <div id="default-selects2">
                                <select id="language" name="language" disabled>
                                    <option value="">All Category</option>
                                    @if ($job_finder_model->language == 'Indonesia')                                        
                                        <option selected="selected" value="Indonesia">Indonesia</option>
                                        <option value="English">English</option>
                                    @else
                                        <option value="Indonesia">Indonesia</option>
                                        <option selected="selected" value="English">English</option>
                                    @endif
                                </select>
                            </div>	
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Last Salary</label>
                        <div class="col-md-7">
                        <input type="text" name="last_salary" readonly class="form-control" value="{{ $job_finder_model->last_salary }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Expected Salary</label>
                        <div class="col-md-7">
                        <input type="text" name="expected_salary" readonly class="form-control" value="{{ $job_finder_model->expected_salary }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <h3>Working Experience</h3>
                         
                        <div class="table-responsive">
                            <table class="table table-bordered experience-table">
                                <tr>
                                    <th>Company Name</th>
                                    <th>Period</th>
                                    <th>Job Title</th>
                                    <th>Job Description</th>
                                    <th>Job Position</th>
                                    <th>Industry</th>
                                    <th>Specialization</th>
                                </tr>
                                
                                @foreach ($job_finder_experience as $job_finder_experience)
                                <tr>
                                    <td>{{ $job_finder_experience->company_name }}</td>
                                    <td>{{ $job_finder_experience->period_from }} - {{ $job_finder_experience->period_to }}</td>
                                    <td>{{ $job_finder_experience->job_title }}</td>
                                    <td>{{ $job_finder_experience->job_description }}</td>
                                    <td>{{ $job_finder_experience->job_position }}</td>
                                    <td>{{ $job_finder_experience->industry_name }}</td>
                                    <td>{{ $job_finder_experience->tech_type_name }}</td>
                                </tr>
                                @endforeach
                                
                            </table>
                        </div>
                    </div>

                    <div class="form-group row">
                        <h3>Skills</h3>
                            
                        <div class="table-responsive">
                            <table class="table table-bordered skill-table">
                                <tr>
                                    <th>Skill (Java, PHP, Laravel, Angular Js, Node Js, etc.)<th>
                                </tr>
                                @foreach ($skill_job_finder as $skill_job_finder)
                                <tr>
                                    <input type="hidden" id="skill_job_finder_id[]" name="skill_job_finder_id[]" value="{{ $skill_job_finder->skill_job_finder_id }}">
                                    <td>{{ $skill_job_finder->skill_name }}</td>

                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>	
</section>
<!-- End post Area -->

<script>
    $(".addExperience").on('click', function() {
        jQuery.get('{{ route("industries") }}', function(industries) {
            industries.forEach(industry => {
                $('.industry').append('<option value="'+industry.industry_id+'">'+industry.industry_name+'</option>');
            });
        });

        jQuery.get('{{ route("specializations") }}', function(specializations) {
            specializations.forEach(specialization => {
                $('.specialization').append('<option value="'+specialization.tech_type_id+'">'+specialization.tech_type_name+'</option>');
            });
        });

        $('.experience-table').append('<tr class="experience-row"><td><input type="text" name="company_name[]" class="form-control"></td><td><input type="date" name="period_from[]" class="form-control"> until <input type="date" name="period_to[]" class="form-control"></td><td><input type="text" name="job_title[]" class="form-control"></td><td><textarea name="job_description[]" class="form-control"></textarea></td><td><input type="text" name="job_position[]" class="form-control"></td><td><select name="industry[]" class="form-control industry"></select></td><td><select name="specialization[]" class="form-control specialization"></select></td></tr>');
    });

    $(".removeExperience").on('click', function() {
        $('.experience-row:last').remove();
    });

    $(".addSkill").on("click", function() {
        $('.skill-table').append('<tr class="skill-row"><td><input type="text" name="skill[]" class="form-control"</td></tr>');
    });

    $(".removeSkill").on("click", function() {
        $('.skill-row:last').remove();
    });
</script>

@endsection