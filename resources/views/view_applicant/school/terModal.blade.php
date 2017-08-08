<!-- Modal for tertiary-->

	<!-- Modal -->
	<div class="modal fade" id="terModal-{{ Auth::user()->id }}" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-graduation-cap fa-2x"></i>Add school<small> | select level</small></h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">

	      		<div class="col-md-12">
	      			<div class="nav-tabs-custom">
	      				<ul class="nav nav-tabs" style="font-size:18px;">
	      					{{-- <li class="active"><a href="welcome" data-toggle="tab">Welcome</a></li> --}}
	      					<li><a href="#tertiary" data-toggle="tab">Tertiary &nbsp;<span class="badge">3</span></a></li>
	      					<li><a href="#secondary" data-toggle="tab">Secondary &nbsp;<span class="badge">2</span></a></li>
	      					<li><a href="#primary" data-toggle="tab">Primary &nbsp;<span class="badge">1</span></a></li>
	      				</ul>
	      				<div class="tab-content">
	      					<div class="tab-pane" id="tertiary">
								<h4 class="text-center">Tertiary Level</h4>
	      						{!! Form::open(['method' => 'POST', 'route' => 'school.store']) !!}
	      							    
      							    <div class="form-group{{ $errors->has('invi') ? ' has-error' : '' }}">
      							        {!! Form::hidden('invi', 'tertiary') !!}
      							        <small class="text-danger">{{ $errors->first('invi') }}</small>
      							    </div>
	      							

	      						    <div class="form-group{{ $errors->has('ter_school') ? ' has-error' : '' }}">
	      						        {!! Form::label('ter_school', 'Name of School/University') !!}
	      						        {!! Form::text('ter_school', null, ['class' => 'form-control', 'autofocus' => 'autofocus','required' => 'required']) !!}
	      						        <small class="text-danger">{{ $errors->first('ter_school') }}</small>
	      						    </div>

	      						    <div class="form-group{{ $errors->has('ter_address') ? ' has-error' : '' }}">
	      						        {!! Form::label('ter_address', 'Address') !!}
	      						        {!! Form::text('ter_address', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						        <small class="text-danger">{{ $errors->first('ter_address') }}</small>
	      						    </div>
	      						    
	      						    	<div class="form-group{{ $errors->has('ter_degree') ? ' has-error' : '' }}">
	      						    	    {!! Form::label('ter_degree', 'Degree') !!}
	      						    	    {!! Form::select('ter_degree', ['bachelor of science' => 'bachelor of science','masteral' => 'masteral'], null, ['selected', 'placeholder' => 'select one', 'class' => 'form-control', 'required']) !!}

	      						    	    <small class="text-danger">{{ $errors->first('ter_degree') }}</small>
	      						    	</div>
	      						    
	      						    <div class="form-group{{ $errors->has('ter_field_of_study') ? ' has-error' : '' }}">
	      						        {!! Form::label('ter_field_of_study', 'Field of Study') !!}
	      						        {!! Form::text('ter_field_of_study', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						        <small class="text-danger">{{ $errors->first('ter_field_of_study') }}</small>
	      						    </div>

	      						    <div class="form-group{{ $errors->has('ter_major') ? ' has-error' : '' }}">
	      						        {!! Form::label('ter_major', 'Major') !!}
	      						        {!! Form::text('ter_major', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						        <small class="text-danger">{{ $errors->first('ter_major') }}</small>
	      						    </div>

	      						    <div class="form-group{{ $errors->has('ter_start_year') ? ' has-error' : '' }}">
	      						        {!! Form::label('ter_start_year', 'Year Started') !!}
	      						        {!! Form::text('ter_start_year', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						        <small class="text-danger">{{ $errors->first('ter_start_year') }}</small>
	      						    </div>

	      						    <div class="form-group{{ $errors->has('ter_end_year') ? ' has-error' : '' }}">
	      						        {!! Form::label('ter_end_year', 'Year Graduated') !!}
	      						        {!! Form::text('ter_end_year', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						        <small class="text-danger">{{ $errors->first('ter_end_year') }}</small>
	      						    </div>
	      						    <div class="section">
	      						    	
	      						    	{!! Form::submit('save', ['class' => 'btn btn-success btn-flat pull-right']) !!}
	      						    </div>
	      						    <br>
	      						    <br>
	      						{!! Form::close() !!}

	      					</div>
	      					<!-- /.tab-pane -->

	      					<div class="tab-pane" id="secondary">
	      						<h4 class="text-center">Secondary Level</h4>
	      						{!! Form::open(['method' => 'POST', 'route' => 'school.store']) !!}
	      							    
      							    <div class="form-group{{ $errors->has('invi') ? ' has-error' : '' }}">
      							        {!! Form::hidden('invi', 'secondary') !!}
      							        <small class="text-danger">{{ $errors->first('invi') }}</small>
      							    </div>
	      							

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

	      						    <div class="form-group{{ $errors->has('sec_start') ? ' has-error' : '' }}">
	      						        {!! Form::label('sec_start', 'Year Started') !!}
	      						        {!! Form::text('sec_start', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						        <small class="text-danger">{{ $errors->first('sec_start') }}</small>
	      						    </div>

	      						    <div class="form-group{{ $errors->has('sec_end') ? ' has-error' : '' }}">
	      						        {!! Form::label('sec_end', 'Year Graduated') !!}
	      						        {!! Form::text('sec_end', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						        <small class="text-danger">{{ $errors->first('sec_end') }}</small>
	      						    </div>
	      						    <div class="section">
	      						    	
	      						    	{!! Form::submit('save', ['class' => 'btn btn-success btn-flat pull-right']) !!}
	      						    </div>
	      						    <br>
	      						    <br>
	      						{!! Form::close() !!}
	      					</div>


	      					<div class="tab-pane" id="primary">
	      						<h4 class="text-center">Primary Level</h4>
	      						{!! Form::open(['method' => 'POST', 'route' => 'school.store']) !!}
	      							    
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

	      						    <div class="form-group{{ $errors->has('pri_start') ? ' has-error' : '' }}">
	      						        {!! Form::label('pri_start', 'Year Started') !!}
	      						        {!! Form::text('pri_start', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						        <small class="text-danger">{{ $errors->first('pri_start') }}</small>
	      						    </div>

	      						    <div class="form-group{{ $errors->has('pri_end') ? ' has-error' : '' }}">
	      						        {!! Form::label('pri_end', 'Year Graduated') !!}
	      						        {!! Form::text('pri_end', null, ['class' => 'form-control', 'required' => 'required']) !!}
	      						        <small class="text-danger">{{ $errors->first('pri_end') }}</small>
	      						    </div>
	      						    <div class="section">
	      						    	
	      						    	{!! Form::submit('save', ['class' => 'btn btn-success btn-flat pull-right']) !!}
	      						    </div>
	      						    <br>
	      						    <br>
	      						{!! Form::close() !!}

	      					</div>
	      					<!-- /.tab-pane -->
	      				</div>
	      				<!-- /.tab-content -->
	      			</div>
	      			<!-- /.nav-tabs-custom -->


	      		</div>



	      	</div>
	      </div>
	      {{-- <div class="modal-footer">
	        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary btn-flat"><i class="fa fa-check">&nbsp;</i> Save changes</button>
	      </div> --}}
	    </div>
	  </div>
	</div>

<!--End Modal-->


