

<a href="<?php echo e(url('/')); ?>" class="logo">
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
            <li class="dropdown notifications-menu"  id="markasread" onclick="markNotificationAsRead()">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php if(count(auth()->user()->unreadNotifications) < 1): ?>
                        <span class="fa fa-bell-o"></span>


                    <?php else: ?>
                        <span class="fa fa-bell-o"></span>
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
            <!-- Tasks: style can be found in dropdown.less -->
           
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu" style="margin-right: 120px;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo e(Storage::url(Auth::user()->avatar)); ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo e(ucfirst(Auth::user()->firstname)); ?> &nbsp;<?php echo e(ucfirst(Auth::user()->lastname)); ?></span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="<?php echo e(Storage::url(Auth::user()->avatar)); ?>" class="img-circle" alt="User Image">

                    <p>
                        <?php echo e(ucfirst(Auth::user()->firstname)); ?> &nbsp;<?php echo e(ucfirst(Auth::user()->lastname)); ?>

                        <small>Member since <?php echo e(date('M j,Y', strtotime(Auth::getUser()->created_at))); ?></small>
                        
                    </p>
                </li>
                <!-- Menu Body -->
               
                <li class="user-footer">
                    
                    <div class="">
                      
                        <a class=" btn-block btn btn-flat bg-maroon" href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> &nbsp;Logout
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
