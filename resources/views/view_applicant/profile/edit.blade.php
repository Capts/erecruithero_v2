@extends('view_applicant.layouts.app')

@section('title', 'E-RECRUIT HERO | Edit your profile')

@section('content')


<div class="wrapper">

	<header class="main-header">
		@include('view_applicant.partials.nav')
	</header>

	<!-- =============================================== -->

	<!-- Left side column. contains the sidebar -->
	@include('view_applicant.partials.sidebar')

	<!-- =============================================== -->

	<div class="content-wrapper">
		
		<!-- Main content -->
		<section class="content">

			<div id="myModal" class="modal fade" data-backdrop="static" data-keyboard="false">
			    <div class="modal-dialog modal-md" role="document">
			        <div class="modal-content">
			            <div class="modal-header" style="background-color: #346b3e; color: white;">
			                {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> --}}
			                <i class="fa fa-user pull-left fa-2x"></i><h4 class="modal-title text-center">We need to set your profile first</h4>
			            </div>
			            <div class="modal-body">
			                	<fieldset>
			                		<legend><h5>Basic information</h5></legend>
			                			<div class="row">
			                			{!! Form::model($profile, ['route' => ['profile.update', $profile->user_id], 'method' => 'PUT']) !!}
			                				<div class="col-md-12">
												
			                					
			                					    {!! Form::hidden('firstname', $users->firstname, ['class' => 'form-control', 'required' => 'required']) !!}
			                					    <small class="text-danger">{{ $errors->first('firstname') }}</small>
			                					

			                				
			                					    {!! Form::hidden('lastname', $users->lastname, ['class' => 'form-control', 'required' => 'required']) !!}
			                					    <small class="text-danger">{{ $errors->first('lastname') }}</small>
			                				

												<div class="col-xs-4">
													<!-- Date -->
													<div class="form-group{{ $errors->has('bday') ? ' has-error' : '' }}">
													  {!! Form::label('bday', 'Birthdate') !!}

													  <div class="input-group date">
													    <div class="input-group-addon">
													      <i class="fa fa-calendar"></i>
													    </div>
													    {!! Form::text('bday', null, ['class' => 'form-control pull-right', 'id' => 'datepicker']) !!}
													    {{-- <input type="text" name='bday' class="form-control pull-right" id="datepicker"> --}}
													    <small class="text-danger">{{ $errors->first('bday') }}</small>
													  </div>
													  <!-- /.input group -->
													</div>
												</div>
												<div class="col-xs-4">
													<div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
													    {!! Form::label('age', 'Age') !!}
													    {!! Form::text('age', null, ['class' => 'form-control', 'required' => 'required']) !!}
													    <small class="text-danger">{{ $errors->first('age') }}</small>
													</div>
												</div>
												<div class="col-xs-4">
													<div class="form-group{{ $errors->has('civil_status') ? ' has-error' : '' }}">
													    {!! Form::label('civil_status', 'Civil Status') !!}
													    {!! Form::select('civil_status', ['single' => 'single','married' => 'married'], null, ['selected', 'placeholder' => 'I am', 'class' => 'form-control', 'required']) !!}

													    <small class="text-danger">{{ $errors->first('civil_status') }}</small>
													</div>
												</div>
			                						
			                				</div>
			                				<div class="col-md-12">

			                					<div class="col-xs-6">
			                						
			                						<div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
			                						    {!! Form::label('telephone', 'Telephone') !!}
			                						    {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
			                						    <small class="text-danger">{{ $errors->first('telephone') }}</small>
			                						</div>
			                					</div>
		                						<div class="col-xs-6">
		                							
		                							<div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
		                							    {!! Form::label('mobile', 'Mobile') !!}
		                							    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
		                							    <small class="text-danger">{{ $errors->first('mobile') }}</small>
		                							</div>
		                						</div>
			                					
			                					
			                				</div>
			                				<div class="col-md-12">
				                				<div class="col-xs-12">
				                					<div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
			                					    {!! Form::label('bio', 'Bio or objective') !!}
			                					    {!! Form::textarea('bio', null, ['class' => 'form-control', 'required' => 'required']) !!}
			                					    <small class="text-danger">{{ $errors->first('bio') }}</small>
			                					</div>
				                				</div>
			                					
			                					{!! Form::submit('save profile', ['class' => 'btn btn-success btn-flat btx-sm pull-right']) !!}
			                				</div>
			                					
			                			{!! Form::close() !!}
			                			</div>
			                	</fieldset>
			                	<!-- End Profile-->
								
			            </div>
			        </div>
			    </div>
			</div>
		
			
				

		</section>
	</div>
	@include('view_applicant.partials.footer')

	

</div>
<!-- ./wrapper -->

@stop
