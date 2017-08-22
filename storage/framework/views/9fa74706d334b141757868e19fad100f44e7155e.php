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
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
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
              <img src="<?php echo e(Storage::url(Auth::user()->avatar)); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo e(ucfirst(Auth::user()->firstname)); ?> <?php echo e(ucfirst(Auth::user()->lastname)); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo e(Storage::url(Auth::user()->avatar)); ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo e(ucfirst(Auth::user()->firstname)); ?> <?php echo e(ucfirst(Auth::user()->firstname)); ?>

                  <small>Member since <?php echo e(date('M j,Y', strtotime(Auth::getUser()->created_at))); ?></small>
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="">
                   <a class="btn bg-maroon btn-flat btn-block" href="<?php echo e(route('logout')); ?>"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                   </a>

                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                      <?php echo e(csrf_field()); ?>

                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>