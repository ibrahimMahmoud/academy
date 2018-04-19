
@extends('layout.master')
  @section('content')
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
          <!-- Start blcok -->
          <div class="block">
              <div class="block-header">
                <h3 class="block-title">Add Experience</h3>
              </div>
              <div class="block-content block-content-full bg-gray-lighter">
                  <form class="form-horizontal" action="{{URL::to('/questions')}}" method="post" >
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
                      <label class="col-md-3 control-label">position</label>
                      <div class="col-md-7">
                        <select class="form-control" name="position_id[]">
                          <option>Select One</option>
                          @foreach($positions as $position)
                          <option value="{{@$position->id}}">{{@$position->EN_name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"> Question </label>
                      <div class="col-md-7">
                        <textarea name="question[]" rows="3" class="form-control">{{Request::old('question')}}</textarea>
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Scoure</label>
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-12">
                            <input class="form-control" type="text" name="scoure" placeholder="Question Scoure" value="{{Request::old('scoure')}}" >
                          </div>
                         
                        </div>
                      </div>
                    </div>
                   
                    
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <button class="btn btn-sm btn-primary" type="submit">Done</button>
                        </div>
                    </div>
                  </form>
              </div>
          </div><!-- end blcok -->

        </div>
        <!-- END Page Content -->
    </main>
  
@stop 
@section('jsCode')
<script type="text/javascript">
   $( ".datepicker" ).datepicker();
</script>
@stop


