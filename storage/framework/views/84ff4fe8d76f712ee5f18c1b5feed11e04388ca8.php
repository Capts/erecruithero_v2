<?php $__env->startSection('title', 'Edit your profile'); ?>

<?php $__env->startSection('content'); ?>


<div class="wrapper">

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit user profile
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-user"></i> Applicant</a></li>
			<li class="active">Edit user profile</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

	
		<div class="row">
			<?php echo $__env->make('view_applicant.partials.applicants_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<div class="col-md-9">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h5 class="box-title" style="font-size: 16px;color:orange;"><i class="fa fa-exclamation-circle" style="color:orange;"></i> &nbsp;Please edit your profile to automize the job search and matchmaking.</h5>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

						</div>
						<!-- /.box-tools -->
					</div>
				</div>

			</div>
			
			<div class="col-md-9">
				<div class="col-md-6">
					<div class="col-xs-12 no-padding">
						<div class="box box-warning ">
							<div class="box-header with-border">
								<h5>Edit personal information</h5>
							</div>
							<div class="box-body ">
								<?php echo Form::model($profile, ['route' => ['profile.update', $profile->id], 'method' => 'PUT']); ?>

								
								    <div class="form-group<?php echo e($errors->has('bday') ? ' has-error' : ''); ?>">
								        <?php echo Form::label('bday', 'Birthdate'); ?>

								        <?php echo Form::text('bday', null, ['class' => 'form-control', 'required' => 'required', 'disabled']); ?>

								        <small class="text-danger"><?php echo e($errors->first('bday')); ?></small>
								    </div>

								    <div class="form-group<?php echo e($errors->has('civil_status') ? ' has-error' : ''); ?>">
								        <?php echo Form::label('civil_status', 'Civil Status'); ?>

								        <?php echo Form::text('civil_status', null, ['class' => 'form-control', 'required' => 'required','disabled']); ?>

								        <small class="text-danger"><?php echo e($errors->first('civil_status')); ?></small>
								    </div>

							    	<div class="form-group<?php echo e($errors->has('bio') ? ' has-error' : ''); ?>">
							    	    <?php echo Form::label('bio', 'Bio'); ?>

							    	    <?php echo Form::textarea('bio', null, ['class' => 'form-control', 'required' => 'required', 'disabled']); ?>

							    	    <small class="text-danger"><?php echo e($errors->first('bio')); ?></small>
							    	</div>

								
									
								
								<?php echo Form::close(); ?>

							</div>
						</div>
					</div>
					<div class="col-xs-12 no-padding">
						<div class="box box-warning ">
							<div class="box-header with-border">
								<h5>Edit Education</h5>
							</div>
							<div class="box-body ">
								<?php echo Form::model($profile, ['route' => ['profile.update', $profile->id], 'method' => 'PUT']); ?>

								
								    <div class="form-group<?php echo e($errors->has('bday') ? ' has-error' : ''); ?>">
								        <?php echo Form::label('bday', 'Birthdate'); ?>

								        <?php echo Form::text('bday', null, ['class' => 'form-control', 'required' => 'required', 'disabled']); ?>

								        <small class="text-danger"><?php echo e($errors->first('bday')); ?></small>
								    </div>

								    <div class="form-group<?php echo e($errors->has('civil_status') ? ' has-error' : ''); ?>">
								        <?php echo Form::label('civil_status', 'Civil Status'); ?>

								        <?php echo Form::text('civil_status', null, ['class' => 'form-control', 'required' => 'required','disabled']); ?>

								        <small class="text-danger"><?php echo e($errors->first('civil_status')); ?></small>
								    </div>

							    	<div class="form-group<?php echo e($errors->has('bio') ? ' has-error' : ''); ?>">
							    	    <?php echo Form::label('bio', 'Bio'); ?>

							    	    <?php echo Form::textarea('bio', null, ['class' => 'form-control', 'required' => 'required', 'disabled']); ?>

							    	    <small class="text-danger"><?php echo e($errors->first('bio')); ?></small>
							    	</div>

								
									
								
								<?php echo Form::close(); ?>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					
				</div>
			</div>

		</div>

	</section>
</div>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('view_applicant.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>