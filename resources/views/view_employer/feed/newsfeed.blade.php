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
		<div class="row">
			<div class="col-md-8">
			 <div class="box box-success">
			 	<div class="box-body">
			 		This is your feed
			 	</div>
			 </div>
			</div>
			<div class="col-md-4">
				<div class="box box-primary">
					<div class="box-body">
						all applicants
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