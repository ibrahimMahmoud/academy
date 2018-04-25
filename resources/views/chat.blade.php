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
                          <h3 class="block-title"> Messages </h3>
                      </div>
                      <div class="block-content personal-info" id="bbb" style="overflow: auto;height:550px; position: relative; cursor: pointer;">
                      	<p id="constatus">Select Conversations</p>
                      </div>
                  </div><!-- end personal information -->
                  <div class="hidden block" id="trt">
                    <div class="" align="right">
                        <form class="messagemodel">
                          <textarea id="messagecontent" class="form-control" rows="3" placeholder="Type Your Message" required="required"></textarea>
                          <a id="send" class="form-control" href="#"> Replay</a>
                        </form>
                        </div>
                      </div>
                </div>
                <div class="col-sm-5 col-lg-4">
                    <!-- Products -->
                    <div class="block" style="overflow: auto;height:750px; position: relative; cursor: pointer;">
                        <div class="block-header bg-gray-lighter">
                            <h3 class="block-title"><i class="fa fa-fw fa-user"></i> Users</h3>
                        </div>
                        <div class="block-content profile-sec"><br><br><br>
                        	@if(count($select_users)> 0)
                        	@foreach($select_users as $su)
                          <a id="sendid" href="#"  class="test"><div class="prof-wrap">
                            <div class="profile-img"><input type="hidden" name="getmessage" class="getmessage" id="getmessage" value="{{$su->id}}">
                              <img class="get_image" src="{{asset('/images')}}/{{$su->image}}">
                              <div class="upload-img">
                                
                              </div>
                            </div>
                            <p class="recivername">{{$su->first_name.' '.$su->last_name}}</p>
                          </div></a><br><br>
                          @endforeach
                          @else <p>No Users</p>
                          @endif
                        </div>
                    </div>
                    <!-- END Products -->
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

@endsection
@section('jsCode')
<script type="text/javascript">
  var id = 0;
  var title = "";
  var lastone = 0;
  var recivername ="";
  var reciverImage = "";
  $(document).on('click','#sendid',function(){

       var reciverid = $(this).closest('.test').find('#getmessage').val();
        id = reciverid;
        recivername = $(this).closest('#sendid').find('.recivername').text();
        reciverImage = $(this).closest('#sendid').find('.get_image').attr('src');
console.log(reciverid);
      $.ajax({
            url: 'getmessages',
            type: 'GET',
            data: { usr2: reciverid},
            success: function(response)
            {
                //console.log(response);
                title = response[0].title;
                $(".block").find("#bbb").empty();
                $('#bbb').append('<a href="#" id="more" align="center">show more</a>');
                for (var i = response.length - 1; i >= 0; i--) {
                  if(reciverid == response[i].receiver_id){
                    var left_side = '<div align="right" class="row"><div class="col-md-11"><div class="chat-wrap sender"><h4>{{Auth::User()->first_name}}</h4><p>'+response[i].content+'</p><p>sent at '+response[i].created_at+'</p></div></div><div class="col-md-1"><img src="{{asset("/images")}}/{{Auth::User()->image}}" class="img-responsive avatar"></div></div>';
                     $('#bbb').append(left_side);
                  }else{
                   $('#bbb').append( '<div align="left" class="row"><div class="col-md-1"><img src="'+reciverImage+'" class="img-responsive avatar"></div><div class="col-md-11"><div class="chat-wrap"><h4>'+recivername+'</h4><p>'+response[i].content+'</p><p>sent at '+response[i].created_at+'</p></div></div></div>');
                  }
                  
                }lastone=response[response.length-1].id;
                  $('#trt').removeClass('hidden');
                  $("#bbb").animate({ scrollTop: 550 }, 0);
                }
            });
            
  });

  $(document).on('click', '#send', function(){
var messagecontent = $(this).closest('.messagemodel').find('#messagecontent').val();
//console.log(title);
      $.ajax({
            url: 'sendmessage',
            type: 'GET',
            data: { reciverid: id, messagecontent:messagecontent, messagetitle:title},
            success: function(response)
            {
              //console.log(response);
              $('#bbb').append('<div align="right" class="row"><div class="col-md-11"><div class="chat-wrap sender"><h4>{{Auth::User()->first_name}}</h4><p>'+response.content+'</p><p>sent at '+response.created_at+'</p></div></div><div class="col-md-1"><img src="{{asset("/images")}}/{{Auth::User()->image}}" class="img-responsive avatar"></div></div>');
              $(".messagemodel").find("#messagecontent").val('');
            }
  });
});

  $(document).on('click','#more',function(){
//console.log(lastone);
      $.ajax({
            url: 'getmore',
            type: 'GET',
            data: { lastid: lastone, usr2: id},
            success: function(response)
            {
              //console.log(response);
              if(response.length>0)
              {
                for (var i = response.length - 1; i >= 0; i--) {
                  if(id == response[i].receiver_id){
                    var left_side = '<div align="right" class="row"><div class="col-md-11"><div class="chat-wrap sender"><h4>{{Auth::User()->first_name}}</h4><p>'+response[i].content+'</p><p>sent at '+response[i].created_at+'</p></div></div><div class="col-md-1"><img src="{{asset("/images")}}/{{Auth::User()->image}}" class="img-responsive avatar"></div></div>';
                     $('#more').after(left_side);
                  }else{
                   $('#more').after( '<div align="left" class="row"><div class="col-md-1"><img src="'+reciverImage+'" class="img-responsive avatar"></div><div class="col-md-11"><div class="chat-wrap"><h4>'+recivername+'</h4><p>'+response[i].content+'</p><p>sent at '+response[i].created_at+'</p></div></div></div>');
                  }
                  
                }lastone=response[response.length-1].id;
              }
              else
              {
                $('#more').after( '<p align="center"> No More Messages </p><br>');
                $('#more').hide();
              }
            }
  });
    });

</script>
@endsection