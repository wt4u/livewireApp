<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{ asset('') }}dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' :"" }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                          Kontrol Paneli
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Kullanıcı Yönetimi
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->is('admin/roles') ? 'active' :"" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rol İşlemleri</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link {{ request()->is('admin/permissions') ? 'active' :"" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Yetki İşlemleri</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.users')}}" class="nav-link {{ request()->is('admin/users') ? 'active' :"" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Üye İşlemleri</p>
                            </a>
                        </li>


                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
