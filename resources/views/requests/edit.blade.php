@extends('layouts.backend_master')
@section('content')
  <div class="card">
  <div class="card-header">
    <div class="row">
            <div class="mr-auto mr-3">
                <h2>Edit blood request</h2>
            </div>
            <div class="ml-auto mr-3">
                <a class="btn btn-primary" href="{{ route('requests.index') }}"> <i class="fa fa-backward"></i> </a>
            </div>
    </div>
  </div>
  <div class="card-body">
  {!! Form::model($request, ['method' => 'PATCH','route' => ['requests.update', $request->id]]) !!}
  <div class="row">
      <div class="col-md-3">
          <div class="form-group">
              <label>Hospital Name:</label>
              <div class="form-group">
                    <select class="form-control select2bs4" style="width: 100%;" name="hospital_name">
                      <?php foreach ($hospitals as $key => $value): ?>
                            @if ($request->hospital_id == $value->id)
                                <option value="{{$value->id}}" selected>{{$value->name}}</option>
                            @else
                                <option value="{{$value->id}}">{{$value->name}}</option>
                            @endif
                      <?php endforeach; ?>
                    </select>
              </div>
              @if ($errors->has('hospital_name'))
              {!! $errors->first('hospital_name', '<p class="text-danger">:message</p>') !!}
              @endif
          </div>
      </div>
      <div class="col-md-3">
          <div class="form-group">
              <label>Blood Type:</label>
              <div class="form-group">
                    <select class="form-control select2bs4" style="width: 100%;" name="Blood_type">
                            @if($request->blood_type=='A')
                              <option value="A" selected>A</option>
                            @else
                              <option value="A">A</option>
                            @endif

                            @if($request->blood_type=='B')
                              <option value="B" selected>B</option>
                            @else
                              <option value="B">B</option>
                            @endif

                            @if($request->blood_type=='O')
                              <option value="O" selected>O</option>
                            @else
                              <option value="O">O</option>
                            @endif

                            @if($request->blood_type=='AB')
                              <option value="AB" selected>AB</option>
                            @else
                              <option value="AB">AB</option>
                            @endif
                    </select>
              </div>
              @if ($errors->has('Blood_type'))
              {!! $errors->first('Blood_type', '<p class="text-danger">:message</p>') !!}
              @endif
          </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <div class="form-group">
              <label>Blood quantity:</label>
              <input type="text" name="Blood_quantity" value="{{$request->request_amount}}" class="form-control" placeholder="Enter the blood quantity">
          </div>
          @if ($errors->has('Blood_quantity'))
            {!! $errors->first('Blood_quantity', '<p class="text-danger">:message</p>') !!}
          @endif
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
            <label>Type Rh:</label>
            <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="Type_Rh">
                          @if($request->type_rh == '+')
                             <option value="+" selected>+</option>
                          @else
                             <option value="+">+</option>
                          @endif

                          @if($request->type_rh == '-')
                             <option value="-" selected>-</option>
                          @else
                             <option value="-">-</option>
                          @endif
                  </select>
            </div>
            @if ($errors->has('Type_Rh'))
            {!! $errors->first('Type_Rh', '<p class="text-danger">:message</p>') !!}
            @endif
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
          <label>Request message:</label>
          <div class="form-group">
                <textarea name="request_message" rows="8" cols="80" class="form-control">{{$request->request_message}}</textarea>
          </div>
          @if ($errors->has('request_message'))
          {!! $errors->first('request_message', '<p class="text-danger">:message</p>') !!}
          @endif
      </div>
    </div>
  </div>
  <div class="col-md-6 text-center" style="margin-left:25% !important">
      <button type="submit" class="btn btn-primary btn-block">Submit</button>
  </div>

  </form
  </div>
  </div>
  @endsection
  @section('js')
  <script type="text/javascript">
  $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
    });
  </script>
@endsection
