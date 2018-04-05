@extends('layout.master')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
   <section class="sign-intro">
      <div class="container">
        <h3>Sign up to lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="block">
          <div class="js-wizard-simple block">
              <!-- Step Tabs -->
              <!-- <ul class="nav nav-tabs nav-justified">
              <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                      <a href="#simple-classic-step1" data-toggle="tab">Step One</a>
                  </li>
                  <li>
                      <a href="#simple-classic-step2" data-toggle="tab">Step Two</a>
                  </li>
              </ul> -->
              <!-- END Step Tabs -->

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
                                <button type="button" name="button" class="btn btn-primary btn-block">Continue by Facebook</button>
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
@endsection
