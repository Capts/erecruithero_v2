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
@include('view_employer.partials.sidebar')

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
					<div class="col-xs-8 col-xs-offset-2">
						<div class="box box-success">
							<div class="box-header with-border">
								<h4 style="color:silver;"><i style="color:green;" class="fa fa-check pull-right"></i>
									Match found for : <i class="" style="color:#8d9093;font-size:17px;"><em>{{ $search }}</em></i>
								</h4> 
							</div>
								<div class="box-body">
									@foreach ($searchjobs as $job)
										<p><a href="{{ route('jobs.show', $job->id) }}">{{ $job->job_title }}</a> &nbsp;<small>{{ $job->company }}</small></p>
									@endforeach
								</div>

								<div class="box-footer">
									<div class="text-center">
									    {!! $searchjobs->links() !!}
									</div>
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