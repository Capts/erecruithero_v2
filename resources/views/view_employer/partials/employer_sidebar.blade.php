
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ Storage::url(Auth::user()->avatar) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
          <p style="font-size: 12px;">{{ Auth::user()->email }}</p>
          {{-- <a href="#"><i class="fa fa-circle text-success" ></i> Online</a> --}}
            
          <br>
        </div>
      </div>
      <!-- search form -->
      {!! Form::open(['method' => 'GET', 'route' => 'employer.search', 'class' => 'sidebar-form']) !!}
        <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit"  id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      {!! Form::close() !!}
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <li class="header"><h4>EMPLOYER NAVIGATION</h4></li>
        <li class="active treeview">
          <a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
        </li>


        <li class=" treeview">
          <a href="#">
            <i class="fa fa-gavel"></i> <span>Jobs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a class="btn btn-xs btn-flat" title="Post a new job" data-toggle="modal" data-target="#create_job_modal-{{ Auth::user()->id }}"><i class="fa fa-plus"></i> Post new job</a></li>
            <li><a href="{{ route('job.index') }}" class="btn btn-xs btn-flat"><i class="fa fa-folder-open-o"></i> View all jobs</a></li>
          </ul>
        </li>

        <li class=" treeview">
          <a href="#"><i class="fa fa-graduation-cap"></i> <span>Applicants</span> </a>
        </li>
        
         <li class=" treeview">
          <a href="#"><i class="fa fa-newspaper-o"></i> <span>Resume</span> </a>
        </li>
         <li class=" treeview">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
               <span>Logout</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>



      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>