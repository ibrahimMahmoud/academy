
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
              <form class="form-horizontal" action="base_forms_elements.html" method="post" onsubmit="return false;">
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Title</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" id="" name="">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Name</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" id="" name="">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Phone</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" id="" name="">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                      <input class="form-control" type="email" id="" name="">
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