@extends('view_applicant.layouts.app')

@section('title', 'E-RECRUIT HERO | Edit your experience')

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

			<div class="col-md-10 col-md-offset-1">
				<div class="box box-default">
					<div class="box-header with-border">
						<h4><i class="fa fa-black-tie">&nbsp;</i>Edit your experience</h4>
					</div>
					<div class="box-body">

						{!! Form::model($exp, ['route' => ['experience.update', $exp->id], 'method' => 'PUT']) !!}
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group{{ $errors->has('exp_title') ? ' has-error' : '' }}">
									    {!! Form::label('exp_title', 'Experience') !!}
									    {!! Form::text('exp_title', null, ['class' => 'form-control', 'required' => 'required']) !!}
									    <small class="text-danger">{{ $errors->first('exp_title') }}</small>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group{{ $errors->has('exp_company') ? ' has-error' : '' }}">
									    {!! Form::label('exp_company', 'Company') !!}
									    {!! Form::text('exp_company', null, ['class' => 'form-control', 'required' => 'required']) !!}
									    <small class="text-danger">{{ $errors->first('exp_company') }}</small>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group{{ $errors->has('exp_activities') ? ' has-error' : '' }}">
									    {!! Form::label('exp_activities', 'Participation/Activities performed') !!}
									    {!! Form::textarea('exp_activities', null, ['class' => 'form-control', 'required' => 'required']) !!}
									    <small class="text-danger">{{ $errors->first('exp_activities') }}</small>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
									  <label>From       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     To:</label>

									  <div class="input-group">
									    <div class="input-group-addon">
									      <i class="fa fa-calendar"></i>
									    </div>
									    {!! Form::text('exp_span_time', null, ['class'=> 'form-control pull-right', 'id' => 'reservation'])!!}
									    
									  </div>
									  <!-- /.input group -->
									</div>
									
								</div>

								
								
							</div>
							{!! Form::submit('Save experience', [ 'class' => 'btn btn-flat bg-olive pull-right']) !!}
							
						  
						{!! Form::close() !!}
										{!! Form::open(['route'=> ['experience.destroy', $exp->id], 'method' => 'POST']) !!}
											{{ method_field('delete') }}
									    	{!! Form::button("<i class='fa fa-trash'>&nbsp;</i>Remove this experience", ['type' => 'submit',  "class" => 'btn btn-flat btn-danger']) !!}

							    		{!! Form::close() !!}
					</div>
				</div>
			</div>



		</section>
	</div>
	@include('view_applicant.partials.footer')

	

</div>
<!-- ./wrapper -->

@stop


