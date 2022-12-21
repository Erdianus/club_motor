<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <div class="title-company">
            <div class="text-center py-4">
                <h2>Scooter Motor Club Indonesia</h2>
            </div>
        </div>
        <!-- Topbar -->

        <nav class="navbar navbar-expand navbar-light bg-gradient-danger topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <li <?= $title == "Home" ? "" : "hidden"; ?> class="nav-item">
                    <a class="nav-link" href="#profile">
                        <span>Profile</span></a>
                </li>
                <li <?= $title == "Home" ? "" : "hidden"; ?> class="nav-item">
                    <a class="nav-link" href="#visi-misi">
                        <span>Visi dan Misi</span></a>
                </li>
                <li <?= $title == "Home" ? "" : "hidden"; ?> class="nav-item">
                    <a class="nav-link" href="#merchandise">
                        <span>Merchandise</span></a>
                </li>
                <li <?= $title == "Home" ? "" : "hidden"; ?> class="nav-item">
                    <a class="nav-link" href="#kontak">
                        <span>Kontak Kami</span></a>
                </li>
                <li <?= $title == "Home" ? "" : "hidden"; ?> class="nav-item">
                    <a class="nav-link" href="#about-us">
                        <span>About Us</span></a>
                </li>
                <li <?= $title != "Gallery" ? "hidden" : ""; ?> class="nav-item">
                    <a class="nav-link" href="#gallery">
                        <span>Gallery</span></a>
                </li>
                <li <?= $title != "Member" ? "hidden" : ""; ?> class="nav-item">
                    <a class="nav-link" href="#member">
                        <span>Member</span></a>
                </li>
                <li <?= $title != "Event" ? "hidden" : ""; ?> class="nav-item">
                    <a class="nav-link" href="#member">
                        <span>Event</span></a>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->