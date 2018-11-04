<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="{{ route('home') }}">
              <img src="{{ asset('public/itrepublic_logo.png') }}" alt="" title="" width="140"/>
            </a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
            <?php
              $group = session()->get('group_check');
            ?>
                  @if ($group == "jf")
                      <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
                      <li><a href="{{ route('profile') }}">Profile</a></li>
                      <li><a href="{{ route('about_us') }}">About Us</a></li>
                      <li><a href="{{ route('get_job') }}">Job Posting</a></li>
                      <li><a href="http://blog.itrepublic.id" target="_blank">Blog</a></li>
                      <li><a href="{{ route('job_finder_contact') }}">Contact</a></li>
                      <li><a href="{{ route('logout') }}">Logout</a></li>
                  @elseif ($group == "jc")
                      <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
                      <li><a href="{{ route('about_us') }}">About Us</a></li>
                      <li><a href="{{ route('company_profile') }}">Company Profile</a></li>
                      <li><a href="{{ route('get_job_per_customer') }}">Job Posting</a></li>
                      <li><a href="{{ route('resume') }}">Resume</a></li>
                      <li><a href="{{ route('job_creator_maintain_user') }}">User</a></li>                          
                      <li><a href="http://blog.itrepublic.id" target="_blank">Blog</a></li>
                      <li><a href="{{ route('job_creator_contact') }}">Contact</a></li>
                      <li><a href="{{ route('logout') }}">Logout</a></li>
                  @else
                    <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about_us') }}">About Us</a></li>
                    <li><a href="http://blog.itrepublic.id" target="_blank">Blog</a></li>
                    <li class="menu-has-children"><a href="#">Register</a>
                      <ul>
                        <li><a href="{{ route('create_job_finder') }}">Job Seeker</a></li>
                        <li><a href="{{ route('create_job_creator') }}">Job Recruiter</a></li>
                      </ul>
                    </li>
                    <li class="menu-has-children"><a href="#">Login</a>
                      <ul>
                        <li><a href="{{ route('job_finder_login') }}">Job Seeker</a></li>
                        <li><a href="{{ route('job_creator_login') }}">Job Recruiter</a></li>
                      </ul>
                    </li>				          				  
                @endif
            </ul>
          </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
  </header><!-- #header -->

