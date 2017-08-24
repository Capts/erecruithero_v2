<!-- Modal for tertiary-->

	<!-- Modal -->
	<div class="modal fade" id="school_modal_editP-{{ Auth::user()->id }}" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	     <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-graduation-cap fa-2x"></i>Edit education from <small> <a href="#">{{ $schoolS->sec_school }}</a></small></h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">

	      		<div class="col-md-12">
	      			
	      						<h4 class="text-center">Primary Level</h4>
	      						{!! Form::model($schoolP, ['route' => ['school.update', $schoolP->id], 'method' => 'PUT']) !!}
	      							    
      							    <div class="form-group{{ $errors->has('invi') ? ' has-error' : '' }}">
      							        {!! Form::hidden('invi', 'primary') !!}
      							        <small class="text-danger">{{ $errors->first('invi') }}</small>
      							    </div>
	      							

	      						    <div class="form-group{{ $errors->has('pri_school') ? ' has-error' : '' }}">
	      						        {!! Form::label('pri_school', 'Name of School') !!}
	      						        {!! Form::text('pri_school', null, ['class' => 'form-control','required' => 'required']) !!}
	      						        <small class="text-danger">{{ $errors->first('pri_school') }}</small>
	      						    </div>

	      						    <div class="form-group{{ $errors->has('pri_address') ? ' has-error' : '' }}">
	      						        {!! Form::label('pri_address', 'Address') !!}
	      						        {!! Form::text('pri_address', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						        <small class="text-danger">{{ $errors->first('pri_address') }}</small>
	      						    </div>

	      						   <div class="row">
	      						   	<div class="col-xs-6">
	      						   		<div class="form-group{{ $errors->has('pri_start') ? ' has-error' : '' }}">
	      						   		    {!! Form::label('pri_start', 'Year Started') !!}
	      						   		    {!! Form::text('pri_start', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						   		    <small class="text-danger">{{ $errors->first('pri_start') }}</small>
	      						   		</div>

	      						   		
	      						   	</div>
	      						   	<div class="col-xs-6">
	      						   		<div class="form-group{{ $errors->has('pri_end') ? ' has-error' : '' }}">
	      						   		    {!! Form::label('pri_end', 'Year Graduated') !!}
	      						   		    {!! Form::text('pri_end', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						   		    <small class="text-danger">{{ $errors->first('pri_end') }}</small>
	      						   		</div>
	      						   	</div>
	      						   </div>
	      						    <div class="section">
	      						    	
	      						    	{!! Form::submit('Update', ['class' => 'btn btn-success btn-flat pull-right']) !!}
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


