<!-- Modal for tertiary-->

	<!-- Modal -->
	<div class="modal fade" id="school_modal_editT-{{ Auth::user()->id }}" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        
	        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-graduation-cap fa-2x"></i>Edit education from <small><a href="#">{{ $schoolT->ter_school }}</a></small></h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">

	      		<div class="col-md-12">
	      				
								<h4 class="text-center"><i class="fa fa-pencil">&nbsp;</i>Tertiary Level</h4>
								{!! Form::model($schoolT, ['route' => ['school.update', $schoolT->id], 'method' => 'PUT']) !!}

							
									{!! Form::hidden('invi', 'tertiary') !!}
								


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

								<div class="row">
									<div class="col-xs-6">
										<div class="form-group{{ $errors->has('ter_start_year') ? ' has-error' : '' }}">
											{!! Form::label('ter_start_year', 'Year Started') !!}
											{!! Form::text('ter_start_year', null, ['class' => 'form-control', 'required' => 'required']) !!}
											<small class="text-danger">{{ $errors->first('ter_start_year') }}</small>
										</div>

									</div>
									<div class="col-xs-6">
										<div class="form-group{{ $errors->has('ter_end_year') ? ' has-error' : '' }}">
											{!! Form::label('ter_end_year', 'Year Graduated') !!}
											{!! Form::text('ter_end_year', null, ['class' => 'form-control', 'required' => 'required']) !!}
											<small class="text-danger">{{ $errors->first('ter_end_year') }}</small>
										</div>
									</div>
								</div>

								{!! Form::submit('save', ['class' => 'btn btn-success btn-flat pull-right']) !!}


								{!! Form::close() !!}

								{!! Form::open(['route'=> ['school.destroy', $schoolT->id], 'method' => 'POST']) !!}
								{{ method_field('delete') }}
								{!! Form::button("<i class='fa fa-trash'>&nbsp;</i>Remove this school", ['type' => 'submit',  "class" => 'btn btn-flat btn-danger']) !!}

								{!! Form::close() !!}

	      			
	      		</div>



	      	</div>
	      </div>
	    </div>
	  </div>
	</div>

<!--End Modal-->


