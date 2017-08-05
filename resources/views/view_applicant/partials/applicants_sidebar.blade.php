        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ Storage::url(Auth::user()->avatar) }}" alt="User profile picture">

              <h3 class="profile-username text-center">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
              <h5 class="text-center">Graduated at {{ Auth::user()->school->school }}</h5>
              <h5 class="text-center">Studied {{ Auth::user()->school->field_of_study }}</h5>
              <h5 class="text-center">Focused on {{Auth::user()->school->major}}</h5>

              <p class="text-muted text-center"></p>

          {{--     <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Bio</b> <br>
	                  <blockquote>
	                  	<h5>{{ Auth::user()->profile->bio }}</h5>
	                  </blockquote>
                </li>
                <li class="list-group-item">
                  <b>Gender</b> 
                  	<blockquote>
	                  	<h5>{{ Auth::user()->gender }}</h5>
	                  </blockquote>
                </li>
                <li class="list-group-item">
                  <b>Address</b> 
                  	<blockquote>
	                  	<h5>{{ Auth::user()->profile->address }}</h5>
	                  </blockquote>
                </li>
              </ul> --}}

            {{--   <a href="{{ route('profile.edit', Auth::user()->id ) }}" class="btn btn-flat btn-default btn-sm btn-block"><b>Edit your profile</b></a> --}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>