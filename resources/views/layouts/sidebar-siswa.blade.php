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
            <li class="{{ request()->routeIs('kelasku') ? 'active' : '' }}">
                <a href="{{url('kelasku')}}" class="link">
                    <i class="ti-id-badge"></i>
                    <span>Kelas Saya</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('jadwal') ? 'active' : '' }}">
                <a href="{{url('jadwal')}}" class="link">
                    <i class="ti-calendar"></i>
                    <span>Jadwal Kelas</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('live-class') ? 'active' : '' }}">
                <a href="{{ url('live-class') }}" class="link">
                    <i class="ti-video-camera"></i>
                    <span>Live Class</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('video-belajar') ? 'active' : '' }}">
                <a href="{{ url('video-belajar') }}" class="link">
                    <i class="ti-video-clapper"></i>
                    <span>Video Belajar</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('tryout') ? 'active' : '' }}">
                <a href="{{ url('tryout') }}" class="link">
                    <i class="ti-marker-alt"></i>
                    <span>Tryout</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('sharing-soal') ? 'active' : '' }}">
                <a href="{{ url('sharing-soal') }}" class="link">
                    <i class="ti-comment-alt"></i>
                    <span>Sharing Soal</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('daftar-program') ? 'active' : '' }}">
                <a href="{{ url('daftar-program') }}" class="link">
                    <i class="ti-comment-alt"></i>
                    <span>Daftar Program</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
