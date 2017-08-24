<?php $__env->startSection('title', 'E-RECRUIT HERO | Edit School'); ?>

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

			<div class="col-md-10 col-md-offset-1">
				<div class="box box-default">
					<div class="box-header with-border">
						<h4><i class="fa fa-graduation-cap">&nbsp;</i>Edit education in <a href="#"><?php echo e($schoolT->ter_school); ?></a></h4>
					</div>
					<div class="box-body">

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
				</div>
			</div>



		</section>
	</div>
	<?php echo $__env->make('view_applicant.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	

</div>
<!-- ./wrapper -->

<?php $__env->stopSection(); ?>



<?php echo $__env->make('view_applicant.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>