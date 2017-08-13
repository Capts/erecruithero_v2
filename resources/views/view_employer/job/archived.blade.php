@extends('view_employer.layouts.app')


@section('title', 'E-recruit Hero | Archive')

@section('content')

<div class="wrapper">
<!-- =============================================== -->
  <header class="main-header">
    @include('view_employer.partials.nav')
    @include('view_employer.job.unarchive_modal')
  </header>
<!-- Left side column. contains the sidebar -->
  @include('view_employer.partials.employer_sidebar')

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-8 col-xs-offset-2">
        
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
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($archived as $arc)
                  <tr>
                    <td>{{ $arc->id }}</td>
                    <td>{{ str_limit($arc->job_title, 25) }}</td>
                    <td>{{ str_limit($arc->company, 25) }}</td>
                    <td>{{ date('M j,Y', strtotime($arc->created_at)) }}</td>
                    <td> <button  data-toggle="modal" data-target="#unarchive_modal" class="btn btn-flat bg-olive btn-xs"><i class="fa fa-key">&nbsp;</i>Enable this job</button></td>
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