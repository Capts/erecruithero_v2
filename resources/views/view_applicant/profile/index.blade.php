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


			<div class="box box-warning">
				<div class="box-header with-border">
					<h5 class="box-title" style="font-size: 16px;color:orange;"><i class="fa fa-exclamation-circle" style="color:orange;"></i> &nbsp;Please edit your profile to automize the job search and matchmaking.</h5>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

					</div>
					<!-- /.box-tools -->
				</div>
			</div>

			<div class="box box-success">
				<div class="box-header">
					<h4>Welcome to your profile</h4>

					{{-- <div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
						title="minimize">
						<i class="fa fa-minus"></i></button>

					</div> --}}
				</div>
				<div class="box-body">

					

					<div class="col-md-4" style="border: 1px solid silver;padding:10px 10px">
						<p class="text-center"><img src="{{Storage::url(Auth::user()->avatar)}}" class="img-circle" alt="" height="90px" width="90px" ></p>
						 <b><p class="text-center">{{ ucfirst(Auth::user()->firstname)}} &nbsp;{{ ucfirst(Auth::user()->lastname)}}</b></p>
						 <hr>
						<span>
							<h5>
								<i class="fa fa-envelope-o pull-right"></i>

								{{ Auth::user()->email}}
							</h5>
						</span>

					{{-- 	<span>
							<h5>
								<i class="fa fa-birthday-cake pull-right"></i>
								{{ Auth::user()->profile->bday . ', '}}
								{{ Auth::user()->profile->age . ' years old'}}
							</h5>
						</span>

						<span>
							<h5>
								<i class="fa fa-share-alt pull-right"></i>

								{{ Auth::user()->profile->civil_status}}
							</h5>
						</span>

						<span>
							<h5>
								<i class="fa fa-map-marker pull-right"></i>

								{{ ucfirst(Auth::user()->address->street). ', ' .ucfirst(Auth::user()->address->barangay). ', ' .ucfirst(Auth::user()->address->city) }} <br>
								{{ ucfirst(Auth::user()->address->province). ', ' .ucfirst(Auth::user()->address->country)}}
							</h5>
						</span>
						
						<hr>
						<div class="col-xs-12 no-padding">
							<p class="text-left">{{ Auth::user()->profile->bio}}</p>
						</div> --}}
						
						
					</div>

					<div class="col-md-8">
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs" style="font-size:18px;">
								<li class="active"><a href="#education" data-toggle="tab">Education</a></li>
								<li><a href="#skills" data-toggle="tab">Skills</a></li>
								<li><a href="#experience" data-toggle="tab">Experience</a></li>
								<li><a href="#personal" data-toggle="tab">Personal Information</a></li>
							</ul>
							<div class="tab-content">
								<div class="active tab-pane" id="education">

									{{-- <div class="box-body">
										<div class="row">
											<fieldset>
												<label style="font-size:16px;border-style: none;" class="label label-success">Tertiary</label>
												@foreach($school_id as $schoolid)
													<dl style="margin-left: 20px;">
														<dt>{{ $schoolid['ter_school'] }}</dt>
														<dd>{{ $schoolid['ter_degree']. ' in ' . $schoolid['ter_field_of_study'] }}</dd>
														<dd>{{ $schoolid['ter_major']}}</dd>
														<small>{{ $schoolid['ter_start_year']. ' - ' . $schoolid['ter_end_year'] }}</small>
													</dl>							
												@endforeach
											</fieldset>

											<fieldset>
												<label style="font-size:16px;border-style: none;" class="label label-success">Secondary</label>
												@foreach($school_id as $schoolid)
													<dl style="margin-left: 20px;">
														<dt>{{ $schoolid['sec_school'] }}</dt>
														<dd>{{ $schoolid['sec_address'] }}</dd>
														<dd>{{ $schoolid['sec_start_year']}}</dd>
														<small>{{ $schoolid['sec_start']. ' - ' . $schoolid['sec_end'] }}</small>
														
													</dl>							
												@endforeach
											</fieldset>

											<fieldset>
												<label style="font-size:16px;border-style: none;" class="label label-success">Primary</label>
												@foreach($school_id as $schoolid)
													<dl style="margin-left: 20px;">
														<dt>{{ $schoolid['elem_school'] }}</dt>
														<dd>{{ $schoolid['elem_address'] }}</dd>
														<dd>{{ $schoolid['elem_start_year']}}</dd>
														<small>{{ $schoolid['elem_start']. ' - ' . $schoolid['elem_end'] }}</small>
														
													</dl>						
												@endforeach
											</fieldset>
										</div>
									</div> --}}
								</div>
								<!-- /.tab-pane -->

								<div class="tab-pane" id="skills">

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
						
					<p>Last updated : <span>{{ date('M j,Y', strtotime(Auth::user()->updated_at)) }}</span></p>
				</div>
			</div>
				

		</section>
	</div>
	@include('view_applicant.partials.footer')

	

</div>
<!-- ./wrapper -->

@stop