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
@include('view_employer.job.unarchive_modal')

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
          <i class="fa fa-archive"></i>&nbsp;{{ Session::get('danger')}} 
        </div>
      @endif 



      @if ($job->status == 'archived')
      <div class="box box-danger" style="cursor: not-allowed;">
        <div class="box-header with-border text-center">
          <h4 >{{ ucfirst($job->job_title) }} </h4>
          <i class="fa fa-archive fa-5x" style="text-align: center;color:red;"></i>
          <small>by: </small><small>{{ ucfirst($job->company) }}</small>
        </div>
        <div class="box-body" style="opacity: 0.2;">

          <span> </span>
          <dl class="dl-horizontal">
            <dt>Responsibilities:</dt>
            <dd>{{ ucfirst($job->responsibilities) }}</dd>
            <br>
            <dt>Qualifications:</dt>
            <dd>{{ ucfirst($job->qualifications) }}</dd>
            <br>
            <dt>Location:</dt>
            <dd>{{ ucfirst($job->work_location) }}</dd>
            <br>
            <dt>Salary:</dt>
            @if ($job->salary == 'To be discussed')
            <dd>{{ $job->salary }}</dd>
            @else
            <dd>{{ number_format($job->salary, 2) }}</dd>
            @endif
            <br>
            <dt>Date posted:</dt>

            <dd>{{ date('M j,Y', strtotime($job->created_at)) }}</dd>
            <br>

            <dt>Job post expiration:</dt>
              <dd>{{ date('M j,Y', strtotime($job->due_date)) }}</dd>

          </dl>




        </div>
        <div class="box-footer">
          <h5 class="pull-left" style="color:red">This job is on archive </h5>
          <button  data-toggle="modal" data-target="#unarchive_modal"  class="btn btn-flat btn-success pull-right"><i class="fa fa-key">&nbsp;</i>Enable this job</button> 
        </div>



      </div>
    </div>

  </div>
      @else


          <div class="box box-success">
            <div class="box-header with-border text-center">
              <h4>{{ ucfirst($job->job_title) }} </h4>
              <small>by: </small><a href=""><small>{{ ucfirst($job->company) }}</small></a>
            </div>
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>Responsibilities:</dt>
                <dd>{{ ucfirst($job->responsibilities) }}</dd>
                <br>
                <dt>Qualifications:</dt>
                <dd>{{ ucfirst($job->qualifications) }}</dd>
                <br>
                <dt>Location:</dt>
                <dd>{{ ucfirst($job->work_location) }}</dd>
                <br>
                <dt>Salary:</dt>
                @if ($job->salary == 'To be discussed')
                <dd>{{ $job->salary }}</dd>
                @else
                <dd>{{ number_format($job->salary, 2) }}</dd>
                @endif
                <br>
                <dt>Date posted:</dt>

                <dd>{{ date('M j,Y', strtotime($job->created_at)) }}</dd>
                <br>
                <dt>Job post expiration:</dt>
                <dd>{{ date('M j,Y', strtotime($job->due_date)) }}</dd>

              </dl>




            </div>

            <div class="box-footer">

              {!! Form::model($job, ['route' => ['job.update', $job->id], 'method' => 'PUT']) !!}
                {!! Form::hidden('status', null) !!}
                {!! Form::button('<i class="fa fa-archive">&nbsp;</i>Archive this job', ['type' => 'submit', 'class' => 'pull-left btn btn-flat btn-danger', 'name'=> 'btnArchive', 'value' => 'archive']) !!}
              {!! Form::close() !!}

              <button data-toggle="modal" data-target="#edit_job_modal" class="btn btn-flat btn-info pull-right"><i class="fa fa-pencil">&nbsp;</i>Edit this job</button>
            </div>

          </div>
        </div>

      </div>

            
           
      @endif
          

          
           

          
           
          
    
    
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