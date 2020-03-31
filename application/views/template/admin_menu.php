<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-university"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Bank Unisritama</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <?php if ($user['role_id'] == 1) : ?>
        <!-- Heading -->
        <div class="sidebar-heading">
            Admin
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="fas fa-fw fa-chart-bar"></i>
                <span>Dashboard</span></a>
        </li>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#masterData" aria-expanded="true" aria-controls="masterData">
                <i class="fas fa-fw fa-tv"></i>
                <span>Data Master</span>
            </a>
            <div id="masterData" class="collapse" aria-labelledby="masterData" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Components</h6>
                    <a class="collapse-item" href="<?= base_url('admin/kategori') ?>">Kategori</a>
                    <a class="collapse-item" href="<?= base_url('admin/type') ?>">Produk</a>
                    <a class="collapse-item" href="<?= base_url('admin/lokasi') ?>">Tentang</a>
                    <a class="collapse-item" href="<?= base_url('admin/users') ?>">Kantor</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

    <?php endif; ?>


    <!-- Heading -->
    <div class="sidebar-heading">
        End-User
    </div>


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <?php if ($user['role_id'] == 1) : ?>
            <a class="nav-link" href="<?= base_url('admin/in_mail'); ?>">
            <?php else : ?>
                <a class="nav-link" href="<?= base_url('user/in_mail'); ?>">
                <?php endif; ?>
                <i class="fas fa-fw fa-envelope-open"></i>
                <span>Surat Masuk</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Surat Keluar</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-envelope-open-text"></i>
            <span>Surat Internal</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        Utility
    </div>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>