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
                  <h1 class="mb-5">Welcome to save a life online blood bank system</h1>
                  <br>
                  <h3>Be a blood donor all it cost is a little love</h3>
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

  <div class="how-section1" style="padding-top:250px;background-color:#f7f7f7;color:white;">
                      <div class="row">
                          <div class="col-md-6 how-img">
                              <img src="https://image.ibb.co/dDW27U/Work_Section2_freelance_img1.png" class="rounded-circle img-fluid" alt=""/>
                          </div>
                          <div class="col-md-6">
                              <h4 style="color:black !important">Find rewarding projects</h4>
                                          <h4 class="subheading" style="color:#01a0e4 !important">GetLance is a great place to find more clients, and to run and grow your own freelance business.</h4>
                          <p class="text-muted" style="color:#14213D !important">Freedom to work on ideal projects. On GetLance, you run your own business and choose your own clients and projects. Just complete your profile and we’ll highlight ideal jobs. Also search projects, and respond to client invitations.
                                              Wide variety and high pay. Clients are now posting jobs in hundreds of skill categories, paying top price for great work.
                                              More and more success. The greater the success you have on projects, the more likely you are to get hired by clients that use GetLance.</p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <h4 style="color:black !important">Get hired quickly</h4>
                                          <h4 class="subheading" style="color:#01a0e4 !important">GetLance makes it easy to connect with clients and begin doing great work.</h4>
                                          <p class="text-muted" style="color:#14213D !important">Streamlined hiring. GetLance’s sophisticated algorithms highlight projects you’re a great fit for.
                                              Top Rated and Rising Talent programs. Enjoy higher visibility with the added status of prestigious programs.
                                              Do substantial work with top clients. GetLance pricing encourages freelancers to use GetLance for repeat relationships with their clients.</p>
                          </div>
                          <div class="col-md-6 how-img">
                              <img src="https://image.ibb.co/cHgKnU/Work_Section2_freelance_img2.png" class="rounded-circle img-fluid" alt=""/>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 how-img">
                               <img src="https://image.ibb.co/ctSLu9/Work_Section2_freelance_img3.png" class="rounded-circle img-fluid" alt=""/>
                          </div>
                          <div class="col-md-6">
                              <h4 style="color:black !important">Work efficiently, effectively.</h4>
                                          <h4 class="subheading" style="color:#01a0e4 !important">With GetLance, you have the freedom and flexibility to control when, where, and how you work. Each project includes an online workspace shared by you and your client, allowing you to:</h4>
                                          <p class="text-muted" style="color:#14213D !important">Send and receive files. Deliver digital assets in a secure environment.
                                              Share feedback in real time. Use GetLance Messages to communicate via text, chat, or video.
                                              Use our mobile app. Many features can be accessed on your mobile phone when on the go.</p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <h4 style="color:black !important">Get paid on time</h4>
                                          <h4 class="subheading" style="color:#01a0e4 !important">All projects include GetLance Payment Protection — helping ensure that you get paid for all work successfully completed through the freelancing website.</h4>
                                          <p class="text-muted" style="color:#14213D !important">All invoices and payments happen through GetLance. Count on a simple and streamlined process.
                                              Hourly and fixed-price projects. For hourly work, submit timesheets through GetLance. For fixed-price jobs, set milestones and funds are released via GetLance escrow features.
                                              Multiple payment options. Choose a payment method that works best for you, from direct deposit or PayPal to wire transfer and more.</p>
                          </div>
                          <div class="col-md-6 how-img">
                              <img src="https://image.ibb.co/gQ9iE9/Work_Section2_freelance_img4.png" class="rounded-circle img-fluid" alt=""/>
                          </div>
                      </div>
                  </div>
<style>
.how-section1{
    margin-top:-15%;
    padding: 10%;
}
.how-section1 h4{
    color: #ffa500;
    font-weight: bold;
    font-size: 30px;
}
.how-section1 .subheading{
    color: #3931af;
    font-size: 20px;
}
.how-section1 .row
{
    margin-top: 10%;
}
.how-img
{
    text-align: center;
}
.how-img img{
    width: 40%;
}
</style>
@endsection
