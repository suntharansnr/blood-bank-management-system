<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background:#111">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/"><img width="25%" src="img/1.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/users"><b>About</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/Hospitals"><b>Contact</b></a>
            </li>
            

            @guest
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="{{ route('login') }}"><b>{{ __('login') }}</b></a>
              </li>
              <li class="nav-item">
                  @if (Route::has('register'))
                    <a class="nav-link js-scroll-trigger" href="{{ route('register') }}"><b>{{ __('Register') }} </b></a>
                  @endif
              </li>
            @else
               <li class="nav-item">
                 <a id="nav-link js-scroll-trigger" class="nav-link js-scroll-trigger" href="/home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <!--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">-->
                </li>
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          {{ __('logout') }}
                  </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
                  <!--</div>-->
                </li>
            @endguest


          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

     <!-- Contact Section -->

    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
