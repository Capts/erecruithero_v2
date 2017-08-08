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


			<div class="box box-danger">
				<div class="box-header with-border">
					<h5 class="box-title" style="font-size: 16px;color:orange;"><i class="fa fa-exclamation-circle" style="color:red;"></i> &nbsp;Please edit your profile to automize the job search and matchmaking.</h5>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

					</div>
					<!-- /.box-tools -->
				</div>
			</div>
			@if (Session::has('success'))

				<div class="alert alert-success" role="alert">
					<strong>Success! </strong> {{ Session::get('success')}}&nbsp; <i class="fa fa-check"></i>
				</div>

			@endif 
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

					

					<div class="col-md-4" style="padding:10px 10px">
						<p class="text-center"><img src="{{Storage::url(Auth::user()->avatar)}}" class="img-circle" alt="" height="90px" width="90px" ></p><a href="{{ route('profile.edit', Auth::user()->id) }}" class="btn btn-flat btn-xs btn-default pull-right"><span class="i fa fa-pencil"></span></a>
						 <b><p class="text-center">{{ ucfirst(Auth::user()->firstname)}} &nbsp;{{ ucfirst(Auth::user()->lastname)}}</b></p>
						 <hr>
						<span>
							<h5>
								<i class="fa fa-envelope-o pull-right"></i>

								<b>{{ Auth::user()->email}}</b>
							</h5>
						</span>

						<span>
							<h5>
								<i class="fa fa-birthday-cake pull-right"></i>
								<p>{{ date('M j,Y', strtotime(Auth::user()->bday)) }}</p>
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
						
					
						<div class="box-footer">
							<p class="text-left">{{ ucfirst(Auth::user()->profile->bio) }}</p>
						</div>
						
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
								@include('view_applicant.school.terModal')
									<div class="box-body">
										<div class="row">
											<div class="colmd-12">
												<button type="button" class="btn btn-box-tool pull-right" title="Add school" data-toggle="modal" data-target="#terModal-{{ Auth::user()->id }}"><i class="fa fa-plus fa-2x"></i></button>
											</div>
											<div class="col-md-12">
												
												@if (is_null($schoolT))
												@else
													<p style="font-size: 16px;" class="label label-primary">Tertiary</p>
													
													@foreach ($getAndLoopT as $loopTer)

														<div class="box-body">
															<div class="box-header  with-border">
																{{ $loopTer->ter_school }}<br>
																{{ $loopTer->ter_address }} <br> 
																{{ ucfirst($loopTer->ter_degree) . ' in '  . ucfirst($loopTer->ter_field_of_study) }} <br> 
																{{ $loopTer->ter_major }} <br> 
																{{ $loopTer->ter_address }} <br> 
																{{ $loopTer->ter_start_year. ' - ' .$loopTer->ter_end_year }} <br> 
																<div class="box-tools pull-right">
																	<button class="btn btn-flat btn-xs btn-default" title="edit"><i class="fa fa-pencil"></i></button>
																</div>
															</div>
														</div>
													@endforeach
													
												@endif


												
												@if (is_null($schoolS))
												@else
													<p style="font-size: 16px;" class="label label-primary">Secondary</p>
													@foreach ($getAndLoopS as $loopSec)
														<div class="box-body">
															<div class="box-header  with-border">
																{{ $loopSec->sec_school }}<br>
																{{ $loopSec->sec_address }}<br>
																{{ $loopSec->sec_start . ' - ' . $loopSec->sec_end }} 
																<div class="box-tools pull-right">
																	<button class="btn btn-flat btn-xs btn-default" title="edit"><i class="fa fa-pencil"></i></button>
																</div>
															</div>
															
															
														</div>
													@endforeach
												@endif

												
												@if (is_null($schoolP))
												@else
													<p style="font-size: 16px;" class="label label-primary">Primary</p>
													@foreach ($getAndLoopP as $loopPri)
														<div class="box-body">
															<div class="box-header  with-border">
		
																{{ $loopPri->pri_school }} <br>
																{{ $loopPri->pri_address }}<br>
																{{ $loopPri->pri_start . ' - ' . $loopPri->pri_end }}
																<div class="box-tools pull-right">
																	<button class="btn btn-flat btn-xs btn-default" title="edit"><i class="fa fa-pencil"></i></button>
																</div>
															</div>
														</div>
													@endforeach
												@endif

													
											</div>
										</div>

									</div>
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
						
					<h6>Last updated : <span>{{ date('M j,Y', strtotime(Auth::user()->updated_at)) }}</span></h6>
				</div>
			</div>
				

		</section>
	</div>
	@include('view_applicant.partials.footer')

	

</div>
<!-- ./wrapper -->

@stop