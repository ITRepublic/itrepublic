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
                    About Us				
                </h1>	
                <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('about-us') }}"> About Us</a></p>
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->	
    
<!-- Start service Area -->
<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>Why Choose Us</h1>
                <p>
                    Who are in extremely love with eco friendly system.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-license"></span>Professional Service</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>								
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-phone"></span>Great Support</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>								
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>				
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>								
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>									
                </div>
            </div>						
        </div>
    </div>	
</section>
<!-- End service Area -->						

<!-- Start feature Area -->
<section class="feature-area">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-3 feat-img no-padding">
                <img class="img-fluid" src="{{ asset('public/themes/img/pages/f1.jpg') }}" alt="">
            </div>
            <div class="col-lg-3 no-padding feat-txt">
                <h6 class="text-uppercase text-white">Basic & Common Repairs</h6>
                <h1>Who we are</h1>
                <p>
                    Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.
                </p>
            </div>
            <div class="col-lg-3 feat-img no-padding">
                <img class="img-fluid" src="{{ asset('public/themes/img/pages/f2.jpg') }}" alt="">							
            </div>
            <div class="col-lg-3 no-padding feat-txt">
                <h6 class="text-uppercase text-white">Basic & Common Repairs</h6>
                <h1>What we do</h1>
                <p>
                    Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.
                </p>
            </div>
        </div>
    </div>	
</section>
<!-- End feature Area -->

<!-- Start team Area -->
<section class="team-area section-gap" id="team">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Experienced Mentor Team</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>						
        <div class="row justify-content-center d-flex align-items-center">
            <div class="col-md-3 single-team">
                <div class="thumb">
                    <img class="img-fluid" src="{{ asset('public/themes/img/pages/t1.jpg') }}" alt="">
                    <div class="align-items-center justify-content-center d-flex">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="meta-text mt-30 text-center">
                    <h4>Ethel Davis</h4>
                    <p>Managing Director (Sales)</p>									    	
                </div>
            </div>
            <div class="col-md-3 single-team">
                <div class="thumb">
                    <img class="img-fluid" src="{{ asset('public/themes/img/pages/t2.jpg') }}" alt="">
                    <div class="align-items-center justify-content-center d-flex">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="meta-text mt-30 text-center">
                    <h4>Rodney Cooper</h4>
                    <p>Creative Art Director (Project)</p>			    	
                </div>
            </div>	
            <div class="col-md-3 single-team">
                <div class="thumb">
                    <img class="img-fluid" src="{{ asset('public/themes/img/pages/t3.jpg') }}" alt="">
                    <div class="align-items-center justify-content-center d-flex">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="meta-text mt-30 text-center">
                    <h4>Dora Walker</h4>
                    <p>Senior Core Developer</p>			    	
                </div>
            </div>	
            <div class="col-md-3 single-team">
                <div class="thumb">
                    <img class="img-fluid" src="{{ asset('public/themes/img/pages/t4.jpg') }}" alt="">
                    <div class="align-items-center justify-content-center d-flex">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="meta-text mt-30 text-center">
                    <h4>Lena Keller</h4>
                    <p>Creative Content Developer</p>			    	
                </div>
            </div>																									
    
        </div>
    </div>	
</section>
<!-- End team Area -->
@endsection