@extends('layouts.backend_master')
@section('content')

<div class="card">
  <div class="card-header">
            <div class="float-left">
                <h2>Edit Hospital</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('hospitals.index') }}"><i class="fa fa-backward"></i></a>
            </div>
  </div>
  <div class="card-body">
    {!! Form::model($Hospital, ['method' => 'PATCH','route' => ['hospitals.update', $Hospital->id]]) !!}
            <div class="form-group">
                <leabel>Name:</leabel>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <leabel>Address:</leabel>
                {!! Form::text('address', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <leabel>Email:</leabel>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <leabel>Contact No:</leabel>
                {!! Form::text('phone', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
