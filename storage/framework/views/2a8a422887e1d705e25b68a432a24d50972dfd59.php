<?php $__env->startSection('title', 'E-RECRUIT HERO | NewsFeed'); ?>

<?php $__env->startSection('content'); ?>

<!-- Site wrapper -->
<div class="wrapper">

	<header class="main-header">
		<?php echo $__env->make('view_applicant.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</header>

<!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
<?php echo $__env->make('view_applicant.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	
	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title"></h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
					title="Collapse">
					<i class="fa fa-minus"></i></button>
				</div>
				<div class="box-body">
					News feed starts here
				</div>
				<!-- /.box-body -->
				<div class="box-footer">

				</div>
				<!-- /.box-footer-->
			</div>
			<!-- /.box -->
		</div>

		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<?php echo $__env->make('view_applicant.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	
<!-- Add the sidebar's background. This div must be placed
	immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('view_applicant.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>