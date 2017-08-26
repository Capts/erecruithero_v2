<!-- Modal for tertiary-->

	<!-- Modal -->

	<?php if(is_null($schoolT) and is_null($schoolS) and is_null($schoolP) ): ?>

		
	<?php else: ?>
		<div class="modal fade" id="school_modal_editP-<?php echo e(Auth::user()->id); ?>" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	     <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-graduation-cap fa-2x"></i>Edit education from <small> <a href="#"><?php echo e($schoolP->pri_school); ?></a></small></h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">

	      		<div class="col-md-12">
	      			
	      						<h4 class="text-center">Primary Level</h4>
	      						<?php echo Form::model($schoolP, ['route' => ['school.update', $schoolP->id], 'method' => 'PUT']); ?>

	      							    
      							    <div class="form-group<?php echo e($errors->has('invi') ? ' has-error' : ''); ?>">
      							        <?php echo Form::hidden('invi', 'primary'); ?>

      							        <small class="text-danger"><?php echo e($errors->first('invi')); ?></small>
      							    </div>
	      							

	      						    <div class="form-group<?php echo e($errors->has('pri_school') ? ' has-error' : ''); ?>">
	      						        <?php echo Form::label('pri_school', 'Name of School'); ?>

	      						        <?php echo Form::text('pri_school', null, ['class' => 'form-control','required' => 'required']); ?>

	      						        <small class="text-danger"><?php echo e($errors->first('pri_school')); ?></small>
	      						    </div>

	      						    <div class="form-group<?php echo e($errors->has('pri_address') ? ' has-error' : ''); ?>">
	      						        <?php echo Form::label('pri_address', 'Address'); ?>

	      						        <?php echo Form::text('pri_address', null, ['class' => 'form-control', 'required' => 'required']); ?>

	      						        <small class="text-danger"><?php echo e($errors->first('pri_address')); ?></small>
	      						    </div>

	      						   <div class="row">
	      						   	<div class="col-xs-6">
	      						   		<div class="form-group<?php echo e($errors->has('pri_start') ? ' has-error' : ''); ?>">
	      						   		    <?php echo Form::label('pri_start', 'Year Started'); ?>

	      						   		    <?php echo Form::text('pri_start', null, ['class' => 'form-control', 'required' => 'required']); ?>

	      						   		    <small class="text-danger"><?php echo e($errors->first('pri_start')); ?></small>
	      						   		</div>

	      						   		
	      						   	</div>
	      						   	<div class="col-xs-6">
	      						   		<div class="form-group<?php echo e($errors->has('pri_end') ? ' has-error' : ''); ?>">
	      						   		    <?php echo Form::label('pri_end', 'Year Graduated'); ?>

	      						   		    <?php echo Form::text('pri_end', null, ['class' => 'form-control', 'required' => 'required']); ?>

	      						   		    <small class="text-danger"><?php echo e($errors->first('pri_end')); ?></small>
	      						   		</div>
	      						   	</div>
	      						   </div>
	      						    <div class="section">
	      						    	
	      						    	<?php echo Form::submit('save', ['class' => 'btn btn-success btn-flat pull-right']); ?>

	      						    </div>
	      						    <br>
	      						    <br>
	      						<?php echo Form::close(); ?>




	      		</div>



	      	</div>
	      </div>
	    </div>
	  </div>
	</div>
	<?php endif; ?>
	

<!--End Modal-->


