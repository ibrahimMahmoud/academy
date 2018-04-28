
@extends('layout.master')
  @section('content')
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
          <!-- Start blcok -->
          <div class="block">
              <div class="block-header">
                <h3 class="block-title">Add Question</h3>
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
                    @if(Session::has('error'))
                    <div class="alert alert-danger">
                    {{Session::get('error')}}
                    </div>
                    @endif
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                    {{Session::get('success')}}
                    </div>
                    @endif
                    <div class="form-group">
                      <!-- <label class="col-md-3 control-label">position</label> -->
                      <div class="col-md-7">
                        <input type="hidden" name="position_id[]" value="{{@$postion_id}}" >
                       <!--  <select class="form-control" id="position" name="position_id[]">
                          <option>Select One</option>
                          @foreach($positions as $position)
                          <option value="{{@$position->id}}">{{@$position->EN_name.'-'.@$postion_id}}</option>
                          @endforeach
                        </select> -->
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"> Question </label>
                      <div class="col-md-7">
                        <textarea name="question[]" id="question" rows="3" class="form-control" required="required"></textarea>
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">score</label>
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-12">
                            <input class="form-control" type="text" id="scoure" name="scoure[]" placeholder="Question score" value="" required="required">
                          </div>
                         
                        </div>
                      </div>
                    </div>
                   <div class="child">
                     
                   </div>
                    
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <button class="btn btn-sm btn-info" id="generate-new" type="button">add more</button>
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
  //hide add more for add all
    $('#generate-new').hide();
    $(this).keyup(function(){
        if($('#position').val().length !=0 && $('#scoure').val().length !=0  && $('#question').val().length !=0){
          $('#generate-new').show();       
        }
        else {
         $('#generate-new').hide();
        }
    });
    //generate new add question
      $("#generate-new").on("click",function() {
        $('.child').append('<div id="dive"><div class="row"><div class="col-9"><div class="form-group"><div class="col-md-7"><input type="hidden" name="position_id[]" value="{{@$postion_id}}" ></div></div><div class="form-group"><label class="col-md-3 control-label">Question</label> <div class="col-md-7"><textarea name="question[]" id="question" rows="3" class="form-control"></textarea></div></div><div class="form-group"><label class="col-md-3 control-label">Scoure</label><div class="col-md-7"><div class="row"><div class="col-md-12"><input class="form-control" type="text" id="scoure" name="scoure[]" placeholder="Question Scoure" value="" ></div></div></div></div><button id="remove" class="btn btn-danger">-</button></div></div></div>');
    });

  $(document).on("click", "#remove", function(e) {
      var da =$(this).closest('#dive').remove();
     });
</script>
@stop


