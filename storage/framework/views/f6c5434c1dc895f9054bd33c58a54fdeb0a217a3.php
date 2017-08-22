<!-- Modal for tertiary-->

	<!-- Modal -->
	<div class="modal fade" id="create_job_modal-<?php echo e(Auth::user()->id); ?>" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-gavel fa-2x">&nbsp;</i>Create New Job</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">

	      		<div class="col-md-12">
	      			<?php echo Form::open(['method' => 'POST', 'route' => 'job.store']); ?>

	      			
	      			    <div class="form-group<?php echo e($errors->has('job_title') ? ' has-error' : ''); ?>">
	      			        <?php echo Form::label('job_title', 'Job title'); ?>

	      			        <?php echo Form::text('job_title', null, ['class' => 'form-control', 'required' => 'required', 'autofocus' => '']); ?>

	      			        <small class="text-danger"><?php echo e($errors->first('job_title')); ?></small>
	      			    </div>

	      			    <div class="row">
	      			    	<div class="col-xs-6">
	      			    		<div class="form-group<?php echo e($errors->has('company') ? ' has-error' : ''); ?>">
            					    <?php echo Form::label('company', 'Company'); ?>

            					    <?php echo Form::select('company', ['E-recruit hero' => 'E-recruit hero'], null, ['selected', 'placeholder' => 'Select company', 'class' => 'form-control', 'required']); ?>


            					    <small class="text-danger"><?php echo e($errors->first('company')); ?></small>
            					</div>

	      			    		
	      			    	</div>
	      			    	<div class="col-xs-6">
	      			    		<div class="form-group<?php echo e($errors->has('salary') ? ' has-error' : ''); ?>">
	      			    		    <?php echo Form::label('salary', 'Salary'); ?>

	      			    		    <?php echo Form::text('salary', null, ['class' => 'form-control', 'placeholder' => 'Leave blank if salary is to be discussed.']); ?>

	      			    		    <small class="text-danger"><?php echo e($errors->first('salary')); ?></small>
	      			    		</div>
	      			    	</div>
	      			    </div>

	      			    <div class="row">
	      			    	<div class="col-xs-6">
	      			    		
	      			    		 <div class="form-group<?php echo e($errors->has('work_location') ? ' has-error' : ''); ?>">
	      			    		     <?php echo Form::label('work_location', 'Work location'); ?>

	      			    		     <?php echo Form::text('work_location', null, ['class' => 'form-control', 'required' => 'required']); ?>

	      			    		     <small class="text-danger"><?php echo e($errors->first('work_location')); ?></small>
	      			    		 </div>

	      			    		

	      			    	</div>
	      			    	<div class="col-xs-6">
		      			    	<!-- Date -->
							    <div class="form-group<?php echo e($errors->has('due_date') ? ' has-error' : ''); ?>">
							      <?php echo Form::label('due_date', 'Valid until'); ?>


							      <div class="input-group date">
							        <div class="input-group-addon">
							          <i class="fa fa-calendar"></i>
							        </div>
							        <?php echo Form::text('due_date', null, ['class' => 'form-control pull-right', 'id' => 'datepicker']); ?>

							        
							        <small class="text-danger"><?php echo e($errors->first('due_date')); ?></small>
							      </div>
							      <!-- /.input group -->
							    </div>

	      			    	</div>
	      			    </div>

	      			    <div class="row">
	      			    	<div class="col-xs-6">
	      			    		<div class="form-group<?php echo e($errors->has('responsibilities') ? ' has-error' : ''); ?>">
	      			    		    <?php echo Form::label('responsibilities', 'Job description'); ?>

	      			    		    <?php echo Form::textarea('responsibilities', null, ['class' => 'form-control', 'required' => 'required']); ?>

	      			    		    <small class="text-danger"><?php echo e($errors->first('responsibilities')); ?></small>
	      			    		</div>
	      			    	</div>
	      			    	<div class="col-xs-6">
	      			    		<div class="form-group<?php echo e($errors->has('qualifications') ? ' has-error' : ''); ?>">
	      			    		    <?php echo Form::label('qualifications', 'Qualifications'); ?>

	      			    		    <?php echo Form::textarea('qualifications', null, ['class' => 'form-control', 'required' => 'required']); ?>

	      			    		    <small class="text-danger"><?php echo e($errors->first('qualifications')); ?></small>
	      			    		</div>
	      			    	</div>
	      			    </div>

	      			  
	      			
	      			    <div class="btn-group pull-right">
	      			        <?php echo Form::submit("post job", ['class' => 'btn btn-flat bg-olive']); ?>

	      			    </div>
	      			
	      			<?php echo Form::close(); ?>



	      		</div>



	      	</div>
	      </div>
	    </div>
	  </div>
	</div>

<!--End Modal-->


