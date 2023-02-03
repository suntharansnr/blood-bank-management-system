@extends('layouts.backend_master')
@section('content')
<div class="card">
  <div class="card-header">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New User</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> <i class="fa fa-backward"></i> </a>
        </div>
    </div>
  </div>
  <div class="card-body">
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    {!! Form::open(array('route' => 'users.store','method'=>'POST','enctype' => 'multipart/form-data')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Profile picture:</strong>
              <input type="file" name="profile_image" value="" class="form-control">
              @if (count($errors) > 0)
                  @foreach ($errors->get('profile_image') as $error)
                        <span class="text-muted" style="color:red !important">{{ $error }}</span>
                  @endforeach
              @endif
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Confirm Password:</strong>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control select2bs4')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
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
