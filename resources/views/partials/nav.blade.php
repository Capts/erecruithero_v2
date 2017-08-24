<nav class="navbar navbar-default  navbar-static-top" style="margin-bottom: 0px;background-color: #00a65a;">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            @if (Auth::check())
                <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only" >Toggle Navigation</span>
                    <span class="icon-bar" style="background-color: white;"></span>
                    <span class="icon-bar" style="background-color: white;"></span>
                    <span class="icon-bar" style="background-color: white;"></span>
                </button>
            
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span style="color:white">E-recruit Hero</span>
                </a>

            @else
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span style="color:white">E-recruit Hero</span>
                </a>
            @endif
            
            
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                   {{--  <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li> --}}
                @else
                    @if (Auth::user()->roles()->first()->name == 'applicant')
                    <li class="dropdown notifications-menu"  id="markasread" onclick="markNotificationAsRead()">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            @if (count(auth()->user()->unreadNotifications) < 1)
                            <span class="fa fa-bell-o" style="color:white;"></span>
                            @else
                            <span class="fa fa-bell-o" style="color:white;"></span>
                            <span class="label label-danger">{{ count(auth()->user()->unreadNotifications) }}</span>
                            @endif

                        </a>
                        <ul class="dropdown-menu">
                            @if (count(auth()->user()->unreadNotifications) <= 1 )
                            <li class="header" >You have {{ count(auth()->user()->unreadNotifications) }} new notification</li>
                            <li>
                                @else
                                <li class="header">You have {{ count(auth()->user()->unreadNotifications) }} new notifications</li>
                                <li>

                                    @endif

                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        @if (count(auth()->user()->unreadNotifications) >= 1 )
                                        <p class="text-center" style="color:red;padding-top:1px;background-color: #3e6e8e;color:white;">Unread notification &nbsp; <i class="fa fa-star"></i> </p>
                                        <li style="cursor: pointer;">
                                            @foreach (auth()->user()->unreadNotifications as $notif)
                                            @include('view_applicant.partials.notification.'.snake_case(class_basename($notif->type)))
                                            @endforeach

                                        </li>

                                        @if (count(auth()->user()->notifications) > 0 and count(auth()->user()->unreadNotifications) >= 1)
                                        <br>
                                        @else
                                        <p class="text-center" style="color:silver; padding-top:1px;background-color: #0ea346;color:white;">All notifications &nbsp; <i class="fa fa-bell-o"></i> </p>
                                        <li style="cursor: pointer;">
                                            @foreach (auth()->user()->notifications as $notif)
                                            @include('view_applicant.partials.notification.'.snake_case(class_basename($notif->type)))
                                            @endforeach
                                        </li>

                                        @endif

                                        @elseif (count(auth()->user()->notifications) > 0 )
                                        <p class="text-center" style="color:silver; padding-top:1px;background-color: #0ea346;color:white;">All notifications &nbsp; <i class="fa fa-bell-o"></i> </p>
                                        <li style="cursor: pointer;">
                                            @foreach (auth()->user()->notifications as $notif)
                                            @include('view_applicant.partials.notification.'.snake_case(class_basename($notif->type)))
                                            @endforeach
                                        </li>
                                        @endif



                                    </ul>
                                </li>
                                <li class="footer" ><a href="#">View all</a></li>
                            </ul>
                    </li>
                    @else
                    <li class="dropdown notifications-menu" id="markasreadEmployer" onclick="markNotificationAsRead()">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            @if (count(auth()->user()->unreadNotifications) < 1)
                            <span class="fa fa-bell-o" style="color:white;"></span>
                            {{-- <span class="label label-danger">{{ count(auth()->user()->unreadNotifications) }}</span> --}}
                            @else
                            <span class="fa fa-bell-o"></span>
                            <span class="label label-danger" style="color:white;">{{ count(auth()->user()->unreadNotifications) }}</span>
                            @endif
                        </a>
                        <ul class="dropdown-menu">
                            @if (count(auth()->user()->unreadNotifications) <= 1 )
                            <li class="header">You have {{ count(auth()->user()->unreadNotifications) }} new notification</li>
                            <li>
                                @else
                                <li class="header">You have {{ count(auth()->user()->unreadNotifications) }} new notifications</li>
                                <li>
                                    @endif
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">


                                        @if (count(auth()->user()->unreadNotifications) >= 1 )
                                        <p class="text-center" style="color:red;padding-top:1px;background-color: #3e6e8e;color:white;">Unread notification &nbsp; <i class="fa fa-star"></i> </p>
                                        <li style="cursor: pointer;">
                                            @foreach (auth()->user()->unreadNotifications as $notif)
                                            @include('view_employer.partials.notification.'.snake_case(class_basename($notif->type)))
                                            @endforeach

                                        </li>

                                        @if (count(auth()->user()->notifications) > 0 and count(auth()->user()->unreadNotifications) >= 1)
                                        <br>
                                        @else
                                        <p class="text-center" style="color:silver; padding-top:1px;background-color: #0ea346;color:white;">All notifications &nbsp; <i class="fa fa-bell-o"></i> </p>
                                        <li style="cursor: pointer;">
                                            @foreach (auth()->user()->notifications as $notif)
                                            @include('view_employer.partials.notification.'.snake_case(class_basename($notif->type)))
                                            @endforeach
                                        </li>

                                        @endif

                                        @elseif (count(auth()->user()->notifications) > 0 )
                                        <p class="text-center" style="color:silver; padding-top:1px;background-color: #0ea346;color:white;">All notifications &nbsp; <i class="fa fa-bell-o"></i> </p>
                                        <li style="cursor: pointer;">
                                            @foreach (auth()->user()->notifications as $notif)
                                            @include('view_employer.partials.notification.'.snake_case(class_basename($notif->type)))
                                            @endforeach
                                        </li>
                                        @endif




                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                    @endif
                    <li class="dropdown">
                        <a href="#" style="color:white;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="{{ Storage::url(Auth::getUser()->avatar) }}" alt="user image" class="img-circle" width="25px" height="25px"> &nbsp;{{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            @if (Auth::user()->roles()->first()->name == 'applicant')

                                <li><a href="{{ route('profile.index', [Auth::user()->id, Auth::user()->slug]) }}">Profile</a></li>
                            @else
                                <li><a href="{{ route('job.index') }}">Jobs</a></li>
                            @endif
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>