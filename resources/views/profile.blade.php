@extends('layout.master')
@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content content-boxed">
            <div class="row">
                <div class="col-sm-7 col-lg-8">
                  <!-- personal information -->
                  <div class="block" exp">
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
                            <img src="{{asset('/images')}}/{{$user->image}}" class="img-responsive">
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
                      <div class="block-content personal-info" >
                        @if(count($experience)>0)
                        @foreach($experience as $expr)
                        <div class="block-item" id="edit_exp">
                          <ul class="block-options">
                            <li><a href="{{URL::to('/')}}/experince/{{@$expr->id}}/delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a></li>
                            <li><a href="{{URL::to('/')}}/experince/{{@$expr->id}}/edit"><i class="fa fa-pencil"></i></a></li>
                            <li><a href="#" class="btn btn-sm btn-icon btn-success on-default edit-row editM"
                      data-toggle="modal" data-target="#edit" exp_id="{{$expr->id}}" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a></li>
                      <!-- <li><a href="{{action('ExperienceController@edit', ['id' => @$expr->id]) }}" class="btn btn-sm btn-icon btn-success on-default edit-row"
                      data-target="#edit{{ @$expr->id }}" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a></li> -->
                          </ul >
                          <h5 class="t">{{$expr->title}}</h5>
                          <p class="d">{{$expr->description}}</p>
                          <p class="c">{{$expr->company_name}}</p>
                          <p><label class="s">{{$expr->from_date}}</label> - <label class="e">{{$expr->to_date}}</label></p>
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
                                <img src="{{asset('/')}}/{{$pro->caver_url}}" class="img-responsive">
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
    </main>
    <!-- END Main Container -->


    <!-- edit experience model -->
        <div class="modal fade" id="edit" aria-hidden="true" aria-labelledby="view"
            role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>

        <!-- Page Content -->
        <div class="content">
          <!-- Start blcok -->
          <div class="block">
              <div class="block-content block-content-full bg-gray-lighter">
                  <form id="form" class="form-horizontal"  method="post" >
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
                        <input class="form-control" type="text" name="title" id="title" value="">
                        <input type="hidden" name="id" id="exp_id">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Company Name</label>
                      <div class="col-md-7">
                        <input class="form-control" type="text" name="company_name" id="company_name" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Experience</label>
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <input class="form-control" type="date" name="start_date" id="start" placeholder="From" value="" >
                          </div>
                          <div class="col-md-6" id="end">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">I Currently work here</label>
                      <div class="col-md-7">
                        <label class="css-input switch switch-primary">
                            <input type="checkbox" id="CurrentlyWork"  name="CurrentlyWork"  ><span></span>
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Description</label>
                      <div class="col-md-7">
                        <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                      </div>
                    </div>

                  </form>
<div class="form-group" id="submit">
                        <div class="col-md-9 col-md-offset-3">
                            <button class="btn btn-sm btn-primary" type="submit">Update</button>
                        </div>
                    </div>
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

<script>
       $('.datepicker').datepicker();
      $(document).on('click','#submit',function(){
        var id = $('#exp_id').val();
        $('form').attr("action",'{{URL("/experince/update")}}/'+id);
         $( "form" ).submit();

});

    $(document).on('click','.editM',function(){
     var id = $(this).attr('exp_id');
      var title = $(this).closest('#edit_exp').find(".t").text();
      var descr = $(this).closest('#edit_exp').find(".d").text();
      var company = $(this).closest('#edit_exp').find(".c").text();
      var start = $(this).closest('#edit_exp').find(".s").text();
      var end   = $(this).closest('#edit_exp').find(".e").text();
      $('#edit').find('#exp_id').val(id);
      $('#edit').find('#title').val(title);
      $('#edit').find('#description').text(descr);
      $('#edit').find('#company_name').val(company);
      $('#edit').find('#start').val(start);

      if(end == ""){
        $('#end').empty();
                var endD = '<input class="form-control end" type="date" name="end_date" id="endDate" placeholder="To" value="" >';
                $('#end').append(endD);

        $('#CurrentlyWork').prop('checked', false);

      }else{
        $('#CurrentlyWork').prop('checked', true);
        $('#end').empty();
        var endD = '<input class="form-control end" type="date" name="end_date" id="endDate" placeholder="To" value="'+end+'" >';
        $('#end').append(endD);
      }

    });
</script>
@endsection
