
@extends('layout.master')

@section('content')

<!-- Main Container -->
<main id="main-container">

    <!-- Page Content -->
    <div class="content">
      <!-- Start blcok -->
      <div class="block">
          <div class="block-header">
            <h3 class="block-title">Edit Profile</h3>
          </div>
          <div class="block-content block-content-full bg-gray-lighter">
              <form class="form-horizontal" action="{{Url('edit')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                  <div class="profile-img">
                      <img id="blah" src="{{asset('/images')}}/{{$user->image}}">
                      <div class="upload-img">
                        <input type="file" name="image" id="image" value="" onchange="readURL(this);">
                        <i class="fa fa-image"></i>
                      </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">First Name</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" id="firstname" name="firstname" value="{{$user->first_name}}" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" placeholder="Last Nmae" id="lastname" name="lastname" value="{{$user->last_name}}">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Phone</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" id="phone" name="phone" value="{{$user->phone}}" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                      <input class="form-control" type="password" id="password" name="password" placeholder="Leave it blank if you won't change it">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Repassword</label>
                    <div class="col-md-9">
                      <input class="form-control" type="password" id="password_confirm" name="password_confirm" oninput="check(this)" placeholder="Repate Password">
                      <script language='javascript' type='text/javascript'>
                        function check(input) {
                            if (input.value != document.getElementById('password').value) {
                                input.setCustomValidity('Password Must be Matching.');
                            } else {
                                // input is valid -- reset the error message
                                input.setCustomValidity('');
                            }
                        }
                    </script>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <label class="col-md-3 control-label">Position</label>
                    <div class="col-md-9">
                      <select class="form-control" id="position" name="position">
                        @foreach($position as $p)
                        <option value="{{$p->id}}" 
                          @if($p->id == $user->position_id) 
                          selected="selected" 
                          @endif
                          >{{$p->EN_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group row" align="center">
                  <div class="col-sm-9 col-sm-offset-2">
                    <input type="submit" class="btn btn-primary" name="" id="" value="Update">
                  </div>
                </div>
              </form>
          </div>
      </div><!-- end blcok -->

    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
@endsection
@section('jsCode')
<script type="text/javascript">
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection