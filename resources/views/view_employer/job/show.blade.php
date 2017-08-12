@extends('view_employer.layouts.app')


@section('title', 'E-recruit Hero | ' . $job->job_title)

@section('content')

<div class="wrapper">

  <header class="main-header">
    @include('view_employer.partials.nav')
  </header>

<!-- Left side column. contains the sidebar -->
  @include('view_employer.partials.employer_sidebar')

<!-- =============================================== -->
@include('view_employer.job.edit_job_modal')
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
          <a href=""><small>{{ ucfirst($job->company) }}</small></a>
        </div>
        <div class="box-body">
          <dl class="dl-horizontal">
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
                  <dd>{{ $job->salary }}</dd>
                  <br><br>
                <dt>Date posted:</dt>
                  <dd>{{ date('M j,Y', strtotime($job->created_at)) }}</dd>
          </dl>
            <button data-toggle="modal" data-target="#edit_job_modal" class="btn btn-flat btn-info pull-right"><i class="fa fa-pencil">&nbsp;</i>Edit this job</button>
            <button class="btn btn-flat btn-danger pull-left"><i class="fa fa-archive">&nbsp;</i>Archive this job</button>
        </div>
        

         
       </div>
      </div>
     
    </div>
    
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('view_employer.partials.footer')


  <!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

@include('view_employer.job.create_job_modal')
@stop