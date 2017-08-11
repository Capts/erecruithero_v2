@extends('view_applicant.layouts.app')

@section('title', 'E-RECRUIT HERO | Profile')

@section('content')


<div class="wrapper">

	<header class="main-header">
		@include('view_applicant.partials.nav')
	</header>

	<!-- =============================================== -->

	<!-- Left side column. contains the sidebar -->
	@include('view_applicant.partials.sidebar')

	<!-- =============================================== -->

	<div class="content-wrapper">
		
		<!-- Main content -->
		<section class="content">

			@if (is_null($users->profile->age))
				<div class="box box-danger">
					<div class="box-header with-border">
						
						<h5 class="box-title" style="font-size: 16px;color:orange;"><i class="fa fa-exclamation-circle" style="color:red;"></i> &nbsp;Please edit your profile to automize the job search and matchmaking.</h5>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

						</div>
						<!-- /.box-tools -->
					</div>
				</div>
			@else
			@endif
			
			@if (Session::has('success'))

				<div class="alert alert-success" role="alert">
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

					</div>
					<strong>Success! </strong> {{ Session::get('success')}}&nbsp; <i class="fa fa-check"></i>
				</div>

			@endif 
			<div class="box box-success" >
				<div class="box-header with-border box-success" >
					<h4 class="text-center">Welcome to your profile</h4>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-3">
						<!-- profile picture-->
							<div class="box box-primary">
								<div class="box-body">
									{{-- <div class="col-xs-12">
										<a href="{{ route('profile.edit', Auth::user()->id) }}"><i class="fa fa-pencil pull-right"></i></a>
									</div> --}}

									<p class="text-center" ><img src="{{Storage::url(Auth::user()->avatar)}}" class="img-circle" alt="" height="90px" width="90px" ></p>
									<p class="text-center">{{ ucfirst($users->firstname).  ' '  . ucfirst($users->lastname)}}</p>
									<hr>
									<div class="box-body">
										<span>
											<h5> 
												<i class="fa fa-google-plus pull-right"></i>

												<b>{{ Auth::user()->email}}</b>
											</h5>
										</span>

										<span>
											<h5>
												<i class="fa fa-birthday-cake pull-right"></i>
												<p>{{ date('M j,Y', strtotime(Auth::user()->profile->bday)) }}</p>
												<p>{{ Auth::user()->profile->age . ' years old'}}</p>
											</h5>
										</span>

										<span>
											<h5>
												<i class="fa fa-heart pull-right"></i>

												{{ ucfirst(Auth::user()->profile->civil_status) }}
											</h5>
										</span>
									</div>
									<div class="box-footer">
										<p class="text-left">{{ ucfirst(Auth::user()->profile->bio) }}</p>
									</div>

									
							</div>
							<!-- Skills -->
							<div class="box box-primary">
								<div class="box-header ">
									<h5 class="text-center"><i class="fa fa-language">&nbsp;</i>
									<b>SKILLS</b>
									<a class="pull-right btn btn-xs btn-flat" style="color: #d0d0d0" title="add skill" data-toggle="modal" data-target="#skill_modal-{{ Auth::user()->id }}"><i class="fa fa-plus"></i></a>
									</h5>
								</div>
								<div class="box-body">
									@include('view_applicant.skill.tab_index')
								</div>
							</div>

						</div>
						<div class="col-md-9">
							<div class="row">
							<!-- Education-->
								<div class="col-xs-6">
									<div class="box box-primary" style="padding: 20px 20px;">
										<div class="box-header with-border">
											<h5 class="text-center"><i class="fa fa-graduation-cap">&nbsp;</i>
											<b>EDUCATION</b>
											<a class="pull-right btn btn-xs btn-flat" style="color: #d0d0d0" title="add school" data-toggle="modal" data-target="#school_modal-{{ Auth::user()->id }}"><i class="fa fa-plus"></i></a>
											</h5>
										</div>
										@include('view_applicant.school.tab_index')
									</div>
								</div>
								<div class="col-xs-6">
								 <!--experience-->
									<div class="box box-primary" style="padding: 20px 20px;">
										<div class="box-header">
											<h5 class="text-center"><i class="fa fa-black-tie ">&nbsp;</i>
												<b>EXPERIENCE</b>
												<a class="pull-right btn btn-xs btn-flat" style="color: #d0d0d0" title="add experience" data-toggle="modal" data-target="#experience_modal-{{ Auth::user()->id }}"><i class="fa fa-plus"></i></a>
											</h5>
										</div>
										@include('view_applicant.experience.tab_index')
									</div>
								</div>
							</div>

						</div>
					</div>
					



				<div class="box-footer">
						
					<h6>Last updated : <span>{{ date('M j,Y', strtotime(Auth::user()->updated_at)) }}</span></h6>
				</div>
			</div>
				

		</section>
	</div>
	@include('view_applicant.partials.footer')

	

</div>
<!-- ./wrapper -->

@stop
