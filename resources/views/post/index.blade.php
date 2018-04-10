
@extends('layout.master')
@section('content')
<div class="container">
  <a href="" >Create New Post</a><br><br>
  @if(count($post) > 0)
<div class="row">
  @foreach($post as $p)
  <div class="col-md-8">
            <img class="card-img-top" src="{{asset('/images')}}/{{$p->file_url}}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{$p->post_name}}</h2>
              <p class="card-text">{{$p->content}}</p>
            </div>
    </div>
    @endforeach
  </div>
  @else
  <p>No Posts yet !</p>
  @endif
</div>
@endsection
<!-- <main id="main-container">
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
                  <input type="text" name="title" value="" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <h4 class="question">Upload Post Image</h4>
                  <input type="file" name="file" id="file" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <h4 class="question">Content</h4>
                  <input type="textarea" class="form-control" name="content" id="content"></textarea>
                </div>
              </div>

              <div class="form-group">
                  <div class="col-md-9 col-md-offset-3">
                      <input class="btn btn-sm btn-primary" type="submit" value="Done"></button>
                  </div>
              </div>
            </form>
        </div>
    </div>
  </div>
</main> -->
