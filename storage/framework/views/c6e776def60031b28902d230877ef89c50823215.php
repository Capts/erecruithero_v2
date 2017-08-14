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

			<?php if(is_null($users->profile->age)): ?>
				<div class="box box-danger">
					<div class="box-header with-border">
						
						<h5 class="box-title" style="font-size: 16px;color:orange;"><i class="fa fa-exclamation-circle" style="color:red;"></i> &nbsp;Please edit your profile to automize the job search and matchmaking.</h5>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

						</div>
						<!-- /.box-tools -->
					</div>
				</div>
			<?php else: ?>
			<?php endif; ?>
			
			<?php if(Session::has('success')): ?>

				<div class="alert alert-success" role="alert">
					
					<strong>Success! </strong> <?php echo e(Session::get('success')); ?>&nbsp; <i class="fa fa-check"></i>
				</div>

			<?php endif; ?> 
			
				<div class="row">
					<div class="col-md-3">
					<!-- profile picture-->
						<div class="box box-primary">
							<div class="box-body">
								

								<p class="text-center" ><img src="<?php echo e(Storage::url(Auth::user()->avatar)); ?>" class="img-circle" alt="" height="90px" width="90px" ></p>
								<p class="text-center"><?php echo e(ucfirst($users->firstname).  ' '  . ucfirst($users->lastname)); ?> <br>
									<small style="color:silver;"><?php echo e(ucfirst($users->address->street) .  ', '  . ucfirst($users->address->barangay) . ', ' . ucfirst($users->address->city)); ?></small> <br>
									<small style="color:silver;"><?php echo e(ucfirst($users->address->province) .  ', ' . ucfirst($users->address->country)); ?></small>
								</p>
									<p class="pull-left" style="font-size: 13px;color:silver;">
												<i class="fa fa-phone">&nbsp;</i>
												<?php echo e(Auth::user()->profile->telephone); ?>

									</p>
									<p class="pull-right" style="font-size: 13px;color:silver;">
												<i class="fa fa-mobile-phone">&nbsp;</i>

												<?php echo e(Auth::user()->profile->mobile); ?>

									</p>
									<br>
								
								<div class="box-body" style="border-top: 1px solid silver;padding-top:0px;">
									<span>
										<h6> 
											<i class="fa fa-envelope-open pull-right"></i>

											<b><?php echo e(Auth::user()->email); ?></b>
										</h6>
									</span>

									<span>
										<h6>
											<i class="fa fa-birthday-cake pull-right"></i>
											<p><?php echo e(date('M j,Y', strtotime(Auth::user()->profile->bday))); ?></p>
											<p><?php echo e(Auth::user()->profile->age . ' years old'); ?></p>
										</h6>
									</span>

									<span>
										<h6>
											<i class="fa fa-heart pull-right"></i>

											<?php echo e(ucfirst(Auth::user()->profile->civil_status)); ?>

										</h6>
									</span>

									
								</div>
								<div class="box-footer">
									<p class="text-left"><?php echo e(ucfirst(Auth::user()->profile->bio)); ?></p>
								</div>

								
						</div>
						<!-- Skills -->
						

					</div>

					<div class="box box-primary">
						<div class="box-header with-border ">
							<h5 class="text-center"><i class="fa fa-language">&nbsp;</i>
							<b>SKILLS</b>
							<a class="pull-right btn btn-xs btn-flat" style="color: #d0d0d0" title="add skill" data-toggle="modal" data-target="#skill_modal-<?php echo e(Auth::user()->id); ?>"><i class="fa fa-plus"></i></a>
							</h5>
						</div>
						<div class="box-body">
							<?php echo $__env->make('view_applicant.skill.tab_index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						</div>
					</div>

					<div class="col-md-9">
						<div class="row">
						<!-- Education-->
							<div class="col-xs-6">
								<div class="box box-primary" style="padding: 20px 20px;">
									<div class="box-header with-border">
										<h5 class="text-center"><i class="fa fa-graduation-cap">&nbsp;</i>
										<b>EDUCATION</b>
										<a class="pull-right btn btn-xs btn-flat" style="color: #d0d0d0" title="add school" data-toggle="modal" data-target="#school_modal-<?php echo e(Auth::user()->id); ?>"><i class="fa fa-plus"></i></a>
										</h5>
									</div>
									<?php echo $__env->make('view_applicant.school.tab_index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								</div>
							</div>
							<div class="col-xs-6">
							 <!--experience-->
								<div class="box box-primary" style="padding: 20px 20px;">
									<div class="box-header with-border">
										<h5 class="text-center"><i class="fa fa-black-tie ">&nbsp;</i>
											<b>EXPERIENCE</b>
											<a class="pull-right btn btn-xs btn-flat" style="color: #d0d0d0" title="add experience" data-toggle="modal" data-target="#experience_modal-<?php echo e(Auth::user()->id); ?>"><i class="fa fa-plus"></i></a>
										</h5>
									</div>
									<?php echo $__env->make('view_applicant.experience.tab_index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								</div>
							</div>
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