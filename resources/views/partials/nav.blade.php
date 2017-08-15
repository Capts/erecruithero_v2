<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0px;background-color: #00a65a;">
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
                    <li class="dropdown">
                        <a href="#" style="color:white;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="{{ Storage::url(Auth::getUser()->avatar) }}" alt="user image" class="img-circle" width="25px" height="25px"> &nbsp;{{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @if (Auth::user()->roles()->first()->name == 'applicant')
                                <li><a href="{{ route('profile.index', [Auth::user()->id, Auth::user()->slug]) }}">Profile</a></li>
                            @else
                                <li><a href="{{ route('employer.feed') }}">Newsfeed</a></li>
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