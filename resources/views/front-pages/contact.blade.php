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
                  <h1 class="mb-5">Contact Us</h1>
                  <br>
                  <h3>We are forever thankful for our users for pushing us to be the best.</h3>
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
   background: url('img/ipad.png') no-repeat fixed center center;
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
    <h2 style="color:#A73C46" class="text-center">Feel free to express your inquiries</h2>
    <br>
    <div class="container" style="background:#fff;padding:40px">
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
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Message:</strong>
                <textarea name="name" rows="8" cols="80" class="form-control"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
    </div>
  </div>

  <div class="container-fluid" style="background-color:#fff;padding:4%">
    <h2 style="color:#A73C46" class="text-center">Find us on google map</h2>
    <br>
    <div class="container" style="background:#fff;padding:40px">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15729.140671887633!2d79.9528444!3d9.7418944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1586281369692!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
@endsection
