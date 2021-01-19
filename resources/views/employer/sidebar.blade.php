
  <!-- BEGIN: Header-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
      <div class="navbar-container content">
        <div class="collapse navbar-collapse show" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="fas fa-bars"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="fas fa-bars"></i></a></li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src="app-assets/images/portrait/small/avatar-s-19.png" alt="avatar">
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="arrow_box_right">
                  <div class="dropdown-item">
                    <span class="avatar avatar-online">
                      <img src="app-assets/images/portrait/small/avatar-s-19.png" alt="avatar">
                      <span class="user-name text-bold-700 ml-1 text-capitalize">{{ Auth::user()->name }}</span>
                    </span>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item black" href="{{route('edit-profile')}}">
                    <i class="far fa-user"></i></i> Edit Profile
                  </a>
                  <a class="dropdown-item black" href="{{route('user-profile')}}">
                    <i class="far fa-envelope"></i></i> View Profile
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class=" fas fa-power-off"></i>
                    {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>

                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- END: Header-->

  <!-- BEGIN: Main Menu-->
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" data-img="app-assets/images/backgrounds/02.jpg">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('home')}}">
            <img class="brand-logo" alt="Cbitss logo" src="app-assets/images/logo/cbitss.png">
            <h3 class="brand-text" style="color:#244484;">Spanning Career</h3>
          </a></li>
        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="fas fa-times"></i></a></li>
      </ul>
    </div>
    <div class="nav-background"></div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <!-- <li class=" nav-item"><a href="#"><i class="fas fa-warehouse"></i><span class="menu-title" data-i18n="">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2 d-none">3</span></a>
          <ul class="menu-content">
            <li></li>
            <li id="loginbtn"><a class="menu-item"  href="{{route('login')}}">Login</a>
            </li>
            <li id="registerbtn"><a class="menu-item"  href="{{route('register')}}">Register</a>
            </li>
          </ul>
        </li> -->
        <li class=" nav-item"><a href="#"><i class="fas fa-layer-group"></i><span class="menu-title" data-i18n="">Manage
              Jobs</span></a>
          <ul class="menu-content">
            <li id="postjobbtn"><a class="menu-item" href="{{route('job-post')}}">Post Jobs</a>
            </li>
            <li id="viewjobbtn"><a class="menu-item" href="{{route('view-job')}}">View Jobs</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- END: Main Menu-->