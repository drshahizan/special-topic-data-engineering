<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <button type="button" class="btn header-item noti-icon waves-effect">
                    <a href="dashboard.php" class=" waves-effect">
                        <span key="t-starter-page"><h3 style="color:white">Dashboard</h3></span>
                    </a>
                </button>
            </div>
            <div>
                <button type="button" class="btn header-item noti-icon waves-effect">
                    <a href="raw_data.php" class=" waves-effect">
                        <span key="t-starter-page"><b style="color:white">Raw Data</b></span>
                    </a>
                </button>
            </div>
            <div>
                <button type="button" class="btn header-item noti-icon waves-effect">
                    <a href="processed_data.php" class=" waves-effect">
                        <span key="t-starter-page"><b style="color:white">Processed Data</b></span>
                    </a>
                </button>
            </div>
            <div>
                <button type="button" class="btn header-item noti-icon waves-effect">
                    <a href="indepth-analysis.php" class=" waves-effect">
                        <span key="t-starter-page"><b style="color:white">In-Depth Analysis</b></span>
                    </a>
                </button>
            </div>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-cog bx-spin"></i>
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry"><?php echo ucfirst($_SESSION["username"]); ?></span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item text-danger" href="logout.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout"><?php echo $language["Logout"]; ?></span></a>
                </div>
            </div>

        </div>
    </div>
</header>