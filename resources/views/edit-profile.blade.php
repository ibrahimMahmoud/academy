
@extends('layout.master')

@section('content')

<!-- Main Container -->
<main id="main-container">

    <!-- Page Content -->
    <div class="content">
      <!-- Start blcok -->
      <div class="block">
          <div class="block-header">
            <h3 class="block-title">Edit Profile</h3>
          </div>
          <div class="block-content block-content-full bg-gray-lighter">
              <form class="form-horizontal" action="{{Url('/edit')}}" method="post">
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">First Name</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" id="" name="" value="{{$user->first_name}}">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" id="" name="" value="{{$user->last_name}}">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Phone</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" id="" name="" value="{{$user->phone}}">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                      <input class="form-control" type="email" id="" name="" value="{{$user->email}}">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                      <input class="form-control" type="password" id="" name="">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Repassword</label>
                    <div class="col-md-9">
                      <input class="form-control" type="password" id="" name="">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">User Type</label>
                    <div class="col-md-9">
                      <input class="form-control" type="email" id="" name="">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Position</label>
                    <div class="col-md-9">
                      <input class="form-control" type="email" id="" name="">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Work Status</label value="{{$user->work_status}}">
                    <div class="col-md-9">
                      <input class="form-control" type="email" id="" name="">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Image</label>
                    <div class="col-md-9">
                      <input class="form-control" type="email" id="" name="">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-9 col-sm-offset-2">
                    <button type="button" name="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </form>
          </div>
      </div><!-- end blcok -->

    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
@endsection