<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon ">
            <img src="{{ asset('sb-admin-2/img/SELLER_new.png') }}" alt="Seller Logo" class="img-fluid"
                style="max-height: 2rem;">
        </div>
        <div class="sidebar-brand-text mx-3">Seller.in</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link"
            @if (Auth::user()->role == 'pemilik') href="{{ url('/dashboard/pemilik') }}"
           @elseif(Auth::user()->role == 'bos') href="{{ url('/dashboard/admin') }}"
           @elseif(Auth::user()->role == 'anggota') href="{{ url('/dashboard/anggota') }}" @endif>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    {{-- SIDEBAR PEMILIK --}}
    <!-- Menu berdasarkan peran pengguna -->
    @if (Auth::user()->role == 'pemilik')
        <!-- Heading -->
        <div class="sidebar-heading">
            Pengelolaan
        </div>

        <!-- Nav Item - Admin Management -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admins') }}">
                <i class="fas fa-fw fa-user-cog"></i>
                <span>Daftar Admin</span>
            </a>
        </li>

        <!-- Nav Item - Product Management -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/products') }}">
                <i class="fas fa-fw fa-box"></i>
                <span>Produk</span>
            </a>
        </li>

        <!-- Nav Item - Kelola Penjualan -->
        <li class="nav-item">
            <a class="nav-link" href="#orderSubmenu" data-toggle="collapse" aria-expanded="false"
                class="dropdown-toggle">
                <i class="fas fa-fw fa-chart-bar"></i>
                <span>Penjualan</span>
            </a>
            <ul class="collapse list-unstyled" id="orderSubmenu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('orders/create') }}">Drop Penjualan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('kelolapenjualan') }}">Data Penjualan</a>
                </li>
            </ul>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    @endif

    {{-- SIDEBAR ADMIN --}}
    @if (Auth::user()->role == 'bos')
        <!-- Heading -->
        <div class="sidebar-heading">
            Admin Tools
        </div>

        <!-- Nav Item - User Management -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/anggota') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Manajemen Anggota</span>
            </a>
        </li>
        <!-- Nav Item - Kelola Penjualan -->
        <li class="nav-item">
            <a class="nav-link" href="#orderSubmenuAdmin" data-toggle="collapse" aria-expanded="false"
                class="dropdown-toggle">
                <i class="fas fa-fw fa-shopping-cart"></i>
                <span>Kelola Penjualan</span>
            </a>
            <ul class="collapse list-unstyled" id="orderSubmenuAdmin">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/datapenjualanadmin') }}">Data Penjualan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/buatlaporanadmin') }}">Laporkan Penjualan</a>
                </li>
            </ul>
        </li>
        <!-- Nav Item - Report Management -->
        <li class="nav-item">
            <a class="nav-link" href="#reportSubmenuAdmin" data-toggle="collapse" aria-expanded="false"
                class="dropdown-toggle">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Manajemen Laporan</span>
            </a>
            <ul class="collapse list-unstyled" id="reportSubmenuAdmin">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/buatlaporanadmin') }}">Buat Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('datapenjualanadmin') }}">Laporan Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('datapenjualananggotaadmin') }}">Laporan Anggota</a>
                </li>
            </ul>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    @endif


    {{-- SIDEBAR ANGGOTA --}}
    @if (Auth::user()->role == 'anggota')
        <!-- Heading -->
        <div class="sidebar-heading">
            User Area
        </div>

        <!-- Nav Item - Orders -->
        <li class="nav-item">
            <a class="nav-link" href="#orderSubmenuAnggota" data-toggle="collapse" aria-expanded="false"
                class="dropdown-toggle">
                <i class="fas fa-fw fa-shopping-cart"></i>
                <span>Kelola Penjualan</span>
            </a>
            <ul class="collapse list-unstyled" id="orderSubmenuAnggota">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/datapenjualananggota') }}">Data Penjualan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/buatlaporananggota') }}">Laporkan Penjualan</a>
                </li>
            </ul>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
    @endif

    {{-- SIDEBAR SEMUA --}}
    <!-- Nav Item - Profile -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/profile') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil Saya</span>
        </a>
    </li>

    <!-- Nav Item - Report -->
    <li class="nav-item">
        <a class="nav-link" href="#reportSubmenu" data-toggle="collapse" aria-expanded="false"
            class="dropdown-toggle">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Laporan</span>
        </a>
        <ul class="collapse list-unstyled" id="reportSubmenu">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/reports/today') }}">Laporan Hari Ini</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/reports/month') }}">Laporan Bulan Ini</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/reports/year') }}">Laporan Tahun Ini</a>
            </li>
        </ul>
    </li>

    <!-- Nav Item - Top Performance -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/topperformance') }}">
            <i class="fas fa-fw fa-star"></i>
            <span>Kinerja Terbaik</span>
        </a>
    </li>

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            <input type="hidden" name="redirect_to" value="/login">
        </form>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
