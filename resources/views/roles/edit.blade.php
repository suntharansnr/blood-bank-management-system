@extends('layouts.backend_master')
@section('content')
<div class="card">
     <div class="card-header">
           <div class="col-lg-12 margin-tb">
               <div class="float-left">
                   <h2>Edit Role</h2>
               </div>
               <div class="float-right">
                   <a class="btn btn-primary" href="{{ route('roles.index') }}"> <i class="fa fa-backward"></i> </a>
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
       {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
       <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Name:</strong>
                   {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Permission:</strong>
                   <br/>
                   @foreach($permission->chunk(4) as $rvxraj)
                     <div class="row">
                     @foreach ($rvxraj as $key => $value)
                         <div class="col-md-3">
                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }} {{ $value->name }}</label>
                         </div>
                     @endforeach
                     </div>
                   @endforeach
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
