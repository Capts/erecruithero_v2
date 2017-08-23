 <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E-R</b>H</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">E-recruit<b> HERO</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
     
      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
         
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu" >
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-danger">{{ count(auth()->user()->unreadNotifications) }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                     
                    </a>
                  </li>
                
                
                
                 
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu" style="margin-right: 120px;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ Storage::url(Auth::user()->avatar) }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ ucfirst(Auth::user()->firstname) }} {{ ucfirst(Auth::user()->lastname) }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ Storage::url(Auth::user()->avatar) }}" class="img-circle" alt="User Image">

                <p>
                  {{ ucfirst(Auth::user()->firstname) }} {{ ucfirst(Auth::user()->firstname) }}
                  <small>Member since {{ date('M j,Y', strtotime(Auth::getUser()->created_at)) }}</small>
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="">
                   <a class="btn bg-maroon btn-flat btn-block" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                   </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>