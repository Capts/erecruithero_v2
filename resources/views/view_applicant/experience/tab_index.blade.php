
	@include('view_applicant.experience.experience_modal')

						@if (Auth::user()->experience->isEmpty())
							<h6 class="text-center" style="color:silver;"><em>click the <b>plus</b> sign to add some experience.</em></h6>
						@else
							@foreach ($loopExp as $exp)
								
									<div class="box-body">
										{{ $exp->exp_title }} at<a href="#">  {{$exp->exp_company}}</a>
										<span><a href="{{ route('experience.edit', $exp->id) }}"><i class="fa fa-pencil pull-right"></i></a></span> <br>
										{{ ucfirst(str_limit($exp->exp_activities, 30) )}} <br>
										{{ $exp->exp_span_time}}
									</div>

								
						
								
							@endforeach
						@endif
					