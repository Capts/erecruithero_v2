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
			<div class="col-xs-12">
				<div class="col-md-7 col-md-offset-2">
					@foreach ($alljobs as $job)
						<div class="box box-default">
							<div class="box-header with-border">
								<a href="{{ route('jobs.show', $job->id) }}">{{$job->job_title}}</a><span class="pull-right" style="font-size:13px;">Posted: {{ date('M j,Y', strtotime($job->created_at)) }}</span >
							</div>
							<div class="box-body">
								{{ ucfirst(str_limit($job->responsibilities, 150)) }}
							</div>
						</div>
						
					@endforeach
					<div class="col-xs-12">
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