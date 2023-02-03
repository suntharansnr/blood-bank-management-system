@extends('layouts.frontend_master')
@section('content')
  <!-- Masthead -->
  <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
          <div class="row">
              <div class="col-xl-9 mx-auto mt-5">
                  <h5></h5>
                  <br>
                  <h1 class="mb-5">Search Donors</h1>
                  <br>
                  <h3>We like your type</h3>
              </div>
              <div class="col-xl-12 mx-auto order-now my-padding">
                  <button type="button" name="button" class="btn btn-info">Read More</button>
              </div>
          </div>
      </div>
  </header>
  <!-- Masthead Finish-->
  <!-- Masthead -->
  <style>
  header.masthead {
   position: relative;
   background-color: #343a40;
   height: 100vh;
   background: url('img/fs.jpg') no-repeat fixed center center;
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;
   padding-top: 8rem;
   padding-bottom: 8rem;
  }

  header.masthead .overlay {
   position: absolute;
   background-color: #212529;
   height: 100%;
   width: 100%;
   top: 0;
   left: 0;
   opacity: .3
  }

  header.masthead h1 {
   font-size: 2rem
  }

  @media (min-width:768px) {
   header.masthead {
       padding-top: 12rem;
       padding-bottom: 12rem
   }
   header.masthead h1 {
       font-size: 4rem;
   }
   header.masthead h3 {
       font-size: 1.5rem;
   }
  }

  .my-padding {
   padding-top: 4rem;
   padding-bottom: 8rem;
  }

  .form-row>.col,
  .form-row>[class*=col-] {
   padding-right: 0;
   padding-left: 0;
  }
  </style>
  <!-- Masthead -->

  <div class="container-fluid" style="background-color:#F3F3F3;padding:4%">
    <h2 style="color:#A73C46" class="text-center">Find your matching blood group</h2>
    <br>
    <div class="row">
      @foreach ($donors as $key => $Donor)
      <div class="col-md-3">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="img-fluid img-circle" src="{{$Donor->user->profile_image}}" alt="User profile picture" style="width:100px;height:100px">
            </div>

            <h3 class="profile-username text-center">{{$Donor->user->name}}</h3>

            <p class="text-muted text-center">Age:{{$Donor->d_age}}</p>
            <ul class="list-group list-group-unbordered mb-3">
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
      </div>
      @endforeach
    </div>
  </div>
@endsection
