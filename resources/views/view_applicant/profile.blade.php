@extends('view_applicant.layouts.app')

@section('title', 'Your profile')

@section('content')


<div class="wrapper">

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			User Profile
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-user"></i> Applicant</a></li>
			<li class="active">User profile</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="row">
			@include('view_applicant.partials.applicants_sidebar')
			<!-- /.col -->
			<div class="col-md-9">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h5 class="box-title" style="font-size: 16px;color:orange;"><i class="fa fa-exclamation-circle" style="color:orange;"></i> &nbsp;Please edit your profile to automize the job search and matchmaking.</h5>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>

						</div>
						<!-- /.box-tools -->
					</div>
				</div>

				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#aboutme" data-toggle="tab">About me</a></li>
						<li><a href="#jobs" data-toggle="tab">List of all jobs</a></li>
						<li><a href="#settings" data-toggle="tab">Settings</a></li>
					</ul>

					<div class="tab-content">
						<div class="active tab-pane" id="aboutme">

							<div class="container " style="width:auto;" >
								
								<div class="row">
									<div class="col-md-6">
										<div class="col-xs-12">
											<div class="box box-primary">
												<div class="box-header with-border">
													<h5>Personal information</h5>

													<div class="box-tools pull-right">
														<button style="border-radius:20px 20px" type="button" class="btn btn-md bg-orange" data-toggle="tooltip" title="Minimize!" data-widget="collapse"><i class="fa fa-minus"></i></button>
														
													</div>
												</div>
												<div class="box-body">

														<p class="text-center"><img src="{{Storage::url(Auth::user()->avatar)}}" class="img-circle" alt="" height="90px" width="90px" ></p>
														<dl class="dl-horizontal">
														  <dt>Full Name :</dt>
														  	<dd>
														  		{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
														  	</dd>

														  <dt>Email :</dt>
														  	<dd>
														  		{{ Auth::user()->email }}
														  	</dd>

														  <dt>Gender :</dt>
														  	<dd>
														  		{{ Auth::user()->gender }}
														  	</dd>

														  
														  <dt>Birthday :</dt>
														  	<dd>
														  		{{ Auth::user()->profile->bday }}
														  	</dd>

														  <dt>Civil Status :</dt>
														  	<dd>{{ Auth::user()->profile->civil_status }}</dd>
														  	
														</dl>
														<div>
															<fieldset>
																<h4>Bio</h4>
																<blockquote>
																	{{ Auth::user()->profile->bio }}
																</blockquote>
															</fieldset>
														</div>
														<hr>
															<p>Last updated : <span>{{ date('M j,Y', strtotime(Auth::user()->updated_at)) }}</span></p>
														
												</div>
											</div>
										</div>

										<div class="col-xs-12">
											<div class="box box-primary">
												<div class="box-header with-border">
													<h5>Education</h5>

													<div class="box-tools pull-right">
														
														<button style="border-radius:20px 20px" type="button" class="btn btn-md bg-orange" data-toggle="tooltip" title="Minimize!" data-widget="collapse"><i class="fa fa-minus"></i></button>
														
													</div>
												</div>
												<div class="box-body">
													<dl class="dl-horizontal">
														<dt>School attended :</dt>
														<dd>
															{{ Auth::user()->school->school }}
														</dd>

														<dt>Course :</dt>
														<dd>
															{{ Auth::user()->school->field_of_study }}
														</dd>

														<dt>Major :</dt>
														<dd>
															{{ Auth::user()->school->major }}
														</dd>
														<dt>Schoo status: </dt>
														<dd>
															{{ Auth::user()->school->school_status }}
														</dd>

													</dl>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="col-xs-12">
											<div class="box box-primary">
												<div class="box-header with-border">
													<h5>Skills</h5>

													<div class="box-tools pull-right">
														
														<button style="border-radius:20px 20px" type="button" class="btn btn-md bg-orange" data-toggle="tooltip" title="Minimize!" data-widget="collapse"><i class="fa fa-minus"></i></button>
													</div>
												</div>

												<div class="box-body">
													fasf
												</div>
											
											</div>
										</div>

										<div class="col-xs-12">
											<div class="box box-primary">
												<div class="box-header with-border">
													<h5>Where to find me</h5>

													<div class="box-tools pull-right">
														
														<button style="border-radius:20px 20px" type="button" class="btn btn-md bg-orange" data-toggle="tooltip" title="Minimize!" data-widget="collapse"><i class="fa fa-minus"></i></button>
													</div>
												</div>
												<div class="box-body">
													<dl class="dl-horizontal">
														<dt>Street :</dt>
															<dd>{{ Auth::user()->address->street}}</dd>
														
														<dt>Barangay :</dt>
															<dd>{{ Auth::user()->address->barangay}}</dd>

														<dt>City :</dt>
															<dd>{{ Auth::user()->address->city}}</dd>

														<dt>Province :</dt>
															<dd>{{ Auth::user()->address->province}}</dd>

														<dt>Country :</dt>
															<dd>{{ Auth::user()->address->country}}</dd>
														
													</dl>
												</div>	
											</div>	
										</div>

										<div class="col-xs-12">
											<div class="box box-primary">
												<div class="box-header with-border">
													<h5>Resume</h5>

													<div class="box-tools pull-right">
														&nbsp;
														<button style="border-radius:20px 20px" type="button" class="btn btn-md bg-orange" data-toggle="tooltip" title="Minimize!" data-widget="collapse"><i class="fa fa-minus"></i></button>
													</div>
													<!-- /.box-tools -->
												</div>
												<!-- /.box-header -->
												<div class="box-body">
													<span>Upload your resume</span><br>
													<form action="" enctype="multipart/form-data" method="POST">
														{{ csrf_field() }}
														<span>
															<input type="file" name="resume"><br>
															<input type="submit" value="Upload now" class="btn btn-primary btn-flat btn-sm">
														</span>
														<span class="pull-right"></span>


													</form>
												</div>
												<!-- /.box-body -->
											</div>
											<!-- /.box -->
										</div>
											
									</div>
								</div>
							</div>

								

						</div>
						<!-- /.tab-pane -->
						
						
						<div class="tab-pane" id="jobs">
						</div>
						<!-- /.tab-pane -->

						<div class="tab-pane" id="settings">
						</div>
						<!-- /.tab-pane -->

					</div>
					<!-- /.tab-content -->
				</div>
				<!-- /.nav-tabs-custom -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

	</section>

</div>
<!-- ./wrapper -->

@stop