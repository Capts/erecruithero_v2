<!-- Modal for tertiary-->

	<!-- Modal -->
	@if(is_null($schoolT) and is_null($schoolS) and is_null($schoolP) )

		
	@else

		<div class="modal fade" id="school_modal_editS-{{ Auth::user()->id }}" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-graduation-cap fa-2x"></i>Edit education from <small> <a href="#">{{ $schoolS->sec_school }}</a></small></h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">

	      		<div class="col-md-12">
	      			
	      						<h4 class="text-center"><i class="fa fa-pencil">&nbsp;</i>Secondary Level</h4>
	      						{!! Form::model($schoolS, ['route' => ['school.update', $schoolS->id], 'method' => 'PUT']) !!}
	      							    
      							   
      							        {!! Form::hidden('invi', 'secondary') !!}
      							      
	      							

	      						    <div class="form-group{{ $errors->has('sec_school') ? ' has-error' : '' }}">
	      						        {!! Form::label('sec_school', 'Name of School') !!}
	      						        {!! Form::text('sec_school', null, ['class' => 'form-control','required' => 'required']) !!}
	      						        <small class="text-danger">{{ $errors->first('sec_school') }}</small>
	      						    </div>

	      						    <div class="form-group{{ $errors->has('sec_address') ? ' has-error' : '' }}">
	      						        {!! Form::label('sec_address', 'Address') !!}
	      						        {!! Form::text('sec_address', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						        <small class="text-danger">{{ $errors->first('sec_address') }}</small>
	      						    </div>

	      						   <div class="row">
	      						   	<div class="col-xs-6">
	      						   		<div class="form-group{{ $errors->has('sec_start') ? ' has-error' : '' }}">
	      						   		    {!! Form::label('sec_start', 'Year Started') !!}
	      						   		    {!! Form::text('sec_start', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						   		    <small class="text-danger">{{ $errors->first('sec_start') }}</small>
	      						   		</div>

	      						   		
	      						   	</div>
	      						   	<div class="col-xs-6">
	      						   		<div class="form-group{{ $errors->has('sec_end') ? ' has-error' : '' }}">
	      						   		    {!! Form::label('sec_end', 'Year Graduated') !!}
	      						   		    {!! Form::text('sec_end', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						   		    <small class="text-danger">{{ $errors->first('sec_end') }}</small>
	      						   		</div>
	      						   	</div>
	      						   </div>
	      						    <div class="section">
	      						    	
	      						    	{!! Form::submit('save', ['class' => 'btn btn-success btn-flat pull-right']) !!}
	      						    </div>
	      						    <br>
	      						    <br>
	      						{!! Form::close() !!}

	      						{!! Form::open(['route'=> ['school.destroy', $schoolS->id], 'method' => 'POST']) !!}
								{{ method_field('delete') }}
								{!! Form::button("<i class='fa fa-trash'>&nbsp;</i>Remove this school", ['type' => 'submit',  "class" => 'btn btn-flat btn-danger']) !!}

								{!! Form::close() !!}
	      					

	      		</div>



	      	</div>
	      </div>
	    </div>
	  </div>
	</div>
	@endif
	

<!--End Modal-->


