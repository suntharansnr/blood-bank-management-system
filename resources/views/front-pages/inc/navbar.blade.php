<header>
  <nav class="shadow navbar navbar-expand-md navbar-white fixed-top" id="banner">

<!-- Brand -->
<a class="navbar-brand" href="#"><img src="{{asset('/img/1.png')}}" alt="" class="img-fluid"></a>

<!-- Toggler/collapsibe Button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Navbar links -->
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav ml-auto">
  <li class="nav-item">
    <a class="{{request()->routeIs('home') ? 'active nav-link' : 'nav-link' }}" href="{{route('home')}}"><i class="fas fa-home"></i> HOME</a>
  </li>
  <li class="nav-item">
    <a class="{{request()->routeIs('about') ? 'active nav-link' : 'nav-link' }}" href="{{route('about')}}"><i class="fas fa-info-circle"></i> ABOUT US</a>
  </li>
  <li class="nav-item">
    <a class="{{request()->routeIs('help') ? 'active nav-link' : 'nav-link' }}" href="{{route('help')}}"><i class="fas fa-question"></i> Help</a>
  </li>
  <li class="nav-item">
    <a class="{{request()->routeIs('donors') ? 'active nav-link' : 'nav-link' }}" href="{{route('donors')}}"><i class="fas fa-hand-holding-usd"></i> DONORS</a>
  </li>
  <li class="nav-item">
    <a class="{{request()->routeIs('contact') ? 'active nav-link' : 'nav-link' }}" href="{{route('contact')}}"><i class="fas fa-phone"></i> CONTACT US</a>
  </li>
  @guest
      <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> {{ __('LOGIN') }}</a>
      </li>
      @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
          </li>
      @endif
  @else
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
  @endguest

</ul>
</div>
</nav>
    </header>
