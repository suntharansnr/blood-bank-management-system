@extends('layouts.backend_master')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit Request</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('Requests.index') }}"> Back</a>

        </div>

    </div>

</div>


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


{!! Form::model($request, ['method' => 'PATCH','route' => ['Requests.update', $request->id]]) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Hospital Name:</strong>

            {!! Form::text('hname', null, array('placeholder' => 'Enter the hospital name','class' => 'form-control')) !!}

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Blood type:</strong>

            {!! Form::text('B_type', null, array('placeholder' => 'Enter the blood type','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Blood Quantity:</strong>

            {!! Form::text('B_quantity', null, array('placeholder' => 'Enter the quantity','class' => 'form-control')) !!}

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Requeat Date:</strong>

            {!! Form::text('Requestdate', null, array('placeholder' => 'Enter the request date','class' => 'form-control')) !!}

        </div>

    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>

{!! Form::close() !!}


@endsection
