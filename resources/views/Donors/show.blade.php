@extends('layouts.backend_master')
@section('content')
<div class="card">
  <div class="card-header">
    <div class="float-left">
        <h2>Show donor</h2>
    </div>
    <div class="float-right">
        <a class="btn btn-primary" href="{{ route('donors.index') }}"> <i class="fa fa-backward"></i> </a>
    </div>
  </div>
  <div class="card-body">
    <div class="col-md-6" style="margin-left:25%;">
    <!-- Profile Image -->
                <div class="card">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      @if ($Donor->user->profile_image != null)
                        <img class="profile-user-img img-fluid img-circle" src="{{$Donor->user->profile_image}}" alt="User profile picture">
                      @else
                        <img class="profile-user-img img-fluid img-circle" src="{{asset('/Backend/img/avatar5.png')}}" alt="User profile picture">
                      @endif
                    </div>
                    <p class="text-muted text-center"></p>
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>Donor Name</b> <a class="float-right">{{$Donor->user->name}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>NIC No</b> <a class="float-right">{{$Donor->nic}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Age</b> <a class="float-right">{{$Donor->d_age}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Address</b> <a class="float-right">{{$Donor->d_addr}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Gender</b> <a class="float-right">{{$Donor->d_gender}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Contact no</b> <a class="float-right">{{$Donor->d_phone}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Blood Type</b> <a class="float-right">{{$Donor->blood_type}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>type of Blood</b> <a class="float-right">{{$Donor->type_rh}}</a>
                      </li>
                    </ul>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
    </div>
  </div>
</div>

    </div>
</div>
@endsection
