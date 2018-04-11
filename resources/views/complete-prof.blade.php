
@extends('layout.master')

@section('content')
  <main id="main-container">

        <!-- Page Content -->
        <div class="content content-boxed">
          <div class="block">
            <div class="js-wizard-simple block">
                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#simple-classic-step1" data-toggle="tab">Personal Information</a>
                    </li>
                    <li>
                        <a href="#simple-classic-step2" data-toggle="tab">Add Experience</a>
                    </li>
                    <li>
                        <a href="#simple-classic-step3" data-toggle="tab">Add Project</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form class="form-horizontal" action="base_forms_wizard.html" method="post">
                  <!-- Steps Progress -->
                  <div class="block-content block-content-mini block-content-full border-b">
                      <div class="wizard-progress progress progress-mini remove-margin-b">
                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                      </div>
                  </div>
                  <!-- END Steps Progress -->

                    <!-- Steps Content -->
                    <div class="block-content tab-content">
                        <!-- Step 1 -->
                        <div class="tab-pane push-30-t push-50 active" id="simple-classic-step1">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="">Title</label>
                                    <input class="form-control" type="text" id="" name="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="">Name</label>
                                    <input class="form-control" type="text" id="" name="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="">Phone</label>
                                    <input class="form-control" type="text" id="" name="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="">Email</label>
                                    <input class="form-control" type="email" id="" name="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="">i'm ..</label>
                                    <br>
                                    <label class="css-input css-radio css-radio-info push-10-r">
                                      <input type="radio" name="radio-group3" checked=""><span></span> Employee
                                    </label>
                                    <label class="css-input css-radio css-radio-info push-10-r">
                                      <input type="radio" name="radio-group3"><span></span> Freelance
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="">Password</label>
                                    <input class="form-control" type="text" id="" name="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="">Repassword</label>
                                    <input class="form-control" type="text" id="" name="">
                                </div>
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane push-30-t push-50" id="simple-classic-step2">
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
                          <button type="button" name="button" class="btn btn-primary addmore push-15">Add More</button>
                        </div>
                        <!-- END Step 2 -->
                        <!-- Step 3 -->
                        <div class="tab-pane push-30-t push-50" id="simple-classic-step3">
                          <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                              <h4 class="question">Title</h4>
                              <input type="text" name="" value="" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                              <h4 class="question">Upload Project Cover Image</h4>
                              <input type="file" name="" value="" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                              <h4 class="question">Content</h4>
                              <div class="js-summernote">Hello Summernote!</div>
                            </div>
                          </div>
                          <button type="button" name="button" class="btn btn-primary addmore push-15">Add More</button>
                        </div>
                        <!-- END Step 3 -->
                    </div>
                    <!-- END Steps Content -->

                    <!-- Steps Navigation -->
                    <div class="block-content block-content-mini block-content-full border-t">
                        <div class="row">
                            <div class="col-xs-6">
                                <button class="wizard-prev btn btn-default" type="button"><i class="fa fa-arrow-left"></i> Previous</button>
                            </div>
                            <div class="col-xs-6 text-right">
                                <button class="wizard-next btn btn-default" type="button">Next <i class="fa fa-arrow-right"></i></button>
                                <!-- done button action in assets/js/pages/base_forms_wizard.js -->
                                <button class="wizard-finish btn btn-primary" type="submit"><i class="fa fa-check"></i> Done</button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>
          </div>
        </div>
        <!-- END Page Content -->
    </main>
  <!-- END Page Content -->

@endsection

