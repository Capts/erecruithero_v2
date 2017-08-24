<!-- Modal for tertiary-->

	<!-- Modal -->
	<div class="modal fade" id="school_modal_edit-<?php echo e(Auth::user()->id); ?>" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-graduation-cap fa-2x"></i>Add school<small> | select level</small></h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">

	      		<div class="col-md-12">
	      			<div class="nav-tabs-custom">
	      				<ul class="nav nav-tabs" style="font-size:18px;">
	      					
	      					<li><a href="#tertiary" data-toggle="tab">Tertiary &nbsp;<span class="badge">3</span></a></li>
	      					<li><a href="#secondary" data-toggle="tab">Secondary &nbsp;<span class="badge">2</span></a></li>
	      					<li><a href="#primary" data-toggle="tab">Primary &nbsp;<span class="badge">1</span></a></li>
	      				</ul>
	      				<div class="tab-content">
	      					<div class="tab-pane active" id="tertiary">
								<h4 class="text-center">Tertiary Level</h4>
								<?php echo Form::model($schoolT, ['route' => ['school.update', $schoolT->id], 'method' => 'PUT']); ?>


								<div class="form-group<?php echo e($errors->has('invi') ? ' has-error' : ''); ?>">
									<?php echo Form::hidden('invi', 'tertiary'); ?>

									<small class="text-danger"><?php echo e($errors->first('invi')); ?></small>
								</div>


								<div class="form-group<?php echo e($errors->has('ter_school') ? ' has-error' : ''); ?>">
									<?php echo Form::label('ter_school', 'Name of School/University'); ?>

									<?php echo Form::text('ter_school', null, ['class' => 'form-control', 'autofocus' => 'autofocus','required' => 'required']); ?>

									<small class="text-danger"><?php echo e($errors->first('ter_school')); ?></small>
								</div>

								<div class="form-group<?php echo e($errors->has('ter_address') ? ' has-error' : ''); ?>">
									<?php echo Form::label('ter_address', 'Address'); ?>

									<?php echo Form::text('ter_address', null, ['class' => 'form-control', 'required' => 'required']); ?>

									<small class="text-danger"><?php echo e($errors->first('ter_address')); ?></small>
								</div>

								<div class="form-group<?php echo e($errors->has('ter_degree') ? ' has-error' : ''); ?>">
									<?php echo Form::label('ter_degree', 'Degree'); ?>

									<?php echo Form::select('ter_degree', ['bachelor of science' => 'bachelor of science','masteral' => 'masteral'], null, ['selected', 'placeholder' => 'select one', 'class' => 'form-control', 'required']); ?>


									<small class="text-danger"><?php echo e($errors->first('ter_degree')); ?></small>
								</div>

								<div class="form-group<?php echo e($errors->has('ter_field_of_study') ? ' has-error' : ''); ?>">
									<?php echo Form::label('ter_field_of_study', 'Field of Study'); ?>

									<?php echo Form::text('ter_field_of_study', null, ['class' => 'form-control', 'required' => 'required']); ?>

									<small class="text-danger"><?php echo e($errors->first('ter_field_of_study')); ?></small>
								</div>

								<div class="form-group<?php echo e($errors->has('ter_major') ? ' has-error' : ''); ?>">
									<?php echo Form::label('ter_major', 'Major'); ?>

									<?php echo Form::text('ter_major', null, ['class' => 'form-control', 'required' => 'required']); ?>

									<small class="text-danger"><?php echo e($errors->first('ter_major')); ?></small>
								</div>

								<div class="row">
									<div class="col-xs-6">
										<div class="form-group<?php echo e($errors->has('ter_start_year') ? ' has-error' : ''); ?>">
											<?php echo Form::label('ter_start_year', 'Year Started'); ?>

											<?php echo Form::text('ter_start_year', null, ['class' => 'form-control', 'required' => 'required']); ?>

											<small class="text-danger"><?php echo e($errors->first('ter_start_year')); ?></small>
										</div>

									</div>
									<div class="col-xs-6">
										<div class="form-group<?php echo e($errors->has('ter_end_year') ? ' has-error' : ''); ?>">
											<?php echo Form::label('ter_end_year', 'Year Graduated'); ?>

											<?php echo Form::text('ter_end_year', null, ['class' => 'form-control', 'required' => 'required']); ?>

											<small class="text-danger"><?php echo e($errors->first('ter_end_year')); ?></small>
										</div>
									</div>
								</div>

								<?php echo Form::submit('save', ['class' => 'btn btn-success btn-flat pull-right']); ?>



								<?php echo Form::close(); ?>


								<?php echo Form::open(['route'=> ['school.destroy', $schoolT->id], 'method' => 'POST']); ?>

								<?php echo e(method_field('delete')); ?>

								<?php echo Form::button("<i class='fa fa-trash'>&nbsp;</i>Remove this school", ['type' => 'submit',  "class" => 'btn btn-flat btn-danger']); ?>


								<?php echo Form::close(); ?>


	      					</div>
	      					<!-- /.tab-pane -->

	      					<div class="tab-pane" id="secondary">
	      						<h4 class="text-center">Secondary Level</h4>
	      				
	      					</div>


	      					<div class="tab-pane" id="primary">
	      						<h4 class="text-center">Primary Level</h4>
	      						

	      					</div>
	      					<!-- /.tab-pane -->
	      				</div>
	      				<!-- /.tab-content -->
	      			</div>
	      			<!-- /.nav-tabs-custom -->


	      		</div>



	      	</div>
	      </div>
	    </div>
	  </div>
	</div>

<!--End Modal-->


