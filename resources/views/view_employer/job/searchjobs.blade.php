@extends('view_employer.layouts.app')

@section('title', 'E-RECRUIT HERO | Jobs')

@section('content')

<!-- Site wrapper -->
<div class="wrapper">

	<header class="main-header">
		@include('view_employer.partials.nav')
	</header>

<!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
@include('view_employer.partials.employer_sidebar')

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	
	<!-- Main content -->
	<section class="content">

		<!-- Default box -->

			@if ($searchjobs->isEmpty())
				
				<div class="row">
					<div class="col-xs-8 col-xs-offset-2">
						<div class="box box-danger">
							<div class="box-header with-border">
								<h4 style="color:silver;margin:0 auto;"> <i style="color:#fc3f42;" class="fa fa-times fa-2x"></i>
									No match found for: <i class="" style="color:#8d9093;font-size:17px;"><em>{{ $search }}</em></i>

								</h4>
							</div>
							<div class="box-body">
								<p class="text-center" style="color:silver">Keep searching! </p>
							</div>
						</div>
					</div>
				</div>
			@else
				
				<div class="row">
					<div class="col-xs-8">
						<div class="box box-primary">
						  <div class="box-header with-border">
						    <h4 style="color:silver;">Match found! Keyword: <em style="color:green;">{{ $search }}</em> </h4 >
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
						        @foreach ($searchjobs as $job)
						          <tr>
						            <td>{{ $job->id }}</td>
						            <td><a href="{{ route('job.show', $job->id) }}">{{ str_limit($job->job_title, 25) }}</a></td>
						            <td>{{ str_limit($job->company, 25) }}</td>
						            <td>{{ date('M j,Y', strtotime($job->created_at)) }}</td>
						          </tr>
						          
						       

						        
						        @endforeach
						      </tbody>
						    
						    </table>
						     <div class="text-center">
						        {!! $searchjobs->links() !!}
						    </div>
						  </div>

						</div>
						
					</div>
					<div class="col-xs-4">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h5>List of qualified applicants for this job</h5>
							</div>
							<div class="box-body">
								@foreach ($qualified as $q)
									<div class="box-footer">
										
										<i class="fa fa-check-circle pull-right" style="color:green;">&nbsp; </i><small class="pull-right" style="color:silver;">matched!</small><a href="#">{{ ucfirst($q->user->firstname) .' ' .ucfirst($q->user->lastname) }}</a> <br>
									</div>
						
								@endforeach
										{{-- {{ $getQualifiedUser->firstname }} <br> --}}
							</div>
						</div>
					</div>
				</div>
				
				
		        
			@endif

			
			<!-- /.box -->

		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	@include('view_employer.partials.footer')

	
<!-- Add the sidebar's background. This div must be placed
	immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@stop