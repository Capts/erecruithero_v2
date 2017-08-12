@extends('layouts.app')

@section('title', 'Welcome and enjoy')


@section('content')


{{-- <div class="container-fluid" style="padding: 0px;margin: 0px;">
<img src="/img/b1.jpg" alt="" style="width: 100% ;opacity: 0.6">

</div> --}}
<section id="intro" class="text-intro no-padding-bottom">
  <img src="/img/b1.jpg" alt="">
  <div class="container" style="position: absolute;top: 60px;padding: 120px 120px">
    <div class="row" >
      <div class="col-md-12">
        <h1>Built For Job Seekers</h1>
        <h3 class="weight-300">Find the job you want and apply! It's easy as one-two-tree.
        </div>
        <div class="row">
          <div class="col-md-10">
            
            @if (Auth::check())
              @if (Auth::user()->roles()->first()->name === 'applicant')
                {!! Form::open(['method' => 'GET', 'route' => 'searchjob', 'class' => 'sidebar-form' ]) !!}
                  <div class="input-group">
                    <input type="text" name="searchApp" class="form-control input-lg" placeholder="Search jobs">
                    <span class="input-group-btn">
                          <button type="submit"  id="search-btn" class="btn btn-flat bg-olive btn-lg"><i class="fa fa-search"></i>
                          </button>
                        </span>
                  </div>

                {!! Form::close() !!}

              @else
                {!! Form::open(['method' => 'GET', 'route' => 'employer.search', 'class' => 'sidebar-form']) !!}
                  <div class="input-group">
                    <input type="text" name="search" class="form-control input-lg" placeholder="Search jobs">
                    <span class="input-group-btn">
                          <button type="submit"  id="search-btn" class="btn btn-flat bg-olive btn-lg"><i class="fa fa-search"></i>
                          </button>
                        </span>
                  </div>

                

                {!! Form::close() !!}

              @endif
            @else
             
            @endif

           
           
          </div>
         
        </div>
      </div>


      @if(Auth::check())
      @else
      <br><br><br>

      <div class="container">
        <h4><a href="/login" >Login</a></h4> &nbsp; <span>if you don't have account. It's <em>FREE!</em></span><br><br>
        <h4><a href="/register" >Register</a></h4> &nbsp; if you want to join.
      </div>
      @endif


    </section>


    <div class="container">
      <br>
      <div id="content">
        <div class="row">
          <div class="col-md-4">
            <div class="well">
              <legend class="text-center">About Us</legend>
              <fieldset>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ea debitis. Rem cupiditate expedita ut harum, minima iure et eveniet architecto, quos mollitia officiis totam excepturi vitae, commodi sapiente tempora!
              </fieldset>
            </div>
          </div>
          <div class="col-md-4">
            <div class="well">
              <legend class="text-center">Contact Us</legend>
              <fieldset>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ea debitis. Rem cupiditate expedita ut harum, minima iure et eveniet architecto, quos mollitia officiis totam excepturi vitae, commodi sapiente tempora!
              </fieldset>
            </div>
          </div>
          <div class="col-md-4">
            <div class="well">
              <legend class="text-center">Learn more</legend>
              <fieldset>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ea debitis. Rem cupiditate expedita ut harum, minima iure et eveniet architecto, quos mollitia officiis totam excepturi vitae, commodi sapiente tempora!
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>


    @stop
