@extends('layouts.backend_master')
@section('content')
<div class="card">
     <div class="card-header">
               <div class="float-left">
                   <h2>Create New Hospital</h2>
               </div>
               <div class="float-right">
                   <a class="btn btn-primary" href="{{ route('hospitals.index') }}"> <i class="fa fa-backward"></i> </a>
               </div>
     </div>
     <div class="card-body">
       {!! Form::open(array('route' => 'hospitals.store','method'=>'POST')) !!}
               <div class="form-group">
                   <label>Name:</label>
                   {!! Form::text('name', null, array('placeholder' => 'Enter the Name','class' => 'form-control')) !!}
                   @if ($errors->has('name'))
                   {!! $errors->first('name', '<p class="text-danger">:message</p>') !!}
                   @endif
               </div>
               <div class="form-group">
                   <label>Address:</label>
                   {!! Form::text('address', null, array('placeholder' => 'Enter the Address','class' => 'form-control')) !!}
                   @if ($errors->has('address'))
                       {!! $errors->first('address', '<p class="text-danger">:message</p>') !!}
                   @endif
               </div>
               <div class="form-group">
                   <label>Contact No:</label>
                   {!! Form::text('phone', null, array('placeholder' => 'Enter the Contact Number','class' => 'form-control')) !!}
                   @if ($errors->has('phone'))
                       {!! $errors->first('phone', '<p class="text-danger">:message</p>') !!}
                   @endif
               </div>
               <div class="form-group">
                   <label>Email:</label>
                   {!! Form::text('email', null, array('placeholder' => 'Enter the Email Address','class' => 'form-control')) !!}
                   @if($errors->has('email'))
                        {!! $errors->first('email', '<p class="text-danger">:message</p>') !!}
                   @endif
               </div>
           <div class="col-xs-12 col-sm-12 col-md-12 text-center">
               <button type="submit" class="btn btn-primary">Submit</button>
           </div>
       </div>

       {!! Form::close() !!}
     </div>
</div>
@endsection
