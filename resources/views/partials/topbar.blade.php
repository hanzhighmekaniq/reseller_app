<nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            @if (Auth::check())
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-white small">{{ Auth::user()->name }}</span>
                    <img class="img-profile rounded-circle" src="{{ Storage::url(Auth::user()->foto) }}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item text-primary" href="{{ route('profile.show') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-primary"></i>
                        Profil
                    </a>
                    <a class="dropdown-item text-primary" href="{{ route('profile.edit') }}">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-primary"></i>
                        Edit Profil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-primary"></i>
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @else
                <a class="nav-link" href="{{ route('login') }}">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Login</span>
                </a>
            @endif
        </li>

    </ul>

</nav>
