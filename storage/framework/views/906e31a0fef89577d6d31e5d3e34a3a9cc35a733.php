<?php $__env->startSection('title', 'E-RECRUIT HERO | Edit your experience'); ?>

<?php $__env->startSection('content'); ?>


<div class="wrapper">
	<header class="main-header">
		<?php echo $__env->make('view_applicant.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</header>

	<!-- =============================================== -->

	<!-- Left side column. contains the sidebar -->
	<?php echo $__env->make('view_applicant.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- =============================================== -->

	<div class="content-wrapper">
		
		<!-- Main content -->
		<section class="content">

			<div class="col-md-10 col-md-offset-1">
				<div class="box box-default">
					<div class="box-header with-border">
						<h4><i class="fa fa-black-tie">&nbsp;</i>Edit your experience</h4>
					</div>
					<div class="box-body">

						<?php echo Form::model($exp, ['route' => ['experience.update', $exp->id], 'method' => 'PUT']); ?>

							<div class="row">
								<div class="col-xs-6">
									<div class="form-group<?php echo e($errors->has('exp_title') ? ' has-error' : ''); ?>">
									    <?php echo Form::label('exp_title', 'Experience'); ?>

									    <?php echo Form::text('exp_title', null, ['class' => 'form-control', 'required' => 'required']); ?>

									    <small class="text-danger"><?php echo e($errors->first('exp_title')); ?></small>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group<?php echo e($errors->has('exp_company') ? ' has-error' : ''); ?>">
									    <?php echo Form::label('exp_company', 'Company'); ?>

									    <?php echo Form::text('exp_company', null, ['class' => 'form-control', 'required' => 'required']); ?>

									    <small class="text-danger"><?php echo e($errors->first('exp_company')); ?></small>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group<?php echo e($errors->has('exp_activities') ? ' has-error' : ''); ?>">
									    <?php echo Form::label('exp_activities', 'Participation/Activities performed'); ?>

									    <?php echo Form::textarea('exp_activities', null, ['class' => 'form-control', 'required' => 'required']); ?>

									    <small class="text-danger"><?php echo e($errors->first('exp_activities')); ?></small>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
									  <label>From       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     To:</label>

									  <div class="input-group">
									    <div class="input-group-addon">
									      <i class="fa fa-calendar"></i>
									    </div>
									    <?php echo Form::text('exp_span_time', null, ['class'=> 'form-control pull-right', 'id' => 'reservation']); ?>

									    
									  </div>
									  <!-- /.input group -->
									</div>
									
								</div>

								
								
							</div>
							<?php echo Form::submit('Save experience', [ 'class' => 'btn btn-flat bg-olive pull-right']); ?>

							
						  
						<?php echo Form::close(); ?>

										<?php echo Form::open(['route'=> ['experience.destroy', $exp->id], 'method' => 'POST']); ?>

											<?php echo e(method_field('delete')); ?>

									    	<?php echo Form::button("<i class='fa fa-trash'>&nbsp;</i>Remove this experience", ['type' => 'submit',  "class" => 'btn btn-flat btn-danger']); ?>


							    		<?php echo Form::close(); ?>

					</div>
				</div>
			</div>



		</section>
	</div>
	<?php echo $__env->make('view_applicant.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	

</div>
<!-- ./wrapper -->

<?php $__env->stopSection(); ?>



<?php echo $__env->make('view_applicant.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>