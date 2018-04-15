@extends('layout.master')

@section('content')


    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content content-boxed">
            <div class="row">
                <div class="col-sm-7 col-lg-8">
                  @if(count($post)>0)
                  @foreach($post as $p)
                  <!-- start post -->
                  <div class="block post">
                    <div class="post-adder">
                      <img src="{{asset('/images')}}/{{$user->image}}">
                      <div class="te">
                        <h5>{{$p->user->first_name}}</h5>
                        <p>{{$p->user->position->EN_name}}</p>
                        <p>3 Days ago</p>
                      </div>
                      <div>
                        <button id="" name="" class="">Message</button>
                        <a href="#" class="btn btn-sm btn-icon btn-success on-default edit-row"
                      data-toggle="modal" data-target="#edit" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a>
                      <a href="#" class="btn btn-sm btn-icon btn-success on-default edit-row"
                      data-toggle="modal" data-target="#comment" data-original-title="comment"><i class="icon md-edit" aria-hidden="true"></i></a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <img src="{{asset('/images')}}/{{$p->file_url}}" class="img-responsive post-img">
                    <div class="desc">
                      <h4>{{$p->post_name}}</h4>
                      <p>{{$p->content}}</p>
                    </div>
                    <div class="actions">
                      <ul class="nav">
                        <li><a href="#"><i class="si si-like"></i> Like</a> </li>
                        <li><a href="#"><i class="fa fa-comment-o"></i> Comment</a> </li>
                        <li><a href="#"><i class="si si-share-alt"></i> Share</a> </li>
                      </ul>
                    </div>
                    <div class="comments">
                      @if(count($comment)>0)
                  @foreach($comment as $com)
                      <div class="comment row">
                        <div class="col-xs-1">
                          <img src="assets/img/member.jpg" class="img-responsive">
                        </div>
                        <div class="col-xs-9">
                          <h4>{{$com->id}}</h4>
                          <p>{{$com->content}}</p>
                        </div>
                      </div>
                      @endforeach
                  @else <p>Be the first one to comment</p>
                  @endif
                    </div>
                  </div>
                  <!-- end post -->
                  @endforeach
                  @else <p>No Posts Yet !</p>
                  @endif
                </div>
                <div class="col-sm-5 col-lg-4">
                  <!-- Complete -->
                  <div class="block">
                    <div class="block-header">
                      <h3 class="block-title">Profile Performance</h3>
                    </div>
                    <div class="block-content">
                      <div class="prof-wrap">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            70% Complete
                          </div>
                        </div>
                        <a href="complete-prof.php" class="btn btn-block push-15">Complete Your Profile</a>
                      </div>
                    </div>
                  </div>
                  <!-- END Complete -->
                  <!-- Products -->
                  <div class="block">
                      <div class="block-header bg-gray-lighter">
                          <ul class="block-options">
                              <li>
                                  <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                              </li>
                          </ul>
                          <h3 class="block-title"><i class="fa fa-fw fa-user"></i> Profile</h3>
                      </div>
                      <div class="block-content profile-sec">
                        <div class="cover-photo">

                        </div>
                        <div class="prof-wrap">
                          <div class="profile-img">
                            <img src="{{asset('/images')}}/{{$user->image}}">
                            <div class="upload-img">
                              <input type="file" name="" value="">
                              <i class="fa fa-image"></i>
                            </div>
                          </div>
                          <a href="#">{{$user->first_name}}</a>
                          <span>{{$user->position->EN_name}}</span>
                        </div>
                      </div>
                  </div>
                  <!-- END Products -->
              </div>
            </div>
        </div>
        <!-- END Page Content -->
        <!-- send message model -->
        <div class="modal fade" id="edit" aria-hidden="true" aria-labelledby="view"
            role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Send Message</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>

        <!-- Page Content -->
        <div class="content">
          <!-- Start blcok -->
          <div class="block">
              <div class="block-content block-content-full bg-gray-lighter">
                  <form class="form-horizontal" action="{{URL::to('/sendmessage')}}" method="post" >
                  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                  <input type="hidden" name="sender" value="{{$user->id}}">
                  <input type="hidden" name="reciver" value="{{$p->user->id}}">
                    
                    <div class="form-group">
                      <label class="col-md-3 control-label">Title</label>
                      <div class="col-md-7">
                        <input class="form-control" type="text" name="title">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Content</label>
                      <div class="col-md-7">
                        <textarea name="description" rows="3" class="form-control"></textarea>
                      </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <button class="btn btn-sm btn-primary" type="submit">Send</button>
                        </div>
                    </div>
                  </form>
              </div>
          </div><!-- end blcok -->

        </div>
        </div>
        </div>
        </div>
        <!-- END Page Content -->
    <!-- end model-->

    <!-- send message model -->
        <div class="modal fade" id="comment" aria-hidden="true" aria-labelledby="view"
            role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Your Comment</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>

        <!-- Page Content -->
        <div class="content">
          <!-- Start blcok -->
          <div class="block">
              <div class="block-content block-content-full bg-gray-lighter">
                  <form class="form-horizontal" action="{{URL::to('/sendcomment')}}" method="post" >
                  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                  <input type="hidden" name="sender" value="{{$user->id}}">
                  <input type="hidden" name="reciver" value="{{$p->id}}">
                    <div class="form-group">
                      <div class="col-md-7">
                        <input class="form-control" type="text" name="title" placeholder="Your Comment">
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <button class="btn btn-sm btn-primary" type="submit">Comment</button>
                        </div>
                    </div>
                  </form>
              </div>
          </div><!-- end blcok -->

        </div>
        </div>
        </div>
        </div>
        <!-- END Page Content -->
    <!-- end model-->
    </main>
    <!-- END Main Container -->

@endsection

