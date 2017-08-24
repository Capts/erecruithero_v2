<!-- skill modal-->

	<!-- Modal -->
	<div class="modal fade" id="skill_modal-<?php echo e(Auth::user()->id); ?>" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-language fa-2x">&nbsp;</i>Add some skills or qualifications</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">

	      		<div class="col-md-12">
	      			
					<h4 class="text-center"></h4>
						<?php echo Form::open(['method' => 'POST', 'route' => 'skill.store']); ?>


						    <div class="form-group<?php echo e($errors->has('skill_name') ? ' has-error' : ''); ?>">
						        <?php echo Form::label('skill_name', 'Skills or qualifications'); ?>

						        <?php echo Form::text('skill_name', null, ['class' => 'form-control', 'autofocus' => 'autofocus','required' => 'required']); ?>

						        <small class="text-danger"><?php echo e($errors->first('skill_name')); ?></small>
						    </div>
						    
						    	<?php echo Form::submit('add skill', ['class' => 'btn btn-success btn-flat pull-right']); ?>

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

<!--End Modal-->


