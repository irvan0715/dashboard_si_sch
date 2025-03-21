{{-- sidebar --}}
<div class="sidebar" data-background-color="white">
    <div class="sidebar-logo">
        <!-- logo header -->
        <div class="logo-header" data-background-color="white">
            <a href="index.html" class="logo">
                <h1 class="text-secondary">Product</h1>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- end logo header -->
    </div>
    {{-- wrapper --}}
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        {{-- sidebar content --}}
        <div class="sidebar-content">
            {{-- navbar --}}
            <ul class="nav nav-secondary">
                {{-- superadmin || admin || guru --}}
                <li class="nav-item active">
                    <a href="#">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                {{-- global --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#submenu">
                        <i class="fas fa-users"></i>
                        <p>Siswa</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Profile Siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Nilai</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Kehadiran</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- global --}}
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <p>Guru</p>
                    </a>
                </li>
                {{-- global --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#waliSiswa">
                        <i class="fas fa-users"></i>
                        <p>Wali Siswa</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="waliSiswa">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Whatsapp wali murid</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Pesan guru</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- guru --}}
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#evaluasi">
                        <i class="far fa-folder-open"></i>
                        <p>Evaluasi</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="evaluasi">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Jadwal evaluasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Hasil evaluasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Refleksi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#siswa">
                        <i class="fas fa-users"></i>
                        <p>Siswa</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="siswa">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Daftar siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Nilai siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Kehadiran siswa</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- admin --}}
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-users"></i>
                        <p>Daftar guru</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#evaluasiadmin">
                        <i class="far fa-folder-open"></i>
                        <p>Evaluasi</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="evaluasiadmin">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Jadwal evaluasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Observasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Data evaluasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Rubrik</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Umpan balik</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-book-open"></i>
                        <p>Pengembangan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-columns"></i>
                        <p>Manajemen user</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#data">
                        <i class="fas fa-clipboard-list"></i>
                        <p>Data</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="data">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Data nilai</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Data evaluasi guru</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Data rapot</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            {{-- end navbar --}}
        </div>
        {{-- end sidebar content --}}
    </div>
    {{-- end wrapper --}}
</div>
<!-- end sidebar -->
