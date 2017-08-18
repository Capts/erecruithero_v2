<?php $__env->startSection('title', 'E-recruit Hero | ' . $job->job_title); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper">


  <header class="main-header">
    <?php echo $__env->make('view_employer.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </header>

<!-- Left side column. contains the sidebar -->
  <?php echo $__env->make('view_employer.partials.employer_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- =============================================== -->
<?php echo $__env->make('view_employer.job.edit_job_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('view_employer.job.unarchive_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
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
          <i class="fa fa-archive"></i>&nbsp;<?php echo e(Session::get('danger')); ?> 
        </div>
      <?php endif; ?> 



      <?php if($job->status == 'archived'): ?>
      <div class="box box-danger" style="cursor: not-allowed;">
        <div class="box-header with-border text-center">
          <h4 ><?php echo e(ucfirst($job->job_title)); ?> </h4>
          <i class="fa fa-archive fa-5x" style="text-align: center;color:red;"></i>
          <small>by: </small><small><?php echo e(ucfirst($job->company)); ?></small>
        </div>
        <div class="box-body" style="opacity: 0.2;">

          <span> </span>
          <dl class="dl-horizontal">
            <dt>Responsibilities:</dt>
            <dd><?php echo e(ucfirst($job->responsibilities)); ?></dd>
            <br>
            <dt>Qualifications:</dt>
            <dd><?php echo e(ucfirst($job->qualifications)); ?></dd>
            <br>
            <dt>Location:</dt>
            <dd><?php echo e(ucfirst($job->work_location)); ?></dd>
            <br>
            <dt>Salary:</dt>
            <?php if($job->salary == 'To be discussed'): ?>
            <dd><?php echo e($job->salary); ?></dd>
            <?php else: ?>
            <dd><?php echo e(number_format($job->salary, 2)); ?></dd>
            <?php endif; ?>
            <br>
            <dt>Date posted:</dt>

            <dd><?php echo e(date('M j,Y', strtotime($job->created_at))); ?></dd>
            <br>

            <dt>Job post expiration:</dt>
              <dd><?php echo e(date('M j,Y', strtotime($job->due_date))); ?></dd>

          </dl>




        </div>
        <div class="box-footer">
          <h5 class="pull-left" style="color:red">This job is on archive </h5>
          <button  data-toggle="modal" data-target="#unarchive_modal"  class="btn btn-flat btn-success pull-right"><i class="fa fa-key">&nbsp;</i>Enable this job</button> 
        </div>



      </div>
    </div>

  </div>
      <?php else: ?>


          <div class="box box-success">
            <div class="box-header with-border text-center">
              <h4><?php echo e(ucfirst($job->job_title)); ?> </h4>
              <small>by: </small><a href=""><small><?php echo e(ucfirst($job->company)); ?></small></a>
            </div>
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>Responsibilities:</dt>
                <dd><?php echo e(ucfirst($job->responsibilities)); ?></dd>
                <br>
                <dt>Qualifications:</dt>
                <dd><?php echo e(ucfirst($job->qualifications)); ?></dd>
                <br>
                <dt>Location:</dt>
                <dd><?php echo e(ucfirst($job->work_location)); ?></dd>
                <br>
                <dt>Salary:</dt>
                <?php if($job->salary == 'To be discussed'): ?>
                <dd><?php echo e($job->salary); ?></dd>
                <?php else: ?>
                <dd><?php echo e(number_format($job->salary, 2)); ?></dd>
                <?php endif; ?>
                <br>
                <dt>Date posted:</dt>

                <dd><?php echo e(date('M j,Y', strtotime($job->created_at))); ?></dd>
                <br>
                <dt>Job post expiration:</dt>
                <dd><?php echo e(date('M j,Y', strtotime($job->due_date))); ?></dd>

              </dl>




            </div>

            <div class="box-footer">

              <?php echo Form::model($job, ['route' => ['job.update', $job->id], 'method' => 'PUT']); ?>

                <?php echo Form::hidden('status', null); ?>

                <?php echo Form::button('<i class="fa fa-archive">&nbsp;</i>Archive this job', ['type' => 'submit', 'class' => 'pull-left btn btn-flat btn-danger', 'name'=> 'btnArchive', 'value' => 'archive']); ?>

              <?php echo Form::close(); ?>


              <button data-toggle="modal" data-target="#edit_job_modal" class="btn btn-flat btn-info pull-right"><i class="fa fa-pencil">&nbsp;</i>Edit this job</button>
            </div>

          </div>
        </div>

      </div>

            
           
      <?php endif; ?>
          

          
           

          
           
          
    
    
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php echo $__env->make('view_employer.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  <!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<?php echo $__env->make('view_employer.job.create_job_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('view_employer.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>