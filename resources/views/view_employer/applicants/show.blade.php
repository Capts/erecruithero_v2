@extends('view_employer.layouts.app')

@section('title', 'E-RECRUIT HERO | Profile')

@section('content')


<div class="wrapper">

	<header class="main-header">
		@include('view_employer.partials.nav')
	</header>

	<!-- =============================================== -->

	<!-- Left side column. contains the sidebar -->
	@include('view_employer.partials.employer_sidebar')

	<!-- =============================================== -->

	<div class="content-wrapper">
		
		<!-- Main content -->
		<section class="content">

			<div class="row">
				<div class="col-md-3">
					<div class="box box-success">
						<div class="box-header"></div>
						<div class="box-body">
							<p class="text-center" ><img src="{{Storage::url($thisUser->avatar)}}" class="img-circle" alt="" height="90px" width="90px" ></p>

							<p class="text-center">{{ ucfirst($thisUser->firstname).  ' '  . ucfirst($thisUser->lastname)}} <br>
								<small style="color:silver;">{{ ucfirst($applicant->address->street) .  ', '  . ucfirst($applicant->address->barangay) . ', ' . ucfirst($applicant->address->city) }}</small> <br>
								<small style="color:silver;">{{ ucfirst($applicant->address->province) .  ', ' . ucfirst($applicant->address->country) }}</small>
									<br>
								
								
									<i style="color:silver;font-size: 16px" class="fa fa-mobile-phone">&nbsp;</i>
									<span style="color:silver;font-size: 12px">{{ $applicant->profile->mobile }}</span>
							</p>
							<hr>

							<span>
								<h6> 
									<i class="fa fa-envelope-open pull-right"></i>

									<b>{{ $applicant->email }}</b>
								</h6>
							</span>
							<span>
								<h6>
									
									@if (is_null($applicant->profile->telephone))
										
									@else
									<i class="fa fa-phone pull-right"></i>
									<p class="pull-left">
										<span>{{ $applicant->profile->telephone }}</span>
										
									</p><br>
									@endif
								</h6>
							</span>
							<span>
								<h6>
									<i class="fa fa-birthday-cake pull-right"></i>
									<p>{{ date('M j,Y', strtotime($applicant->profile->bday)) }}</p>
									<p>{{ $applicant->profile->age . ' years old'}}</p>
								</h6>
							</span>

							<span>
								<h6>
									<i class="fa fa-heart pull-right"></i>

									{{ ucfirst($applicant->profile->civil_status) }}
								</h6>
							</span>
							<hr>

							@if (strlen($applicant->profile->bio) >  150)
										{{ ucfirst(str_limit($applicant->profile->bio, 150)) }} <a href="#">read more</a>
							@else

							{{ ucfirst($applicant->profile->bio) }}


							@endif

						</div>
						<div class="box-footer">
							<div class="">
								<button class="btn btn-flat bg-olive btn-block">Invite for interview</button>
							</div>
						</div>

					
					</div>


					<!-- SKILLS -->
					<div class="box box-success">
						<div class="box-header with-border">
							<h4 class="text-center"><i class="fa fa-language">&nbsp;</i>
								<b>SKILLS</b>

							</h4>
						</div>
						<div class="box-body">
							<div class="row">
								@if ($applicant->skill->isEmpty())
									<div class="col-md-6">
										
										<small style="color: silver;">nothing to show here</small>
									</div>

								@else
									@foreach ($applicant->skill as $skill)
										<div class="col-md-6">
											<p class="label label-primary" style="font-size: 15px;">{{ ucfirst(str_limit($skill->skill_name, 21)) }}</p><br><br>
										</div>
										
									@endforeach
								@endif
								

							</div>
						</div>
					</div>	



				</div>
				


				<div class="col-md-4">
					<div class="box box-success">
						<div class="box-header with-border">
							<h4 class="text-center"><i class="fa fa-black-tie ">&nbsp;</i>
								<b>EXPERIENCE</b>
							</h4>
						</div>
						<div class="box-body">
						@if ($applicant->experience->isEmpty())
							<small style="color: silver">nothing to show here</small>
							@else
							@foreach ($loopExp as $exp)

							<div class="box-body">
								<a href="#">{{ $exp->exp_title }} </a>at  {{$exp->exp_company}} <br>
								{{ $exp->exp_activities}} <br>
								{{ $exp->exp_span_time}}
							</div>




							@endforeach
							@endif

						</div>
					</div>



						
					


				</div>


				<div class="col-md-5">
					<div class="box box-success">
						<div class="box-header with-border">
							
							<h4 class="text-center"><i class="fa fa-graduation-cap">&nbsp;</i>
							<b>EDUCATION</b>
							</h4>
						</div>
						<div class="box-body">


								@if (is_null($applicant->schoolTertiary))
									<small style="color: silver">nothing to show here</small>
								@else

									<h4><span class="badge" style="background-color: #357ecc;">3</span>&nbsp;Tertiary </h4>
									

								@foreach ($applicant->schoolTertiary as $loopTer)

								<div class="box-body">
									<div class="box-header with-border" style="">
									
										<p>Attended <a href="#">{{ $loopTer->ter_school }}</a></p>
										{{ $loopTer->ter_address }} <br> 
										{{ ucfirst($loopTer->ter_degree) . ' in '  . ucfirst($loopTer->ter_field_of_study) }} <br> 
										{{ $loopTer->ter_major }} <br> 
										{{ $loopTer->ter_start_year. ' - ' .$loopTer->ter_end_year }} <br> 
									
										
										
									</div>
								</div>
								@endforeach

								@endif



								@if (is_null($applicant->schoolSecondary))
									<small style="color: silver">nothing to show here</small>
								@else
								<h4><span class="badge" style="background-color: #357ecc;">2</span>&nbsp;Secondary</h4>
								@foreach ($applicant->schoolSecondary as $loopSec)
								<div class="box-body">
									<div class="box-header ">
										<p>Attended &nbsp; <a href="#">{{ $loopSec->sec_school }}</a>&nbsp;in {{ $loopSec->sec_address }}</p>
										{{ $loopSec->sec_start . ' - ' . $loopSec->sec_end }} 
										
									</div>


								</div>
								@endforeach
								@endif


								@if (is_null($applicant->schoolPrimary))
									<small style="color: silver">nothing to show here</small>
								@else
								<h4><span class="badge" style="background-color: #357ecc;">1</span>&nbsp;Primary</h4>
								@foreach ($applicant->schoolPrimary as $loopPri)
								<div class="box-body">
									<div class="box-header  with-border">

										<p>Attended&nbsp; <a href="#">{{ $loopPri->pri_school }}</a>&nbsp;in {{$loopPri->pri_address }}</p>
										
										{{ $loopPri->pri_start . ' - ' . $loopPri->pri_end }}
										
									</div>
								</div>
								@endforeach
								@endif









						</div>
					</div>
				</div>

				


			</div>
			


		</section>
	</div>
	@include('view_employer.partials.footer')

	

</div>
<!-- ./wrapper -->

@stop

