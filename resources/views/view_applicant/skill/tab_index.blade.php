
				@if (Auth::user()->skill->isEmpty())
					<h4 class="text-center" style="color:silver">same goes here.</h4><h6 class="text-center" style="color:silver;"><em>click the <b>plus</b> sign to add a skill.</em></h6>
				@else

				
					@foreach ($loopSkills as $skill)
						<div class="col-xs-5">
							<h4 ><p class="label label-info">{{ ucfirst(str_limit("$skill->skill_name", 7)) }}</p></h4>
						</div>
					@endforeach

				@endif


@include('view_applicant.skill.skill_modal')

