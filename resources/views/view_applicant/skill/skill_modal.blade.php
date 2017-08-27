<!-- skill modal-->

	<!-- Modal -->
	<div class="modal fade" id="skill_modal-{{ Auth::user()->id }}" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-language fa-2x">&nbsp;</i>Add some skills or qualifications</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">

	      		<div class="col-md-12">
	      			
					<h4 class="text-center"></h4>
						{!! Form::open(['method' => 'POST', 'route' => 'skill.store']) !!}

						    <div class="form-group{{ $errors->has('skill_name') ? ' has-error' : '' }}">
						        {!! Form::label('skill_name', 'Skills or qualifications') !!}
						        {!! Form::text('skill_name', null, ['class' => 'form-control', 'autofocus' => 'autofocus'  ,'required' => 'required']) !!}
						        <small class="text-danger">{{ $errors->first('skill_name') }}</small>
						    </div>
						    
						    	{!! Form::submit('add skill', ['class' => 'btn btn-success btn-flat pull-right']) !!}
						    </div>
						    <br>
						    <br>
						{!! Form::close() !!}

	      				


	      		</div>



	      	</div>
	      </div>
	    </div>
	  </div>
	</div>

<!--End Modal-->


