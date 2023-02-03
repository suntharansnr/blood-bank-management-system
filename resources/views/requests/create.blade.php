@extends('layouts.backend_master')
@section('content')
<div class="card">
<div class="card-header">
  <div class="row">
          <div class="mr-auto mr-3">
              <h2>New blood request</h2>
          </div>
          <div class="ml-auto mr-3">
              <a class="btn btn-primary" href="{{ route('requests.index') }}"> <i class="fa fa-backward"></i> </a>
          </div>
  </div>
</div>
<div class="card-body">
{!! Form::open(array('route' => 'requests.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label>Hospital Name:</label>
            <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="hospital_name">
                    <option selected="selected" disabled>Select hospital name</option>
                    <?php foreach ($hospitals as $key => $value): ?>
                          <option value="{{$value->id}}">{{$value->name}}</option>
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
                          <option selected="selected" disabled>Select a blood type</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="O">O</option>
                          <option value="AB">AB</option>
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
            {!! Form::text('Blood_quantity', null, array('placeholder' => 'Enter the blood quantity','class' => 'form-control')) !!}
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
                        <option selected="selected" disabled>Select a blood type</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
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
              <textarea name="request_message" rows="8" cols="80" class="form-control"></textarea>
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
