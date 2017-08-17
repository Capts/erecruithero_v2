<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0px;background-color: #00a65a;">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <?php if(Auth::check()): ?>
                <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only" >Toggle Navigation</span>
                    <span class="icon-bar" style="background-color: white;"></span>
                    <span class="icon-bar" style="background-color: white;"></span>
                    <span class="icon-bar" style="background-color: white;"></span>
                </button>
            
                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <span style="color:white">E-recruit Hero</span>
                </a>

            <?php else: ?>
                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <span style="color:white">E-recruit Hero</span>
                </a>
            <?php endif; ?>
            
            
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>
                   
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" style="color:white;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="<?php echo e(Storage::url(Auth::getUser()->avatar)); ?>" alt="user image" class="img-circle" width="25px" height="25px"> &nbsp;<?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <?php if(Auth::user()->roles()->first()->name == 'applicant'): ?>
                                <li><a href="<?php echo e(route('profile.index', [Auth::user()->id, Auth::user()->slug])); ?>">Profile</a></li>
                            <?php else: ?>
                                <li><a href="<?php echo e(route('employer.feed')); ?>">Newsfeed</a></li>
                            <?php endif; ?>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>