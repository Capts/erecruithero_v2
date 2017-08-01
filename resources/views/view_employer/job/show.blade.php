@extends('view_employer.layouts.app')

@section('title', 'View job')

@section('content')

@if (Auth::user()->roles()->first()->name == 'applicant')
   applicant view here

@else

  <div class="wrapper">

    @include('view_employer.partials.employer_sidebar')
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
          Employers |
          <small>View job</small>
        </h1>
         
         {{--  <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol> --}}
        </section>

        <!-- Main content -->
        <section class="content">
        
        {{-- @include('view_employer.partials.message') --}}
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Job details</h3>
            </div>
            <div class="box-body">
              <div class="col-md-6">
                <dl class="dl-horizontal">
                  <dt>Job Title :</dt>
                   <dd>{{ $job->job_title }}</dd>
                   <br>
                  <dt>Qualifiacations :</dt>
                   <dd>{{ $job->qualifications }}</dd>
                   <br><hr>
                  <dt >Responsibilities :</dt>
                   <dd>{{ $job->responsibilities }}</dd>
                   <br>
                </dl>
              </div>

              <div class="col-md-6">
                <dl class="dl-horizontal">
                  <dt>Company :</dt>
                   <dd>{{ $job->company }}</dd>
                   <br>
                  <dt>Applicant Needed :</dt>
                   <dd>{{ $job->applicant_needed }}</dd>
                   <br>

                </dl>
                <span class="pull-right">
                  {!! Form::open(['route'=> ['job.destroy', $job->id], 'method' => 'DELETE']) !!}
                    <a href="{{ route('job.edit', $job->id) }}" class="btn btn-flat bg-purple btn-md" data-toggle="tooltip" title="edit this job"><i class="fa fa-edit"></i></a>
                    
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', "class" => 'btn btn-flat bg-maroon btn-md', "data-toggle" => 'tooltip', 'title' => 'delete this job']) !!}

                  {!! Form::close() !!}
                </span>
              </div>
             
          
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              {{-- Footer --}}
            </div>
            <!-- /.box-footer-->
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
@endif


@stop