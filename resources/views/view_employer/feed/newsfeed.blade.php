@extends('view_employer.layouts.app')


@section('title', 'Employers News Feed')

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
		<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"></h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
							title="Collapse">
							<i class="fa fa-minus"></i></button>
						</div>
						<div class="box-body">
							News feed starts here
						</div>
						<!-- /.box-body -->
						<div class="box-footer">

						</div>
						<!-- /.box-footer-->
					</div>
					<!-- /.box -->
				</div>
		
	</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	@include('view_employer.partials.footer')

</div>

@include('view_employer.job.create_job_modal')
@stop