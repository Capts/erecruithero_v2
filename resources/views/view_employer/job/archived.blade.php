@extends('view_employer.layouts.app')


@section('title', 'E-recruit Hero | Archive')

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
      <div class="col-xs-10 col-xs-offset-1">
        
        <div class="box box-primary">
          <div class="box-header ">
            <h4 class="text-center" style="color:silver;">Archived jobs</h4>
          </div>
          <div class="box-body">

            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>Job ID</th>
                  <th>Job Title</th>
                  <th>Company</th>
                  <th>Date Posted</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($archived as $arc)
                  <tr style="color:silver;cursor: not-allowed">
                    <td>{{ $arc->id }}</td>
                    <td>{{ str_limit($arc->job_title, 25) }}</td>
                    <td>{{ str_limit($arc->company, 25) }}</td>
                    <td>{{ date('M j,Y', strtotime($arc->created_at)) }}</td>
                    <td><a href="{{ route('job.show', $arc->id) }}" class="btn btn-flat btn-xs bg-olive">enable</a></td>
                    
                  </tr>

                  
                
                @endforeach
              </tbody>
            
            </table>
             <div class="text-center">
                {!! $archived->links() !!}
            </div>
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