@extends('view_applicant.layouts.app')

@section('title', 'Home')

@section('content')


 <div class="wrapper">
	
    <!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		User Profile
    	</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Applicant</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        @include('view_applicant.partials.applicants_sidebar')
        <!-- /.col -->
        <div class="col-md-9">
        	  <div class="box box-danger">
        	    <div class="box-header with-border">
        	      <h4 class="box-title"><i class="fa fa-exclamation-circle" style="color:orange;"></i> &nbsp;Please edit your profile to automize the job search and matchmaking.</h4>
        	      <div class="box-tools pull-right">
        	        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        	      </div>
        	      <!-- /.box-tools -->
        	    </div>
        	  </div>
        	
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#aboutme" data-toggle="tab">About me</a></li>
              <li><a href="#alljobs" data-toggle="tab">List of all jobs</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
            	<div class="active tab-pane" id="aboutme">

            		<div class="container no-padding">
	            		<div class="col-md-12">
	            		  <div class="box box-primary">
	            		    <div class="box-header with-border">
	            		      <h3 class="box-title">Personal Information</h3>

	            		      <div class="box-tools pull-right">
	            		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	            		        </button>
	            		      </div>
	            		      <!-- /.box-tools -->
	            		    </div>
	            		    <!-- /.box-header -->
	            		    <div class="box-body">
	            		      <div class="row">
	            		      	<div class="col-md-6">
	            		      		<span>Full Name </span>
	            		      		<blockquote>
	            		      			<span></span><span>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span><br>
	            		      		</blockquote>

	            		      		<span>Gender </span>
	            		      		<blockquote>
	            		      			<span></span><span>{{ Auth::user()->gender }}</span><br>
	            		      		</blockquote>
	            		      	</div>
	            		      	<div class="col-md-6">
	            		      		<span>Birthday </span>
	            		      		<blockquote>
	            		      			<span></span><span>{{ Auth::user()->profile->bday }} </span><br>
	            		      		</blockquote>

	            		      		<span>Civil Status </span>
	            		      		<blockquote>
	            		      			<span></span><span>{{ Auth::user()->profile->civil_status }}</span><br>
	            		      		</blockquote>
	            		      	</div>
	            		      	<div class="col-sm-12">
	            		      		<span>Bio </span>
	            		      		<blockquote>
	            		      			<span></span><span>{{ Auth::user()->profile->bio }} </span><br>
	            		      		</blockquote>
	            		      	</div>
	            		      </div>
	            		    </div>
	            		    <!-- /.box-body -->
	            		  </div>
	            		  <!-- /.box -->
	            		</div>

	            		<div class="col-md-12">
	            		  <div class="box box-primary">
	            		    <div class="box-header with-border">
	            		      <h3 class="box-title">Skills</h3>

	            		      <div class="box-tools pull-right">
	            		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	            		        </button>
	            		      </div>
	            		      <!-- /.box-tools -->
	            		    </div>
	            		    <!-- /.box-header -->
	            		    <div class="box-body">
	            		      The body of the box
	            		    </div>
	            		    <!-- /.box-body -->
	            		  </div>
	            		  <!-- /.box -->
	            		</div>

	            		<div class="col-md-12">
	            		  <div class="box box-primary">
	            		    <div class="box-header with-border">
	            		      <h3 class="box-title">Education</h3>

	            		      <div class="box-tools pull-right">
	            		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	            		        </button>
	            		      </div>
	            		      <!-- /.box-tools -->
	            		    </div>
	            		    <!-- /.box-header -->
	            		    <div class="box-body">
	            		      <div class="row col-sm-6">
	            		      	<span>School attended </span>
	            		      	<blockquote>
	            		      		<span></span><span>{{ Auth::user()->profile->school_attended }}</span><br>
	            		      	</blockquote>

	            		      	<span>Schoo status </span>
	            		      	<blockquote>
	            		      		<span></span><span>{{ Auth::user()->profile->school_status }}</span><br>
	            		      	</blockquote>
	            		      </div>
	            		      <div class="row col-sm-6">
	            		      	<span>Course </span>
	            		      	<blockquote>
	            		      		<span></span><span>{{ Auth::user()->profile->course }}</span><br>
	            		      	</blockquote>

	            		      	<span>Major </span>
	            		      	<blockquote>
	            		      		<span></span><span>{{ Auth::user()->profile->major }}</span><br>
	            		      	</blockquote>
	            		      </div>
	            		    </div>
	            		    <!-- /.box-body -->
	            		  </div>
	            		  <!-- /.box -->
	            		</div>

	            		<div class="col-md-12">
	            		  <div class="box box-primary">
	            		    <div class="box-header with-border">
	            		      <h3 class="box-title">Where to find me</h3>

	            		      <div class="box-tools pull-right">
	            		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	            		        </button>
	            		      </div>
	            		      <!-- /.box-tools -->
	            		    </div>
	            		    <!-- /.box-header -->
	            		    <div class="box-body">
	            		      <div class="row col-sm-6">
	            		      	<span>Street </span>
	            		      	<blockquote>
	            		      		<span></span><span>{{ Auth::user()->profile->street }}</span><br>
	            		      	</blockquote>

	            		      	<span>Barangay </span>
	            		      	<blockquote>
	            		      		<span></span><span>{{ Auth::user()->profile->barangay }}</span><br>
	            		      	</blockquote>

	            		      	<span>City </span>
	            		      	<blockquote>
	            		      		<span></span><span>{{ Auth::user()->profile->city }}</span><br>
	            		      	</blockquote>
	            		      </div>
	            		      <div class="row col-sm-6">
	            		      	<span>Province </span>
	            		      	<blockquote>
	            		      		<span></span><span>{{ Auth::user()->profile->province }}</span><br>
	            		      	</blockquote>

	            		      	<span>Country </span>
	            		      	<blockquote>
	            		      		<span></span><span>{{ Auth::user()->profile->country }}</span><br>
	            		      	</blockquote>
	            		      </div>
	            		    </div>
	            		    <!-- /.box-body -->
	            		  </div>
	            		  <!-- /.box -->
	            		</div>

	            		<div class="col-md-12">
	            		  <div class="box box-primary">
	            		    <div class="box-header with-border">
	            		      <h3 class="box-title">Resume</h3>

	            		      <div class="box-tools pull-right">
	            		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	            		        </button>
	            		      </div>
	            		      <!-- /.box-tools -->
	            		    </div>
	            		    <!-- /.box-header -->
	            		    <div class="box-body">
	            		      <span>Upload your resume</span><br>
	            		      <form action="" enctype="multipart/form-data" method="POST">
	            		      	{{ csrf_field() }}
									<span>
										<input type="file" name="resume"><br>
										<input type="submit" value="Upload now" class="btn btn-primary btn-flat btn-sm">
									</span>
	            		      		<span class="pull-right"></span>
	            		      		
	            		      	
	            		      </form>
	            		    </div>
	            		    <!-- /.box-body -->
	            		  </div>
	            		  <!-- /.box -->
	            		</div>
         			</div>

				<!-- /.tab-pane -->
				</div>
            	<div class="tab-pane" id="alljobs">

            		<div class="container">
            			@foreach ($jobs as $job)
            			<div class="col-xs-12">
            				<div class="box box-success box-solid">
            					<div class="box-header with-border">
            						<h3 class="box-title">{{ $job->job_title }}</h3>

            						<div class="box-tools pull-right">
            							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            							</button>
            						</div>
            						<!-- /.box-tools -->
            					</div>
            					<!-- /.box-header -->
            					<div class="box-body">
            						<p>{{ $job->qualifications }}</p>
            					</div>
            					<!-- /.box-body -->
            				</div>
            				<!-- /.box -->
            			</div>	
            			@endforeach
            		</div>


            		<div class="div">
            			<div class="col-md-12">
            				<div class="div">
            					<div class="text-center">
            						{!! $jobs->links() !!}
            					</div>
            				</div>

            			</div>
            		</div>

				<!-- /.tab-pane -->
				</div>
				
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
  
</div>
<!-- ./wrapper -->

@stop