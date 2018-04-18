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
                      <div align="right" id="messagediv"><input type="hidden" name="reciverid" class="reciverid" value="{{$p->user_id}}">
                        <a href="#" data-toggle="modal" data-target="#message" data-original-title="Edit" id="messagemodel">Message</a>
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
                        <li><a href="#"><i class="si si-like"></i> Like</a> </li><input type="hidden" name="postid" id="postid" value="{{$p->id}}">
                        <li><a href="#" data-toggle="modal" data-target="#comment" data-original-title="comment" id="commentmodel"><i class="fa fa-comment-o"></i> Comment</a> </li>
                        <li><a href="#" id="shareBtn" class="share"><i class="si si-share-alt"></i> Share</a> </li>
                      </ul>
                    </div>
                    <div class="comments">
                      @if(count($comment)>0 )
                  @foreach($comment as $com)
                  @if($p->id == $com->post_id )
                      <div class="comment row">
                        <div class="col-xs-1">
                          <img src="{{asset('/images')}}/{{$com->user->image}}" class="img-responsive">
                        </div>
                        <div class="col-xs-9">
                          <h4>{{$com->user->first_name}}</h4>
                          <p>{{$com->content}}</p>
                        </div>
                      </div>
                      @endif
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
        <div class="modal fade" id="message" aria-hidden="true" aria-labelledby="view"
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
                  <form class="form-horizontal" >
                    <input type="hidden" name="reciverid" id="reciverid">
                    <div class="form-group">
                      <label class="col-md-3 control-label">Title</label>
                      <div class="col-md-7">
                        <input class="form-control" type="text" name="messagetitle" id="messagetitle">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Content</label>
                      <div class="col-md-7">
                        <textarea name="messagecontent" rows="3" class="form-control" id="messagecontent"></textarea>
                      </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <li class="btn btn-sm btn-primary" id="submit">Send</li>
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
                  <h4 class="modal-title">Write Your Comment</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>

        <!-- Page Content -->
        <div class="content">
          <!-- Start blcok -->
          <div class="block">
              <div class="block-content block-content-full bg-gray-lighter">
                  <form class="form-horizontal">
                  <input type="hidden" name="postidid" id="postidid">
                    <div class="form-group">
                      <div class="col-md-7">
                        <input class="form-control" type="text" name="commentcontent" id="commentcontent" placeholder="Your Comment">
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <li class="btn btn-sm btn-primary" id="submitcomment">Comment</li>
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
@section('jsCode')
<script type="text/javascript" src="//connect.facebook.net/pl_PL/all.js"></script>
<script type="text/javascript">
  $(document).on('click','#messagemodel',function(){
      var reciverid = $(this).closest('#messagediv').find('.reciverid').val();
      
//console.log(reciverid);

  $('#submit').click(function(){
      var id = $('#reciverid').val(reciverid);//console.log(id);
      var messagetitle = $('#messagetitle').val();
      var messagecontent = $('#messagecontent').val();
    $.ajax({
            url: 'sendmessage',
            type: 'GET',
            data: { reciverid: reciverid, messagetitle: messagetitle, messagecontent: messagecontent},
            success: function(response)
            {
                console.log("Message sent");
            }
          });
    $("#message").find("#messagetitle").val('');
    $("#message").find("#messagecontent").val('');
    $("#message").modal("hide");
  });
    });


  $(document).on('click','#commentmodel',function(){
      var pid = $(this).closest('.nav').find('#postid').val();
      
//console.log(pid);

  $('#submitcomment').click(function(){
      var posid = $('#postidid').val(pid);//console.log(pid);
      var commentcontent = $('#commentcontent').val();
    $.ajax({
            url: 'sendcomment',
            type: 'GET',
            data: { commentcontent: commentcontent, postid: pid},
            success: function(response)
            {
                console.log("Comment sent");
                $('.comments').append(response);
            }
          });
    $("#comment").find("#commentcontent").val('');
    $("#comment").modal("hide");
  });
    });

  // $(".share").click(
  //     function openFbPopUp() {
  //   var fburl = $(this).val();
  //   var fbimgurl = 'https://blog.prototypr.io/how-contrast-works-in-ui-design-21bf75a5a2bf';
  //   var fbtitle = 'title';
  //   var fbsummary = "summry";
  //   var sharerURL = "http://www.facebook.com/sharer/sharer.php?s=100&p[url]=" + encodeURI(fburl) + "&p[images][0]=" + encodeURI(fbimgurl) + "&p[title]=" + encodeURI(fbtitle) + "&p[summary]=" + encodeURI(fbsummary);
  //   window.open(
  //     sharerURL,
  //     'facebook-share-dialog', 
  //     'width=626,height=436'); 
  //   return  false;

  //   });
//     function openFbPopUp() {
//       FB.init({
//   appId      : '2044471722233082',
//   status     : true,
//   xfbml      : true,
//   version    : 'v2.7' // or v2.6, v2.5, v2.4, v2.3
// });
//         FB.ui({
//   method: 'share',
//   link: 'https://developers.facebook.com/docs/',
//   caption: 'An example caption',
// }, function(response){});
//     });

// document.getElementById('shareBtn').onclick = function() {
//   FB.ui({
//     appId: '2044471722233082',
//     method: 'share',
//     display: 'popup',
//     href: 'https://developers.facebook.com/docs/',
//   }, function(response){});
// }
</script>
@endsection