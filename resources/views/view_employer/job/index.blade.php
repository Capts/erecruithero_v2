@extends('view_employer.layouts.app')


@section('title', 'E-recruit Hero | All jobs')

@section('content')

<div class="wrapper">
<!-- =============================================== -->
  <header class="main-header">
    @include('view_employer.partials.nav')
  </header>
<!-- Left side column. contains the sidebar -->
  @include('view_employer.partials.employer_sidebar')

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-8">
        
        @foreach ($jobs as $job)
          <div class="col-xs-12">
            <div class="box box-success">
              <div class="box-header with-border">
                <a href="{{ route('job.show', $job->id) }}"><h4>{{ $job->job_title }}</h4></a>
                <div class="box-tools">
                  <small class="pull-right">Date posted: {{  date('M j,Y', strtotime($job->created_at))  }}</small>
                </div>
              </div>

              <div class="box-body">
                  {{ ucfirst(str_limit($job->responsibilities, 100)) }}
              </div>
            </div>
          </div>
         
        @endforeach
      </div>
      <div class="col-xs-4">
        <div class="box box-default">
          <div class="box-header with-border">
              <h5>Job Count:</h5>
          </div>
          <div class="box-body">
            <h4 style="color: silver;text-align: center;">{{ $countJob}}</h4>
          </div> 
        </div>
      </div>
    </div>
    
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('view_employer.partials.footer')

</div>

@include('view_employer.job.create_job_modal')
@stop
{{-- 
<div class="div">
            <div class="col-md-12">
                <div class="div">
                    <div class="text-center">
                        {!! $jobs->links() !!}
                    </div>
                </div>

            </div>
        </div> --}}