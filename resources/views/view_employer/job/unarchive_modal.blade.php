<!-- Modal for tertiary-->

	<!-- Modal -->
	<div class="modal fade" id="unarchive_modal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-key fa-2x">&nbsp;</i>Pull this out in the archive</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">

	      		<div class="col-md-12">

	      			{!! Form::model($job, ['route' => ['job.update', $job->id], 'method' => 'PUT']) !!}
	      			
	      			    
	      			    	<div class="col-xs-12">
		      			    	<div class="col-xs-6">
		      			    		<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
		      			    		    {!! Form::hidden('status', null, ['class' => 'form-control', 'required' => 'required']) !!}
		      			    		    <small class="text-danger">{{ $errors->first('status') }}</small>
	      			    			</div>
		      			    	</div>
		      			    	<div class="col-xs-12">
			      			    	<!-- Date -->
								    <div class="form-group{{ $errors->has('due_date') ? ' has-error' : '' }}">
								      {!! Form::label('due_date', 'Valid until') !!}

								      <div class="input-group date">
								        <div class="input-group-addon">
								          <i class="fa fa-calendar"></i>
								        </div>
								        {!! Form::text('due_date', '', ['class' => 'form-control pull-right', 'id' => 'datepicker', 'required' => 'required']) !!}
								        {{-- <input type="text" name='due_date' class="form-control pull-right" id="datepicker"> --}}
								        <small class="text-danger">{{ $errors->first('due_date') }}</small>
								      </div>
								      <!-- /.input group -->
								    </div>
									<div class="btn-group pull-right">
									    {!! Form::submit("Enable", ['class' => 'btn btn-flat bg-olive', 'name' => 'btnUnarchive', 'value' => 'update']) !!}
									</div>
		      			    	</div>
	      			    		
	      			    	</div>
	      			 
	      			  
	      			
	      			  
	      			
	      			{!! Form::close() !!}



	      		</div>



	      	</div>
	      </div>
	    </div>
	  </div>
	</div>

<!--End Modal-->


