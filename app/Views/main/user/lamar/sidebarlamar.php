        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <i class="fas fa-thin fa-user-tie"></i>
                <div class="sidebar-brand-text mx-1">Rekrutmen</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Rekrutmen
            </div>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="<?= base_url('Lamaran') ?>" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-user-plus"></i>
                    <span>Lamar Pekerjaan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('status') ?>" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-user-plus"></i>
                    <span>Status Lamaran</span>
                </a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout') ?>">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span></a>
            </li>
        </ul>