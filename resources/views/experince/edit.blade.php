
@extends('layout.master')
  @section('content')
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
          <!-- Start blcok -->
          <div class="block">
              <div class="block-header">
                <h3 class="block-title">edit Experience</h3>
              </div>
              <div class="block-content block-content-full bg-gray-lighter">
                  <form class="form-horizontal" action="{{URL::to('/experince')}}/{{@$experince->id}}/update" method="post" >
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
                        <input class="form-control" type="text" name="title" value="{{@$experince->title}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Company Name</label>
                      <div class="col-md-7">
                        <input class="form-control" type="text" name="company_name" value="{{@$experince->company_name}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Experience</label>
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <input class="form-control datepicker" type="text" name="start_date" placeholder="From" value="{{@$experince->from_date}}" >
                          </div>
                          <div class="col-md-6" id="endDate">
                            <input class="form-control datepicker" type="text" name="end_date" placeholder="To" value="{{@$experince->to_date}}" >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">I Currently work here</label>
                      <div class="col-md-7">
                        <label class="css-input switch switch-primary">
                            <input type="checkbox" id="CurrentlyWork"  name="CurrentlyWork" <?php if(@$experince->currentlyWork == '1'){echo 'checked';}?> ><span></span>
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Description</label>
                      <div class="col-md-7">
                        <textarea name="description" rows="3" class="form-control">{{@$experince->description}}</textarea>
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
  @if(@$experince->currentlyWork == '1')
  <script>
        $('#endDate').hide();
        $( ".datepicker" ).datepicker();
  </script>
  @endif
<script>
        $( ".datepicker" ).datepicker();
  </script>
@stop
