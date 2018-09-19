<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('public/themes/img/logo.png') }}" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('about-us') }}">About Us</a></li>
              <li><a href="{{ route('job') }}">Job</a></li>
              <li><a href="{{ route('blog') }}">Blog</a></li>
              <li><a href="{{ route('contact') }}">Contact</a></li>
              <li class="menu-has-children"><a href="#">Register</a>
                <ul>
                  <li><a href="#">Job Seeker</a></li>
                  <li><a href="#">Job Recruiter</a></li>
                </ul>
              </li>
              {{-- <li><a class="ticker-btn" href="#">Register</a></li> --}}
              <li><a class="ticker-btn" href="#">Login</a></li>				          				          
            </ul>
          </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
  </header><!-- #header -->