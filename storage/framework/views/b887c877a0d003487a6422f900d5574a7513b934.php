<?php $__env->startSection('title', 'E-recruit Hero | ' . $job->job_title); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper">

  <header class="main-header">
    <?php echo $__env->make('view_applicant.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </header>

<!-- Left side column. contains the sidebar -->
  <?php echo $__env->make('view_applicant.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- =============================================== -->

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
            <i class="fa fa-times"></i>&nbsp;<?php echo e(Session::get('danger')); ?> 
          </div>
        <?php endif; ?> 


       <div class="box box-success">
        <div class="box-header with-border text-center">
          <h4><?php echo e(ucfirst($job->job_title)); ?> </h4>
          <small>by: </small><a href="#"><small><?php echo e(ucfirst($job->company)); ?></small></a>
        </div>
        <div class="box-body" >
          <dl class="dl-horizontal" style="padding: 10px 50px;">
                <dt>Job description:</dt>
                  <dd><?php echo e(ucfirst($job->responsibilities)); ?></dd>
                  <br>
                <dt>Qualifications:</dt>
                  <dd><?php echo e(ucfirst($job->qualifications)); ?></dd>
                  <br>
                <dt>Location:</dt>
                  <dd><?php echo e($job->work_location); ?></dd>
                  <br>
                <dt>Salary:</dt>
                 <?php if($job->salary == 'To be discussed'): ?>
                 <dd><?php echo e($job->salary); ?></dd>
                 <?php else: ?>
                 <dd><?php echo e(number_format($job->salary, 2)); ?></dd>
                 <?php endif; ?>
                <dt>Date posted:</dt>
                  <dd><?php echo e(date('M j,Y', strtotime($job->created_at))); ?></dd>
                  <br>
                  <br>
                <dt>Job post expiration:</dt>
                  <dd><?php echo e(date('M j,Y', strtotime($job->due_date))); ?></dd>
                  
          </dl>

          

       

            <?php if(is_null($getApply)): ?>

              <button class="btn btn-flat btn-primary pull-right hidden-xs" data-toggle="modal" data-target="#areyousure-<?php echo e(Auth::user()->id); ?>"><i class="fa fa-chain">&nbsp;</i>Apply for this job</button>

              <button class="btn btn-flat btn-primary btn-block visible-xs" data-toggle="modal" data-target="#areyousure-<?php echo e(Auth::user()->id); ?>"><i class="fa fa-chain">&nbsp;</i>Apply for this job</button>
            <?php else: ?>

            
              <button class="btn btn-flat btn-primary pull-right" data-toggle="modal" data-target="#areyousure1-<?php echo e($getApply->id); ?>" style="margin-left: 20px;"><i class="fa fa-times">&nbsp;</i>Cancel application</button>

              <button class="btn btn-flat disabled pull-right"><i class="fa fa-check-circle">&nbsp;</i>Already applied</button>
            <?php endif; ?>

         

           
            <?php echo $__env->make('view_applicant.jobs.areyousure_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('view_applicant.jobs.areyousure_modal1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
        
         
         
       </div>
      </div>
     
    </div>
    
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php echo $__env->make('view_applicant.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  <!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<?php echo $__env->make('view_employer.job.create_job_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('view_applicant.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>