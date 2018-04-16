
@extends('layout.master')

@section('content')
  <main id="main-container">

        <!-- Page Content -->
        <div class="content content-boxed">
          <div class="block">
            <div class="js-wizard-simple block">
                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#simple-classic-step1" data-toggle="tab">Personal Information</a>
                    </li>
                   
                    <li>
                        <a href="#simple-classic-step3" data-toggle="tab">Add Project</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form class="form-horizontal" action="{{URL::to('/complete')}}" enctype="multipart/form-data" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                
                  <!-- Steps Progress -->
                  <div class="block-content block-content-mini block-content-full border-b">
                      <div class="wizard-progress progress progress-mini remove-margin-b">
                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                      </div>
                  </div>
                  <!-- END Steps Progress -->

                    <!-- Steps Content -->
                    <div class="block-content tab-content">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <center><li>{{ $error }}</li></center>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <!-- Step 1 -->
                        <div class="tab-pane push-30-t push-50 active" id="simple-classic-step1">
                  
                        
                        <div class="form-group">
                             <!-- first name -->
                                <div class="col-sm-4 col-sm-offset-2">
                                    <label for="">First Name</label>
                                    <input class="form-control" type="text" id="fname" name="fname" value="{{@$user->first_name}}" >
                                </div>
                                <!-- seconed name -->
                                <div class="col-sm-4 ">
                                    <label for="">Last Name</label>
                                    <input class="form-control" type="text" id="lname" name="lname"  value="{{@$user->last_name}}" >
                                </div>
                          </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="">Phone</label>
                                    <input class="form-control" type="text" id="phone" name="phone"  value="{{@$user->phone}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="">Email</label>
                                    <input class="form-control" type="email" id="email" name="email"  value="{{@$user->email}}">
                                </div>
                            </div>
                      
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 3 -->
                        <div class="tab-pane push-30-t push-50 child" id="simple-classic-step3" >
                           
                          <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                              <h4 class="question">Title</h4>
                              <input type="text" name="name_project[]" id="name_project" value="" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                              <h4 class="question">Upload Project Cover Image</h4>
                              <input type="file" name="project_cover[]" id="project_cover" value="" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                              <h4 class="question">Content</h4>
                              <textarea name="project_details[]" id="content"></textarea>
                            </div>
                          </div>
                          <button type="button" name="button" value="2555" id="generate_new" class="btn btn-primary addmore push-15">Add More</button>
                        </div>
                        <!-- END Step 3 -->
                    </div>
                    <!-- END Steps Content -->

                    <!-- Steps Navigation -->
                    <div class="block-content block-content-mini block-content-full border-t">
                        <div class="row">
                            <div class="col-xs-6">
                                <button class="wizard-prev btn btn-default" type="button"><i class="fa fa-arrow-left"></i> Previous</button>
                            </div>
                            <div class="col-xs-6 text-right">
                                <button class="wizard-next btn btn-default" type="button">Next <i class="fa fa-arrow-right"></i></button>
                                <!-- done button action in assets/js/pages/base_forms_wizard.js -->
                                <!-- <input  type="submit" valye="Done"> -->
                                <button class="wizard-finish btn btn-primary" type="submit"><i class="fa fa-check"></i> Done</button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>
          </div>
        </div>
        <!-- END Page Content -->
    </main>
  <!-- END Page Content -->

@stop

@section('jsCode')
<script>
  $(document).ready(function(){
    //proje tab
      $('#generate_new').hide();
  
      $('#content, #name_project').each(function(){
          $(this).keyup(function(){
            if($('#content').val().length !=0 && $('#name_project').val().length !=0){
              $('#generate_new').show();       
            }
            else {
              $('#generate_new').hide();
            }
          });
      });
      
    });

</script>
<script>

    $("#generate_new").on("click",function() {
      var htmlData = $("#dive").html();
        $('.child').append('<div id="dive"><div class="row"><div class="col-9"><div class="form-group"><div class="col-md-8 col-md-offset-2"><h4 class="question">Title</h4><input type="text" name="name_project[]" value="" class="form-control"></div></div><div class="form-group"><div class="col-md-8 col-md-offset-2"><h4 class="question">Upload Project Cover Image</h4><input type="file" name="project_cover[]" value="" class="form-control"></div></div><div class="form-group"><div class="col-md-8 col-md-offset-2"><h4 class="question">Content</h4><textarea name="project_details[]" id="content"></textarea></div></div><button id="remove" class="btn btn-danger">-</button></div></div></div></div>');
    });

    $("#generate-new-step-tow").on("click",function() {

       $('#simple-classic-step2').append(' <div class="step-tow-child"><div class="form-group"><label class="col-md-3 control-label">Title</label><div class="col-md-7"><input class="form-control" type="text" name="position[]"></div></div><div class="form-group"><label class="col-md-3 control-label">Company Name</label><div class="col-md-7"><input class="form-control" type="text" name="company_name[]"></div></div> <div class="form-group"><label class="col-md-3 control-label">Experience</label><div class="col-md-7"><div class="row"><div class="col-md-6"><input class="form-control" type="text" name="start_date[]" placeholder="From" value="" ></div><div class="col-md-6 endDate" id="endDate"><input class="form-control" type="text" name="end_date[]" placeholder="To" value="" ></div></div></div></div><div class="form-group"><label class="col-md-3 control-label">I Currently work here</label><div class="col-md-7"><label class="css-input switch switch-primary"><input type="checkbox" class="CurrentlyWork" name="CurrentlyWork[]" id="CurrentlyWork" ><span></span><span></span></label></div></div><div class="form-group"><label class="col-md-3 control-label">Description</label><div class="col-md-7"> <textarea name="description[]" rows="3" class="form-control"></textarea> </div></div><button id="remove" class="btn btn-danger addmore push-15">-</button></div>');
     });


    
    $(document).on("click", "#remove", function(e) {
      var da =$(this).closest('#dive').remove();

     });
    </script>
@stop