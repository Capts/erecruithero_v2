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
      <div class="col-md-8 col-md-offset-2">
       <div class="box box-success">
        <div class="box-header with-border text-center">
          <h4>{{ ucfirst($job->job_title) }} </h4>
          <small>by: </small><a href="#"><small>{{ ucfirst($job->company) }}</small></a>
        </div>
        <div class="box-body" >
          <dl class="dl-horizontal" style="padding: 10px 50px;">
                <dt>Responsibilities:</dt>
                  <dd>{{ ucfirst($job->responsibilities) }}</dd>
                  <br>
                <dt>Qualifications:</dt>
                  <dd>{{ ucfirst($job->qualifications) }}</dd>
                  <br>
                <dt>Valid until:</dt>
                  <dd>{{ date('M j,Y', strtotime($job->due_date)) }}</dd>
                  <br>
                <dt>Salary:</dt>
                  <dd><b>₱</b> {{ number_format($job->salary, 2) }}</dd>
                  <br><br>
                <dt>Date posted:</dt>
                  <dd>{{ date('M j,Y', strtotime($job->created_at)) }}</dd>
          </dl>
            <button class="btn btn-flat btn-primary pull-right" data-toggle="modal" data-target="#areyousure"><i class="fa fa-chain">&nbsp;</i>Apply for this job</button>
            @include('view_applicant.jobs.areyousure_modal')
            {{-- <button class="btn btn-flat btn-danger pull-left"><i class="fa fa-archive">&nbsp;</i>Archive this job</button> --}}
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