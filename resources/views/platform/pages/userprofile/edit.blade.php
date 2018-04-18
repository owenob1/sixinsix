@extends('platform.layouts.app')

@section('title', 'Edit Profile')

@section('content')



   <!-- ##### MAIN PANEL ##### -->

      <div class="kt-pagetitle">
        <h5>Edit Profile</h5>
      </div><!-- kt-pagetitle -->

      <div class="kt-pagebody">

        <div class="row">

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

            <hr class="invisible">

          </div><!-- col-9 -->
        </div><!-- row -->




@endsection
