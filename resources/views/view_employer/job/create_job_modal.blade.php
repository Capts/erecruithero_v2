<!-- Modal for tertiary-->

	<!-- Modal -->
	<div class="modal fade" id="create_job_modal-{{ Auth::user()->id }}" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-gavel fa-2x">&nbsp;</i>Create New Job</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">

	      		<div class="col-md-12">
	      			{!! Form::open(['method' => 'POST', 'route' => 'job.store']) !!}
	      			
	      			    <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
	      			        {!! Form::label('job_title', 'Job title') !!}
	      			        {!! Form::text('job_title', null, ['class' => 'form-control', 'required' => 'required', 'autofocus' => '']) !!}
	      			        <small class="text-danger">{{ $errors->first('job_title') }}</small>
	      			    </div>

	      			    <div class="row">
	      			    	<div class="col-xs-6">
	      			    		<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
            					    {!! Form::label('company', 'Company') !!}
            					    {!! Form::select('company', ['E-recruit hero' => 'E-recruit hero'], null, ['selected', 'placeholder' => 'Select company', 'class' => 'form-control', 'required']) !!}

            					    <small class="text-danger">{{ $errors->first('company') }}</small>
            					</div>

	      			    		
	      			    	</div>
	      			    	<div class="col-xs-6">
	      			    		<div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
	      			    		    {!! Form::label('salary', 'Salary') !!}
	      			    		    {!! Form::text('salary', null, ['class' => 'form-control', 'placeholder' => 'Leave blank if salary is to be discussed.']) !!}
	      			    		    <small class="text-danger">{{ $errors->first('salary') }}</small>
	      			    		</div>
	      			    	</div>
	      			    </div>

	      			    <div class="row">
	      			    	<div class="col-xs-6">
	      			    		
	      			    		 <div class="form-group{{ $errors->has('work_location') ? ' has-error' : '' }}">
	      			    		     {!! Form::label('work_location', 'Work location') !!}
	      			    		     {!! Form::text('work_location', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      			    		     <small class="text-danger">{{ $errors->first('work_location') }}</small>
	      			    		 </div>

	      			    		

	      			    	</div>
	      			    	<div class="col-xs-6">
		      			    	<!-- Date -->
							    <div class="form-group{{ $errors->has('due_date') ? ' has-error' : '' }}">
							      {!! Form::label('due_date', 'Valid until') !!}

							      <div class="input-group date">
							        <div class="input-group-addon">
							          <i class="fa fa-calendar"></i>
							        </div>
							        {!! Form::text('due_date', null, ['class' => 'form-control pull-right', 'id' => 'datepicker']) !!}
							        {{-- <input type="text" name='due_date' class="form-control pull-right" id="datepicker"> --}}
							        <small class="text-danger">{{ $errors->first('due_date') }}</small>
							      </div>
							      <!-- /.input group -->
							    </div>

	      			    	</div>
	      			    </div>

	      			    <div class="row">
	      			    	<div class="col-xs-6">
	      			    		<div class="form-group{{ $errors->has('responsibilities') ? ' has-error' : '' }}">
	      			    		    {!! Form::label('responsibilities', 'Responsibilities') !!}
	      			    		    {!! Form::textarea('responsibilities', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      			    		    <small class="text-danger">{{ $errors->first('responsibilities') }}</small>
	      			    		</div>
	      			    	</div>
	      			    	<div class="col-xs-6">
	      			    		<div class="form-group{{ $errors->has('qualifications') ? ' has-error' : '' }}">
	      			    		    {!! Form::label('qualifications', 'Qualifications') !!}
	      			    		    {!! Form::textarea('qualifications', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      			    		    <small class="text-danger">{{ $errors->first('qualifications') }}</small>
	      			    		</div>
	      			    	</div>
	      			    </div>

	      			  
	      			
	      			    <div class="btn-group pull-right">
	      			        {!! Form::submit("post job", ['class' => 'btn btn-flat bg-olive']) !!}
	      			    </div>
	      			
	      			{!! Form::close() !!}


	      		</div>



	      	</div>
	      </div>
	    </div>
	  </div>
	</div>

<!--End Modal-->


