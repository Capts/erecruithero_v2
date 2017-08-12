@include('view_applicant.school.school_modal')

			
					@if (is_null($schoolT) and is_null($schoolS) and is_null($schoolP) )
						<h6 class="text-center" style="color:silver;"><em>click the <b>plus</b> sign to add a school</em></h6>
					@else
						@if (is_null($schoolT))
							
						@else
						<p class="" style="background-color:#23c66a;color:white;">Tertiary</p>

						@foreach ($getAndLoopT as $loopTer)

						<div class="box-body">
							<div class="box-header with-border" style="">
							
								<p>Attended <a href="#">{{ $loopTer->ter_school }}</a><br></p>
								{{ $loopTer->ter_address }} <br> 
								{{ ucfirst($loopTer->ter_degree) . ' in '  . ucfirst($loopTer->ter_field_of_study) }} <br> 
								{{ $loopTer->ter_major }} <br> 
								{{ $loopTer->ter_start_year. ' - ' .$loopTer->ter_end_year }} <br> 
							
								
								
							</div>
						</div>
						@endforeach

						@endif



						@if (is_null($schoolS))

						@else
						<p class="" style="background-color:#23c66a;color:white;">Secondary</p>
						@foreach ($getAndLoopS as $loopSec)
						<div class="box-body">
							<div class="box-header ">
								<p>Attended &nbsp;{{ $loopSec->sec_school. ' in ' . $loopSec->sec_address }}</p>
								{{ $loopSec->sec_start . ' - ' . $loopSec->sec_end }} 
								
							</div>


						</div>
						@endforeach
						@endif


						@if (is_null($schoolP))

						@else
						<p class="" style="background-color:#23c66a;color:white;">Primary</p>
						@foreach ($getAndLoopP as $loopPri)
						<div class="box-body">
							<div class="box-header  with-border">

								<p>Attended&nbsp; {{ $loopPri->pri_school . ' in ' .$loopPri->pri_address }}</p>
								
								{{ $loopPri->pri_start . ' - ' . $loopPri->pri_end }}
								
							</div>
						</div>
						@endforeach
						@endif
					@endif
				

