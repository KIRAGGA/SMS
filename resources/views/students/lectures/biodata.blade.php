@extends('layouts.frontLayout.app')
    
@section('content')
    

<style>
    input[:read-only], textarea{
        background:white !important;
        border: none;
    }
    span{
        padding-left: 20px;
    }
    .input-icon{
      position: absolute;
      right: 3px;
      top: cals(50% - 0.5em); //puting the message inside the field
    }
    .input-wrapper{
      position: relative;
    }
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      User Profile
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">User profile</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
              {{-- image code --}}
            <img class="profile-user-img img-responsive img-circle" 
            src="{{asset('/storage/images/kiflaps_logo.jpeg')}}" 
            width="60" height="50" style="border-radius: 50%; width:150px; height: 150px; vertical-align:middle;" alt="Teacher Profile picture">
            {{-- end of image code --}}

            <h3 class="profile-username text-center">{{ $students->first_name }} {{ $students->last_name }}</h3>

            <p class="text-muted text-center">Teacher</p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Followers</b> <a class="pull-right">1,322</a>
              </li>
              <li class="list-group-item">
                <b>Following</b> <a class="pull-right">543</a>
              </li>
              <li class="list-group-item">
                <b>Friends</b> <a class="pull-right">13,287</a>
              </li>
            </ul>

            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
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
      <!-- /.col -->
      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab">Teacher Timetable</a></li>
            <li><a href="#timeline" data-toggle="tab">Full Details</a></li>
            <li><a href="#settings" data-toggle="tab">Settings</a></li>
          </ul>
          <div class="tab-content">
            
            <div class="active tab-pane" id="activity">
              <section class="content-header">
                <h1>
                    Class Timetable
                </h1>
              </section>
                <div class="content">
                    @include('adminlte-templates::common.errors')
                    <div class="box box-primary">
                        <div class="box-body">
                          <h1>We shall put the class Timetable</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="timeline">
              <section class="content-header">
                <h1>
                  Student Biodata / Profile
                </h1>
              </section>
                <div class="content">
                    @include('adminlte-templates::common.errors')
                    <div class="box box-primary">
                      <div class="box-body"><br><br>
                        <form action="" class="form-horizontal">
                            <!-- Name Field -->
                            <div class="form-group">
                                <label for="inputName" class="col-sm-3 control-label">Full Name</label>
                            
                                <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputName" value="{{ $students->first_name }} {{ $students->last_name }}" readonly>
                                </div>
                            </div>
                            <!-- Email Field -->
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail" value="{{ $students->email }}" readonly>
                                </div>
                            </div>
                            <!-- UserId Field -->
                            <div class="form-group">
                                <label for="inputName" class="col-sm-3 control-label">UserID</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputName" value="{{ $students->user_id }}" readonly>
                                </div>
                            </div>
                            <!-- Gender Field -->
                            <div class="form-group col-sm-12">
                                <div>
                                    <label for="inputName" class="col-sm-3 control-label">Gender</label>
                                    <div class="col-sm-4">
                                        @if ($students->gender == 0)
                                            <span> Male </span>
                                        @else
                                            <span> Female </span>
                                        @endif
                                    </div>
                                    <!-- Martial Status Field -->
                                    <label for="inputName" class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-3">
                                        <p>@if ($students->status == 0)
                                            Single
                                        @else
                                            Married
                                        @endif
                                    </p>
                                    </div>
                                </div>
                            </div>
                            <!-- DOB Field -->
                            <div class="form-group">
                                <label for="inputName" class="col-sm-3 control-label">Date of Birth</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputName" value="{{$students->dob}}" readonly>
                                </div>
                            </div>
                            <!-- Phone number Field -->
                            <div class="form-group">
                                <label for="inputName" class="col-sm-3 control-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputName" value="+{{ $students->phone }}" readonly>
                                </div>
                            </div>
                            <!-- Passport Number/ID Field -->
                            <div class="form-group">
                                <label for="inputName" class="col-sm-3 control-label">Passport/ID number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputName" value="{{ $students->passport }}" readonly>
                                </div>
                            </div>
                            <!-- Address Field -->
                            <div class="form-group">
                                <label for="inputExperience" class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="inputExperience" readonly>{{ $students->address }}</textarea>
                                </div>
                            </div>
                            <!-- Nationality Field -->
                            <div class="form-group">
                                <label for="inputSkills" class="col-sm-3 control-label">Nationality</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputSkills" value="{{ $students->nationality }}" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSkills" class="col-sm-3 control-label">Date Registered</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputSkills" value="{{date("Y-m-d", strtotime ($students->dateregistered)) }}" readonly>
                                </div>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
            <!-- /.tab-pane -->

            <div class="tab-pane" id="settings">
              <section class="content-header">
                <h1>
                    Change Password
                </h1>
              </section>
              <div class="content">
                @include('adminlte-templates::common.errors')
                <div class="box box-primary">
                    <div class="box-body">
                      <div class="row">
                        <form action="{{url('student-update-password')}}" method="POST" class="form-horizontal">
                          @csrf
                          <div class="form-group">
                          <input type="hidden" name="email" id="" value="{{$students->email}}">
                            <label for="inputName" class="col-sm-2 control-label">Old password</label>

                            <div class="col-sm-10">
                              <div class="input-wrapper">
                                <input type="text" class="form-control" name="old_password" id="old_password" placeholder="oldpassword" autocomplete="additional-name">
                                <i class="input-icon" id="messageError"></i>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">New password</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="new_password" id="new_password" placeholder="New Password">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Update Password</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
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
  <!-- /.content -->
{{-- </div> --}}
<!-- /.content-wrapper -->
@endsection


@section('script')
  <script>
    $(document).ready(function(){
      // alert(1)
      $("#oldpassword").keyup(function(){
        //using keyup function to check whether the data is valid or not
        var old_password = $("#oldpassword").val();
        alert(old_password);
        $.ajax({
          type: 'get',
          url: '/verify-password',
          data: {old_password:old_password},
          success: function(response){
            if(response == "false"){
              $("messageError").html("<font color='red'><b>Password Incorrect</b></font>");
            }else if(response == "true"){
              $("messageError").html("<font color='green'><b>Correct Password</b></font>");
            }
          }
        });
      });
    });
  </script> 
@endsection