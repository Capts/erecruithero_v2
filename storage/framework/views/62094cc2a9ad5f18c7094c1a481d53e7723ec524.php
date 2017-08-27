<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
   <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body >
    <div id="app">
       <?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <?php echo $__env->make('view_employer.partials.notification.areyousure', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('applicant/js/app.js')); ?>"></script>
    <script src="/dist/js/adminlte.min.js"></script>
	 <script src="/plugins/iCheck/icheck.min.js"></script>
</body>
</html>
