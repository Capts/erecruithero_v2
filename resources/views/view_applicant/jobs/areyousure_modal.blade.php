<div class="row">
	<div class="col-md-12">
		<!-- Modal for tertiary-->

			<!-- Modal -->
			<div class="modal fade" id="areyousure-{{ Auth::user()->id }}" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-xs" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> --}}
			        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-question-circle fa-2x pull-right" style="color:#2e7489;"></i> &nbsp;Apply for this job?</h4>
			      </div>
			      <div class="modal-body">
			      	<div class="row">
						
						<div class="text-center">
							<div class="row">
								<div class="btn-group" style="width: 90%; margin:20px 0px;">
									{!! Form::open(['method' => 'POST', 'route' => 'apply.store']) !!}
									
									    <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
									        {!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control', 'required' => 'required']) !!}
									        <small class="text-danger">{{ $errors->first('user_id') }}</small>
									    </div>

									    <div class="form-group{{ $errors->has('job_id') ? ' has-error' : '' }}">
									        {!! Form::hidden('job_id', $job->id, ['class' => 'form-control', 'required' => 'required']) !!}
									        <small class="text-danger">{{ $errors->first('job_id') }}</small>
									    </div>

									    
									
									    
										<a class="btn btn-flat btn-danger btn-block" data-dismiss="modal">No</a> <br>
										<button type="submit" class="btn btn-flat bg-olive btn-block">Yes</button>
									
									{!! Form::close() !!}
								</div>
									
								
							</div>
							
						</div>
							
						

			      	</div>
			      </div>
			    </div>
			  </div>
			</div>

		<!--End Modal-->



	</div>
</div>