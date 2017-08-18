<?php $__env->startSection('title', 'E-RECRUIT HERO | Profile'); ?>

<?php $__env->startSection('content'); ?>


<div class="wrapper">

	<header class="main-header">
		<?php echo $__env->make('view_employer.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</header>

	<!-- =============================================== -->

	<!-- Left side column. contains the sidebar -->
	<?php echo $__env->make('view_employer.partials.employer_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- =============================================== -->

	<div class="content-wrapper">
		
		<!-- Main content -->
		<section class="content">

			<div class="row">
				<div class="col-md-3">
					<div class="box box-success">
						<div class="box-header"></div>
						<div class="box-body">
							
							<hr>

							<span>
								<h6> 
									<i class="fa fa-envelope-open pull-right"></i>

									<b><?php echo e($applicant->email); ?></b>
								</h6>
							</span>
							<span>
								<h6>
									
									<?php if(is_null($applicant->profile->telephone)): ?>
										
									<?php else: ?>
									<i class="fa fa-phone pull-right"></i>
									<p class="pull-left">
										<span><?php echo e($applicant->profile->telephone); ?></span>
										
									</p><br>
									<?php endif; ?>
								</h6>
							</span>
							<span>
								<h6>
									<i class="fa fa-birthday-cake pull-right"></i>
									<p><?php echo e(date('M j,Y', strtotime($applicant->profile->bday))); ?></p>
									<p><?php echo e($applicant->profile->age . ' years old'); ?></p>
								</h6>
							</span>

							<span>
								<h6>
									<i class="fa fa-heart pull-right"></i>

									<?php echo e(ucfirst($applicant->profile->civil_status)); ?>

								</h6>
							</span>
							<hr>

							<?php if(strlen($applicant->profile->bio) >  150): ?>
										<?php echo e(ucfirst(str_limit($applicant->profile->bio, 150))); ?> <a href="#">read more</a>
							<?php else: ?>

							<?php echo e(ucfirst($applicant->profile->bio)); ?>



							<?php endif; ?>

						</div>
						<div class="box-footer">
							<div class="">
								<button class="btn btn-flat bg-olive btn-block">Invite for interview</button>
							</div>
						</div>

					
					</div>


					<!-- SKILLS -->
					<div class="box box-success">
						<div class="box-header with-border">
							<h4 class="text-center"><i class="fa fa-language">&nbsp;</i>
								<b>SKILLS</b>

							</h4>
						</div>
						<div class="box-body">
							<div class="row">
								<?php if($applicant->skill->isEmpty()): ?>
									<div class="col-md-6">
										
										<small style="color: silver;">nothing to show here</small>
									</div>

								<?php else: ?>
									<?php $__currentLoopData = $applicant->skill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="col-md-6">
											<p class="label label-primary" style="font-size: 15px;"><?php echo e(ucfirst(str_limit($skill->skill_name, 21))); ?></p><br><br>
										</div>
										
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>
								

							</div>
						</div>
					</div>	



				</div>
				


				<div class="col-md-4">
					<div class="box box-success">
						<div class="box-header with-border">
							<h4 class="text-center"><i class="fa fa-black-tie ">&nbsp;</i>
								<b>EXPERIENCE</b>
							</h4>
						</div>
						<div class="box-body">
						<?php if($applicant->experience->isEmpty()): ?>
							<small style="color: silver">nothing to show here</small>
							<?php else: ?>
							<?php $__currentLoopData = $loopExp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<div class="box-body">
								<a href="#"><?php echo e($exp->exp_title); ?> </a>at  <?php echo e($exp->exp_company); ?> <br>
								<?php echo e($exp->exp_activities); ?> <br>
								<?php echo e($exp->exp_span_time); ?>

							</div>




							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>

						</div>
					</div>



						
					


				</div>


				<div class="col-md-5">
					<div class="box box-success">
						<div class="box-header with-border">
							
							<h4 class="text-center"><i class="fa fa-graduation-cap">&nbsp;</i>
							<b>EDUCATION</b>
							</h4>
						</div>
						<div class="box-body">


								<?php if(is_null($applicant->schoolTertiary)): ?>
									<small style="color: silver">nothing to show here</small>
								<?php else: ?>

									<h4><span class="badge" style="background-color: #357ecc;">3</span>&nbsp;Tertiary </h4>
									

								<?php $__currentLoopData = $applicant->schoolTertiary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loopTer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

								<div class="box-body">
									<div class="box-header with-border" style="">
									
										<p>Attended <a href="#"><?php echo e($loopTer->ter_school); ?></a></p>
										<?php echo e($loopTer->ter_address); ?> <br> 
										<?php echo e(ucfirst($loopTer->ter_degree) . ' in '  . ucfirst($loopTer->ter_field_of_study)); ?> <br> 
										<?php echo e($loopTer->ter_major); ?> <br> 
										<?php echo e($loopTer->ter_start_year. ' - ' .$loopTer->ter_end_year); ?> <br> 
									
										
										
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								<?php endif; ?>



								<?php if(is_null($applicant->schoolSecondary)): ?>
									<small style="color: silver">nothing to show here</small>
								<?php else: ?>
								<h4><span class="badge" style="background-color: #357ecc;">2</span>&nbsp;Secondary</h4>
								<?php $__currentLoopData = $applicant->schoolSecondary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loopSec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="box-body">
									<div class="box-header ">
										<p>Attended &nbsp; <a href="#"><?php echo e($loopSec->sec_school); ?></a>&nbsp;in <?php echo e($loopSec->sec_address); ?></p>
										<?php echo e($loopSec->sec_start . ' - ' . $loopSec->sec_end); ?> 
										
									</div>


								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>


								<?php if(is_null($applicant->schoolPrimary)): ?>
									<small style="color: silver">nothing to show here</small>
								<?php else: ?>
								<h4><span class="badge" style="background-color: #357ecc;">1</span>&nbsp;Primary</h4>
								<?php $__currentLoopData = $applicant->schoolPrimary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loopPri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="box-body">
									<div class="box-header  with-border">

										<p>Attended&nbsp; <a href="#"><?php echo e($loopPri->pri_school); ?></a>&nbsp;in <?php echo e($loopPri->pri_address); ?></p>
										
										<?php echo e($loopPri->pri_start . ' - ' . $loopPri->pri_end); ?>

										
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>









						</div>
					</div>
				</div>

				


			</div>
			


		</section>
	</div>
	<?php echo $__env->make('view_employer.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	

</div>
<!-- ./wrapper -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('view_employer.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>