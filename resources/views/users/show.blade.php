@extends('layouts.backend_master')
@section('content')
<div class="card">
  <div class="card-header">
    <div class="float-left">
        <h2> Show User</h2>
    </div>
    <div class="float-right">
        <a class="btn btn-primary" href="{{ route('users.index') }}"> <i class="fa fa-backward"></i> </a>
    </div>
  </div>
  <div class="card-body">
    <div class="col-md-6" style="margin-left:25%;">
         <div class="card">
          <div class="card-body box-profile">
            <div class="text-center">
              @if ($user->profile_image != null)
                <img class="profile-user-img img-fluid img-circle" src="{{$user->profile_image}}" alt="User profile picture">
              @else
                <img class="profile-user-img img-fluid img-circle" src="{{asset('/Backend/img/avatar5.png')}}" alt="User profile picture">
              @endif
            </div>
            <p class="text-muted text-center"></p>
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Name</b> <a class="float-right">{{ $user->name }}</a>
              </li>
              <li class="list-group-item">
                <b>Email</b> <a class="float-right">{{ $user->email }}</a>
              </li>
              <li class="list-group-item">
                <b>Role</b> <a class="float-right">
                               @if(!empty($user->getRoleNames()))
                                   @foreach($user->getRoleNames() as $v)
                                       <label class="badge badge-success">{{ $v }}</label>
                                   @endforeach
                       @endif
                            </a>
              </li>
            </ul>
          </div>
         </div>
    </div>
  </div>
</div>
@endsection
