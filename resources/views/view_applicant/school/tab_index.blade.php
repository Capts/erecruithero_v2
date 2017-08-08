
	@include('view_applicant.school.terModal')
	<div class="box-body">
		<div class="row">
			<div class="colmd-12">
				<button type="button" class="btn btn-box-tool pull-right" title="Add school" data-toggle="modal" data-target="#terModal-{{ Auth::user()->id }}"><i class="fa fa-plus fa-2x"></i></button>
			</div>
			<div class="col-md-12">

				@if (is_null($schoolT))
					<h4 class="text-center" style="color:silver">nothing to show here.</h4>
				@else
					<p style="font-size: 16px;" class="label label-primary">Tertiary</p>

					@foreach ($getAndLoopT as $loopTer)

						<div class="box-body">
							<div class="box-header  with-border">
								{{ $loopTer->ter_school }}<br>
								{{ $loopTer->ter_address }} <br> 
								{{ ucfirst($loopTer->ter_degree) . ' in '  . ucfirst($loopTer->ter_field_of_study) }} <br> 
								{{ $loopTer->ter_major }} <br> 
								{{ $loopTer->ter_start_year. ' - ' .$loopTer->ter_end_year }} <br> 
								<div class="box-tools pull-right">
									<a href="#" title="edit"><i class="fa fa-pencil"></i></a>
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
									<a href="#" class="" title="edit"><i class="fa fa-pencil"></i></a>
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
									<a href="#" class="" title="edit"><i class="fa fa-pencil"></i></a>
								</div>
							</div>
						</div>
					@endforeach
				@endif

			</div>
			
		</div>

	</div>