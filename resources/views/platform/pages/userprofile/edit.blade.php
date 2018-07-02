@extends('platform.layouts.app')

@section('title', 'Edit Profile')

@section('content')

<<<<<<< HEAD


   <!-- ##### MAIN PANEL ##### -->
=======
    <!-- ##### MAIN PANEL ##### -->
>>>>>>> parent of b418ef1... sdf

      <div class="kt-pagetitle">
        <h5>Edit Profile</h5>
      </div><!-- kt-pagetitle -->

      <div class="kt-pagebody">

        <div class="row">

<<<<<<< HEAD
          <div class="col-md-8 col-lg-9 mg-t-30 mg-md-t-0">
            <label class="content-left-label">Your Data</label>
            <div class="card bg-gray-200 bd-0">
              <div class="edit-profile-form">
<div class="row">





  <p>
    <b>We take privacy seriously.</b> This page allows you to see all of the data we keep on you.
  </p>

</div>
              </div><!-- wd-60p -->
            </div><!-- card -->

            <hr class="invisible">
            <label class="content-left-label">Login Information</label>
            <div class="card bg-gray-200 bd-0">
              <div class="edit-profile-form">
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Email: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                    <input class="form-control" placeholder="Enter username" type="email" value="{{ Auth::user()->email }}">
                  </div>
                </div>
                <div class="form-group row mg-b-0">
                  <label class="col-sm-3 form-control-label">Password:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <a href="">Change Password</a>
                  </div>
                </div>
              </div><!-- wd-60p -->
            </div><!-- card -->

            <hr class="invisible">

            <label class="content-left-label">Personal Information</label>
            <div class="card bg-gray-200 bd-0">
              <div class="edit-profile-form">
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Name:</label>
                  <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                    <input class="form-control" placeholder="Enter firstname" type="text" value="{{ Auth::user()->name }}">
                  </div>
                </div><!-- form-group -->

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Location:</label>
                  <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                    <input class="form-control" placeholder="Enter location" type="text" value="{{ Auth::user()->location }}">
                  </div>
                </div><!-- form-group -->
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Portfolio URL:</label>
                  <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                    <input class="form-control" placeholder="Enter Portfolio URL" type="text" value="{{ Auth::user()->website }}">
                  </div>
                </div><!-- form-group -->
                <div class="form-group row mg-b-0">
                  <label class="col-sm-3 form-control-label">About You:</label>
                  <div class="col-sm-9 col-xl-8 mg-t-10 mg-sm-t-0">
                    <textarea class="form-control" placeholder="Enter some description of yourself" rows="3" value="{{ Auth::user()->about }}"></textarea>
                  </div>
                </div><!-- form-group -->
              </div><!-- wd-60p -->
            </div><!-- card -->
=======
            <div class="col-md-12 col-lg-12 mg-t-30 mg-md-t-0">
                <label class="content-left-label">Your Data</label>
                <div class="card bg-gray-200 bd-0">
                    <div class="edit-profile-form">
                        <div class="row">
                            <p>
                                <b>We take privacy seriously.</b> This page allows you to see all of the data we keep on you.
                            </p>

                        </div>
                    </div><!-- wd-60p -->
                </div><!-- card -->

                <hr class="invisible">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-3 mg-t-30 mg-md-t-0">
                <form class="md-form" action="{{ route('platform.edit.profile.avatar') }}" method="POST" enctype="multipart/form-data" id="avatar-form">
                    {{csrf_field()}}
                    <div class="file-field">
                        <div class="z-depth-1-half mb-4">
                            <img src="@if(Auth::user()->profile->avatar =='') {{ asset('platform_assets/img/img3.jpg') }} @else {{ Auth::user()->profile->avatar }} @endif" class="img-fluid">
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left waves-effect">
                                <span>Choose file</span>
                                <input type="file" name="file" id="avatar-file">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 col-lg-9 mg-t-30 mg-md-t-0">
                <label class="content-left-label">Password Management</label>
                <div class="card bg-gray-200 bd-0">
                    <div class="edit-profile-form">
                        @if(Session::has('success_password'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {!! Session::get('success_password') !!}
                            </div><!-- alert -->
                        @endif
                        @if(Session::has('incorrect_password'))
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {!! Session::get('incorrect_password') !!}
                            </div><!-- alert -->
                        @endif
                        <form action="{{ route('platform.edit.profile.password') }}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Email: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8  col-xl-6  mg-t-10 mg-sm-t-0">
                                    <input class="form-control" placeholder="Enter username" type="email" value="{{ Auth::user()->email }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Current Password:</label>
                                <div class="col-sm-8 col-xl-6  mg-t-10 mg-sm-t-0">
                                    <input class="form-control" placeholder="Enter current password" type="password" name="current_password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label @if ($errors->has('password')) text-danger @endif">New  Password:</label>
                                <div class="col-sm-8  col-xl-6 mg-t-10 mg-sm-t-0">
                                    <input class="form-control  @if ($errors->has('password')) is-invalid @endif" placeholder="Enter new  password" type="password" name="password"  required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Confirm Password:</label>
                                <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                                    <input class="form-control" placeholder="Enter confirm password" type="password" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-layout-footer col-sm-11 col-xl-9">
                                <button class="btn btn-default mg-r-5 custom-submit-form-button">Update Password</button>
                            </div>
                        </form>


                    </div><!-- wd-60p -->
                </div><!-- card -->
                <hr class="invisible">

                <label class="content-left-label">Personal Information</label>
                <div class="card bg-gray-200 bd-0">
                    <div class="edit-profile-form">
                        @if(Session::has('success_information'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {!! Session::get('success_information') !!}
                            </div><!-- alert -->
                        @endif
                        <form action="{{route('platform.edit.profile.information')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">First Name:</label>
                                <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                                    <input class="form-control" placeholder="Enter first name" type="text" value="{{ Auth::user()->profile->first_name }}" name="first_name" required>
                                </div>
                            </div><!-- form-group -->
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Last Name:</label>
                                <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                                    <input class="form-control" placeholder="Enter last name" type="text" value="{{ Auth::user()->profile->last_name }}" name="last_name" required>
                                </div>
                            </div><!-- form-group -->

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Portfolio URL:</label>
                                <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                                    <input class="form-control" placeholder="Enter Portfolio URL" type="text" value="{{ Auth::user()->profile->website }}" name="website" required>
                                </div>
                            </div><!-- form-group -->
                            <div class="form-layout-footer col-sm-11 col-xl-9">
                                <button class="btn btn-default mg-r-5 custom-submit-form-button">Update Information</button>
                            </div>
                        </form>

                    </div><!-- wd-60p -->
                </div><!-- card -->
>>>>>>> parent of b418ef1... sdf

            <hr class="invisible">

          </div><!-- col-9 -->
        </div><!-- row -->
<<<<<<< HEAD




@endsection
=======
        @endsection
        @section('custom-js')
            <script>
                $("#avatar-file").change(function() {
                    $("#avatar-form").submit();
                });
            </script>
@endsection
>>>>>>> parent of b418ef1... sdf
