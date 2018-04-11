
@extends('layout.master')

@section('content')
<!-- Main Container -->
<main id="main-container">

    <!-- Page Content -->
    <div class="content">
      <!-- Start blcok -->
      <div class="block">
          <div class="block-header">
            <h3 class="block-title">Add Experience</h3>
          </div>
          <!-- blcok -->
          <div class="block-content block-content-full bg-gray-lighter">
              <form class="form-horizontal" action="base_forms_elements.html" method="post" onsubmit="return false;">
                <div class="form-group">
                  <label class="col-md-3 control-label">Title</label>
                  <div class="col-md-7">
                    <input class="form-control" type="text" name="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Company Name</label>
                  <div class="col-md-7">
                    <input class="form-control" type="text" name="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Experience</label>
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-6">
                        <input class="form-control" type="text" name="" placeholder="From">
                      </div>
                      <div class="col-md-6">
                        <input class="form-control" type="text" name="" placeholder="To">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">I Currently work here</label>
                  <div class="col-md-7">
                    <label class="css-input switch switch-primary">
                        <input type="checkbox" checked><span></span>
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Description</label>
                  <div class="col-md-7">
                    <textarea name="name" rows="3" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                        <button class="btn btn-sm btn-primary" type="submit">Done</button>
                    </div>
                </div>
              </form>
              <button type="button" name="button" class="btn btn-primary addmore">Add More</button>
              <span class="clearfix"></span>
          </div>
      </div><!-- end blcok -->

    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
@endsection