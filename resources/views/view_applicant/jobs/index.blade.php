@extends('view_applicant.layouts.app')

@section('title', 'E-RECRUIT HERO | Jobs')

@section('content')

<!-- Site wrapper -->
<div class="wrapper">

	<header class="main-header">
		@include('view_applicant.partials.nav')
	</header>

<!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
@include('view_applicant.partials.sidebar')

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	
	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="row">
		<div class="col-xs-10 col-xs-offset-1">

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
								@foreach ($alljobs as $job)
								<tr>
									<td>{{ $job->id }}</td>
									<td><a href="{{ route('jobs.show', $job->id) }}">{{ str_limit($job->job_title, 25) }}</a></td>
									<td>{{ str_limit($job->company, 25) }}</td>
									<td>{{ date('M j,Y', strtotime($job->created_at)) }}</td>
								</tr>




								@endforeach
							</tbody>

						</table>
						<div class="text-center">
							{!! $alljobs->links() !!}
						</div>
					</div>

				</div>

			</div>

		</div>
			

			
			<!-- /.box -->

		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	@include('view_applicant.partials.footer')

	
<!-- Add the sidebar's background. This div must be placed
	immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@stop