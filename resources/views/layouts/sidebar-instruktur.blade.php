<nav class="main-sidebar ps-menu">
    <div class="sidebar-header">
        <div class="text">ZenifyAcademy</div>
        <div class="close-sidebar action-toggle">
            <i class="ti-close"></i>
        </div>
    </div>
    <div class="sidebar-content">
        <ul>
            <li class="{{ request()->routeIs('instruktur.dashboard') ? 'active' : '' }}">
                <a href="{{ url('instruktur/dashboard') }}" class="link">
                    <i class="ti-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('instruktur.kelas-saya') ? 'active' : '' }}">
                <a href="{{ url('instruktur/kelas-saya') }}" class="link">
                    <i class="ti-home"></i>
                    <span>Kelas Saya</span>
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
                    <li><a href="element-accordion.html" class="link"><span>Kelola Siswa</span></a></li>
                </ul>
            </li>
            <li class="">
                <a href="charts.html" class="link">
                    <i class="ti-bar-chart"></i>
                    <span>Siswa Saya</span>
                </a>
            </li>
            <li class="{{ request()->is('fullcalendar.html') ? 'active' : '' }}">
                <a href="fullcalendar.html" class="link">
                    <i class="ti-calendar"></i>
                    <span>Jadwal Saya</span>
                </a>
            </li>
            <li class="{{ request()->is('fullcalendar.html') ? 'active' : '' }}">
                <a href="fullcalendar.html" class="link">
                    <i class="ti-pencil-alt"></i>
                    <span>Buat Tugas</span>
                </a>
            </li>
            <li class="{{ request()->is('fullcalendar.html') ? 'active' : '' }}">
                <a href="fullcalendar.html" class="link">
                    <i class="ti-task"></i>
                    <span>Pengumuman</span>
                </a>
            </li>
            <li>
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-notepad"></i>
                    <span>Laporan</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="error-404.html" target="_blank" class="link"><span>Laporan Siswa</span></a></li>
                    <li><a href="error-403.html" target="_blank" class="link"><span>Laporan Kelas</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
