@extends('layouts.backend_master')
@section('content')
<div class="card">
<div class="card-header">
  <div class="row">
          <div class="mr-auto mr-3">
              <h2>New blood request</h2>
          </div>
          <div class="ml-auto mr-3">
              <a class="btn btn-primary" href="{{ route('Requests.index') }}"> Back</a>
          </div>
  </div>
</div>
<div class="card-body">
@if (count($errors) > 0)
  <div class="alert alert-danger">
    <label>Whoops!</label> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif



{!! Form::open(array('route' => 'Requests.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Hospital Name:</label>
            <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="hname">
                    <option selected="selected" disabled>Select hospital name</option>
                    <?php foreach ($hospitals as $key => $value): ?>
                          <option value="{{$value->h_name}}">{{$value->h_name}}</option>
                    <?php endforeach; ?>
                  </select>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Blood Type:</label>
            <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="B_type">
                          <option selected="selected">Select a blood type</option>
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B-</option>
                          <option value="O+">O+</option>
                          <option value="O-">O-</option>
                          <option value="AB+">AB+</option>
                          <option value="AB-">AB-</option>
                  </select>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Blood quantity:</label>
            {!! Form::text('B_quantity', null, array('placeholder' => 'Enter the blood quantity','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Request date:</label>
            <input type="date" class="form-control" name="Requestdate" value="">
        </div>
    </div>

    <div class="col-md-6 text-center" style="margin-left:25% !important">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
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
