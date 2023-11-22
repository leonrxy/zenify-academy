<nav class="main-sidebar ps-menu">
    <div class="sidebar-header">
        <div class="text">ZenifyAcademy</div>
        <div class="close-sidebar action-toggle">
            <i class="ti-close"></i>
        </div>
    </div>
    <div class="sidebar-content">
        <ul>
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ url('dashboard') }}" class="link">
                    <i class="ti-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.kelola-program') ? 'active' : '' }}">
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
                    <li class=""><a href="" class="link"><span>Kelola Instruktur</span></a></li>
                    <li><a href="element-accordion.html" class="link"><span>Kelola Siswa</span></a></li>
                </ul>
            </li>
            <li class="">
                <a href="charts.html" class="link">
                    <i class="ti-bar-chart"></i>
                    <span>Kelola Kursus</span>
                </a>
            </li>
            <li class="{{ request()->is('fullcalendar.html') ? 'active' : '' }}">
                <a href="fullcalendar.html" class="link">
                    <i class="ti-calendar"></i>
                    <span>Kelola Jadwal</span>
                </a>
            </li>

            <li class="menu-category">
                <span class="text-uppercase">Utilities</span>
            </li>
            <li>
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-notepad"></i>
                    <span>Laporan</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="error-404.html" target="_blank" class="link"><span>Laporan</span></a></li>
                    <li><a href="error-403.html" target="_blank" class="link"><span>Error 403</span></a></li>
                    <li><a href="error-500.html" target="_blank" class="link"><span>Error 500</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
