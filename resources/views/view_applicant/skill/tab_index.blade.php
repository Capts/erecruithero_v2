
				@if (Auth::user()->skill->isEmpty())
					<h6 class="text-center" style="color:silver;"><em>click the <b>plus</b> sign to add a skill.</em></h6>
				@else

					@foreach ($loopSkills as $skill)

						<div class="col-xs-12 t">
							<h4>
								<label class="label label-default">{{ ucfirst(str_limit("$skill->skill_name", 25)) }}
								</label>
								<a style="font-size: 14px;" href="{{ route('skill.edit', $skill->id) }}">
								<span class="fa fa-pencil pull-right"></span></a>
								
									
							</h4>
							
						</div>
					@endforeach

				@endif

@include('view_applicant.skill.skill_modal')

