<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <title>Digi-Sail Academy</title>

    <!-- fav icon -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicons/favicon.png')}}">

    <!-- Web fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- OneUI CSS framework -->
    <link rel="stylesheet" href="{{asset('assets/css/oneui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/academy.css')}}">
  </head>
  <body>

    <section class="sign-intro">
      <div class="container">
        <h3>Sign up to lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="block">
          <div class="block-header bg-gray-lighter">
            <h3 class="block-title"><i class="fa fa-fw fa-user"></i> Signup</h3>
          </div>
          <div class="block-content">
             <!-- Form -->
             <form class="form-horizontal" action="{{URL::to('/register')}}" method="post">
                  <!-- Steps Content -->
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                  <div class="block-content tab-content">
                      <!-- Step 1 -->
                      <div class="tab-pane push-30-t push-50 active" id="simple-classic-step1">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <center><li>{{ $error }}</li></center>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                      <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <a href="{{URL::to('/login/fb')}}" class="btn btn-primary btn-block">Continue by Facebook</a>
                                <!-- <button type="button" name="button" class="btn btn-primary btn-block"></button> -->
                            </div>
                        </div>
                          <div class="form-group">
                              <div class="col-sm-8 col-sm-offset-2">
                                  <label for="">Title</label>
                                  <!-- <input class="form-control" type="text" id="" name="title" value="{{Request::old('title')}}"> -->
                                  <select name="title" class="form-control">
                                  @foreach($positions as $posision)
                                    <option value="{{@$posision->id}}">{{@$posision->EN_name}}</option>
                                  @endforeach
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                             <!-- first name -->
                                <div class="col-sm-4 col-sm-offset-2">
                                    <label for="">First Name</label>
                                    <input class="form-control" type="text" id="" name="fname" value="{{Request::old('fname')}}">
                                </div>
                                <!-- seconed name -->
                                <div class="col-sm-4 ">
                                    <label for="">Last Name</label>
                                    <input class="form-control" type="text" id="" name="lname" value="{{Request::old('lname')}}">
                                </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-8 col-sm-offset-2">
                                  <label for="">Email</label>
                                  <input class="form-control" type="email" id="" name="email" value="{{Request::old('email')}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-8 col-sm-offset-2">
                                  <label for="">Phone</label>
                                  <input class="form-control" type="text" id="" name="phone" value="{{Request::old('phone')}}">
                              </div>
                          </div>

                          <div class="form-group">
                          <!-- password -->
                            <div class="col-sm-4 col-sm-offset-2">
                                <label for="">Password</label>
                                <input class="form-control" type="password" id="" name="password">
                            </div>
                            <!-- repassword -->
                            <div class="col-sm-4 ">
                                <label for="">Repassword</label>
                                <input class="form-control" type="password" id="" name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group">
                              <div class="col-sm-8 col-sm-offset-2">
                                  <label for="">i'm ..</label>
                                  <br>
                                  <label class="css-input css-radio css-radio-info push-10-r">
                                    <input type="radio" name="work_status" value="employee" checked=""><span></span> Employee
                                  </label>
                                  <label class="css-input css-radio css-radio-info push-10-r">
                                    <input type="radio" name="work_status" id="freelancer" value="freelancer"><span></span> Freelance
                                  </label>
                              </div>
                          </div>
                        
                      </div>
                      <!-- END Step 1 -->

                      <!-- Step 2 -->
                      <!-- <div class="tab-pane push-30-t push-50" id="simple-classic-step2">
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="button" name="button" class="btn btn-primary btn-block">Continue by Facebook</button>
                            </div>
                        </div>
                        <span>or</span>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <label for="">User Name</label>
                                <input class="form-control" type="text" id="" name="">
                            </div>
                        </div>
                        

                      </div> -->
                      <!-- END Step 2 -->
                  </div>
                  <!-- END Steps Content -->

                  <!-- Steps Navigation -->
                  <div class="block-content block-content-mini block-content-full border-t">
                      <div class="row">
                          <div class="col-xs-6">
                              <button class="wizard-prev btn btn-default" type="button"><i class="fa fa-arrow-left"></i> Previous</button>
                          </div>
                          <div class="col-xs-6 text-right">
                              <!-- <button class="wizard-next btn btn-default" type="button">Next <i class="fa fa-arrow-right"></i></button> -->
                              <button class="wizard-finish btn btn-primary" type="submit"><i class="fa fa-check"></i> Sign Up</button>
                          </div>
                      </div>
                  </div>
                  <!-- END Steps Navigation -->
              </form>
              <!-- END Form -->
    
          </div>
        </div>
      </div>
    </section>
    <!-- END Simple Classic Wizard -->

    <!-- footer -->
    <footer class="footer">
      <div class="container">
        <div class="row copywrite">
          <div class="col-md-5">
            <ul>
              <li><a href="#"><i class="fa fa-facebook s-icon"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter s-icon"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram s-icon"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin s-icon"></i></a></li>
            </ul>
          </div>
          <div class="col-md-7">
            <h5>Terms & Conditions and Privacy Police</h5>
            <p>© <a href="#">Digi-Sail Academy</a>. All Rights Reserved. 2018 · Made in <a href="#">Egypt</a></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Large Modal -->
    <div class="modal" id="modal-large" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="block block-themed block-transparent remove-margin-b">
                    <div class="block-header bg-primary-dark">
                        <ul class="block-options">
                            <li>
                                <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Director</h3>
                    </div>
                    <div class="block-content">
                      <div class="row">
                        <div class="col-md-6">
                          <h4>Specification</h4>
                          <ul>
                            <li>lorem ipsum Doler Set amet Soler.</li>
                            <li>lorem ipsum Doler Set amet Soler.</li>
                            <li>lorem ipsum Doler Set amet Soler.</li>
                            <li>lorem ipsum Doler Set amet Soler.</li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <h4>Story</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="col-md-12">
                          <h4>Signup</h4>
                          <form class="" action="" method="post">
                            <div class="row">
                              <div class="form-group col-md-6">
                                <input type="text" name="" value="" class="form-control" placeholder="Name">
                              </div>
                              <div class="form-group col-md-6">
                                <input type="text" name="" value="" class="form-control" placeholder="Phone">
                              </div>
                              <div class="form-group col-md-6">
                                <input type="email" name="" value="" class="form-control" placeholder="Email">
                              </div>
                              <div class="form-group col-md-6">
                                <input type="text" name="" value="" class="form-control" placeholder="Username">
                              </div>
                              <div class="form-group col-md-6">
                                <input type="text" name="" value="" class="form-control" placeholder="Password">
                              </div>
                              <div class="form-group col-md-6">
                                <input type="text" name="" value="" class="form-control" placeholder="Repassword">
                              </div>
                            </div>
                            <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal">Signup</button>
                          </form>
                        </div>
                      </div>
                      <div class="content"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Large Modal -->

    <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/core/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/js/core/jquery.scrollLock.min.js')}}"></script>
    <script src="{{asset('assets/js/core/jquery.appear.min.js')}}"></script>
    <script src="{{asset('assets/js/core/jquery.countTo.min.js')}}"></script>
    <script src="{{asset('assets/js/core/jquery.placeholder.min.js')}}"></script>
    <script src="{{asset('assets/js/core/js.cookie.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('assets/js/pages/base_forms_wizard.js')}}"></script>


  </body>
</html>
