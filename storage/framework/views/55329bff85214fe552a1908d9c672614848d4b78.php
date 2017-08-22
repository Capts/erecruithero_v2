<?php $__env->startSection('title', 'E-RECRUIT HERO | Jobs'); ?>

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
	
	<!-- Main content -->
	<section class="content">

		<!-- Default box -->

			<?php if($searchjobs->isEmpty()): ?>
				
				<div class="row">
					<div class="col-xs-8 col-xs-offset-2">
						<div class="box box-danger">
							<div class="box-header with-border">
								<h4 style="color:silver;"><i class="fa fa-times">&nbsp;</i>Oh! snap</h4>
							</div>
							<div class="box-body" style="height: 450px;">
								<h4 style="color:silver;margin:160px 260px 50px;">
									No match found for: <i class="" style="color:red;font-size:17px;"><em><?php echo e($search); ?></em></i>

								</h4>
							</div>
						</div>
					</div>
				</div>
			<?php else: ?>
				
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<div class="box box-primary">
						  <div class="box-header with-border">
						    <h4 style="color:silver;">Match found! Keyword: <em style="color:green;"><?php echo e($search); ?></em> </h4 >
						  </div>
						  <div class="box-body">

						    <table class="table table-hover">
						      <thead>
						        <tr>
						          <th>Job ID</th>
						          <th>Job Title</th>
						          <th>Company</th>
						          <th>Date Posted</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php $__currentLoopData = $searchjobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						          <tr>
						            <td><?php echo e($job->id); ?></td>
						            <td><a href="<?php echo e(route('jobs.show', $job->id)); ?>"><?php echo e(str_limit($job->job_title, 25)); ?></a></td>
						            <td><?php echo e(str_limit($job->company, 25)); ?></td>
						            <td><?php echo e(date('M j,Y', strtotime($job->created_at))); ?></td>
						          </tr>
						          
						       

						        
						        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						      </tbody>
						    
						    </table>
						     <div class="text-center">
						        <?php echo $searchjobs->links(); ?>

						    </div>
						  </div>

						</div>
						
					</div>
					
				</div>
				
				
				
		        
			<?php endif; ?>

			
			<!-- /.box -->

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