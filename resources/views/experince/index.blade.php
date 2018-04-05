
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
                <h3 class="block-title">Add Experience</h3>
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
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Position</th>
                <th>username</th>
                <th>company name</th>
                <th>Start date</th>
                <th>end date</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($experinces as $experince)
            <tr>
                <td>{{@$experince->id}}</td>
                <td>{{@$experince->title}}</td>
                <td>{{@$experince->user->first_name}}</td>
                <td>{{@$experince->company_name}}</td>
                <td>{{@$experince->from_date}}</td>
                <td>
                @if($experince->to_date == '')
                Current Worked Here..
                @else
                {{@$experince->to_date}}
                @endif
                </td>
                <th>
                    <a href="{{URL::to('/')}}/experince/{{@$experince->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                </th>
                <th>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{@$experince->id}}">
                    <li class="fa fa-trash"></li>
                </button>
                <!-- start model -->
                <!-- Modal -->
                <div id="delete{{@$experince->id}}" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Delete Experience</h4>
                    </div>
                    <div class="modal-body">
                        <p>are you sure delete this?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                        </button>
                        <a href="{{URL::to('/')}}/experince/{{@$experince->id}}/delete" class="btn btn-danger">
                        Delete
                        </a>
                    </div>
                    </div>

                </div>
                </div>
                <!-- end model -->
                
                </th>

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
    } );
    </script>
  @stop