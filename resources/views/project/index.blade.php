
@extends('layout.master')
  @section('content')
  <main id="main-container">

    <!-- Page Content -->
    <div class="content">
      <!-- Start blcok -->
      <div class="block">
          <div class="block-header">
            <h3 class="block-title">Add Project</h3>
          </div>
          <div class="block-content block-content-full bg-gray-lighter">
              <form class="form-horizontal" action="base_forms_elements.html" method="post" onsubmit="return false;">
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                    <h4 class="question">Title</h4>
                    <input type="text" name="" value="" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                    <h4 class="question">Upload Project Cover Image</h4>
                    <input type="file" name="" value="" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                    <h4 class="question">Content</h4>
                    <div class="js-summernote">Hello Summernote!</div>
                  </div>
                </div>

                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                        <button class="btn btn-sm btn-primary" type="submit">Done</button>
                    </div>
                </div>
              </form>
          </div>
      </div><!-- end blcok -->

    </div>
    <!-- END Page Content -->
</main>
  @endsection  