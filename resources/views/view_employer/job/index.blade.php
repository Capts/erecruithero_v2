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
     <div class="col-sm-8 ">
        
        <div class="box box-primary">
          <div class="box-header ">
            
          </div>
          <div class="box-body">

            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Job ID</th>
                  <th>Job Title</th>
                  <th>Company</th>
                  <th>Date Posted</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($jobs as $job)
                  <tr>
                    <td>{{ $job->id }}</td>
                    <td><a href="{{ route('job.show', $job->id) }}">{{ ucfirst(str_limit($job->job_title, 25)) }}</a></td>
                    <td>{{ str_limit($job->company, 25) }}</td>
                    <td>{{ date('M j,Y', strtotime($job->created_at)) }}</td>
                  </tr>
                  
               

                
                @endforeach
              </tbody>
            
            </table>
             <div class="text-center">
                {!! $jobs->links() !!}
            </div>
          </div>

        </div>
      
      </div>
      <div class="col-sm-4 ">
       
        <div class="box box-info">
          <div class="box-header with-border">
          
              <h4 class="text-center" style="color:silver;">Job summary</h4>
          </div>
          <div class="box-body">

            <h4 style="color: silver;">
             
              <p>Available Jobs <span class="pull-right badge" style="margin-right:20px;font-size:15px;">{{ $countAvailable}}</span> </p>
              
              <br>
              <p>Archived Jobs <span class="pull-right badge badge-primary" style="margin-right:20px;font-size:15px;">{{ $countArchive}}</span> </p>
            </h4>
          </div> 
          <div class="box-footer">
            <h4 style="color: silver;">
              <p>All Posted Jobs<span class="pull-right badge" style="margin-right:20px;font-size:15px;">{{ $countJob }}</span></p>
            </h4>
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