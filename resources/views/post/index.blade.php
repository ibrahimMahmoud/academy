
@extends('layout.master')
@section('content')
<div class="container">
  <button id="create" type="botton">Create New Post</button><br><br>
  @if(count($post) > 0)
<div class="row">
  @foreach($post as $p)
  <div class="col-md-8">
            <img class="card-img-top" width="300" hight="300" src="{{asset('/images')}}/{{$p->file_url}}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{$p->post_name}}</h2>
              <p class="card-text">{{$p->content}}</p>
              <button class="share" value="http://127.0.0.1:8000/{{$p->id}}" >
              <img src="{{asset('/images')}}/fb.png" alt="Facebook" />
              </button>
            </div>
    </div>
    @endforeach
  </div>
  @else
  <p>No Posts yet !</p>
  @endif
</div>
<model id="main-container" class="post">
  <div class="col-md-8">
    <div class="card mb-4">
        <div class="block-header">
          <h3 class="block-title">Add Post</h3>
        </div>
        <div class="block-content block-content-full bg-gray-lighter">
            <form class="form-horizontal" action="addpost" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <h4 class="question">Title</h4>
                  <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
                  <input type="text" name="title" value="" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <h4 class="question">Upload Post Image</h4>
                  <input type="file" name="file" id="file" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <h4 class="question">Content</h4>
                  <input type="textarea" class="form-control" name="content" id="content" required="required">
                </div>
              </div>

              <div class="form-group">
                  <div class="col-md-9 col-md-offset-3">
                      <input class="btn btn-sm btn-primary" type="submit" value="Done">
                  </div>
              </div>
            </form>
        </div>
    </div>
  </div>
</model>

@endsection
@section('jsCode')
<script type="text/javascript" src="//connect.facebook.net/pl_PL/all.js"></script>
<script>
$(".post").hide();
  $("#create").click(function() {
    $(".post").show();
    $(".container").hide();
    });
     $(".share").click(
    //   function openFbPopUp() {
    // var fburl = $(this).val();
    // var fbimgurl = 'https://blog.prototypr.io/how-contrast-works-in-ui-design-21bf75a5a2bf';
    // var fbtitle = '{{$p->post_name}}';
    // var fbsummary = "{{$p->content}}";
    // var sharerURL = "http://www.facebook.com/sharer/sharer.php?s=100&p[url]=" + encodeURI(fburl) + "&p[images][0]=" + encodeURI(fbimgurl) + "&p[title]=" + encodeURI(fbtitle) + "&p[summary]=" + encodeURI(fbsummary);
    // window.open(
    //   sharerURL,
    //   'facebook-share-dialog', 
    //   'width=626,height=436'); 
    // return  false;

    // }
    function openFbPopUp() {
      FB.init({
  appId      : '2044471722233082',
  status     : true,
  xfbml      : true,
  version    : 'v2.7' // or v2.6, v2.5, v2.4, v2.3
});
        FB.ui({
  method: 'feed',
  link: 'https://developers.facebook.com/docs/',
  caption: 'An example caption',
}, function(response){});
    });
  </script>
@endsection

