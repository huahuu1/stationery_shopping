<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home-page') }}" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i style="font-size: 20px; font-weight: bold;" class="far fa-user"></i>
          <span>{{Auth::user()->name}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{route('users.index')}}" class="dropdown-item">
            <div class="media">
                <div class="icon">
                    <i class="far fa-id-card"></i>
                </div>
                <div class="text">
                    <p class="text-sm">List of User</p>
                </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('users.create')}}" class="dropdown-item">
            <div class="media">
                <div class="icon">
                    <i class="fas fa-plus-square"></i>
                </div>
                <div class="text">
                    <p class="text-sm">Create New User</p>
                </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>

          <div class="dropdown-divider"></div>
            <a class="dropdown-item dropdown-footer" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: block;">
                @csrf
            </form>
        </div>
      </li>
    </ul>
  </nav>