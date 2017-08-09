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

					{{-- <div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
						title="minimize">
						<i class="fa fa-minus"></i></button>

					</div> --}}
				</div>
				<div class="box-body" style="padding:20px 20px 50px;background-color: #222d32; color:white;">

					

					<div class="col-md-4" style="padding:10px 10px">
					<div class="col-xs-12"><a href="{{ route('profile.edit', Auth::user()->id) }}"><i class="fa fa-pencil pull-right"></i></a></div>
						<p class="text-center" ><img src="{{Storage::url(Auth::user()->avatar)}}" class="img-circle" alt="" height="90px" width="90px" ></p>
						<p class="text-center">{{ ucfirst($users->firstname).  ' '  . ucfirst($users->lastname)}}</p>
						 <hr>
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

						<span>
							{{-- <h5>
								<i class="fa fa-map-marker pull-right"></i>

								{{ ucfirst(Auth::user()->address->street). ', ' .ucfirst(Auth::user()->address->barangay). ', ' .ucfirst(Auth::user()->address->city) }} <br>
								{{ ucfirst(Auth::user()->address->province). ', ' .ucfirst(Auth::user()->address->country)}}
							</h5> --}}
						</span>
						
					
						<div class="box-footer" style="color:white;background-color: #222d32;">
							<p class="text-left">{{ ucfirst(Auth::user()->profile->bio) }}</p>
						</div>
						
					</div>

					<div class="col-md-8">
						<div class="nav-tabs-custom" style="background-color: #222d32;">
							<ul class="nav nav-tabs" style="font-size:18px;">
								<li class="active"><a href="#education" data-toggle="tab">Education</a></li>
								<li><a href="#skills" data-toggle="tab">Skills</a></li>
								<li><a href="#experience" data-toggle="tab">Experience</a></li>
								<li><a href="#personal" data-toggle="tab">Personal Information</a></li>
							</ul>
							<div class="tab-content">
								<div class="active tab-pane" id="education">
									@include('view_applicant.school.tab_index')
								</div>

								<div class="tab-pane" id="skills">
									@include('view_applicant.skill.tab_index')
								</div>


								<div class="tab-pane" id="experience">
									<!-- The timeline -->

								</div>
								<!-- /.tab-pane -->

								<div class="tab-pane" id="personal">

								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div>
						<!-- /.nav-tabs-custom -->


							
								
							
					


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