@extends('view_applicant.layouts.app')

@section('title', 'E-RECRUIT HERO | NewsFeed')

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
	<!-- Content Header (Page header) -->
	{{-- <section class="content-header">
		<h1>
			News feed
			<small>it all starts here</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Examples</a></li>
			<li class="active">Blank page</li>
		</ol>
	</section>
 --}}
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

	@include('view_applicant.partials.footer')

	
<!-- Add the sidebar's background. This div must be placed
	immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@stop