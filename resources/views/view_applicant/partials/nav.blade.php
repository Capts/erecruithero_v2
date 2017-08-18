<a href="{{ url('/') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>:)</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>E-RECRUIT</b> Hero</span>
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
            <!-- Messages: style can be found in dropdown.less-->
            
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have 10 notifications</li>
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
           
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu" style="margin-right: 120px;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ Storage::url(Auth::user()->avatar)}}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ ucfirst(Auth::user()->firstname) }} &nbsp;{{ ucfirst(Auth::user()->lastname) }}</span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="{{ Storage::url(Auth::user()->avatar)}}" class="img-circle" alt="User Image">

                    <p>
                        {{ ucfirst(Auth::user()->firstname) }} &nbsp;{{ ucfirst(Auth::user()->lastname) }}
                        <small>Member since {{ date('M j,Y', strtotime(Auth::getUser()->created_at)) }}</small>
                        
                    </p>
                </li>
                <!-- Menu Body -->
               
                <li class="user-footer">
                    
                    <div class="">
                      
                        <a class=" btn-block btn btn-flat btn-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> &nbsp;Logout
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