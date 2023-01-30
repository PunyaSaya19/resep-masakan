<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">St</a>
        </div>
        <ul class="sidebar-menu">

            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>

                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="<?= base_url() ?>/main/dashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url() ?>/main/create-resep.php">Resep Baru</a>
                    </li>
                </ul>
            </li>

            
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="<?= base_url() ?>/main/logout.php" class="btn btn-danger btn-lg btn-block btn-icon-split" onclick="return confirm('Yakin?')">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </aside>
</div>