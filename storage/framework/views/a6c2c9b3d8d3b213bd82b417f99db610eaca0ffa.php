<?php $__env->startSection('title', 'Employers News Feed'); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper">
<!-- =============================================== -->
	<header class="main-header">
		<?php echo $__env->make('view_employer.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</header>
<!-- Left side column. contains the sidebar -->
	<?php echo $__env->make('view_employer.partials.employer_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


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
	<?php echo $__env->make('view_employer.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>

<?php echo $__env->make('view_employer.job.create_job_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('view_employer.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>