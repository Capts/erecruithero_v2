@extends('view_employer.layouts.app')

@section('title', 'Post a job')

@section('content')

<div class="wrapper">

  @include('view_employer.partials.employer_sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employer |
        <small>Post a new job</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#"><i class="fa fa-gavel"></i>Jobs</a></li>
        <li class="active">Post new job</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Fill up all necessary fields</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="Collapse">
            <i class="fa fa-minus"></i></button>
           {{--  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button> --}}
            </div>
          </div>
            <form role="form" method="POST" action="{{ route('job.store') }}">
            {{ csrf_field() }}
              <div class="box-body">
             
                  <div class="col-md-6">

                    <!-- job title input -->
                    <div class="form-group">
                      <label>Job Title <span style="color:red;">*</span></label>
                      <input type="text" name="job_title" class="form-control" placeholder="job title" autofocus required>
                    </div>

                    <!-- work lcoation input -->
                    <div class="form-group">
                      <label>Work Location <span style="color:red;">*</span></label>
                      <input type="text" name="work_location" class="form-control" placeholder="work location" required>
                    </div>

                    <!-- Company input -->
                    <div class="form-group">
                      <label>Select Company <span style="color:red;">*</span></label>
                      <select class="form-control" name="company" required="">
                        <option value="E-Recruit">E-recruit</option>
                      </select>
                    </div>

                     <!-- applicant_needed input -->
                    <div class="form-group">
                      <label>No. of person needed <span style="color:red;">*</span></label>
                      <input type="text" name="applicant_needed" class="form-control" placeholder="specify" required="" >
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                  

                      <!-- Duties and responsibilitites -->
                      <div class="form-group">
                        <label>Responsibilities  <span style="color:red;">*</span></label> 
                        <textarea class="form-control" name="responsibilities" rows="6" placeholder="responsibilities" required=""></textarea>
                      </div>     
                    
                    <!-- Qualifications  -->
                    <div class="form-group">
                      <label>Qualifications <span style="color:red;">*</span></label>
                      <textarea class="form-control" name="qualifications" rows="6" placeholder="qualifications" required=""></textarea>
                    </div> 
                  </div>

                  <div class="col-md-6">
                  
                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <span class="pull-right">
                  <button type="clear" class="btn bg-red btn-flat">Clear fields</button>
                  <button type="submit" class="btn btn-success btn-flat">Post job</button>
                </span>
              </div>
              <!-- /.box-footer-->
            </form>
      </div>
      <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
    @include('view_employer.partials.footer')

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



@stop

{{-- <div>
  <form role="form" method="POST" action="{{ route('jobs.store') }}">
  {{ csrf_field() }}
    <div class="box-body">
        
        <div class="col-md-6">

          <!-- job title input -->
          <div class="form-group">
            <label>Job Title <span style="color:red;">*</span></label>
            <input type="text" class="form-control" placeholder="Job Title" name="job_title">
          </div>

          <!-- work lcoation input -->
          <div class="form-group">
            <label>Work Location <span style="color:red;">*</span></label>
            <input type="text" class="form-control" placeholder="Work Location" name="work_location">
          </div>

          <!-- Company input -->
          <div class="form-group">
            <label>Select Company <span style="color:red;">*</span></label>
            <select class="form-control">
              <option>Company 1</option>
            </select>
          </div>

           <!-- applicant_needed input -->
          <div class="form-group">
            <label>No. of person needed <span style="color:red;">*</span></label>
            <input type="text" class="form-control" placeholder="Specify" name="applicant_needed">
          </div>

        </div>

        <div class="col-md-6">
          <!-- Job Desc  -->
          <div class="form-group">
            <label>Job Description <span style="color:red;">*</span></label>
            <textarea class="form-control"  rows="6" placeholder="Job Description" name="job_description"></textarea>
          </div>     
            


            <!-- Duties and responsibilitites -->
            <div class="form-group">
              <label>Duties and Responsibilities <span style="color:red;">*</span></label>
              <textarea class="form-control" rows="6" placeholder="Duties and Responsibilities" name="duties_responsibilities"></textarea>
            </div>     

        </div>

    
    </div>
  <!-- /.box-body -->
    <div class="box-footer">
      <span class="pull-right">

        <button type="clear" class="btn bg-red btn-flat">Clear fields</button>
        <button type="submit" class="btn btn-success btn-flat">Post job</button>
      </span>
    </div>
  </form>

</div> --}}