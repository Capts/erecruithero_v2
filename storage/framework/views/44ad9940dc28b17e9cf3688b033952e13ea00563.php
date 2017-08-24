<nav class="navbar navbar-default  navbar-static-top" style="margin-bottom: 0px;background-color: #00a65a;">
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
                    <?php if(Auth::user()->roles()->first()->name == 'applicant'): ?>
                    <li class="dropdown notifications-menu"  id="markasread" onclick="markNotificationAsRead()">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php if(count(auth()->user()->unreadNotifications) < 1): ?>
                            <span class="fa fa-bell-o" style="color:white;"></span>
                            <?php else: ?>
                            <span class="fa fa-bell-o" style="color:white;"></span>
                            <span class="label label-danger"><?php echo e(count(auth()->user()->unreadNotifications)); ?></span>
                            <?php endif; ?>

                        </a>
                        <ul class="dropdown-menu">
                            <?php if(count(auth()->user()->unreadNotifications) <= 1 ): ?>
                            <li class="header" >You have <?php echo e(count(auth()->user()->unreadNotifications)); ?> new notification</li>
                            <li>
                                <?php else: ?>
                                <li class="header">You have <?php echo e(count(auth()->user()->unreadNotifications)); ?> new notifications</li>
                                <li>

                                    <?php endif; ?>

                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <?php if(count(auth()->user()->unreadNotifications) >= 1 ): ?>
                                        <p class="text-center" style="color:red;padding-top:1px;background-color: #3e6e8e;color:white;">Unread notification &nbsp; <i class="fa fa-star"></i> </p>
                                        <li style="cursor: pointer;">
                                            <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo $__env->make('view_applicant.partials.notification.'.snake_case(class_basename($notif->type)), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </li>

                                        <?php if(count(auth()->user()->notifications) > 0 and count(auth()->user()->unreadNotifications) >= 1): ?>
                                        <br>
                                        <?php else: ?>
                                        <p class="text-center" style="color:silver; padding-top:1px;background-color: #0ea346;color:white;">All notifications &nbsp; <i class="fa fa-bell-o"></i> </p>
                                        <li style="cursor: pointer;">
                                            <?php $__currentLoopData = auth()->user()->notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo $__env->make('view_applicant.partials.notification.'.snake_case(class_basename($notif->type)), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </li>

                                        <?php endif; ?>

                                        <?php elseif(count(auth()->user()->notifications) > 0 ): ?>
                                        <p class="text-center" style="color:silver; padding-top:1px;background-color: #0ea346;color:white;">All notifications &nbsp; <i class="fa fa-bell-o"></i> </p>
                                        <li style="cursor: pointer;">
                                            <?php $__currentLoopData = auth()->user()->notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo $__env->make('view_applicant.partials.notification.'.snake_case(class_basename($notif->type)), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </li>
                                        <?php endif; ?>



                                    </ul>
                                </li>
                                <li class="footer" ><a href="#">View all</a></li>
                            </ul>
                    </li>
                    <?php else: ?>
                    <li class="dropdown notifications-menu" id="markasreadEmployer" onclick="markNotificationAsRead()">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php if(count(auth()->user()->unreadNotifications) < 1): ?>
                            <span class="fa fa-bell-o" style="color:white;"></span>
                            
                            <?php else: ?>
                            <span class="fa fa-bell-o"></span>
                            <span class="label label-danger" style="color:white;"><?php echo e(count(auth()->user()->unreadNotifications)); ?></span>
                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if(count(auth()->user()->unreadNotifications) <= 1 ): ?>
                            <li class="header">You have <?php echo e(count(auth()->user()->unreadNotifications)); ?> new notification</li>
                            <li>
                                <?php else: ?>
                                <li class="header">You have <?php echo e(count(auth()->user()->unreadNotifications)); ?> new notifications</li>
                                <li>
                                    <?php endif; ?>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">


                                        <?php if(count(auth()->user()->unreadNotifications) >= 1 ): ?>
                                        <p class="text-center" style="color:red;padding-top:1px;background-color: #3e6e8e;color:white;">Unread notification &nbsp; <i class="fa fa-star"></i> </p>
                                        <li style="cursor: pointer;">
                                            <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo $__env->make('view_employer.partials.notification.'.snake_case(class_basename($notif->type)), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </li>

                                        <?php if(count(auth()->user()->notifications) > 0 and count(auth()->user()->unreadNotifications) >= 1): ?>
                                        <br>
                                        <?php else: ?>
                                        <p class="text-center" style="color:silver; padding-top:1px;background-color: #0ea346;color:white;">All notifications &nbsp; <i class="fa fa-bell-o"></i> </p>
                                        <li style="cursor: pointer;">
                                            <?php $__currentLoopData = auth()->user()->notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo $__env->make('view_employer.partials.notification.'.snake_case(class_basename($notif->type)), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </li>

                                        <?php endif; ?>

                                        <?php elseif(count(auth()->user()->notifications) > 0 ): ?>
                                        <p class="text-center" style="color:silver; padding-top:1px;background-color: #0ea346;color:white;">All notifications &nbsp; <i class="fa fa-bell-o"></i> </p>
                                        <li style="cursor: pointer;">
                                            <?php $__currentLoopData = auth()->user()->notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo $__env->make('view_employer.partials.notification.'.snake_case(class_basename($notif->type)), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </li>
                                        <?php endif; ?>




                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <li class="dropdown">
                        <a href="#" style="color:white;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="<?php echo e(Storage::url(Auth::getUser()->avatar)); ?>" alt="user image" class="img-circle" width="25px" height="25px"> &nbsp;<?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <?php if(Auth::user()->roles()->first()->name == 'applicant'): ?>

                                <li><a href="<?php echo e(route('profile.index', [Auth::user()->id, Auth::user()->slug])); ?>">Profile</a></li>
                            <?php else: ?>
                                <li><a href="<?php echo e(route('job.index')); ?>">Jobs</a></li>
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