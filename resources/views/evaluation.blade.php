
@extends('layout.master')

@section('content')

<!-- Main Container -->
<main id="main-container">

    <!-- Page Content -->
    <div class="content">
      <!-- Start blcok -->
      <div class="block">
          <div class="block-header">
            <h3 class="block-title">Evaluation</h3>
          </div>
          <div class="block-content block-content-full bg-gray-lighter">
              <form class="form-horizontal" action="base_forms_elements.html" method="post" onsubmit="return false;">
                <div class="form-group">
                  <div class="col-md-8 col-md-offset-2">
                    <h4 class="question">Question One</h4>
                    <textarea name="name" rows="3" class="form-control" placeholder="Answer Here"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-8 col-md-offset-2">
                    <h4 class="question">Question Two</h4>
                    <textarea name="name" rows="3" class="form-control" placeholder="Answer Here"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-8 col-md-offset-2">
                    <h4 class="question">Question Three</h4>
                    <textarea name="name" rows="3" class="form-control" placeholder="Answer Here"></textarea>
                  </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <button class="btn btn-sm btn-primary" type="submit">Done</button>
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