<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="pt-3 navbar-nav bg-gradient-custom sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="mb-2 sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('home') ?>">
            <div class="sidebar-brand-icon">
                <img src="<?= base_url('assets/img/Logo.png') ?>" width="75px" alt="">
            </div>
            <div class="sidebar-brand-text mx-3">SMCI</div>
        </a>
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?= $title == 'Home' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('home') ?>">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span></a>
        </li>
        <li class="nav-item <?= $title == 'Event' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('Home/event') ?>">
                <i class="fas fa-fw fa-calendar-alt"></i>
                <span>Event</span></a>
        </li>
        <li class="nav-item <?= $title == 'Gallery' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('Home/gallery') ?>">
                <i class="fas fa-fw fa-images"></i>
                <span>Gallery</span></a>
        </li>
        <li class="nav-item <?= $title == 'Member' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('Home/member') ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Member</span></a>
        </li>


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-user"></i>
                <span>Login</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Login :</h6>
                    <a class="collapse-item" href="<?= site_url('auth/sign_in') ?>">Sign In</a>
                    <a class="collapse-item" href="<?= site_url('auth/register') ?>">Sign Up</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->