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

			<div class="col-md-7 col-md-offset-3">
				<div class="box box-default">
					<div class="box-header with-border">
						<h4><i class="fa fa-language">&nbsp;</i>Edit your skill</h4>
					</div>
					<div class="box-body">

						{!! Form::model($skill, ['route' => ['skill.update', $skill->id], 'method' => 'PUT']) !!}

						    <div class="form-group{{ $errors->has('skill_name') ? ' has-error' : '' }}">
						        {!! Form::label('skill_name', 'Skill name') !!}
						        {!! Form::text('skill_name', null, ['class' => 'form-control', 'autofocus' => 'autofocus','required' => 'required']) !!}
						        <small class="text-danger">{{ $errors->first('skill_name') }}</small>
						    </div>

						    	{!! Form::submit('save skill', ['class' => 'btn btn-success btn-flat pull-right']) !!}
						   
						{!! Form::close() !!}
							
							{!! Form::open(['route'=> ['skill.destroy', $skill->id], 'method' => 'POST']) !!}
								{{ method_field('delete') }}
						    	{!! Form::submit('delete skill', ["class" => 'btn btn-flat btn-danger pull-left']) !!}

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


