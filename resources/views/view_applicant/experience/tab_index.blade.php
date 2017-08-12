
	@include('view_applicant.experience.experience_modal')

						@if (Auth::user()->experience->isEmpty())
							<h6 class="text-center" style="color:silver;"><em>click the <b>plus</b> sign to add some experience.</em></h6>
						@else
							@foreach ($loopExp as $exp)
								
									<div class="box-body">
										<a href="#">{{ $exp->exp_title }} </a>at  {{$exp->exp_company}} <br>
										{{ $exp->exp_activities}} <br>
										{{ $exp->exp_span_time}}
									</div>

								
						
								
							@endforeach
						@endif
					