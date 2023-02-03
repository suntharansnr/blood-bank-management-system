@extends('layouts.backend_master')
@section('content')
<div class="container-fluid" style="padding-left:0px !important;padding-bottom:5px">
<div class="col-md-6" style="margin-left:25%;">
<!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{Auth::user()->profile_image}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

                <p class="text-muted text-center">Age:{{$Donor->d_age}}</p>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>NIC No</b> <a class="float-right">{{$Donor->nic}}</a>
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
              <div class="card-footer">
                <div class="row">
                     <a href="{{route('profiles.edit',$Donor->id)}}" class="float-right" style="font-size:1.3rem"> <i class="fa fa-edit"></i> </a>
                     {!! Form::open(['method' => 'DELETE','route' => ['Donors.destroy', $Donor->id],'style'=>'display:inline']) !!}
                         <button type="submit" name="button" style="background:none !important;border:none !important;font-size:1.3rem" class="text-danger"> <i class="fa fa-trash"></i> </button>
                     {!! Form::close() !!}
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
</div>
@endsection
