@extends('view_applicant.layouts.app')


@section('title', 'E-recruit Hero | ' . $job->job_title)

@section('content')

<div class="wrapper">

  <header class="main-header">
    @include('view_applicant.partials.nav')
  </header>

<!-- Left side column. contains the sidebar -->
  @include('view_applicant.partials.sidebar')

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

        @if (Session::has('success'))

          <div class="alert alert-success" role="alert">
            <div class="box-tools pull-right">
              {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> --}}

            </div>
            <i class="fa fa-check"></i>&nbsp;{{ Session::get('success')}} 
          </div>
        @elseif (Session::has('danger'))
          <div class="alert alert-danger" role="alert">
            <div class="box-tools pull-right">
              {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> --}}

            </div>
            <i class="fa fa-times"></i>&nbsp;{{ Session::get('danger')}} 
          </div>
        @endif 


       <div class="box box-success">
        <div class="box-header with-border text-center">
          <h4>{{ ucfirst($job->job_title) }} </h4>
          <small>by: </small><a href="#"><small>{{ ucfirst($job->company) }}</small></a>
        </div>
        <div class="box-body" >
          <dl class="dl-horizontal" style="padding: 10px 50px;">
                <dt>Job description:</dt>
                  <dd>{{ ucfirst($job->responsibilities) }}</dd>
                  <br>
                <dt>Qualifications:</dt>
                  <dd>{{ ucfirst($job->qualifications) }}</dd>
                  <br>
                <dt>Location:</dt>
                  <dd>{{ $job->work_location }}</dd>
                  <br>
                <dt>Salary:</dt>
                 @if ($job->salary == 'To be discussed')
                 <dd>{{ $job->salary }}</dd>
                 @else
                 <dd>{{ number_format($job->salary, 2) }}</dd>
                 @endif
                <dt>Date posted:</dt>
                  <dd>{{ date('M j,Y', strtotime($job->created_at)) }}</dd>
                  <br>
                  <br>
                <dt>Job post expiration:</dt>
                  <dd>{{ date('M j,Y', strtotime($job->due_date)) }}</dd>
                  
          </dl>

          

       

            @if (is_null($getApply))
              <button class="btn btn-flat btn-primary pull-right" data-toggle="modal" data-target="#areyousure-{{ Auth::user()->id }}"><i class="fa fa-chain">&nbsp;</i>Apply for this job</button>
            @else

            
              <button class="btn btn-flat btn-primary pull-right" data-toggle="modal" data-target="#areyousure1-{{ $getApply->id }}" style="margin-left: 20px;"><i class="fa fa-times">&nbsp;</i>Cancel application</button>

              <button class="btn btn-flat disabled pull-right"><i class="fa fa-check-circle">&nbsp;</i>Already applied</button>
            @endif

         

           
            @include('view_applicant.jobs.areyousure_modal')
            @include('view_applicant.jobs.areyousure_modal1')

        </div>
        
         
         
       </div>
      </div>
     
    </div>
    
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('view_applicant.partials.footer')


  <!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

@include('view_employer.job.create_job_modal')
@stop