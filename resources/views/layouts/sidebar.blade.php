<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{url('assets/dist/img/download.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/BukuTamu" class="nav-link {{ Request::is('BukuTamu*') ? 'active' : '' }}">
                        <i class="fa fa-home nav-icon"></i>
                        <p>Buku Tamu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/DataPegawai" class="nav-link {{ Request::is('DataPegawai*') ? 'active' : '' }}">
                        <i class="fa fa-address-book nav-icon"></i>
                        <p>Data Pegawai</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>