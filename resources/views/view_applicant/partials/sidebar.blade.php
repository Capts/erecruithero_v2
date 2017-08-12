<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ Storage::url(Auth::user()->avatar)}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->firstname }}&nbsp;{{ Auth::user()->lastname }}</p>
          <a href="#"><i class="fa fa-envelope"></i>{{Auth::user()->email}}</a>
        </div>
      </div>
     

      {!! Form::open(['method' => 'GET', 'route' => 'searchjob', 'class' => 'sidebar-form']) !!}
        <div class="input-group">
          <input type="text" name="searchApp" class="form-control" placeholder="Search jobs">
          <span class="input-group-btn">
                <button type="submit"  id="search-btn" class="btn btn-flat "><i class="fa fa-search"></i>
                </button>
              </span>
        </div>

      {!! Form::close() !!}
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li >
          <a href="{{ route('applicant.feed') }}">
            <i class="fa fa-rss"></i> <span>Newsfeed</span>
          </a>
         
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Profile</span>
            <span class="pull-right-container">
              {{-- <i class="fa fa-angle-right pull-right"></i> --}}
            </span>
          </a>
          <ul class="treeview-menu" style="padding-left:25px;">
            <li><a href="{{route('profile.index', [Auth::user()->id, Auth::user()->slug] )}}"><i class="fa fa-odnoklassniki"></i> view profile</a></li>
            <li><a href="{{ route('profile.edit', Auth::user()->id) }}"><i class="fa fa-pencil"></i> edit profile</a></li>
          </ul>
        </li>

        <li >
          <a href="{{ route('jobs.index') }}">
            <i class="fa fa-gavel"></i> <span>Jobs</span>
            <span class="pull-right-container">
              {{-- <i class="fa fa-angle-right pull-right"></i> --}}
            </span>
          </a>
         
        </li>

       
        <br>

        <li class="treeview">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i><span>Logout</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>