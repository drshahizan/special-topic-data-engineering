<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>

                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-light.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="19">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="<?php echo $language["Search"]; ?>">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>

            <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    <span key="t-megamenu"><?php echo $language["Mega_Menu"]; ?></span>
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0" key="t-applications"><?php echo $language["Applications"]; ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);" key="t-ecommerce"><?php echo $language["Ecommerce"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-calendar"><?php echo $language["Calendars"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-email"><?php echo $language["Email"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-projects"><?php echo $language["Projects"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-tasks"><?php echo $language["Tasks"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-contacts"><?php echo $language["Contacts"]; ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0" key="t-extra-pages"><?php echo $language["Extra_Pages"]; ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);" key="t-light-sidebar"><?php echo $language["Light_Sidebar"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-compact-sidebar"><?php echo $language["Compact_Sidebar"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-horizontal"><?php echo $language["Horizontal_layout"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-maintenance"><?php echo $language["Maintenance"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-coming-soon"><?php echo $language["Coming_Soon"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-timeline"><?php echo $language["Timeline"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-faqs"><?php echo $language["FAQs"]; ?></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="font-size-14 mt-0" key="t-ui-components"><?php echo $language["UI_Components"]; ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);" key="t-lightbox"><?php echo $language["Lightbox"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-range-slider"><?php echo $language["Range_Slider"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-sweet-alert"><?php echo $language["Sweet_Alert"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-rating"><?php echo $language["Rating"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-forms"><?php echo $language["Forms"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-tables"><?php echo $language["Tables"]; ?></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-charts"><?php echo $language["Charts"]; ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-5">
                                    <div>
                                        <img src="assets/images/megamenu-img.png" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php if ($lang == 'en') { ?>
                        <img src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                    <?php } ?>
                    <?php if ($lang == 'es') { ?>
                        <img src="assets/images/flags/spain.jpg" alt="Header Language" height="16">
                    <?php } ?>
                    <?php if ($lang == 'de') { ?>
                        <img src="assets/images/flags/germany.jpg" alt="Header Language" height="16">
                    <?php } ?>
                    <?php if ($lang == 'it') { ?>
                        <img src="assets/images/flags/italy.jpg" alt="Header Language" height="16">
                    <?php } ?>
                    <?php if ($lang == 'ru') { ?>
                        <img src="assets/images/flags/russia.jpg" alt="Header Language" height="16">
                    <?php } ?>
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="?lang=en" class="dropdown-item notify-item language" data-lang="en">
                        <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                    </a>
                    <!-- item-->
                    <a href="?lang=es" class="dropdown-item notify-item language" data-lang="sp">
                        <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="?lang=de" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="?lang=it" class="dropdown-item notify-item language" data-lang="it">
                        <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="?lang=ru" class="dropdown-item notify-item language" data-lang="ru">
                        <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-customize"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="px-lg-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/github.png" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/slack.png" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0" key="t-notifications"> <?php echo $language["Notifications"]; ?> </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small" key="t-view-all"> <?php echo $language["View_All"]; ?></a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1" key="t-your-order"><?php echo $language["Your_order_is_placed"]; ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer"><?php echo $language["languages_grammar"]; ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago"><?php echo $language["3_min_ago"]; ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1">James Lemire</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-simplified"><?php echo $language["simplified_English"]; ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago"><?php echo $language["1_hours_ago"]; ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1" key="t-shipped"><?php echo $language["Your_item_is_shipped"]; ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer"><?php echo $language["several_grammar"]; ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago"><?php echo $language["3_min_ago"]; ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-occidental"><?php echo $language["Cambridge_occidental"]; ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago"><?php echo $language["1_hours_ago"]; ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more"><?php echo $language["View_More"]; ?></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry"><?php echo ucfirst($_SESSION["username"]); ?></span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile"><?php echo $language["Profile"]; ?></span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet"><?php echo $language["My_Wallet"]; ?></span></a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings"><?php echo $language["Settings"]; ?></span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen"><?php echo $language["Lock_screen"]; ?></span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="logout.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout"><?php echo $language["Logout"]; ?></span></a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="bx bx-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu"><?php echo $language["Menu"]; ?></li>

                <li>
                    <a href="index.php" class=" waves-effect">
                        <i class="bx bx-home-circle"></i>
                         <!-- <span class="badge rounded-pill bg-info float-end">04</span> -->
                        <span key="t-starter-page"><?php echo $language["Starter_Page"]; ?></span>
                    </a>
                   
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts"><?php echo $language["Layouts"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical"><?php echo $language["Vertical"]; ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-light-sidebar.php" key="t-light-sidebar"><?php echo $language["Light_Sidebar"]; ?></a></li>
                                <li><a href="layouts-compact-sidebar.php" key="t-compact-sidebar"><?php echo $language["Compact_Sidebar"]; ?></a></li>
                                <li><a href="layouts-icon-sidebar.php" key="t-icon-sidebar"><?php echo $language["Icon_Sidebar"]; ?></a></li>
                                <li><a href="layouts-boxed.php" key="t-boxed-width"><?php echo $language["Boxed_Width"]; ?></a></li>
                                <li><a href="layouts-preloader.php" key="t-preloader"><?php echo $language["Preloader"]; ?></a></li>
                                <li><a href="layouts-colored-sidebar.php" key="t-colored-sidebar"><?php echo $language["Colored_Sidebar"]; ?></a></li>
                                <li><a href="layouts-scrollable.php" key="t-scrollable"><?php echo $language["Scrollable"]; ?></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-horizontal"><?php echo $language["Horizontal"]; ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal.php" key="t-horizontal"><?php echo $language["Horizontal"]; ?></a></li>
                                <li><a href="layouts-hori-topbar-light.php" key="t-topbar-light"><?php echo $language["Topbar_Light"]; ?></a></li>
                                <li><a href="layouts-hori-boxed-width.php" key="t-boxed-width"><?php echo $language["Boxed_Width"]; ?></a></li>
                                <li><a href="layouts-hori-preloader.php" key="t-preloader"><?php echo $language["Preloader"]; ?></a></li>
                                <li><a href="layouts-hori-colored-header.php" key="t-colored-topbar"><?php echo $language["Colored_Header"]; ?></a></li>
                                <li><a href="layouts-hori-scrollable.php" key="t-scrollable"><?php echo $language["Scrollable"]; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title" key="t-pages">Pages</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication"><?php echo $language["Authentication"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login-1.php" key="t-login"><?php echo $language["Login"]; ?></a></li>
                        <li><a href="auth-login-2.php" key="t-login-2"><?php echo $language["Login"]; ?> 2</a></li>
                        <li><a href="auth-register-1.php" key="t-register"><?php echo $language["Register"]; ?></a></li>
                        <li><a href="auth-register-2.php" key="t-register-2"><?php echo $language["Register"]; ?> 2</a></li>
                        <li><a href="auth-recoverpw-1.php" key="t-recover-password"><?php echo $language["Recover_Password"]; ?></a></li>
                        <li><a href="auth-recoverpw-2.php" key="t-recover-password-2"><?php echo $language["Recover_Password"]; ?> 2</a></li>
                        <li><a href="auth-lock-screen.php" key="t-lock-screen"><?php echo $language["Lock_screen"]; ?></a></li>
                        <li><a href="auth-lock-screen-2.php" key="t-lock-screen-2"><?php echo $language["Lock_screen"]; ?> 2</a></li>
                        <li><a href="auth-confirm-mail.php" key="t-confirm-mail"><?php echo $language["Confirm_Mail"]; ?></a></li>
                        <li><a href="auth-confirm-mail-2.php" key="t-confirm-mail-2"><?php echo $language["Confirm_Mail"]; ?> 2</a></li>
                        <li><a href="auth-email-verification.php" key="t-email-verification"><?php echo $language["Email_verification"]; ?></a></li>
                        <li><a href="auth-email-verification-2.php" key="t-email-verification-2"><?php echo $language["Email_verification"]; ?> 2</a></li>
                        <li><a href="auth-two-step-verification.php" key="t-two-step-verification"><?php echo $language["Two_step_verification"]; ?></a></li>
                        <li><a href="auth-two-step-verification-2.php" key="t-two-step-verification-2"><?php echo $language["Two_step_verification"]; ?> 2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span key="t-multi-level"><?php echo $language["Multi_Level"]; ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" key="t-level-1-1"><?php echo $language["Level_1.1"]; ?></a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><?php echo $language["Level_1.2"]; ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" key="t-level-2-1"><?php echo $language["Level_2.1"]; ?></a></li>
                                <li><a href="javascript: void(0);" key="t-level-2-2"><?php echo $language["Level_2.2"]; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->