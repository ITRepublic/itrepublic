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
                <form action="">
                    <div class="form-group">
                        <label for="">Keyword</label>
                        <input type="text" name="search" class="form-control" placeholder="search candidate">
                    </div>
                    <div class="form-group">
                        <label for="">Resumes Retrieved by</label>
                        <select name="resume_bookmark_by" class="form-control">
                            <option value="">All</option>
                            <option value="">Mr. Jekardah</option>
                            <option value="">Mr. TestVacan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row justify-content-center d-flex">
            <p>You have credits left for retrieving <strong>100</strong> resumes</p>
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
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="#resume-detail"><strong>Jordy Jonatan</strong></a> <br>
                                    25, Male, DKI Jakarta <br> <br>
                                    Laravel, Ionic Framework, Angular Js
                                </td>
                                <td>
                                    <p>
                                        <strong>Senior Developer</strong> <br>
                                        PT. Mitra Grosir Nusantara
                                    </p>
                                    <p>
                                        <strong>Senior Developer</strong> <br>
                                        Emetra.io
                                    </p>
                                    <p>
                                        <strong>Web & Mobile Application Developer</strong> <br>
                                        Freelance
                                    </p>
                                </td>
                                <td>
                                    <strong>Bachelor's Degree / S1</strong> <br>
                                    Information System <br>
                                    Bina Nusantara University <br>
                                </td>
                                <td>
                                    <p>Last Active: <br> 24 Nov 2018</p>
                                    <hr>
                                    <p>Bookmarked Date: <br> 22/11/2018 10:53:26</p>
                                    <p>Retrieved Date: <br> 22/11/2018 10:53:26</p>
                                </td>
                                <td>Retrieved</td>
                                <td><a href="#" class="btn btn-info btn-small">Download</a></td>
                            </tr>
                        </tbody>

                        <tfoot>
                            // pagination
                        </tfoot>

                    </table>
                </div>

            </div>
        </div>
    </div>	
</section>
<!-- End post Area -->
@endsection