
@extends('layout.master')

@section('content')

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content content-boxed">
            <div class="row">
                <div class="col-sm-7 col-lg-8">
                  <!-- personal information -->
                  <div class="block">
                      <div class="block-header bg-gray-lighter">
                          <ul class="block-options">
                              <li>
                                  <a href="edit-profile.php"><i class="fa fa-pencil"></i></a>
                              </li>
                          </ul>
                          <h3 class="block-title"><i class="fa fa-fw fa-user"></i> Personal Information</h3>
                      </div>
                      <div class="block-content personal-info">
                        <div class="row">
                          <div class="col-md-2">
                            <img src="assets/img/member.jpg" class="img-responsive">
                          </div>
                          <div class="col-md-10">
                            <h4>Hassan Shawa</h4>
                            <p>Digi-Sail CEO</p>
                            <p>+20 0106 3520335</p>
                            <p>mhassan@digi-sail.com</p>
                          </div>
                        </div>
                      </div>
                  </div><!-- end personal information -->
                  <!-- Experience -->
                  <div class="block">
                      <div class="block-header bg-gray-lighter">
                          <ul class="block-options">
                              <li>
                                <a href="add-experience.php"><i class="fa fa-plus"></i></a>
                              </li>
                          </ul>
                          <h3 class="block-title"><i class="fa fa-fw fa-user"></i> Experience</h3>
                      </div>
                      <div class="block-content personal-info">
                        <div class="block-item">
                          <ul class="block-options">
                            <li><a href="#!"><i class="fa fa-trash"></i></a></li>
                            <li><a href="add-experience.php"><i class="fa fa-pencil"></i></a></li>
                          </ul>
                          <h5>Art Direction</h5>
                          <p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          <p>Digi-Sail</p>
                          <p>Apr 2014 – Present</p>
                        </div>
                        <div class="block-item">
                          <ul class="block-options">
                            <li><a href="#!"><i class="fa fa-trash"></i></a></li>
                            <li><a href="add-experience.php"><i class="fa fa-pencil"></i></a></li>
                          </ul>
                          <h5>Art Direction</h5>
                          <p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          <p>Digi-Sail</p>
                          <p>Apr 2014 – Present</p>
                        </div>
                        <div class="block-item">
                          <ul class="block-options">
                            <li><a href="#!"><i class="fa fa-trash"></i></a></li>
                            <li><a href="add-experience.php"><i class="fa fa-pencil"></i></a></li>
                          </ul>
                          <h5>Art Direction</h5>
                          <p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          <p>Digi-Sail</p>
                          <p>Apr 2014 – Present</p>
                        </div>
                      </div>
                  </div><!-- end Experience  -->
                  <!-- personal information -->
                  <div class="block">
                      <div class="block-header bg-gray-lighter">
                          <ul class="block-options">
                              <li>
                                  <a href="add-project.php"><i class="fa fa-plus"></i></a>
                              </li>
                          </ul>
                          <h3 class="block-title"><i class="fa fa-fw fa-user"></i> Projects</h3>
                      </div>
                      <div class="block-content personal-info">
                        <div class="row">
                          <div class="col-md-4">
                            <a href="project.php" class="project-item">
                              <div class="img-container">
                                <img src="assets/img/post-img.png" class="img-responsive">
                              </div>
                              <h5>Project Name</h5>
                            </a>
                          </div>
                          <div class="col-md-4">
                            <a href="project.php" class="project-item">
                              <div class="img-container">
                                <img src="assets/img/post-img.png" class="img-responsive">
                              </div>
                              <h5>Project Name</h5>
                            </a>
                          </div>
                          <div class="col-md-4">
                            <a href="project.php" class="project-item">
                              <div class="img-container">
                                <img src="assets/img/post-img.png" class="img-responsive">
                              </div>
                              <h5>Project Name</h5>
                            </a>
                          </div>
                          <div class="col-md-4">
                            <a href="project.php" class="project-item">
                              <div class="img-container">
                                <img src="assets/img/post-img.png" class="img-responsive">
                              </div>
                              <h5>Project Name</h5>
                            </a>
                          </div>
                        </div>
                      </div>
                  </div><!-- end personal information -->
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