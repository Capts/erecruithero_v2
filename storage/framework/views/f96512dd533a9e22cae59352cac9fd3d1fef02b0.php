<?php $__env->startSection('title', 'E-RECRUIT HERO | Edit your profile'); ?>

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

			<div id="myModal" class="modal fade" data-backdrop="static" data-keyboard="false">
			    <div class="modal-dialog modal-lg" role="document">
			        <div class="modal-content">
			            <div class="modal-header" style="background-color: #346b3e; color: white;">
			                
			                <i class="fa fa-user pull-left fa-2x"></i><h4 class="modal-title text-center">We need to set your profile first</h4>
			            </div>
			            <div class="modal-body">
			                		<div class="row">
			                			<?php echo Form::model($profile, ['route' => ['profile.update', $profile->user_id], 'method' => 'PUT']); ?>


			                				<div class="col-md-12">

												
			                					    <?php echo Form::hidden('firstname', $users->firstname, ['class' => 'form-control', 'required' => 'required']); ?>

			                					    <small class="text-danger"><?php echo e($errors->first('firstname')); ?></small>
			                					

			                				
			                					    <?php echo Form::hidden('lastname', $users->lastname, ['class' => 'form-control', 'required' => 'required']); ?>

			                					    <small class="text-danger"><?php echo e($errors->first('lastname')); ?></small>
			                				

												<div class="col-xs-6">
													<div class="form-group<?php echo e($errors->has('bday') ? ' has-error' : ''); ?>">
		                								    <?php echo Form::label('bday', 'Birthday'); ?>

		                								    <?php echo Form::text('bday', ( isset($users->profile->bday) ? $users->profile->bday : null ), ['class' => 'form-control manual', 'placeholder'=>'mm/dd/yyyy', 'required' => 'required']); ?>

		                								    <small class="text-danger"><?php echo e($errors->first('bday')); ?></small>
		                								</div>
												</div>
												
													    <?php echo Form::hidden('age', null, ['class' => 'form-control', 'required' => 'required','id' => 'age', 'readonly']); ?>

													    <small class="text-danger"><?php echo e($errors->first('age')); ?></small>
													
												<div class="col-xs-6">
													<div class="form-group<?php echo e($errors->has('civil_status') ? ' has-error' : ''); ?>">
													    <?php echo Form::label('civil_status', 'Civil Status'); ?>

													    <?php echo Form::select('civil_status', ['single' => 'single','married' => 'married'], null, ['selected', 'placeholder' => 'I am', 'class' => 'form-control', 'required']); ?>


													    <small class="text-danger"><?php echo e($errors->first('civil_status')); ?></small>
													</div>
												</div>
			                						
			                				</div>
			                				<div class="col-md-12">

			                					<div class="col-xs-6">
			                						
			                						<div class="form-group<?php echo e($errors->has('telephone') ? ' has-error' : ''); ?>">
			                						    <?php echo Form::label('telephone', 'Telephone'); ?>

			                						    <?php echo Form::number('telephone', null, ['class' => 'form-control', 'placeholder' => 'leave blank if none']); ?>

			                						    <small class="text-danger"><?php echo e($errors->first('telephone')); ?></small>
			                						</div>
			                					</div>
		                						<div class="col-xs-6">
		                							
		                							<div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
		                							    <?php echo Form::label('mobile', 'Mobile'); ?>

		                							    <?php echo Form::number('mobile', null, ['class' => 'form-control', 'required' => 'required']); ?>

		                							    <small class="text-danger"><?php echo e($errors->first('mobile')); ?></small>
		                							</div>
		                						</div>
			                				
			                				</div>

			                				<div class="col-md-12">
			                					<div class="col-xs-4">
			                						<div class="form-group<?php echo e($errors->has('street') ? ' has-error' : ''); ?>">
			                						    <?php echo Form::label('street', 'Street'); ?>

			                						    <?php echo Form::text('street',  ( isset($users->address->street) ? $users->address->street : null ), ['class' => 'form-control', 'required' => 'required']); ?>

			                						    <small class="text-danger"><?php echo e($errors->first('street')); ?></small>
			                						</div>
			                					</div>
			                					<div class="col-xs-4">
			                						<div class="form-group<?php echo e($errors->has('barangay') ? ' has-error' : ''); ?>">
			                						    <?php echo Form::label('barangay', 'Barangay'); ?>

			                						    <?php echo Form::text('barangay',  ( isset($users->address->barangay) ? $users->address->barangay : null ), ['class' => 'form-control', 'required' => 'required']); ?>

			                						    <small class="text-danger"><?php echo e($errors->first('barangay')); ?></small>
			                						</div>
			                					</div>
			                					<div class="col-xs-4">
			                						<div class="form-group<?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
			                						    <?php echo Form::label('city', 'City'); ?>

			                						    <?php echo Form::text('city',  ( isset($users->address->city) ? $users->address->city : null ), ['class' => 'form-control', 'required' => 'required']); ?>

			                						    <small class="text-danger"><?php echo e($errors->first('city')); ?></small>
			                						</div>
			                					</div>
			                					<div class="col-xs-6">
			                						<div class="form-group<?php echo e($errors->has('province') ? ' has-error' : ''); ?>">
			                						    <?php echo Form::label('province', 'Province'); ?>

			                						    <?php echo Form::text('province',  ( isset($users->address->province) ? $users->address->province : null ), ['class' => 'form-control', 'required' => 'required']); ?>

			                						    <small class="text-danger"><?php echo e($errors->first('province')); ?></small>
			                						</div>
			                					</div>

			                					<div class="col-xs-6">
			                						<div class="form-group<?php echo e($errors->has('country') ? ' has-error' : ''); ?>">
			                						    <?php echo Form::label('country', 'Country'); ?>

			                						    <?php echo Form::text('country',  ( isset($users->address->country) ? $users->address->country : null ), ['class' => 'form-control', 'required' => 'required']); ?>

			                						    <small class="text-danger"><?php echo e($errors->first('country')); ?></small>
			                						</div>
			                					</div>
			                				</div>




			                				<div class="col-md-12">
				                				<div class="col-xs-12">
				                					<div class="form-group<?php echo e($errors->has('bio') ? ' has-error' : ''); ?>">
			                					    <?php echo Form::label('bio', 'Bio or objective'); ?>

			                					    <?php echo Form::textarea('bio', null, ['class' => 'form-control', 'required' => 'required', 'rows' => '5']); ?>

			                					    <small class="text-danger"><?php echo e($errors->first('bio')); ?></small>
			                					</div>
				                				</div>
			                					
			                					<?php echo Form::submit('save profile', ['class' => 'btn-block btn btn-success btn-flat btx-sm pull-right']); ?>

			                				</div>
			                					
			                			<?php echo Form::close(); ?>

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