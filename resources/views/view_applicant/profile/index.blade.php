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
					
					<strong>Success! </strong> {{ Session::get('success')}}&nbsp; <i class="fa fa-check"></i>
				</div>
			@elseif(Session::has('danger'))
				<div class="alert alert-danger" role="alert">
					
					<strong>Success! </strong> {{ Session::get('danger')}}&nbsp; <i class="fa fa-trash"></i>
				</div>
			@endif 
			
				<div class="row">
					<div class="col-md-3">
						<!-- profile picture-->
						<div class="box box-primary">
							<div class="box-body">
								{{-- <div class="col-xs-12">
									<a href="{{ route('profile.edit', Auth::user()->id) }}"><i class="fa fa-pencil pull-right"></i></a>
								</div> --}}

								<p class="text-center" ><img src="{{Storage::url(Auth::user()->avatar)}}" class="img-circle" alt="" height="90px" width="90px" ></p>
								<p class="text-center">{{ ucfirst($users->firstname).  ' '  . ucfirst($users->lastname)}} <br>
									<small style="color:silver;">{{ ucfirst($users->address->street) .  ', '  . ucfirst($users->address->barangay) . ', ' . ucfirst($users->address->city) }}</small> <br>
									<small style="color:silver;">{{ ucfirst($users->address->province) .  ', ' . ucfirst($users->address->country) }}</small>
										<br>
									
									
										<i style="color:silver;font-size: 16px" class="fa fa-mobile-phone">&nbsp;</i>
										<span style="color:silver;font-size: 12px">{{ $users->profile->mobile }}</span>
										
								
								</p>

									
									
								
								<div class="box-body" style="border-top: 1px solid silver;padding-top:0px;">
									<span>
										<h6> 
											<i class="fa fa-envelope-open pull-right"></i>

											<b>{{ Auth::user()->email}}</b>
										</h6>
									</span>
									<span>
										<h6>
											
											@if (is_null($users->profile->telephone))
												
											@else
											<i class="fa fa-phone pull-right"></i>
											<p class="pull-left">
												<span>{{ $users->profile->telephone }}</span>
												
											</p><br>
											@endif
										</h6>
									</span>
									<span>
										<h6>
											<i class="fa fa-birthday-cake pull-right"></i>
											<p>{{ date('M j,Y', strtotime(Auth::user()->profile->bday)) }}</p>
											<p>{{ Auth::user()->profile->age . ' years old'}}</p>
										</h6>
									</span>

									<span>
										<h6>
											<i class="fa fa-heart pull-right"></i>

											{{ ucfirst(Auth::user()->profile->civil_status) }}
										</h6>
									</span>

									
								</div>
								<div class="box-footer">
									<p class="text-left">{{ ucfirst(Auth::user()->profile->bio) }}</p>
								</div>

								
						</div>
						
					</div>

					<div class="box box-primary">
						<div class="box-header with-border ">
							<h5 class="text-center"><i class="fa fa-language">&nbsp;</i>
							<b>SKILLS</b>
							<a class="pull-right btn btn-xs btn-flat" style="color: #d0d0d0" title="add skill" data-toggle="modal" data-target="#skill_modal-{{ Auth::user()->id }}"><i class="fa fa-plus"></i></a>
							</h5>
						</div>
						<div class="box-body">
							@include('view_applicant.skill.tab_index')
						</div>
					</div>

					<div class="col-md-9">
						<div class="row">
						<!-- Education-->
							<div class="col-md-6">
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
							<div class="col-md-6">
							 <!--experience-->
								<div class="box box-primary" style="padding: 20px 20px;">
									<div class="box-header with-border">
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
					



		</section>
	</div>
	@include('view_applicant.partials.footer')

	

</div>
<!-- ./wrapper -->

@stop
