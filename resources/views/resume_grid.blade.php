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
                    Resume				
                </h1>	
                <p class="text-white link-nav"><a href="{{ route('user_home') }}">Home </a>  
                <span class="lnr lnr-arrow-right"></span>  
                <a href="{{ route('resume') }}" class="text-white"> Resume</a>
                </p>											
        </div>  
    </div>			
    </div>
</section>
<!-- End banner Area -->	

<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
        <div class="row justify-content-center d-flex">

            <div class="col-lg-12 text-center" style="margin-bottom: 20px;">
                <a class="btn btn-info" href="{{ route('bookmarked_resume') }}">Bookmarked Resume</a>
                <a class="btn btn-info" href="{{ route('retrieved_resume') }}">Retrieved Resume</a>
            </div>

            <div class="col-lg-12" style="margin-bottom: 20px;">
                <a class="btn btn-info" href="{{ route('resume_advance_search') }}">Advance Search</a>
                <a class="btn btn-info" href="{{ route('resume_simple_search') }}">Simple Search</a>
            </div>
        
            <div class="col-lg-12 post-list">
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Candidate Details</th>
                            <th>Employment History</th>
                            <th>Highest Education</th>
                            <th>Last Active</th>
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
                            </td>
                            <td>
                                {{ $item->tech_type_name }} <br> <br>
                                {{ $item->address }} at {{ $item->province_name }}
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                @if($item->jc_user_id == '')
                                    <a class="btn btn-sm btn-info" href="{{ route('bookmark_resume', $item->finder_id) }}">
                                        Bookmark
                                    </a>
                                @else
                                    <p>
                                        Bookmarked
                                    </p>
                                @endif
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