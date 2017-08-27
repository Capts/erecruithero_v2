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
			    <div class="modal-dialog modal-lg" role="document">
			        <div class="modal-content">
			            <div class="modal-header" style="background-color: #346b3e; color: white;">
			                {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> --}}
			                <i class="fa fa-user pull-left fa-2x"></i><h4 class="modal-title text-center">We need to set your profile first</h4>
			            </div>
			            <div class="modal-body">
			                		<div class="row">
			                			{!! Form::model($profile, ['route' => ['profile.update', $profile->user_id], 'method' => 'PUT']) !!}

			                				<div class="col-md-12">

												
			                					    {!! Form::hidden('firstname', $users->firstname, ['class' => 'form-control', 'required' => 'required']) !!}
			                					    <small class="text-danger">{{ $errors->first('firstname') }}</small>
			                					

			                				
			                					    {!! Form::hidden('lastname', $users->lastname, ['class' => 'form-control', 'required' => 'required']) !!}
			                					    <small class="text-danger">{{ $errors->first('lastname') }}</small>
			                				

												<div class="col-md-6">
													<div class="form-group{{ $errors->has('bday') ? ' has-error' : '' }}">
	                								    {!! Form::label('bday', 'Birthday') !!}
	                								    {!! Form::date('bday', ( isset($users->profile->bday) ? $users->profile->bday : null ), ['class' => 'form-control manual', 'placeholder'=>'mm/dd/yyyy', 'required' => 'required']) !!}
	                								    <small class="text-danger">{{ $errors->first('bday') }}</small>
		                							</div>
												</div>
												{{-- age --}}
											{{-- 	<div class="row">
													 
													 <div class="col-md-4">
													 	<select class="field form-control" name="month">
													 	  <option value="january">January</option>
													 	  <option value="february">February</option>
													 	  <option value="march">March</option>
													 	  <option value="april">April</option>
													 	  <option value="may">May</option>
													 	  <option value="june">June</option>
													 	  <option value="july">July</option>
													 	  <option value="august">August</option>
													 	  <option value="september">September</option>
													 	  <option value="october">October</option>
													 	  <option value="november">November</option>
													 	  <option value="december">December</option>
													 	</select>
													 </div>
													 <div class="col-md-4">
													 	<select class="field form-control" name="month" >
													 	  <option value="1">1</option>
													 	  <option value="2">2</option>
													 	  <option value="3">3</option>
													 	  <option value="4">4</option>
													 	  <option value="5">5</option>
													 	  <option value="6">6</option>
													 	  <option value="7">7</option>
													 	  <option value="8">8</option>
													 	  <option value="9">9</option>
													 	  <option value="10">10</option>
													 	  <option value="11">11</option>
													 	  <option value="12">12</option>
													 	  <option value="13">13</option>
													 	  <option value="14">14</option>
													 	  <option value="15">15</option>
													 	  <option value="16">16</option>
													 	  <option value="17">17</option>
													 	  <option value="18">18</option>
													 	  <option value="19">19</option>
													 	  <option value="20">20</option>
													 	  <option value="21">21</option>
													 	  <option value="22">22</option>
													 	  <option value="23">23</option>
													 	  <option value="24">24</option>
													 	  <option value="25">25</option>
													 	  <option value="26">26</option>
													 	  <option value="27">27</option>
													 	  <option value="27">27</option>
													 	  <option value="29">29</option>

													 	  <option value="30">30</option>
													 	  <option value="31">31</option>
													 	</select>
													 </div>

													 <div class="col-md-4">
													 	<select class="field" name="year">
													 	  <option value="2013">2013</option>
													 	  <option value="2014" selected="selected">2014</option>
													 	  <option value="2015">2015</option>
													 	</select>
													 </div>
												</div> --}}

											    {!! Form::hidden('age', null, ['class' => 'form-control', 'required' => 'required','id' => 'age', 'readonly']) !!}
													    

												<div class="col-md-6">
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
			                						    {!! Form::number('telephone', null, ['class' => 'form-control', 'placeholder' => 'leave blank if none']) !!}
			                						    <small class="text-danger">{{ $errors->first('telephone') }}</small>
			                						</div>
			                					</div>
		                						<div class="col-xs-6">
		                							
		                							<div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
		                							    {!! Form::label('mobile', 'Mobile') !!}
		                							    {!! Form::number('mobile', null, ['class' => 'form-control', 'required' => 'required']) !!}
		                							    <small class="text-danger">{{ $errors->first('mobile') }}</small>
		                							</div>
		                						</div>
			                				
			                				</div>

			                				<div class="col-md-12">
			                					<div class="col-xs-4">
			                						<div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
			                						    {!! Form::label('street', 'Street #') !!}
			                						    {!! Form::number('street',  ( isset($users->address->street) ? $users->address->street : null ), ['class' => 'form-control', 'required' => 'required']) !!}
			                						    <small class="text-danger">{{ $errors->first('street') }}</small>
			                						</div>
			                					</div>
			                					<div class="col-xs-4">
			                						<div class="form-group{{ $errors->has('barangay') ? ' has-error' : '' }}">
			                						    {!! Form::label('barangay', 'Barangay') !!}
			                						    {!! Form::text('barangay',  ( isset($users->address->barangay) ? $users->address->barangay : null ), ['class' => 'form-control', 'required' => 'required']) !!}
			                						    <small class="text-danger">{{ $errors->first('barangay') }}</small>
			                						</div>
			                					</div>
			                					<div class="col-xs-4">
			                						<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
			                						    {!! Form::label('city', 'City') !!}
			                						    {!! Form::text('city',  ( isset($users->address->city) ? $users->address->city : null ), ['class' => 'form-control', 'required' => 'required']) !!}
			                						    <small class="text-danger">{{ $errors->first('city') }}</small>
			                						</div>
			                					</div>
			                					<div class="col-xs-6">
			                						<div class="form-group{{ $errors->has('province') ? ' has-error' : '' }}">
			                						    {!! Form::label('province', 'Province') !!}
			                						    {!! Form::text('province',  ( isset($users->address->province) ? $users->address->province : null ), ['class' => 'form-control', 'required' => 'required']) !!}
			                						    <small class="text-danger">{{ $errors->first('province') }}</small>
			                						</div>
			                					</div>

			                					<div class="col-xs-6">
			                						<div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
			                						    {!! Form::label('country', 'Country') !!}
			                						    {!! Form::text('country', $users->address->country,   ['class' => 'form-control', 'required' => 'required']) !!}
			                						    <small class="text-danger">{{ $errors->first('country') }}</small>
			                						</div>
			                					</div>
			                				</div>

{{-- ( isset($users->address->country) ? $users->address->country : $users->countries ), --}}


			                				<div class="col-md-12">
				                				<div class="col-xs-12">
				                					<div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
			                					    {!! Form::label('bio', 'Bio or objective') !!}
			                					    {!! Form::textarea('bio', null, ['class' => 'form-control', 'required' => 'required', 'rows' => '5']) !!}
			                					    <small class="text-danger">{{ $errors->first('bio') }}</small>
			                					</div>
				                				</div>
			                					
			                					{!! Form::submit('save profile', ['class' => 'btn-block btn btn-success btn-flat btx-sm pull-right']) !!}
			                				</div>
			                					
			                			{!! Form::close() !!}
			                			</div>
								
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



