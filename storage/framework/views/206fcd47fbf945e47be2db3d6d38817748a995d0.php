<?php $__env->startSection('title', 'Welcome and enjoy'); ?>


<?php $__env->startSection('content'); ?>



<section id="intro" class="text-intro no-padding-bottom">
  <img src="/img/b1.jpg" alt="">
  <div class="container" style="position: absolute;top: 60px;padding: 120px 120px">
    <div class="row" >
      

            
            <?php if(Auth::check()): ?>
              <?php if(Auth::user()->roles()->first()->name === 'applicant'): ?>
                <?php echo Form::open(['method' => 'GET', 'route' => 'searchjob', 'class' => 'sidebar-form' ]); ?>

                <div class="col-md-12">
                  	<h1>Built For Job Seekers</h1>
                  	<h3 class="weight-300">Find the job you want and apply! It's easy as one-two-tree.</h3>
                 </div>

                  <div class="row">
                    <div class="col-md-10">
                  		<div class="input-group">

	                   		<input type="text" name="searchApp" class="form-control input-lg" placeholder="Search jobs">
	                    	<span class="input-group-btn">
	                          <button type="submit"  id="search-btn" class="btn btn-flat bg-olive btn-lg"><i class="fa fa-search"></i>
	                          </button>
	                        </span>
                  		</div>
                  	</div>
                  </div>

                <?php echo Form::close(); ?>


              <?php else: ?>
                <?php echo Form::open(['method' => 'GET', 'route' => 'employer.search', 'class' => 'sidebar-form']); ?>

                <div class="col-md-12">
                  	<h1>Welcome, <?php echo e(Auth::user()->firstname); ?>!</h1>
                  	<h3 class="weight-300">Search for Applicants</h3>
                 </div>

                  <div class="row">
                    <div class="col-md-10">
                  <div class="input-group">
                    <input type="text" name="search" class="form-control input-lg" placeholder="Search jobs">
                    <span class="input-group-btn">
                          <button type="submit"  id="search-btn" class="btn btn-flat bg-olive btn-lg"><i class="fa fa-search"></i>
                          </button>
                        </span>
                  </div>

                

                <?php echo Form::close(); ?>

	            </div>

	        </div>
              <?php endif; ?>
            <?php else: ?>
             
            <?php endif; ?>

           
           
         
      </div>


      <?php if(Auth::check()): ?>
      <?php else: ?>
      <br><br><br>

      <div class="container">
        <h4><a href="/login" >Login</a></h4> &nbsp; <span>if you don't have account. It's <em>FREE!</em></span><br><br>
        <h4><a href="/register" >Register</a></h4> &nbsp; if you want to join.
      </div>
      <?php endif; ?>


    </section>


    <div class="container">
      <br>
      <div id="content">
        <div class="row">
          <div class="col-md-4">
            <div class="well">
              <legend class="text-center">About Us</legend>
              <fieldset>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ea debitis. Rem cupiditate expedita ut harum, minima iure et eveniet architecto, quos mollitia officiis totam excepturi vitae, commodi sapiente tempora!
              </fieldset>
            </div>
          </div>
          <div class="col-md-4">
            <div class="well">
              <legend class="text-center">Contact Us</legend>
              <fieldset>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ea debitis. Rem cupiditate expedita ut harum, minima iure et eveniet architecto, quos mollitia officiis totam excepturi vitae, commodi sapiente tempora!
              </fieldset>
            </div>
          </div>
          <div class="col-md-4">
            <div class="well">
              <legend class="text-center">Learn more</legend>
              <fieldset>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ea debitis. Rem cupiditate expedita ut harum, minima iure et eveniet architecto, quos mollitia officiis totam excepturi vitae, commodi sapiente tempora!
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>