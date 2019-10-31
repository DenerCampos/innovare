<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo">Admiry</a>-->
            <a href="<?php echo base_url(); ?>" class="logo">
                <img src="<?php echo base_url("assets/images/logo.png"); ?>" alt="logo" height="80px";>
            </a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">

        <div class="user-details">
            <div class="text-center">
                <img src="<?php echo base_url("assets/images/users/avatar-0.jpg"); ?>" alt="" class="rounded-circle">
            </div>
            <div class="user-info">
                <h4 class="font-16"><?php echo "Nome usuario"; ?></h4>
                <span class="text-muted user-status"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
            </div>
        </div>

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Menu</li>
                <!--
                <li>
                    <a href="<?php echo "#"; ?>" class="waves-effect">
                        <i class="ti-home"></i>
                        <span> Dashboard <span class="badge badge-primary pull-right">3</span></span>
                    </a>
                </li>
                -->
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-receipt"></i> <span> Questionários </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url("questionario/novo"); ?>">Novo</a></li>
                        <li><a href="<?php echo base_url("questionario/continuar"); ?>">Continuar</a></li>
                    </ul>
                </li>               

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->

<!-- Start right Content here -->

<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <!-- Top Bar Start -->
        <div class="topbar">

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">
                    
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="badge badge-success noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="<?php echo base_url("assets/images/users/avatar-0.jpg"); ?>" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <a class="dropdown-item" href="<?php echo "#"; ?>"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Perfil</a>
                            <a class="dropdown-item" href="<?php echo "#"; ?>"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="list-inline-item">
                        <button type="button" class="button-menu-mobile open-left waves-effect">
                            <i class="ion-navicon"></i>
                        </button>
                    </li>
                    <li class="hide-phone list-inline-item app-search">
                        <h3 class="page-title"><?php echo $titulo; ?></h3>
                    </li>
                </ul>

                <div class="clearfix"></div>

            </nav>

        </div>
        <!-- Top Bar End -->

        <div class="page-content-wrapper ">

            <div class="container-fluid">