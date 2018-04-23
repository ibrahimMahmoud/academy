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
                      <div class="block-content personal-info" id="bbb" style="overflow-y:scroll; overflow: auto; height:600px;">
                      	<p>Select Conversations</p>
                      </div>
                  </div><!-- end personal information -->
                </div>
                <div class="col-sm-5 col-lg-4">
                    <!-- Products -->
                    <div class="block">
                        <div class="block-header bg-gray-lighter">
                            <h3 class="block-title"><i class="fa fa-fw fa-user"></i> Users</h3>
                        </div>
                        <div class="block-content profile-sec"><br><br><br>
                        	@if(count($select_users)> 0)
                        	@foreach($select_users as $su)
                          <a id="sendid" href="#"  class="test"><div class="prof-wrap">
                            <div class="profile-img"><input type="hidden" name="getmessage" class="getmessage" id="getmessage" value="{{$su->id}}">
                              <img src="{{asset('/images')}}/{{$su->image}}">
                              <div class="upload-img">
                                
                              </div>
                            </div>
                            <a href="#">{{$su->first_name.' '.$su->last_name}}</a>
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
  $(document).on('click','#sendid',function(){
       var reciverid = $(this).closest('.test').find('#getmessage').val();
       //console.log(reciverid);

      $.ajax({
            url: 'getmessages',
            type: 'GET',
            data: { usr2: reciverid},
            success: function(response)
            {
                console.log(response);
                jQuery.each( response, function( i, val ) {
                  if(reciverid == val.sender_id){
                    var left_side = '<div align="right" class="row"><div class="col-md-2"><img src="{{asset("/images")}}/'+val.sender_id+'" class="img-responsive"></div><div class="col-md-10"><h4>'+val.sender_id+'</h4><p>'+val.content+'</p><p>sent at '+val.create_at+'</p></div></div>';
                     $('#bbb').append(left_side);
                  }else{
                   $('#bbb').append( '<div align="left" class="row"><div class="col-md-2"><img src="{{asset("/images")}}/'+val.sender_id+'" class="img-responsive"></div><div class="col-md-10"><h4>'+val.sender_id+'</h4><p>'+val.content+'</p><p>sent at '+val.create_at+'</p></div></div>');
                  }
                  
                });
            }
          });  
  });


</script>
@endsection