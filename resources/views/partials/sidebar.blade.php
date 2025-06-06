<link rel="stylesheet" href="/css/style.css">

<ul class="navbar-nav bg-light.bg-gradient sidebar sidebar-secondary accordion shadow-lg border-end" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon ">
            <img src="{{ asset('sb-admin-2/img/SELLER_new.png') }}" alt="Seller Logo" class="img-fluid"
                style="max-height: 3rem;">
        </div>
        <div class="sidebar-brand-text mx-2 text-primary">Seller.in</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider border-primary my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link"
            @if (Auth::user()->role == 'pemilik') href="{{ url('/dashboard/pemilik') }}"
           @elseif(Auth::user()->role == 'bos') href="{{ url('/dashboard/Koordinator') }}"
           @elseif(Auth::user()->role == 'anggota') href="{{ url('/dashboard/anggota') }}" @endif>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider border-primary">


    {{-- SIDEBAR PEMILIK --}}
    @if (Auth::user()->role == 'pemilik')
        <div class="sidebar-heading text-primary">Pengelolaan</div>

        <!-- Nav Item - Koordinator Management -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admins') }}">
                <i class="fas fa-fw fa-user-cog"></i>

                <span>Daftar Koordinator</span>
            </a>
        </li>
        <!-- Nav Item - User Management -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/anggota-admin') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Daftar Reseller</span>
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
                    <a class="nav-link" href="{{ route('orders.create') }}">Barang Keluar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kelolapenjualan') }}">Riwayat Barang Keluar</a>
                </li>
            </ul>
        </li>

        <hr class="sidebar-divider border-primary">
    @endif

    {{-- SIDEBAR Koordinator --}}
    @if (Auth::user()->role == 'bos')
        <div class="sidebar-heading text-primary">Koordinator Tools</div>

        <!-- Nav Item - User Management -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/anggota') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Manajemen Anggota</span>
            </a>
        </li>

        <!-- Nav Item - Kelola Penjualan -->
        <li class="nav-item">
            <a class="nav-link" href="#orderSubmenuKoordinator" data-toggle="collapse" aria-expanded="false"
                class="dropdown-toggle">
                <i class="fas fa-fw fa-shopping-cart"></i>
                <span>Kelola Penjualan</span>
            </a>
            <ul class="collapse list-unstyled" id="orderSubmenuKoordinator">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('orders.createAdmin') }}">Barang Keluar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kelolapenjualanadmin') }}">Riwayat Barang Keluar</a>
                </li>
            </ul>
        </li>

        <!-- Nav Item - Report Management -->
        <li class="nav-item">
            <a class="nav-link" href="#reportSubmenuKoordinator" data-toggle="collapse" aria-expanded="false"
                class="dropdown-toggle">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Manajemen Laporan</span>
            </a>
            <ul class="collapse list-unstyled" id="reportSubmenuKoordinator">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/buatlaporanKoordinator') }}">Buat Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('datapenjualanKoordinator') }}">Laporan Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('datapenjualananggotaKoordinator') }}">Laporan Anggota</a>
                </li>
            </ul>
        </li>

        <hr class="sidebar-divider border-primary">
    @endif

    {{-- SIDEBAR ANGGOTA --}}
    @if (Auth::user()->role == 'anggota')
        <div class="sidebar-heading text-primary">User Area</div>

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
        <hr class="sidebar-divider border-primary">
    @endif

    {{-- SIDEBAR SEMUA --}}
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

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/topperformance') }}">
            <i class="fas fa-fw fa-star"></i>
            <span>Kinerja Terbaik</span>
        </a>
    </li>

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

    <hr class="sidebar-divider border-primary">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle btn-primary border-primary border-0" id="sidebarToggle"></button>
    </div>

</ul>
