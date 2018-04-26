<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <title>Digi-Sail Academy</title>

    <!-- fav icon -->
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

    <!-- Web fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- OneUI CSS framework -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/oneui.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/academy.css">
  </head>
  <body>

    <section class="viedo">
      <iframe src="https://www.youtube.com/embed/i5qpS_D8Law?showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      <div class="btns-wrap">
        <a class="btn" href="{{URL::to('/register')}}">Signup</a>
        <a class="btn" data-toggle="modal" data-target="#login">Login</a>
      </div>
    </section>

    <section class="about">
      <div class="container">
        <div class="about-block">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/about.jpg" class="img-responsive">
            </div>
            <div class="col-md-9">
              <h3>About Academy</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="majors">
      <div class="container">
        <h3 class="title">Majors</h3>
        <!-- <button class="btn btn-info"  type="button">Launch Modal</button> -->
        <img src="assets/img/structure.svg" class="img-responsive svg" alt="Planets" usemap="#planetmap">
        <map name="planetmap">
          <area shape="rect" coords="196,246,332,288" data-toggle="modal" data-target="#modal-large"/>
          <area shape="rect" coords="425,191,566,235" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="425,303,565,345" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="665,164,804,208" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="667,217,807,259" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="665,276,805,319" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="665,328,807,370" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="196,606,336,650" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="423,549,564,595" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="423,664,565,705" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="665,525,840,568" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="665,576,839,617" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="665,637,837,679" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="665,688,838,730" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="666,738,838,781" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="666,790,838,831" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="198,1049,337,1092" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="393,1049,532,1092" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="588,1051,797,1090" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="825,1023,965,1066" data-toggle="modal" data-target="#modal-large" />
          <area shape="rect" coords="825,1076,966,1120" data-toggle="modal" data-target="#modal-large" />
        </map>
      </div>
    </section>

    <section class="features">
      <div class="container">
        <h3 class="title">Features</h3>
        <div class="row">
          <div class="col-md-4">
            <div class="fea-item">
              <i class="si si-users"></i>
              <h4>Community</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="fea-item">
              <i class="si si-star"></i>
              <h4>Opportunity</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="fea-item">
              <i class="si si-bar-chart"></i>
              <h4>Development</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="team">
      <div class="container">
        <h3 class="title">Sailors : <em>Team Structure</em></h3>
        <!-- team -->
        <div class="row">
          <!-- start member of team -->
          <div class="col-md-3">
            <div class="team-block">
              <div class="img-container">
                <img src="assets/img/member.jpg" class="img-responsive">
              </div>
              <div class="desc">
                <h4>Hassan Shawa</h4>
                <strong>CEO</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                <ul class="nav navbar-nav">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div><!-- end member of team -->
          <!-- start member of team -->
          <div class="col-md-3">
            <div class="team-block">
              <div class="img-container">
                <img src="assets/img/member.jpg" class="img-responsive">
              </div>
              <div class="desc">
                <h4>Mostafa Nagueb</h4>
                <strong>Front-end Developer</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                <ul class="nav navbar-nav">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div><!-- end member of team -->
          <!-- start member of team -->
          <div class="col-md-3">
            <div class="team-block">
              <div class="img-container">
                <img src="assets/img/member.jpg" class="img-responsive">
              </div>
              <div class="desc">
                <h4>Mostafa Nagueb</h4>
                <strong>Front-end Developer</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                <ul class="nav navbar-nav">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div><!-- end member of team -->
          <!-- start member of team -->
          <div class="col-md-3">
            <div class="team-block">
              <div class="img-container">
                <img src="assets/img/member.jpg" class="img-responsive">
              </div>
              <div class="desc">
                <h4>Mostafa Nagueb</h4>
                <strong>Front-end Developer</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                <ul class="nav navbar-nav">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div><!-- end member of team -->
        </div>
      </div>
    </section>

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
    <!-- Large Modal -->
    <div class="modal" id="login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="block block-themed block-transparent remove-margin-b">
                    <div class="block-header bg-primary-dark">
                        <ul class="block-options">
                            <li>
                                <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Login</h3>
                    </div>
                    <div class="block-content">
                      <div class="row">
                        <form class="" action="{{ url('i/login/') }}" method="post">
                           @csrf

                          <div class="form-group row">
                            <div class="col-sm-8 col-sm-offset-2">
                               <a href="{{URL::to('/login/fb')}}" class="btn btn-primary btn-block">Facebook</a>
                              <!-- <button type="button" name="button" class="facebook-btn">Facebook</button> -->
                              <label for="" class="push-15-t or">Or</label>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-8 col-sm-offset-2">
                              <label for="">User Name</label>
                              <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required >
                            </div>
                          </div>
                          @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                          @endif
                          <div class="form-group row">
                            <div class="col-sm-8 col-sm-offset-2">
                              <label for="">Password</label>
                              <input  type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            </div>
                            @if ($errors->has('password'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                              @endif
                          </div>
                            <div class="form-group row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                          <div class="form-group row">
                            <div class="col-sm-8 col-sm-offset-2">
                              <div class="row">
                                <div class="col-md-6">
                                  <button class="btn btn-sm m-btn btn-block" type="button" data-dismiss="modal">close</button>
                                </div>
                                <div class="col-md-6">
                                  <button type="submit" class="btn btn-sm m-btn btn-block btn-primary">{{ __('Login') }} </button>
                                </div>
                              </div>
                              
                              
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="content"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Large Modal -->

    <script src="{{URL::to('/')}}/assets/js/core/jquery.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/core/bootstrap.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/core/jquery.slimscroll.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/core/jquery.scrollLock.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/core/jquery.appear.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/core/jquery.countTo.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/core/jquery.placeholder.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/core/js.cookie.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/app.js"></script>


  </body>
</html>
