<!-- skill modal-->

	<!-- Modal -->
	<div class="modal fade" id="experience_modal-<?php echo e(Auth::user()->id); ?>" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-black-tie fa-2x">&nbsp;</i>Boost your career by adding your experiences.</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">

	      		<div class="col-md-12">
	      			
					<h4 class="text-center"></h4>
						<?php echo Form::open(['method' => 'POST', 'route' => 'experience.store']); ?>

							<div class="row">
								<div class="col-xs-6">
									<div class="form-group<?php echo e($errors->has('exp_title') ? ' has-error' : ''); ?>">
									    <?php echo Form::label('exp_title', 'Experience'); ?>

									    <?php echo Form::text('exp_title', null, ['class' => 'form-control', 'required' => 'required']); ?>

									    <small class="text-danger"><?php echo e($errors->first('exp_title')); ?></small>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group<?php echo e($errors->has('exp_company') ? ' has-error' : ''); ?>">
									    <?php echo Form::label('exp_company', 'Company'); ?>

									    <?php echo Form::text('exp_company', null, ['class' => 'form-control', 'required' => 'required']); ?>

									    <small class="text-danger"><?php echo e($errors->first('exp_company')); ?></small>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group<?php echo e($errors->has('exp_activities') ? ' has-error' : ''); ?>">
									    <?php echo Form::label('exp_activities', 'Participation/Activities performed'); ?>

									    <?php echo Form::textarea('exp_activities', null, ['class' => 'form-control', 'required' => 'required']); ?>

									    <small class="text-danger"><?php echo e($errors->first('exp_activities')); ?></small>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
									  <label>From       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     To:</label>

									  <div class="input-group">
									    <div class="input-group-addon">
									      <i class="fa fa-calendar"></i>
									    </div>
									    <?php echo Form::text('exp_span_time', null, ['class'=> 'form-control pull-right', 'id' => 'reservation']); ?>

									    
									  </div>
									  <!-- /.input group -->
									</div>
									<br><br><br>
									<?php echo Form::button('<i class="fa fa-save">&nbsp;&nbsp;</i>save this experience', ['type' => 'submit', 'class' => 'btn btn-flat bg-olive btn-block pull-right']); ?>

								</div>
								
								
							</div>
							
						  
						<?php echo Form::close(); ?>


	      				


	      		</div>



	      	</div>
	      </div>
	    </div>
	  </div>
	</div>

<!--End Modal-->


