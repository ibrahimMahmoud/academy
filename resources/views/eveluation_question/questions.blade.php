
@extends('layout.master')
@section('style')
<link src="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@stop
@section('content')
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
          <!-- Start blcok -->
          <div class="block">
              <div class="block-header">
                <h3 class="block-title">Evaluation Question On Position: {{@$position->EN_name}}</h3>
              </div>
              <div class="block-content block-content-full bg-gray-lighter">
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
                    
        <!-- start datatable -->
            <!-- Experience -->
                  <div class="block">
                      <div class="block-header bg-gray-lighter">
                          <ul class="block-options">
                              <li>
                                <a href="{{URL::to('/questions/')}}/{{@$position->id}}/create"><i class="fa fa-plus"></i></a>
                              </li>
                          </ul>
                          <h3 class="block-title"><i class="fa fa-fw fa-user"></i> Questions</h3>
                      </div>
                      <div class="block-content personal-info" >
                        <?php if (count($questions) > 0): ?>
                        @foreach($questions as $question)
                        <div class="block-item" id="QuestionContent{{@$question->id}}">
                          <ul class="block-options">
                            <li>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#deleteQuestion{{@$question->id}}"><i class="fa fa-trash"></i></button>
                                <div id="deleteQuestion{{@$question->id}}" class="modal fade" role="dialog">
                                 {{Form::open(['method'=>'POST','id'=>'deleteQestion'.@$question->id])}}  
                                 <input type="hidden" id="url{{@$question->id}}" value="{{URL::to('/')}}/api/questions/{{@$question->id}}/delete">         
                                 <input type="hidden" name="question_id" id="question_id" value="{{@$question->id}}">         
                                  <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">

                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete Question</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>Are you Sure Delete This.</p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger" id="delete">Delete</button>
                                      </div>
                                    </div>

                                  </div>
                                {{Form::close()}}
                                </div>
                            </li>
                            <li>
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editQuestion{{@$question->id}} "><i class="fa fa-pencil"></i></button>    
                                <!-- sTART model -->
                                <div id="editQuestion{{@$question->id}}" class="modal fade" role="dialog">
                                 {{Form::open(['method'=>'post','url'=>'api/questions'.'/'.@$question->id.'/update'])}}
                                 <input type="hidden" id="updateurl" name="url" value="{{URL::to('api/questions').'/'.@$question->id.'/update'}}">
                                   <input type="hidden" id="position_id" name="position_id" value="{{$question->position_id}}">
                                   <input type="hidden" id="question_id" name="question_id" value="{{$question->id}}">
                                  <div class="modal-dialog">
                                  <div class="modal-dialog">


                                    <!-- Modal content-->
                                    <div class="modal-content" id="formM">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit Question {{$question->position_id.$question->id}}- {{@$question->id}} </h4>
                                      </div>
                                      <div class="modal-body">
                                        <!-- start form inputs-->
                                       <div class="row">
                                          <div  id="content"></div>
                                           
                                        <div class="form-group" id="question">
                                            <label class="col-md-3 control-label"> Question </label>
                                            <div class="col-md-7" id="questionDiv">
                                                <textarea name="question" rows="3" id="questionM" class="form-control">{!!@$question->question!!}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group" id="scoreDiv">
                                            <label class="col-md-3 control-label">Scoure</label>
                                            <div class="col-md-7">
                                                <div class="row">
                                                  <div class="col-md-12">
                                                    <input class="form-control" type="text" id="scoure" name="scoure" placeholder="Scoure Scoure" value="{{@$question->scoure}}" >
                                                  </div>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                           
                                        <!-- end form inputs-->
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" id="update" class="btn btn-primary">update</button>
                                      </div>
                                    </div>

                                  </div>
                                  {{Form::close()}}

                                </div>
                                <!-- end model -->

                            </li>
                    
                          </ul >
                          <p class="t" style="display: inline-block;">Queestion: <h5 style="display: inline-block;" id="question{{@$question->id}}">{{@strip_tags($question->question)}}</h5></p>
                          <p class="d" style="display: inline-block;" >Scoure:<h5 id="scoure{{@$question->id}}" style="display: inline-block;" > {{@$question->scoure}}</h5></p>
                          <p class="c" style="display: inline-block;" >created By: <h5 style="display: inline-block;" > {{$question->user->first_name.' '.$question->user->last_name}}</h5></p>
                      
                        </div>
                        <!-- <hr> -->
                        @endforeach
                      <?php else: ?>
                        This Position is Empty! 
                        <?php endif ?>
                      </div>
                  </div><!-- end Experience  -->
   
              </div>
          </div><!-- end blcok -->

        </div>
        <!-- END Page Content -->
    </main>
  
  @stop
  @section('jsCode')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
         
    $(document).ready(function() {$('#example').DataTable();});
    //start update question
     $(document).ready(function() {
        $(document).on('click','#update',function(){
      var question_id = $(this).closest('.modal').find("#question_id").val();
      var position_id = $(this).closest('.modal').find("#position_id").val();
      var question = $(this).closest('#formM').find("#questionM").val();
      var scoure = $(this).closest('#formM').find("#scoure").val();
                // var  question = $('#question').val();
                // var  scoure = $('#scoure').val();
      var  user_id = {{Auth::id()}};
                // var  url = $('#updateurl').val();
      var url = $(this).closest('.modal').find("#updateurl").val();

                var action =  $('form').attr('action', url);

                console.log(url);
                console.log(question_id);
                var data =  {
                    position_id:position_id,
                    question:question,
                    question_id:question_id,
                    scoure:scoure,
                    user_id:user_id
                };
              
            $.ajax
            ({ 
                url: url,
                type: 'post',
                data:data,
                success: function(result)
                {
                    if (result.status == 'OK') {
                        $('#question'+question_id).text(question);
                        $('#scoure'+question_id).text(scoure);
                        $('#content').append('<div class="alert alert-success" id="success">'+result.msg+'</div>');
                        $('#editQuestion'+question_id).modal('hide');

                        console.log('done');
                    }else{
                         $('#content').append('<div class="alert alert-danger" id="error">'+result.error+'</div>');
                        console.log('NOT OK');
                    }

                }

            });
        });
    });
    //end update question
    //start delete question            
     $(document).ready(function() {

        $(document).on('click','#delete',function(){
            var  question_id =  $('#question_id').val();
            var  url = $('#url'+question_id).val();
            var action =  $('form').attr('action', url);
            var  action =  $('form').attr('action');

            $.ajax
            ({ 
                url: url,
                type: 'post',
                success: function(result)
                {
                    if (result.status == 'OK') {
                        $('#content').append('<div class="alert alert-success" id="success">'+result.msg+'</div>');
                      console.log('#QuestionContent'+question_id);
                        $('#QuestionContent'+question_id).hide();
                        $('#deleteQuestion'+question_id).modal('hide');
                        console.log('done');
                    }else{
                         $('#content').append('<div class="alert alert-danger" id="error">'+result.error+'</div>');
                        console.log('NOT OK');
                    }

                }

            });
        });
        });
    //end delete question            
    </script>
  @stop
 
  
                                          