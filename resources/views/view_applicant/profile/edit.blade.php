@extends('view_applicant.layouts.app')

@section('title', 'E-RECRUIT HERO | Profile')

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
			                <h4 class="modal-title text-center">Whoops! It seems that your profile is empty.</h4>
			            </div>
			            <div class="modal-body">
							<p>Edit your profile before proceeding</p>
							<br>
								@foreach($profile as $p)
								@endforeach
								<!-- Profile -->
			                	<fieldset>
			                		<legend><h5>Basic information</h5></legend>
			                			<div class="row">
			                			{!! Form::model($profile, ['route' => ['profile.update', $profile->id], 'method' => 'PUT']) !!}
			                				<div class="col-md-6">

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

	                						  	<div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
	                						  	    {!! Form::label('age', 'Age') !!}
	                						  	    {!! Form::text('age', null, ['class' => 'form-control', 'required' => 'required']) !!}
	                						  	    <small class="text-danger">{{ $errors->first('age') }}</small>
	                						  	</div>
			                						
			                				</div>
			                				<div class="col-md-6">
			                					<div class="form-group{{ $errors->has('civil_status') ? ' has-error' : '' }}">
			                					    {!! Form::label('civil_status', 'Civil Status') !!}
			                					    {!! Form::select('civil_status', ['single' => 'single','married' => 'married'], null, ['selected', 'placeholder' => 'I am', 'class' => 'form-control', 'required']) !!}

			                					    <small class="text-danger">{{ $errors->first('civil_status') }}</small>
			                					</div>
			                				</div>
			                				<div class="col-md-12">
			                					<div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
			                					    {!! Form::label('bio', 'Bio') !!}
			                					    {!! Form::textarea('bio', null, ['class' => 'form-control', 'required' => 'required']) !!}
			                					    <small class="text-danger">{{ $errors->first('bio') }}</small>
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
