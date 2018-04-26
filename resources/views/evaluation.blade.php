
@extends('layout.master')

@section('content')

<!-- Main Container -->
<main id="main-container">

    <!-- Page Content -->
    <div class="content">
      <!-- Start blcok -->
      <div class="block">
          <div class="block-header">
            <h3 class="block-title">Evaluation</h3>
          </div>
          <div class="block-content block-content-full bg-gray-lighter">
              <?php if (count($questions)>0): ?>
              <form class="form-horizontal" action="{{URL::to('/answers')}}" method="post" >
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                @if(Session::has('success'))
                   <div class="alert alert-danger">{{Session::flash('success')}}</div>
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
              
                @foreach($questions as $question )
                <div class="form-group">
                  <div class="col-md-8 col-md-offset-2">
                    <h4 class="question">{{@$question->question}}</h4>
                    <input type="hidden" name="question_id[]" rows="3" class="form-control" value="{{@$question->id}}" >
                    <textarea name="answer[]" rows="3" class="form-control" placeholder="Answer Here"></textarea>
                  </div>
                </div>
                @endforeach
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <button class="btn btn-sm btn-primary" type="submit">Done</button>
                    </div>
                </div>
              </form>
            <?php else: ?>
              No Question On Your Position
            <?php endif ?>
          </div>
      </div><!-- end blcok -->

    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
@endsection