<?php $__env->startSection('title', 'E-recruit Hero | Archive'); ?>

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
      <div class="col-xs-10 col-xs-offset-1">
        
        <div class="box box-primary">
          <div class="box-header ">
            <h4 class="text-center" style="color:silver;">Archived jobs</h4>
          </div>
          <div class="box-body">

            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>Job ID</th>
                  <th>Job Title</th>
                  <th>Company</th>
                  <th>Date Posted</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $archived; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr style="color:silver;cursor: not-allowed">
                    <td><?php echo e($arc->id); ?></td>
                    <td><?php echo e(str_limit($arc->job_title, 25)); ?></td>
                    <td><?php echo e(str_limit($arc->company, 25)); ?></td>
                    <td><?php echo e(date('M j,Y', strtotime($arc->created_at))); ?></td>
                    <td><a href="<?php echo e(route('job.show', $arc->id)); ?>" class="btn btn-flat btn-xs bg-olive">enable</a></td>
                    
                  </tr>

                  
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            
            </table>
             <div class="text-center">
                <?php echo $archived->links(); ?>

            </div>
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