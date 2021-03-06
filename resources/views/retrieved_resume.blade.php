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
                    {{ $title }}				
                </h1>	
                {{-- <p class="text-white link-nav"><a href="{{ route('user_home') }}">Home </a>  
                <span class="lnr lnr-arrow-right"></span>  
                <a href="{{ route('resume') }}" class="text-white"> Resume</a>
                </p>											 --}}
        </div>  
    </div>			
    </div>
</section>
<!-- End banner Area -->	

<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">

        <div class="row justify-content-center d-flex" style="padding: 15px 0">
            <div class="col-lg-12 text-right">
                <a href="{{ route('bookmarked_resume') }}" class="btn btn-info">View Bookmarked Resume</a>
            </div>
        </div>

        <div class="row justify-content-center d-flex" style="padding: 15px 0">
            <div class="col-lg-12">
                <form method="get" action="{{ route('get_retrieve_search') }}">
                    <div class="form-group">
                        <label for="">Keyword</label>
                        <input type="text" name="search" class="form-control" placeholder="search candidate">
                    </div>
                    <div class="form-group">
                        <label for="">Resumes Retrieved by</label>
                        <select name="resume_bookmark_by" class="form-control">
                            <option value="">All</option>
                            @foreach ($job_creator_model as $job_creator_model)
                                <option value="{{ $job_creator_model->user_id }}">
                                    {{ $job_creator_model->company_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row justify-content-center d-flex">
            <p>You have credits left for retrieving <strong>{{ $exceed_resume }}</strong> resumes</p>
        </div>

        <div class="row justify-content-center d-flex">
            <div class="col-lg-12">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Candidate Details</th>
                                <th>Employment History</th>
                                <th>Highest Education</th>
                                <th>Last Active</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($job_finder_model as $index => $item)
                            <tr>
                                <td>{{ $job_finder_model->firstItem() + $index }}</td>
                                <td>
                                    <a href="{{ route('resume_detail', $item->finder_id) }}"><strong>{{ $item->full_name }}</strong></a> <br>
                                    {{ $item->birth_date }}, {{ $item->gender }}, {{ $item->province_name }} <br> <br>
                                    {{-- Laravel, Ionic Framework, Angular Js --}}
                                    @if ($item->skill_name != "")
                                    {{-- @foreach(explode(',', $item->skill_name) as $skill_name) 
                                    <p>
                                        <strong>- {{ $skill_name }}</strong>
                                    </p>
                                    @endforeach --}}
                                    {{ $item->skill_name }}
                                @endif
                                </td>
                                <td>
                                    @if ($item->job_position != "")
                                        @foreach(explode(',', $item->job_position) as $position) 
                                        <p>
                                            <strong>- {{ $position }}</strong>
                                        </p>
                                        @endforeach
                                    @endif
                                    {{-- {{ $item->address }} at {{ $item->province_name }} --}}
                                </td>
                                <td>
                                    <strong>{{ $item->highest_qualification_name }}</strong> <br>
                                    {{ $item->field_of_study }} <br>
                                    {{ $item->university }} <br>
                                </td>
                                <td>
                                    <p>Last Active: <br> {{ Carbon\Carbon::parse($item->last_login_date)->diffForHumans() }}</p>
                                    <hr>
                                    <p>Retrieved Date: <br> {{ Carbon\Carbon::parse($item->updated_at)->diffForHumans() }}</p>
                                </td>
                                <td>Retrieved</td>
                                
                                <td>
                                    <a href="../{{ $item->cv_file_name }}" class="btn btn-info btn-sm">Download</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                        <tfoot>
                            {{ $job_finder_model->appends($_GET)->links() }}
                        </tfoot>

                    </table>
                </div>

            </div>
        </div>
    </div>	
</section>
<!-- End post Area -->
@endsection