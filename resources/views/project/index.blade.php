
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
              <form class="form-horizontal" action="addproject" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                    <h4 class="question">Title</h4>
                    <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
                    <input type="text" name="title" value="" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                    <h4 class="question">Upload Project Cover Image</h4>
                    <input type="file" name="file" id="file" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                    <h4 class="question">Content</h4>
                    <textarea name="content" id="content"></textarea>
                  </div>
                </div>

                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                        <input class="btn btn-sm btn-primary" type="submit" value="Done"></button>
                    </div>
                </div>
              </form>
          </div>
      </div><!-- end blcok -->

    </div>
    <!-- END Page Content -->
</main>
  @endsection
