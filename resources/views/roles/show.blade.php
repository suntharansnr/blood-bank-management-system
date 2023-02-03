@extends('layouts.backend_master')
@section('content')
<div class="card">
  <div class="card-header">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Role</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> <i class="fa fa-backward"></i> </a>
            </div>
        </div>
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $role->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permissions:</strong>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)
                        <label class="label label-success">{{ $v->name }},</label>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
