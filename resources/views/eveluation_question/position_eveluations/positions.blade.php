
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
                <h3 class="block-title">Add positions</h3>
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
        <table id="example" class="display" style="width:100%; text-transform: capitalize; ">
        <thead>
            <tr>
                <th>#</th>
                <th>position</th>
                <th>total scoure</th>
                <th>Questions Number</th>
                <th>active status</th>
                <th>questions</th>
                <th>Active / Not</th>
            </tr>
        </thead>
        <tbody>
            @foreach($positions as $position)
            <tr >
                <td>{{@$position->id}}</td>
                <td>{{@$position->EN_name}}</td>
                <td>{{@$position->PostionEveluation->degree}}</td>
                <td id="position_status{{@$position->PostionEveluation->id}}">
                    @if($position->PostionEveluation->is_active =='0')
                        Active 
                    @else
                       Deactivated
                    @endif
                </td>
                <td>{{$position->questions->count()}}</td>
                <td>
                     <button type="button" class="btn btn-info" data-toggle="modal" data-target="#showQestions{{@$position->id}}">
                        <li class="fa fa-info"></li>
                    </button>

                      <!-- start model -->
                <!-- Modal -->
                <div id="showQestions{{@$position->id}}" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Positions Questions</h4>
                     
                    </div>
                    <div class="modal-body">
                       <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <tr>
                                    <td>Question</td>
                                    <td>Scoure</td>
                                </tr>
                                @foreach($position->questions as $question)
                                <tr>
                                    <td>{{@$question->question}}</td>
                                    <td>{{@$question->scoure}}</td>
                                </tr>
                                @endforeach
                            </table>
                       
                       </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                        </button>
                    </div>
                    </div>

                </div>
                </div>
                <!-- end model -->

                </td>
                <td>
                <div class="form-group">
                  <div class="col-md-7">
                    <label class="css-input switch switch-primary">
                        <input type="checkbox" name="active" id="active" value="{{@$position->PostionEveluation->id}}" <?php if($position->PostionEveluation->is_active == '1' )echo "checked='checked'";?> ><span></span>
                    </label>
                  </div>
                </div>
                </td>

            </tr>
           @endforeach
        </tbody>
    </table>
                    <!-- end datatable -->

              </div>
          </div><!-- end blcok -->

        </div>
        <!-- END Page Content -->
    </main>
  
  @stop
  @section('jsCode')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {

        $('#example').DataTable();
    });

    $(document).ready(function() {
        $(document).on('click','#active',function(){
        var id = $(this).val();
            $.ajax
            ({ 
                url: '{{URL::to("/")}}/api/position/'+id+'/activation',
                type: 'post',
                success: function(result)
                {
                    $('#position_status'+id).html(result.msg)
                    console.log('done');

                }
            });
        });
    });
    </script>
  @stop