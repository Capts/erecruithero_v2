@include('view_applicant.school.school_modal')

			
					@if (is_null($schoolT) and is_null($schoolS) and is_null($schoolP) )
						<h6 class="text-center" style="color:silver;"><em>click the <b>plus</b> sign to add a school</em></h6>
					@else
						@if (is_null($schoolT))
							
						@else
						<h4><span class="badge" style="background-color: #357ecc;">3</span>&nbsp;Tertiary </h4>

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
						<h4><span class="badge" style="background-color: #357ecc;">2</span>&nbsp;Secondary </h4>
						@foreach ($getAndLoopS as $loopSec)
						<div class="box-body">
							<div class="box-header ">
								<p>Attended &nbsp; <a href="#">{{ $loopSec->sec_school }}</a>&nbsp;in {{ $loopSec->sec_address }}</p>
								{{ $loopSec->sec_start . ' - ' . $loopSec->sec_end }} 
								
							</div>


						</div>
						@endforeach
						@endif


						@if (is_null($schoolP))

						@else
						<h4><span class="badge" style="background-color: #357ecc;">1</span>&nbsp;Primary </h4>
						@foreach ($getAndLoopP as $loopPri)
						<div class="box-body">
							<div class="box-header  with-border">

								<p>Attended&nbsp; <a href="#">{{ $loopPri->pri_school }}</a>&nbsp;in {{$loopPri->pri_address }}</p>
								
								{{ $loopPri->pri_start . ' - ' . $loopPri->pri_end }}
								
							</div>
						</div>
						@endforeach
						@endif
					@endif
				

