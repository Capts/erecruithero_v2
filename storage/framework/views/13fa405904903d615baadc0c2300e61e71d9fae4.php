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
				<div class="col-md-12">
					<?php if(Session::has('success')): ?>

					  <div class="alert alert-success" role="alert">
					    <div class="box-tools pull-right">
					      

					    </div>
					    <i class="fa fa-check"></i>&nbsp;<?php echo e(Session::get('success')); ?> 
					  </div>
					<?php elseif(Session::has('danger')): ?>
					  <div class="alert alert-danger" role="alert">
					    <div class="box-tools pull-right">
					      

					    </div>
					    <i class="fa fa-times"></i>&nbsp;<?php echo e(Session::get('danger')); ?> 
					  </div>
					<?php endif; ?>
				</div>
				<div class="col-md-3">
					<div class="box box-primary">
						<div class="box-header"></div>
						<div class="box-body">
							<p class="text-center" ><img src="<?php echo e(Storage::url($thisUser->avatar)); ?>" class="img-circle" alt="" height="90px" width="90px" ></p>

							<p class="text-center"><?php echo e(ucfirst($thisUser->firstname).  ' '  . ucfirst($thisUser->lastname)); ?> <br>
								<small style="color:silver;"><?php echo e(ucfirst($applicant->address->street) .  ', '  . ucfirst($applicant->address->barangay) . ', ' . ucfirst($applicant->address->city)); ?></small> <br>
								<small style="color:silver;"><?php echo e(ucfirst($applicant->address->province) .  ', ' . ucfirst($applicant->address->country)); ?></small>
									<br>
								
								
									<i style="color:silver;font-size: 16px" class="fa fa-mobile-phone">&nbsp;</i>
									<span style="color:silver;font-size: 12px"><?php echo e($applicant->profile->mobile); ?></span>
							</p>
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
										<?php echo e(ucfirst(str_limit($applicant->profile->bio, 150))); ?> <a href="#" data-toggle="modal" data-target="#readmore1">read more</a>
										<?php echo $__env->make('view_employer.application.read_more_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
							<?php else: ?>

							<?php echo e(ucfirst($applicant->profile->bio)); ?>



							<?php endif; ?>

						</div>
						

					
					</div>


					<!-- SKILLS -->
					<div class="box box-primary">
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
											<span class="fa fa-circle-o" style="font-size: 16px;color: #42a3f7;">&nbsp;</span>
											<span ><?php echo e(ucfirst(str_limit($skill->skill_name, 21))); ?></span><br><br>
										</div>
										
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>
								

							</div>
						</div>
					</div>	



				</div>
				


				<div class="col-md-4">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h4 class="text-center"><i class="fa fa-black-tie ">&nbsp;</i>
								<b>EXPERIENCE</b>
							</h4>
						</div>
						<div class="box-body">
						<?php if($applicant->experience->isEmpty()): ?>
							<small style="color: silver">nothing to show here</small>
						<?php else: ?>
							<?php $__currentLoopData = $applicant->experience; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

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
					<div class="box box-primary">
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
			
		
			<?php if(is_null($getStatus)): ?>
			<div class="col-md-4 col-md-offset-8">
				<?php echo Form::open(['route' => ['application.invite', $thisUser->id], 'method' => 'POST']); ?>

				
				   <div class="row">
				   	<div class="col-md-6">
				   		 <div class="form-group<?php echo e($errors->has('job_id') ? ' has-error' : ''); ?>">
				        
				        <?php echo Form::hidden('job_id', $getJobId->id, ['class' => 'form-control', 'required' => 'required']); ?>

				        <small class="text-danger"><?php echo e($errors->first('job_id')); ?></small>
				    </div>
				   	</div>
				   	<div class="col-md-6">
				   		<div class="form-group<?php echo e($errors->has('user_id') ? ' has-error' : ''); ?>">
				        
				        <?php echo Form::hidden('user_id', $thisUser->id, ['class' => 'form-control', 'required' => 'required']); ?>

				        <small class="text-danger"><?php echo e($errors->first('user_id')); ?></small>

				        <div class="form-group<?php echo e($errors->has('invited_by') ? ' has-error' : ''); ?>">
				            <?php echo Form::hidden('invited_by', auth()->user()->id, ['class' => 'form-control', 'required' => 'required']); ?>

				            <small class="text-danger"><?php echo e($errors->first('invited_by')); ?></small>
				        </div>
				    </div>
				   	</div>
				   </div>

				    
				
					<button class="btn btn-flat btn-primary btn-lg btn-block"><i class="fa fa-calendar pull-left">&nbsp;</i>Invite for interview</button>
				
				<?php echo Form::close(); ?>

				
			</div>
			<?php else: ?>
				

				<?php echo Form::open(['route'=> ['application.cancel', $getStatus->id, $thisUser->id], 'method' => 'POST']); ?>

					<?php echo e(method_field('delete')); ?>

			    	<?php echo Form::submit('Cancel Invitation', ["class" => 'btn btn-flat btn-danger btn-lg pull-right']); ?>


	    		<?php echo Form::close(); ?>


			<?php endif; ?>
			<br><br><br><br>
			

		</section>
	</div>
	<?php echo $__env->make('view_employer.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	

</div>
<!-- ./wrapper -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('view_employer.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>