<?php $__env->startSection('title', 'E-RECRUIT HERO | Update your profile'); ?>

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

			<div id="myModal" class="modal fade" keboard="false" data-backdrop="static">
			    <div class="modal-dialog modal-lg" role="document">
			        <div class="modal-content">
			            <div class="modal-header" style="background-color: #346b3e; color: white;">
			                <a href="<?php echo e(route('profile.index', [Auth::user()->id, Auth::user()->slug] )); ?>" style="color:white;" class="close" aria-hidden="true">&times;</a> 
			                <h4 class="modal-title text-center">Update your profile</h4>
			            </div>
			            <div class="modal-body">
            				<?php echo Form::model($users, ['route' => ['profile.update', $users->id], 'method' => 'PUT']); ?>

							<div class="row">
								<div class="col-md-6">
				                	<div class="row">
				                		<fieldset>
				                			<legend><h5 style="margin-left: 10px;color:#40a04d;"><b>Basic information</b></h5></legend>
				                				
				                					<div class="col-md-6">
				                						<div class="form-group<?php echo e($errors->has('firstname') ? ' has-error' : ''); ?>">
				                						    <?php echo Form::label('firstname', 'First name'); ?>

				                						    <?php echo Form::text('firstname', null, ['class' => 'form-control', 'required' => 'required']); ?>

				                						    <small class="text-danger"><?php echo e($errors->first('firstname')); ?></small>
				                						</div>
				                					</div>
				                					<div class="col-md-6">
				                						<div class="form-group<?php echo e($errors->has('lastname') ? ' has-error' : ''); ?>">
				                						    <?php echo Form::label('lastname', 'Last name'); ?>

				                						    <?php echo Form::text('lastname', null, ['class' => 'form-control', 'required' => 'required']); ?>

				                						    <small class="text-danger"><?php echo e($errors->first('lastname')); ?></small>
				                						</div>
				                					</div>

		                						   

		                						
		                							<div class="col-md-6">
		                								<div class="form-group<?php echo e($errors->has('bday') ? ' has-error' : ''); ?>">
		                								    <?php echo Form::label('bday', 'Birthday'); ?>

		                								    <?php echo Form::text('bday', ( isset($users->profile->bday) ? $users->profile->bday : null ), ['class' => 'form-control manual', 'placeholder'=>'mm/dd/yyyy', 'required' => 'required']); ?>

		                								    <small class="text-danger"><?php echo e($errors->first('bday')); ?></small>
		                								</div>
		                							</div>
		                							
		                								    <?php echo Form::hidden('age', ( isset($users->profile->age) ? $users->profile->age : null ), ['class' => 'form-control', 'required' => 'required', 'id' => 'age', 'max' => '2' , 'readonly', 'step' => ' ']); ?>

		                								    <small class="text-danger"><?php echo e($errors->first('age')); ?></small>
		                								
		                							<div class="col-md-6">
		                								<div class="form-group<?php echo e($errors->has('civil_status') ? ' has-error' : ''); ?>">
		                								    <?php echo Form::label('civil_status', 'Civil Status'); ?>

		                								    <?php echo Form::select('civil_status', ['single' => 'single','married' => 'married'], ( isset($users->profile->civil_status) ? $users->profile->civil_status : null ), ['selected', 'placeholder' => 'I am', 'class' => 'form-control', 'required']); ?>


		                								    <small class="text-danger"><?php echo e($errors->first('civil_status')); ?></small>
		                								</div>
		                							</div>
		                						
											</fieldset>
											<fieldset>
												<legend><h5 style="margin-left: 10px;color:#40a04d;"><b>Contact Details</b></h5></legend>
													
		                							<div class="col-md-6">
		                								<div class="form-group<?php echo e($errors->has('telephone') ? ' has-error' : ''); ?>">
		                								    <?php echo Form::label('telephone', 'Telephone'); ?>

		                								    <?php echo Form::text('telephone', ( isset($users->profile->telephone) ? $users->profile->telephone : null), ['placeholder' => 'leave blank if none','class' => 'form-control']); ?>

		                								    <small class="text-danger"><?php echo e($errors->first('telephone')); ?></small>
		                								</div>
		                							</div>
		                							<div class="col-md-6">
		                								<div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
		                								    <?php echo Form::label('mobile', 'Mobile'); ?>

		                								    <?php echo Form::text('mobile', ( isset($users->profile->mobile) ? $users->profile->mobile : null ), ['class' => 'form-control']); ?>

		                								    <small class="text-danger"><?php echo e($errors->first('mobile')); ?></small>
		                								</div>
		                							</div>
			                						
											</fieldset>
		                					<fieldset>
		                						<legend>
		                							<h5 style="margin-left:10px;color:#40a04d;"><b>Address</b></h5>
		                						</legend>
		                						<div class="col-md-6">
		                							<div class="form-group<?php echo e($errors->has('street') ? ' has-error' : ''); ?>">
		                							    <?php echo Form::label('street', 'Street'); ?>

		                							    <?php echo Form::text('street',  ( isset($users->address->street) ? $users->address->street : null ), ['class' => 'form-control', 'required' => 'required']); ?>

		                							    <small class="text-danger"><?php echo e($errors->first('street')); ?></small>
		                							</div>
		                						</div>
		                						<div class="col-md-6">
		                							<div class="form-group<?php echo e($errors->has('barangay') ? ' has-error' : ''); ?>">
		                							    <?php echo Form::label('barangay', 'Barangay'); ?>

		                							    <?php echo Form::text('barangay',  ( isset($users->address->barangay) ? $users->address->barangay : null ), ['class' => 'form-control', 'required' => 'required']); ?>

		                							    <small class="text-danger"><?php echo e($errors->first('barangay')); ?></small>
		                							</div>
		                						</div>
		                						<div class="col-md-6">
		                							<div class="form-group<?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
		                							    <?php echo Form::label('city', 'City'); ?>

		                							    <?php echo Form::text('city',  ( isset($users->address->city) ? $users->address->city : null ), ['class' => 'form-control', 'required' => 'required']); ?>

		                							    <small class="text-danger"><?php echo e($errors->first('city')); ?></small>
		                							</div>
		                						</div>
		                						<div class="col-md-6">
		                							<div class="form-group<?php echo e($errors->has('province') ? ' has-error' : ''); ?>">
		                							    <?php echo Form::label('province', 'Province'); ?>

		                							    <?php echo Form::text('province',  ( isset($users->address->province) ? $users->address->province : null ), ['class' => 'form-control', 'required' => 'required']); ?>

		                							    <small class="text-danger"><?php echo e($errors->first('province')); ?></small>
		                							</div>
		                						</div>
		                						<div class="col-md-12">
		                							<div class="form-group<?php echo e($errors->has('country') ? ' has-error' : ''); ?>">
		                							    <?php echo Form::label('country', 'Country'); ?>

		                							    <?php echo Form::text('country',  ( isset($users->address->country) ? $users->address->country : null ), ['class' => 'form-control', 'required' => 'required']); ?>

		                							    <small class="text-danger"><?php echo e($errors->first('country')); ?></small>
		                							</div>
		                						</div>
		                					</fieldset>
				                					
				                	</div>
				                	
								</div>
								<div class="col-md-6">
									<div class="col-md-12">
										
									</div>

									<div class="col-md-12">
										
										<div class="form-group<?php echo e($errors->has('bio') ? ' has-error' : ''); ?>">
										    <?php echo Form::label('bio', 'Bio or objective', ['style' => 'color:#40a04d;']); ?>

										    <?php echo Form::textarea('bio', ( isset($users->profile->bio) ? $users->profile->bio : null ), ['class' => 'form-control', 'required' => 'required']); ?>

										    <small class="text-danger"><?php echo e($errors->first('bio')); ?></small>
										</div>
										<?php echo Form::submit('save profile', ['class' => 'btn-block btn btn-success btn-flat btx-sm pull-right']); ?>

									</div>
								</div>
							</div>
				        <?php echo Form::close(); ?>

			                	
								
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