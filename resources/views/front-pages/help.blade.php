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
                  <h1 class="mb-5">Help</h1>
                  <br>
                  <h3>Frequently ask questions and answers are here.</h3>
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
   background: url('img/bg-masthead.jpg') no-repeat fixed center center;
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

  <div class="container-fluid" style="background-color:#F3F3F3;padding:4%"  id="questions">
        <h2 style="color:#A73C46" class="text-center">Frequently ask questions and answers are here.</h2>
        <br>
        <div class="container">
            <div class="row">
                            <div class="col-md-12">
                                @foreach ($faqs as $faq)
                                   <div class="accordion" id="accordionExample{{$faq->id}}" style="background-color:#fff !important;">
                                    <div class="card" style="border-top:1px solid #bacad2;border-left:none;border-right:none;">
                                      <div class="card-header text-left" id="heading{{$faq->id}}" style="border-bottom:none;background-color:#fff !important;color:#01a0e4">
                                        <i class="fa fa-plus"></i>  <a style="font-size:1.05rem;color:#01a0e4 !important;font-weight:700"  href="" data-toggle="collapse" data-target="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}">
                                              {{$faq->question}}
                                          </a>
                                      </div>
                                      <div id="collapse{{$faq->id}}" class="collapse collapsed" aria-labelledby="heading{{$faq->id}}" data-parent="#accordionExample{{$faq->id}}">
                                        <div class="card-body text-left" style="font-size:1.025rem;padding-top:0px;">
                                          {!! $faq->answer !!}
                                        </div>
                                      </div>
                                    </div>
                                   </div>
                                @endforeach
                            </div>
            </div>
        </div>
</div>
@endsection
