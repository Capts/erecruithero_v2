<?php $__env->startSection('title', 'E-RECRUIT HERO | Profile'); ?>

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

			<div class="col-md-7 col-md-offset-3">
				<div class="box box-default">
					<div class="box-header with-border">
						<h4><i class="fa fa-language">&nbsp;</i>Edit your skill</h4>
					</div>
					<div class="box-body">

						<?php echo Form::model($skill, ['route' => ['skill.update', $skill->id], 'method' => 'PUT']); ?>


						    <div class="form-group<?php echo e($errors->has('skill_name') ? ' has-error' : ''); ?>">
						        <?php echo Form::label('skill_name', 'Skill name'); ?>

						        <?php echo Form::text('skill_name', null, ['class' => 'form-control', 'autofocus' => 'autofocus','required' => 'required']); ?>

						        <small class="text-danger"><?php echo e($errors->first('skill_name')); ?></small>
						    </div>

						    	<?php echo Form::submit('save skill', ['class' => 'btn btn-success btn-flat pull-right']); ?>

						   
						<?php echo Form::close(); ?>

							
							  <?php echo Form::open(['route'=> ['skill.destroy', $skill->id], 'method' => 'POST']); ?>

								<?php echo e(method_field('delete')); ?>

						    	<?php echo Form::submit('delete skill', ["class" => 'btn btn-flat btn-danger pull-left']); ?>


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