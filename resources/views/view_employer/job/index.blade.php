@extends('view_employer.layouts.app')

@section('title', 'e-Recruit All Jobs')

@section('content')

@include('view_employer.partials.employer_sidebar')
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List of all jobs
            {{-- <small>it all starts here</small> --}}
        </h1>
      
      {{--   <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol> --}}
    </section>

    <!-- Main content -->
    <section class="content">

        @foreach($jobs as $job)
              <div class="box box-success">
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
                  <p>{{ substr($job->responsibilities,0, 180) }}{{ strlen($job->responsibilities) > 100 ? "..." : '' }} <a href="{{ route('job.show', $job->id) }}">See More..</a> </p>
                  <span class="pull-left"><h6>Date posted: {{ date('M j,Y', strtotime($job->created_at)) }}</h6></span>
                </div>
                <!-- /.box-body -->
               
              </div>
              <!-- /.box -->

        @endforeach
        <div class="div">
            <div class="col-md-12">
                <div class="div">
                    <div class="text-center">
                        {!! $jobs->links() !!}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
    
<br>
<br>
<br>

    </div>
    <!-- /.content-wrapper -->
    @include('view_employer.partials.footer')

    <div class="control-sidebar-bg"></div>
@stop