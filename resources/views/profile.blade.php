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
                            <img src="{{asset('/images/')}}{{$user->image}}" class="img-responsive">
                          </div>
                          <div class="col-md-10">
                            <h4>{{$user->first_name}}</h4>
                            <p>{{$user->position->EN_name}}</p>
                            <p>{{$user->phone}}</p>
                            <p>{{$user->email}}</p>
                          </div>
                        </div>
                      </div>
                  </div><!-- end personal information -->
                  <!-- Experience -->
                  <div class="block">
                      <div class="block-header bg-gray-lighter">
                          <ul class="block-options">
                              <li>
                                <a href="{{Url('addexperience')}}"><i class="fa fa-plus"></i></a>
                              </li>
                          </ul>
                          <h3 class="block-title"><i class="fa fa-fw fa-user"></i> Experience</h3>
                      </div>
                      <div class="block-content personal-info">
                        @if(count($experience)>0)
                        @foreach($experience as $expr)
                        <div class="block-item">
                          <ul class="block-options">
                            <li><a href="{{URL::to('/')}}/experince/{{@$expr->id}}/delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a></li>
                            <li><a href="{{URL::to('/')}}/experince/{{@$expr->id}}/edit"><i class="fa fa-pencil"></i></a></li>
                            <li><a href="#" class="btn btn-sm btn-icon btn-success on-default edit-row"
                      data-toggle="modal" data-target="#edit{{ @$expr->id }}" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a></li>
                      <!-- <li><a href="{{action('ExperienceController@edit', ['id' => @$expr->id]) }}" class="btn btn-sm btn-icon btn-success on-default edit-row"
                      data-target="#edit{{ @$expr->id }}" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a></li> -->
                          </ul>
                          <h5>{{$expr->title}}</h5>
                          <p class="p">{{$expr->description}}</p>
                          <p>{{$expr->company_name}}</p>
                          <p>{{$expr->from_date}} - {{$expr->to_date}}</p>
                        </div>
                        @endforeach
                        @else <p>No Experience yet !</p>
                        @endif 
                      </div>
                  </div><!-- end Experience  -->
                  <!-- personal information -->
                  <div class="block">
                      <div class="block-header bg-gray-lighter">
                          <ul class="block-options">
                              <li>
                                  <a href="{{Url('project')}}"><i class="fa fa-plus"></i></a>
                              </li>
                          </ul>
                          <h3 class="block-title"><i class="fa fa-fw fa-user"></i> Projects</h3>
                      </div>
                      <div class="block-content personal-info">
                        <div class="row">
                          @if(count($project)>0)
                          @foreach($project as $pro)
                        <div class="col-md-4">
                            <a href="project.php" class="project-item">
                              <div class="img-container">
                                <img src="{{asset('/images')}}/{{$pro->caver_url}}" class="img-responsive">
                              </div>
                              <h5>{{$pro->project_name}}</h5>
                            </a>
                          </div>
                        @endforeach
                        @else <p>No Projects yet !</p>
                        @endif 
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
                              <img src="{{asset('/')}}{{$user->image}}">
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
    </main>
    <!-- END Main Container -->


    <!-- edit experience model -->
        <div class="modal fade" id="edit{{ @$expr->id }}" aria-hidden="true" aria-labelledby="view"
            role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit Experience {{$expr['title']}} </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>

        <!-- Page Content -->
        <div class="content">
          <!-- Start blcok -->
          <div class="block">
              <div class="block-content block-content-full bg-gray-lighter">
                  <form class="form-horizontal" action="{{URL::to('/experince')}}/{{@$expr->id}}/update" method="post" >
                  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <center><li>{{ $error }}</li></center>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(Session::flash('success'))
                    <div class="alert alert-success">
                    {{Session::get('success')}}
                    </div>
                    @endif
                    <div class="form-group">
                      <label class="col-md-3 control-label">Title</label>
                      <div class="col-md-7">
                        <input class="form-control" type="text" name="title" value="{{@$expr->title}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Company Name</label>
                      <div class="col-md-7">
                        <input class="form-control" type="text" name="company_name" value="{{@$expr->company_name}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Experience</label>
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <input class="form-control" type="date" name="start_date" placeholder="From" value="{{@$expr->from_date}}" >
                          </div>
                          <div class="col-md-6" id="endDate">
                            <input class="form-control" type="date" name="end_date" placeholder="To" value="{{@$expr->to_date}}" >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">I Currently work here</label>
                      <div class="col-md-7">
                        <label class="css-input switch switch-primary">
                            <input type="checkbox" id="CurrentlyWork"  name="CurrentlyWork" <?php if($expr->currentlyWork == '1'){echo 'checked';}?> ><span></span>
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Description</label>
                      <div class="col-md-7">
                        <textarea name="description" rows="3" class="form-control">{{@$expr->description}}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <button class="btn btn-sm btn-primary" type="submit">Update</button>
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
@endsection
@section('jsCode')
  @if($expr->currentlyWork == '1')
  <script>
        $('#endDate').hide();
         
  </script>
  @endif
</script>
@endsection