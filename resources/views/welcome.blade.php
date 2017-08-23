@extends('layouts.app')

@section('title', 'Welcome and enjoy')


@section('content')



    

{{-- <section class="col-xs-12"> --}}

    @if (Auth::check())
      <div class="row" style="height: 420px;">

        @if (Auth::user()->roles()->first()->name === 'applicant')
        {!! Form::open(['method' => 'GET', 'route' => 'searchjob', 'class' => 'sidebar-form' ]) !!}
        <div class="col-md-6 col-md-offset-3" style="margin-top:60px;">
          <h1>Built For Job Seekers</h1>
          <h3 class="weight-300">Find the job you want and apply! It's easy as one-two-tree.</h3>
        </div>

        <div class="row">
          <div class="col-xs-6 col-xs-offset-3" >
            <div class="input-group">

              <input type="text" name="searchApp" class="form-control input-lg" placeholder="Search jobs">
              <span class="input-group-btn">
                <button type="submit"  id="search-btn" class="btn btn-flat bg-olive btn-lg"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </div>
        </div>

        {!! Form::close() !!}

        @elseif (Auth::user()->roles()->first()->name === 'employer')
          {!! Form::open(['method' => 'GET', 'route' => 'employer.search', 'class' => 'sidebar-form']) !!}
            <div class="col-md-10 col-md-offset-2">
            <br><br><br><br>
              <h1>Welcome, {{ Auth::user()->firstname }}!</h1>
              <h3 class="weight-300">search a skilled applicants</h3>
              <div class="row">
                <div class="col-md-10">
                  <div class="input-group">
                    <input type="text" name="search" class="form-control input-lg" placeholder="Search skilled applicants">
                    <span class="input-group-btn">
                      <button type="submit"  id="search-btn" class="btn btn-flat bg-olive btn-lg"><i class="fa fa-search"></i>
                      </button>
                    </span>
                  </div>

                </div>
            <br><br><br><br>

            </div>

            
            </div>

          {!! Form::close() !!}


        @endif

    @else
    <!-- login large -->
      <section>
         <img src="/img/b1.jpg" class="img-responsive hidden-xs hidden-sm" alt="" id="image1">
            <span class="hidden-xs hidden-sm" id="wordingsInLarge">
              <h1 id="intro">Create your account now!</h1>
              <h4 class="weight-300" id="intro"><span class=""><a href="/register" >Register</a></span> It's FREE! </h4>

            </span>
            
            <section  class="login-box-body col-xs-3  visible-lg visible-md" id="loginLarge">
              
                @if(Auth::check())
                @else
                  <p class="login-box-msg">Sign in to start</p>
                <form class="" role="form" method="POST" action="{{ route('login') }}" >
                  {{ csrf_field() }}

                  <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">


                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                    <span class="fa fa-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif

                  </div>
                  <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">

                    <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                    <span class="fa fa-unlock-alt form-control-feedback"></span>
                    @if ($errors->has('password'))
                    <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif

                  </div>
                  <label>
                     <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                   </label>
                  <div class="row">
                    <div class="col-xs-12">
                      <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    
                      <a class="btn btn-link pull-right" href="{{ route('password.request') }}">
                        Forgot Your Password?
                      </a>
                  

                  </div>

                  <br>

                </form>
                   

                
                @endif
              

            </section>

      </section>

    @endif
  </div>



{{-- </section> --}}


<section class="text-intro no-padding-bottom">
  <div class="container">

    @if(Auth::check())
    @else

    <div class="col-xs-12 visible-xs visible-sm" style="margin:0px 0px;padding: 0px 0px 0px">
      
      @include('auth.login')
    </div>
    @endif
  

</section>
  

    <div class="container">
      <br><br><br><br>
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
