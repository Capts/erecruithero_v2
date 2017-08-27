<?php $__env->startSection('title', 'E-recruit Hero | All jobs'); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper">
<!-- =============================================== -->
  <header class="main-header">
    <?php echo $__env->make('view_employer.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </header>
<!-- Left side column. contains the sidebar -->
  <?php echo $__env->make('view_employer.partials.employer_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <!-- Main content -->
  <section class="content">

  <div class="row">
     <div class="col-sm-8 ">
        
        <div class="box box-primary">
          <div class="box-header ">
            
          </div>
          <div class="box-body">

            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Job ID</th>
                  <th>Job Title</th>
                  <th>Company</th>
                  <th>Date Posted</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($job->id); ?></td>
                    <td><a href="<?php echo e(route('job.show', $job->id)); ?>"><?php echo e(ucfirst(str_limit($job->job_title, 25))); ?></a></td>
                    <td><?php echo e(str_limit($job->company, 25)); ?></td>
                    <td><?php echo e(date('M j,Y', strtotime($job->created_at))); ?></td>
                  </tr>
                  
               

                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            
            </table>
             <div class="text-center">
                <?php echo $jobs->links(); ?>

            </div>
          </div>

        </div>
      
      </div>
      <div class="col-sm-4 ">
       
        <div class="box box-info">
          <div class="box-header with-border">
          
              <h4 class="text-center" style="color:silver;">Job summary</h4>
          </div>
          <div class="box-body">

            <h4 style="color: silver;">
             
              <p>Available Jobs <span class="pull-right badge" style="margin-right:20px;font-size:15px;"><?php echo e($countAvailable); ?></span> </p>
              
              <br>
              <p>Archived Jobs <span class="pull-right badge badge-primary" style="margin-right:20px;font-size:15px;"><?php echo e($countArchive); ?></span> </p>
            </h4>
          </div> 
          <div class="box-footer">
            <h4 style="color: silver;">
              <p>All Posted Jobs<span class="pull-right badge" style="margin-right:20px;font-size:15px;"><?php echo e($countJob); ?></span></p>
            </h4>
          </div>
        </div>
      </div>
  </div>


  

    
    
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php echo $__env->make('view_employer.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>

<?php echo $__env->make('view_employer.job.create_job_modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('view_employer.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>