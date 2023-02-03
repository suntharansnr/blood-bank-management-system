<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      @if (Auth::user()->profile_image == null)
        <img src="{{asset('/Backend/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
      @else
        <img src="{{asset(Auth::user()->profile_image)}}" class="img-circle elevation-2" alt="User Image">
      @endif
    </div>
    <div class="info">
      <a href="#" class="d-block">{{Auth::user()->name}}</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{route("dashboard")}}" class="{{request()->routeIs('dashboard') ? 'active nav-link' : 'nav-link' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            DASHBOARD
          </p>
        </a>
      </li>
      @can('user-list')
      <li class="nav-item">
        <a href="{{route("users.index")}}" class="{{request()->routeIs('users.*') ? 'active nav-link' : 'nav-link' }}">
          <i class="nav-icon fas fa-users"></i>
          <p>
            USERS
          </p>
        </a>
      </li>
      @endcan
      @can('user-list')
      <li class="nav-item">
        <a href="{{route("roles.index")}}" class="{{request()->routeIs('roles.*') ? 'active nav-link' : 'nav-link' }}">
          <i class="nav-icon fas fa-user-tag"></i>
          <p>
            ROLES
          </p>
        </a>
      </li>
      @endcan
      @can('user-list')
      <li class="nav-item">
        <a href="{{route("hospitals.index")}}" class="{{request()->routeIs('hospitals.*') ? 'active nav-link' : 'nav-link' }}">
          <i class="nav-icon fas fa-hospital"></i>
          <p>
            HOSPITALS
          </p>
        </a>
      </li>
      @endcan
      @can('user-list')
      <li class="nav-item">
        <a href="{{route("donors.index")}}" class="{{request()->routeIs('donors.*') ? 'active nav-link' : 'nav-link' }}">
          <i class="nav-icon fas fa-ambulance"></i>
          <p>
            DONORS
          </p>
        </a>
      </li>
      @endcan
      @can('user-list')
      <li class="nav-item">
        <a href="{{route("requests.index")}}" class="{{request()->routeIs('requests.*') ? 'active nav-link' : 'nav-link' }}">
          <i class="nav-icon fas fa-clinic-medical"></i>
          <p>
            REQUESTS
          </p>
        </a>
      </li>
      @endcan
       @can('user-list')
       <li class="nav-item">
         <a href="{{route("donations.index")}}" class="{{request()->routeIs('donations.*') ? 'active nav-link' : 'nav-link' }}">
           <i class="nav-icon fas fa-hand-holding-medical"></i>
           <p>
             DONATIONS
           </p>
         </a>
       </li>
       @endcan
       @can('user-list')
       <li class="nav-item">
         <a href="{{route("withdrawals.index")}}" class="{{request()->routeIs('withdrawals.*') ? 'active nav-link' : 'nav-link' }}">
           <i class="nav-icon fas fa-trash-restore-alt"></i>
           <p>
             WITHDRAWALS
           </p>
         </a>
       </li>
       @endcan
       @can('user-list')
       <li class="nav-item">
         <a href="{{route("stocks.index")}}" class="{{request()->routeIs('stocks.*') ? 'active nav-link' : 'nav-link' }}">
           <i class="nav-icon fas fa-warehouse"></i>
           <p>
             STOCK
           </p>
         </a>
       </li>
       @endcan
       <li class="nav-item">
         <a href="{{route("profiles.show",Auth::user()->id)}}" class="{{request()->routeIs('profiles.show') ? 'active nav-link' : 'nav-link' }}">
           <i class="nav-icon fas fa-user"></i>
           <p>
             PROFILE
           </p>
         </a>
       </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
