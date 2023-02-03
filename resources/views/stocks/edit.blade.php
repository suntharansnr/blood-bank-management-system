@extends('layouts.backend_master')
@section('content')
  <div class="card">
  <div class="card-header">
    <div class="row">
            <div class="mr-auto mr-3">
                <h2>Edit stock details</h2>
            </div>
            <div class="ml-auto mr-3">
                <a class="btn btn-primary" href="{{ route('stocks.index') }}"> <i class="fa fa-backward"></i> </a>
            </div>
    </div>
  </div>
  <div class="card-body">
  {!! Form::model($stock, ['method' => 'PATCH','route' => ['stocks.update', $stock->id]]) !!}
  <div class="row">
      <div class="col-md-3">
          <div class="form-group">
              <label>Blood type:</label>
              <div class="form-group">
                    <select class="form-control select2bs4" style="width: 100%;" name="blood_type">
                            <option selected="selected" disabled>Select a blood type</option>
                            <option value="A"  @if($stock->blood_type == 'A') selected @else @endif>A</option>
                            <option value="B"  @if($stock->blood_type == 'B') selected @else @endif>B</option>
                            <option value="O"  @if($stock->blood_type == 'O') selected @else @endif>O</option>
                            <option value="AB" @if($stock->blood_type == 'AB') selected @else @endif>AB</option>
                    </select>
              </div>
          </div>
      </div>

      <div class="col-md-3">
          <div class="form-group">
              <label>Type Rh:</label>
              <div class="form-group">
                    <select class="form-control select2bs4" style="width: 100%;" name="type_rh">
                            <option selected="selected" disabled>Select a blood type</option>
                            <option value="+" @if($stock->type_rh == '+') selected @else @endif>+</option>
                            <option value="-" @if($stock->type_rh == '-') selected @else @endif>-</option>
                    </select>
              </div>
          </div>
      </div>

      <div class="col-md-3">
          <div class="form-group">
              <label>Blood volume:</label>
              <div class="form-group">
                    <input type="text" name="blood_volume" class="form-control" value="{{$stock->blood_volume}}">
              </div>
          </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <div class="form-group">
              <label>Blood expire date:</label>
              <input type="date" class="form-control" name="blood_expire_date" value="{{$stock->blood_expire_date}}">
          </div>
          @if ($errors->has('Blood_quantity'))
            {!! $errors->first('Blood_quantity', '<p class="text-danger">:message</p>') !!}
          @endif
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <div class="form-group">
              <label>Blood receive date:</label>
              <input type="date" class="form-control" name="blood_receive_date" value="{{$stock->blood_receive_date}}">
          </div>
          @if ($errors->has('Blood_quantity'))
            {!! $errors->first('Blood_quantity', '<p class="text-danger">:message</p>') !!}
          @endif
        </div>
      </div>
  </div>

  <div class="col-md-6 text-center" style="margin-left:25% !important">
      <button type="submit" class="btn btn-primary btn-block">Submit</button>
  </div>

  {!! Form::close() !!}
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
