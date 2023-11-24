<nav class="main-sidebar ps-menu">
    <div class="sidebar-header">
        <div class="text">ZenifyAcademy</div>
        <div class="close-sidebar action-toggle">
            <i class="ti-close"></i>
        </div>
    </div>
    <div class="sidebar-content">
        <ul>
            <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ url('dashboard') }}" class="link">
                    <i class="ti-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.kelola-program.index') ? 'active' : '' }}">
                <a href="{{ url('admin/kelola-program') }}" class="link">
                    <i class="ti-file"></i>
                    <span>Kelola Program</span>
                </a>
            </li>
            <li class="menu-category">
                <span class="text-uppercase">Kelola</span>
            </li>
            <li class="{{ request()->routeIs('element-*') ? 'active open' : '' }}">
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-desktop"></i>
                    <span>Kelola User</span>
                </a>
                <ul class="sub-menu {{ request()->routeIs('element-*') ? 'expand' : '' }}">
                    <li><a href="#" class="link"><span>Kelola Instruktur</span></a></li>
                    <li><a href="#" class="link"><span>Kelola Siswa</span></a></li>
                </ul>
            </li>
            <li class="">
                <a href="#" class="link">
                    <i class="ti-bar-chart"></i>
                    <span>Kelola Kursus</span>
                </a>
            </li>
            <li class="{{ request()->is('fullcalendar.html') ? 'active' : '' }}">
                <a href="#" class="link">
                    <i class="ti-calendar"></i>
                    <span>Kelola Jadwal</span>
                </a>
            </li>

            <li class="menu-category">
                <span class="text-uppercase">Laporan</span>
            </li>
            <li>
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-notepad"></i>
                    <span>Laporan</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#" class="link"><span>Laporan Siswa</span></a></li>
                    <li><a href="#" class="link"><span>Laporan Instruktur</span></a></li>
                    <li><a href="#" class="link"><span>Laporan Transaksi</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
