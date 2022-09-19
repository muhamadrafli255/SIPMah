        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="/img/logo/logo2.png">
                </div>
                <div class="sidebar-brand-text mx-3">{{ env('APP_NAME') }}</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item {{ Request::is('dashboard   ') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dasbor</span></a>
            </li>
            <li class="nav-item {{ Request::is('members*') ? 'active' : '' }}">
                <a class="nav-link" href="/members">
                    <i class="fa-solid fa-users"></i>
                    <span>Anggota</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('officers*') ? 'active' : '' }}">
                <a class="nav-link" href="/officers">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Petugas</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('racks*') ? 'active' : '' }}">
                <a class="nav-link" href="/racks">
                    <i class="fa-solid fa-table-list"></i>
                    <span>Rak</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
                <a class="nav-link" href="/categories">
                    <i class="fa-solid fa-tag"></i>
                    <span>Kategori</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('publishers*') ? 'active' : '' }}">
                <a class="nav-link" href="/publishers">
                    <i class="fa-solid fa-building"></i>
                    <span>Penerbit</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('books*') ? 'active' : '' }}">
                <a class="nav-link" href="/books">
                    <i class="fa-solid fa-book"></i>
                    <span>Buku</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('loans*') ? 'active' : '' }}">
                <a class="nav-link" href="/loans">
                    <i class="fa-solid fa-arrow-up-from-bracket"></i>
                    <span>Peminjaman</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ui-colors.html">
                    <i class="fa-solid fa-file"></i>
                    <span>Laporan</span>
                </a>
            </li>
        </ul>
        <!-- Sidebar -->