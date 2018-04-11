
@extends('layout.master')

@section('content')


    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content content-boxed">
            <div class="row">
                <div class="col-sm-7 col-lg-8">
                  <!-- start post -->
                  <div class="block post">
                    <div class="post-adder">
                      <ul class="block-options">
                        <li><a href="#!"><i class="fa fa-trash"></i></a></li>
                        <li><a href="add-project.php"><i class="fa fa-pencil"></i></a></li>
                      </ul>
                      <img src="assets/img/member.jpg">
                      <div class="te">
                        <h5>Mostafa Nagueb</h5>
                        <p>Front-end Developer</p>
                        <p>3 Days ago</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <img src="assets/img/post-img.png" class="img-responsive post-img">
                    <div class="desc">
                      <h4>Post title</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="actions">
                      <ul class="nav">
                        <li><a href="#"><i class="si si-like"></i> Like</a> </li>
                        <li><a href="#"><i class="fa fa-comment-o"></i> Comment</a> </li>
                        <li><a href="#"><i class="si si-share-alt"></i> Share</a> </li>
                      </ul>
                    </div>
                  </div>
                  <!-- end post -->

                </div>
                <div class="col-sm-5 col-lg-4">
                    <!-- Products -->
                    <div class="block">
                        <div class="block-header bg-gray-lighter">
                            <h3 class="block-title"><i class="fa fa-fw fa-user"></i> Profile</h3>
                        </div>
                        <div class="block-content profile-sec">
                          <div class="cover-photo">

                          </div>
                          <div class="prof-wrap">
                            <div class="profile-img">
                              <img src="assets/img/member.jpg">
                              <div class="upload-img">
                                <input type="file" name="" value="">
                                <i class="fa fa-image"></i>
                              </div>
                            </div>
                            <a href="#">Hassan Shawa</a>
                            <span>Digi-Sail CEO</span>
                          </div>
                        </div>
                    </div>
                    <!-- END Products -->
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection