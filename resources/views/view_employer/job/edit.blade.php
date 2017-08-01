@extends('view_employer.layouts.app')

@section('title', 'edit job | E-Recruit')

@section('content')

@include('view_employer.partials.employer_sidebar')
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Employer |
            <small>Edit this job post</small>
        </h1>
      
      {{--   <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol> --}}
    </section>

    <!-- Main content -->
    <section class="content">

      
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                     {!! Form::model($job, ['method' => 'PUT', 'route' => ['job.update', $job->id], 'class' => 'form-horizontal']) !!}
                        <div class="box-body">
                       
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}" style="margin-right: 10px;">
                                    {!! Form::label('job_title', 'Job Title') !!}
                                    {!! Form::text('job_title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('job_title') }}</small>
                                </div>

                                <div class="form-group{{ $errors->has('work_location') ? ' has-error' : '' }}" style="margin-right: 10px;">
                                    {!! Form::label('work_location', 'Work location') !!}
                                    {!! Form::text('work_location', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('work_location') }}</small>
                                </div>

                                 <div class="form-group" style="margin-right: 10px;">
                                   <label>Select Company <span style="color:red;">*</span></label>
                                   <select class="form-control" name="company" required="">
                                     <option value="{{ $job->company }}">{{ $job->company }}</option>
                                   </select>
                                 </div>
                               

                                <div class="form-group{{ $errors->has('applicant_needed') ? ' has-error' : '' }}" style="margin-right: 10px;">
                                    {!! Form::label('applicant_needed', 'No of person needed') !!}
                                    {!! Form::text('applicant_needed', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('applicant_needed') }}</small>
                                </div>

                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('responsibilities') ? ' has-error' : '' }}" style="margin-right: 10px;">
                                    {!! Form::label('responsibilities', 'Responsibilities') !!}
                                    {!! Form::textarea('responsibilities', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('responsibilities') }}</small>
                                </div>

                                <div class="form-group{{ $errors->has('qualifications') ? ' has-error' : '' }}" style="margin-right: 10px;">
                                    {!! Form::label('qualifications', 'Qualifications') !!}
                                    {!! Form::textarea('qualifications', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('qualifications') }}</small>
                                </div>
                            </div>
                          
                            
                           
                            
                        
                            <div>
                               <button type="submit" class="btn btn-flat bg-olive btn-md">update now</button>
                            </div>
                        
                        
                        
                        </div>
                        <!-- /.box-body -->
                    {!! Form::close() !!}
                   
                  
            </div>

            <!-- /.box -->
       

    </section>
    <!-- /.content -->


    </div>
    <!-- /.content-wrapper -->
    @include('view_employer.partials.footer')

    <div class="control-sidebar-bg"></div>
@stop