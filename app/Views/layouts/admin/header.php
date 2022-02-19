<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <?php if (isset($title)) : ?>
        <title><?= $title ?> - Bobil Indonesia</title>
    <?php else : ?>
        <title>Bobil Indonesia – Indonesia’s Finest Digital Car Platform</title>
    <?php endif ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/favicon.ico">



    <!-- App css -->
    <link href="<?= base_url('assets') ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/plugins/datatables/datatable.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/plugins/uppy/uppy.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/plugins/toastr/css/toastr.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/css/admin/style.css" rel="stylesheet" type="text/css" />




</head>

<body id="body" class="dark-sidebar">
    <!-- leftbar-tab-menu -->
    <div class="left-sidebar">
        <!-- LOGO -->
        <div class="brand">
            <a href="<?= base_url() ?>/admin" class="logo">
                <span>
                    <img src="<?= base_url('assets') ?>/images/logo-white.png" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="<?= base_url('assets') ?>/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <div class="sidebar-user-pro media border-end">
            <div class="position-relative mx-auto">
                <img src="https://w7.pngwing.com/pngs/81/570/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png" alt="user" class="rounded-circle thumb-md">
                <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
            </div>
            <div class="media-body ms-2 user-detail align-self-center">
                <h5 class="font-14 m-0 fw-bold"><?= user()->username ?></h5>
                <p class="opacity-50 mb-0"><?= user()->email ?></p>
            </div>
        </div>
        <!-- Tab panes -->

        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <div class="menu-body navbar-vertical">
                <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                        <?php if (in_groups('admin')) : ?>
                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">L<span>anding Page</span><br><span class="font-10 text-secondary fw-normal">Landing Page Setting</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>/admin"><i class="ti ti-brand-hipchat menu-icon"></i><span>Dashboard</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAnalytics">
                                    <i class="ti ti-stack menu-icon"></i>
                                    <span>Information Page</span>
                                </a>
                                <div class="collapse " id="sidebarAnalytics">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url() ?>/bobil-core/information/welcome">Welcome Page</a>
                                        </li>
                                        <!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url() ?>/bobil-core/information/landing">Landing Page</a>
                                        </li>
                                        <!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="<?= base_url() ?>/bobil-core/information/about" class="nav-link ">About Us Page</a>
                                        </li>
                                        <!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="<?= base_url() ?>/bobil-core/information/collection" class="nav-link ">Collection Page</a>
                                        </li>
                                        <!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="<?= base_url() ?>/bobil-core/information/station" class="nav-link ">Station Page</a>
                                        </li>
                                        <!--end nav-item-->
                                    </ul>
                                    <!--end nav-->
                                </div>
                                <!--end sidebarAnalytics-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#siderbarEmail" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="siderbarEmail">
                                    <i class="ti ti-mail menu-icon"></i>
                                    <span>Email</span>
                                </a>
                                <div class="collapse " id="siderbarEmail">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url() ?>/bobil-core/subscribe">Subscribe</a>
                                        </li>
                                        <!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="<?= base_url() ?>/bobil-core/mailblast" class="nav-link ">Mail Blast</a>
                                        </li>
                                        <!--end nav-item-->
                                    </ul>
                                    <!--end nav-->
                                </div>
                                <!--end sidebarAnalytics-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarCar" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCar">
                                    <i class="mdi mdi-car-sports menu-icon"></i>
                                    <span>Car</span>
                                </a>
                                <div class="collapse " id="sidebarCar">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url() ?>/car">List Car</a>
                                        </li>
                                        <!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="<?= base_url() ?>/brand" class="nav-link ">Brand</a>
                                        </li>
                                        <!--end nav-item-->
                                    </ul>
                                    <!--end nav-->
                                </div>
                                <!--end sidebarAnalytics-->
                            </li>
                            <!--end nav-item-->
                            <li class="nav-item" hidden>
                                <a class="nav-link" href="<?= base_url() ?>/brand"><i class="mdi mdi-newspaper menu-icon"></i><span>News</span></a>
                            </li>
                            <!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>/setting"><i class="ti ti-settings menu-icon"></i><span>Setting</span></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <!--end navbar-nav--->
                </div>
                <!--end sidebarCollapse-->
            </div>
        </div>
    </div>
    <!-- end left-sidenav-->
    <!-- end leftbar-tab-menu-->

    <!-- Top Bar Start -->
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Navbar -->
        <nav class="navbar-custom" id="navbar-custom">
            <ul class="list-unstyled topbar-nav float-end mb-0">

                <li class="dropdown notification-list" hidden>
                    <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-bell"></i>
                        <span class="alert-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                        <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                            Notifications <span class="badge bg-soft-primary badge-pill">2</span>
                        </h6>
                        <div class="notification-menu" data-simplebar>
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-end text-muted ps-2">2 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i class="ti ti-chart-arcs"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2 text-truncate">
                                        <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-end text-muted ps-2">10 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i class="ti ti-device-computer-camera"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2 text-truncate">
                                        <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                        <small class="text-muted mb-0">It is a long established fact that a
                                            reader.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-end text-muted ps-2">40 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i class="ti ti-diamond"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2 text-truncate">
                                        <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-end text-muted ps-2">1 hr ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i class="ti ti-drone"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2 text-truncate">
                                        <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                        <small class="text-muted mb-0">It is a long established fact that a
                                            reader.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-end text-muted ps-2">2 hrs ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i class="ti ti-users"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2 text-truncate">
                                        <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                            View all <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="https://w7.pngwing.com/pngs/81/570/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png" alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                            <div>
                                <!-- <small class="d-none d-md-block font-11"><?= user()->username ?></small> -->
                                <span class="d-none d-md-block fw-semibold font-12"><?= user()->username ?> <i class="mdi mdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#"><i class="ti ti-user font-16 me-1 align-text-bottom" hidden></i>
                            Profile</a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item" href="<?= base_url() ?>/logout"><i class="ti ti-power font-16 me-1 align-text-bottom"></i>
                            Logout</a>
                    </div>
                </li>
                <!--end topbar-profile-->
                <li class="notification-list" hidden>
                    <a class="nav-link arrow-none nav-icon offcanvas-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                        <i class="ti ti-settings ti-spin"></i>
                    </a>
                </li>
            </ul>
            <!--end topbar-nav-->

            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                        <i class="ti ti-menu-2"></i>
                    </button>
                </li>
                <li class="hide-phone app-search" hidden>
                    <form role="search" action="#" method="get">
                        <input type="search" name="search" class="form-control top-search mb-0" placeholder="Type text...">
                        <button type="submit"><i class="ti ti-search"></i></button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->
    <!-- Top Bar End -->

    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content-tab">