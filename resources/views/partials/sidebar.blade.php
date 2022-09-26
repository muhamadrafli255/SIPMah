        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="/img/logo/logo2.png">
                </div>
                <div class="sidebar-brand-text mx-3">{{ env('APP_NAME') }}</div>
            </a>
            <hr class="sidebar-divider my-0">
            @if (Request::is('dashboard3*'))
            <li class="nav-item {{ Request::is('dashboard3/home*') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard3/home">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Beranda</span></a>
            </li>
            @else
            <li class="nav-item {{ Request::is('dashboard   ') ? 'active' : '' }}">
                <a class="nav-link" href="{{ Request::is('dashboard2*') ? '/dashboard2' : 'dashboard' }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dasbor</span></a>
            </li>
            @endif
            @if (Request::is('dashboard3*'))
                
            @else
            <li class="nav-item {{ Request::is('members*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ Request::is('dashboard2*') ? '/dashboard2/members' : 'members' }}">
                    <i class="fa-solid fa-users"></i>
                    <span>Anggota</span>
                </a>
            </li>
            @endif
            @if (Request::is('dashboard2*') || Request::is('dashboard3*'))

            @else
            <li class="nav-item {{ Request::is('officers*') ? 'active' : '' }}">
                <a class="nav-link" href="/officers">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Petugas</span>
                </a>
            </li>
            @endif
            <li class="nav-item {{ Request::is('racks*') || Request::is('dashboard3/racks*') ? 'active' : '' }}">
                @if (Request::is('dashboard3*'))
                <a class="nav-link" href="/dashboard3/racks">
                @else
                <a class="nav-link" href="{{ Request::is('dashboard2*') ? '/dashboard2/racks' : '/dashboard' }}">
                @endif
                    <i class="fa-solid fa-table-list"></i>
                    <span>Rak</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
                @if (Request::is('dashboard3*'))
                <a class="nav-link" href="/dashboard3/categories">
                @else
                <a class="nav-link" href="{{ Request::is('dashboard2*') ? '/dashboard2/categories' : '/categories' }}">
                @endif
                    <i class="fa-solid fa-tag"></i>
                    <span>Kategori</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('publishers*') ? 'active' : '' }}">
                @if (Request::is('dashboard3*'))
                <a class="nav-link" href="/dashboard3/publishers">
                @else
                <a class="nav-link" href="{{ Request::is('dashboard2*') ? '/dashboard2/publishers' : '/publishers' }}">
                @endif
                    <i class="fa-solid fa-building"></i>
                    <span>Penerbit</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('books*') || Request::is('/dashboard3/books*') ? 'active' : '' }}">
                @if (Request::is('dashboard3*'))
                <a class="nav-link" href="/dashboard3/books">
                @else
                <a class="nav-link" href="{{ Request::is('dashboard2*') ? '/dashboard2/books/' : '/books' }}">
                @endif
                    <i class="fa-solid fa-book"></i>
                    <span>Buku</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('loans*') ? 'active' : '' }}">
                @if (Request::is('dashboard3*'))
                <a class="nav-link" href="/dashboard3/loans">
                @else
                <a class="nav-link" href="{{ Request::is('dashboard2*') ? '/dashboard2/loans' : '/loans' }}">
                @endif
                    <i class="fa-solid fa-arrow-up-from-bracket"></i>
                    <span>Peminjaman</span>
                </a>
            </li>
            @if (Request::is('dashboard3*'))
            
            @elseif (Request::is('dashboard*', 'members*', 'officers*', 'racks*', 'categories*', 'publishers*', 'books*', 'report*', 'loans*') || Request::is('dashboard2'))
            <li class="nav-item {{ Request::is('report*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ Request::is('dashboard2*') ? '/dashboard2/report' : '/report' }}">
                    <i class="fa-solid fa-file"></i>
                    <span>Laporan</span>
                </a>
            </li>
            
            @endif
        </ul>
        <!-- Sidebar -->