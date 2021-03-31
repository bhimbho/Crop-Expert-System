<?php
session_start();
require_once '../core.php';
$admin = new Administrator;
$content = new Content;
$survey = new Survey;
$farmer = new Farmer;
$disease = new Disease;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Expert System | Administrator</title>
    <meta name="description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">
    <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css">
</head>
<body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->
        <aside id="side-overlay">
            <!-- Side Header -->
            <div class="bg-image" style="background-image: url('assets/media/various/bg_side_overlay_header.jpg');">
                <div class="bg-primary-op">
                    <div class="content-header">
                        <!-- User Avatar -->
                        <a class="img-link mr-1" href="be_pages_generic_profile.html">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                        </a>
                        <div class="ml-2">
                            <a class="text-white font-w600" href="be_pages_generic_profile.html">George Taylor</a>
                            <div class="text-white-75 font-size-sm">Full Stack Developer</div>
                        </div>
                        <a class="ml-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-side">
                <!-- Side Overlay Tabs -->
                <div class="block block-transparent pull-x pull-t">
                    <ul class="nav nav-tabs nav-tabs-block nav-justified" data-toggle="tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#so-settings">
                                <i class="fa fa-fw fa-cog"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#so-people">
                                <i class="far fa-fw fa-user-circle"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#so-profile">
                                <i class="far fa-fw fa-edit"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="block-content tab-content overflow-hidden">
                        <!-- Settings Tab -->
                        <div class="tab-pane pull-x fade fade-up show active" id="so-settings" role="tabpanel">
                            <div class="block mb-0">
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Color Themes</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="row gutters-tiny text-center">
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-default" data-toggle="theme" data-theme="default" href="#">
                                                Default
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xwork" data-toggle="theme" data-theme="assets/css/themes/xwork.min.css" href="#">
                                                xWork
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xmodern" data-toggle="theme" data-theme="assets/css/themes/xmodern.min.css" href="#">
                                                xModern
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xeco" data-toggle="theme" data-theme="assets/css/themes/xeco.min.css" href="#">
                                                xEco
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xsmooth" data-toggle="theme" data-theme="assets/css/themes/xsmooth.min.css" href="#">
                                                xSmooth
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xinspire" data-toggle="theme" data-theme="assets/css/themes/xinspire.min.css" href="#">
                                                xInspire
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xdream" data-toggle="theme" data-theme="assets/css/themes/xdream.min.css" href="#">
                                                xDream
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xpro" data-toggle="theme" data-theme="assets/css/themes/xpro.min.css" href="#">
                                                xPro
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white font-size-sm font-w600 bg-xplay" data-toggle="theme" data-theme="assets/css/themes/xplay.min.css" href="#">
                                                xPlay
                                            </a>
                                        </div>
                                        <div class="col-12">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" href="be_ui_color_themes.html">All Color Themes</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Color Themes -->
                                <!-- Sidebar -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Sidebar</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="row gutters-tiny text-center">
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Sidebar -->

                                <!-- Header -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Header</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="row gutters-tiny text-center mb-2">
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">Light</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Header -->

                                <!-- Content -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Content</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="row gutters-tiny text-center">
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Content -->

                                <!-- Layout API -->
                                <div class="block-content row justify-content-center border-top">
                                    <div class="col-9">
                                        <a class="btn btn-block btn-hero-primary" href="be_layout_api.html">
                                            <i class="fa fa-fw fa-flask mr-1"></i> Layout API
                                        </a>
                                    </div>
                                </div>
                                <!-- END Layout API -->
                            </div>
                        </div>
                        <!-- END Settings Tab -->

                        <!-- People -->
                        <div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel">
                            <div class="block mb-0">
                                <!-- Online -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Online</span>
                                </div>
                                <div class="block-content">
                                    <ul class="nav-items">
                                        <li>
                                            <a class="media py-2" href="be_pages_generic_profile.html">
                                                <div class="mx-3 overlay-container">
                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Melissa Rice</div>
                                                    <div class="font-size-sm text-muted">Photographer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="media py-2" href="be_pages_generic_profile.html">
                                                <div class="mx-3 overlay-container">
                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar14.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Jack Estrada</div>
                                                    <div class="font-w400 font-size-sm text-muted">Web Designer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="media py-2" href="be_pages_generic_profile.html">
                                                <div class="mx-3 overlay-container">
                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar1.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Laura Carr</div>
                                                    <div class="font-w400 font-size-sm text-muted">Web Developer</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Online -->

                                <!-- Busy -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Busy</span>
                                </div>
                                <div class="block-content">
                                    <ul class="nav-items">
                                        <li>
                                            <a class="media py-2" href="be_pages_generic_profile.html">
                                                <div class="mx-3 overlay-container">
                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-danger"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Lori Moore</div>
                                                    <div class="font-w400 font-size-sm text-muted">UI Designer</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Busy -->

                                <!-- Away -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Away</span>
                                </div>
                                <div class="block-content">
                                    <ul class="nav-items">
                                        <li>
                                            <a class="media py-2" href="be_pages_generic_profile.html">
                                                <div class="mx-3 overlay-container">
                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar9.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Carl Wells</div>
                                                    <div class="font-w400 font-size-sm text-muted">Copywriter</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="media py-2" href="be_pages_generic_profile.html">
                                                <div class="mx-3 overlay-container">
                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Danielle Jones</div>
                                                    <div class="font-w400 font-size-sm text-muted">Writer</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Away -->

                                <!-- Offline -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase font-size-sm font-w700">Offline</span>
                                </div>
                                <div class="block-content">
                                    <ul class="nav-items">
                                        <li>
                                            <a class="media py-2" href="be_pages_generic_profile.html">
                                                <div class="mx-3 overlay-container">
                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar15.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Wayne Garcia</div>
                                                    <div class="font-w400 font-size-sm text-muted">Teacher</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="media py-2" href="be_pages_generic_profile.html">
                                                <div class="mx-3 overlay-container">
                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar4.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Judy Ford</div>
                                                    <div class="font-w400 font-size-sm text-muted">Photographer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="media py-2" href="be_pages_generic_profile.html">
                                                <div class="mx-3 overlay-container">
                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Amanda Powell</div>
                                                    <div class="font-w400 font-size-sm text-muted">Front-end Developer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="media py-2" href="be_pages_generic_profile.html">
                                                <div class="mx-3 overlay-container">
                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar13.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Ralph Murray</div>
                                                    <div class="font-w400 font-size-sm text-muted">UX Specialist</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Offline -->

                                <!-- Add People -->
                                <div class="block-content row justify-content-center border-top">
                                    <div class="col-9">
                                        <a class="btn btn-block btn-hero-primary" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-plus mr-1"></i> Add People
                                        </a>
                                    </div>
                                </div>
                                <!-- END Add People -->
                            </div>
                        </div>
                        <!-- END People -->

                        <!-- Profile -->
                        <div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel">
                            <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                <div class="block mb-0">
                                    <!-- Personal -->
                                    <div class="block-content block-content-sm block-content-full bg-body">
                                        <span class="text-uppercase font-size-sm font-w700">Personal</span>
                                    </div>
                                    <div class="block-content block-content-full">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" readonly class="form-control" id="staticEmail" value="Admin">
                                        </div>
                                        <div class="form-group">
                                            <label for="so-profile-name">Name</label>
                                            <input type="text" class="form-control" id="so-profile-name" name="so-profile-name" value="George Taylor">
                                        </div>
                                        <div class="form-group">
                                            <label for="so-profile-email">Email</label>
                                            <input type="email" class="form-control" id="so-profile-email" name="so-profile-email" value="g.taylor@example.com">
                                        </div>
                                    </div>
                                    <!-- END Personal -->

                                    <!-- Password Update -->
                                    <div class="block-content block-content-sm block-content-full bg-body">
                                        <span class="text-uppercase font-size-sm font-w700">Password Update</span>
                                    </div>
                                    <div class="block-content block-content-full">
                                        <div class="form-group">
                                            <label for="so-profile-password">Current Password</label>
                                            <input type="password" class="form-control" id="so-profile-password" name="so-profile-password">
                                        </div>
                                        <div class="form-group">
                                            <label for="so-profile-new-password">New Password</label>
                                            <input type="password" class="form-control" id="so-profile-new-password" name="so-profile-new-password">
                                        </div>
                                        <div class="form-group">
                                            <label for="so-profile-new-password-confirm">Confirm New Password</label>
                                            <input type="password" class="form-control" id="so-profile-new-password-confirm" name="so-profile-new-password-confirm">
                                        </div>
                                    </div>
                                    <!-- END Password Update -->

                                    <!-- Options -->
                                    <div class="block-content block-content-sm block-content-full bg-body">
                                        <span class="text-uppercase font-size-sm font-w700">Options</span>
                                    </div>
                                    <div class="block-content">
                                        <div class="custom-control custom-checkbox custom-control-primary mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-status" name="so-settings-status" value="1">
                                            <label class="custom-control-label" for="so-settings-status">Online Status</label>
                                        </div>
                                        <p class="text-muted font-size-sm">
                                            Make your online status visible to other users of your app
                                        </p>
                                        <div class="custom-control custom-checkbox custom-control-primary mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-notifications" name="so-settings-notifications" value="1" checked>
                                            <label class="custom-control-label" for="so-settings-notifications">Notifications</label>
                                        </div>
                                        <p class="text-muted font-size-sm">
                                            Receive desktop notifications regarding your projects and sales
                                        </p>
                                        <div class="custom-control custom-checkbox custom-control-primary mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-updates" name="so-settings-updates" value="1" checked>
                                            <label class="custom-control-label" for="so-settings-updates">Auto Updates</label>
                                        </div>
                                        <p class="text-muted font-size-sm">
                                            If enabled, we will keep all your applications and servers up to date with the most recent features automatically
                                        </p>
                                    </div>
                                    <!-- END Options -->

                                    <!-- Submit -->
                                    <div class="block-content row justify-content-center border-top">
                                        <div class="col-9">
                                            <button type="submit" class="btn btn-block btn-hero-primary">
                                                <i class="fa fa-fw fa-save mr-1"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                    <!-- END Submit -->
                                </div>
                            </form>
                        </div>
                        <!-- END Profile -->
                    </div>
                </div>
                <!-- END Side Overlay Tabs -->
            </div>
            <!-- END Side Content -->
        </aside>

        <header id="page-header">
    <div class="content-header">
        <div>
            <button type="button" class="btn btn-dual" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>
        <div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-user d-sm-none"></i>
                    <span class="d-none d-sm-inline-block">Admin</span>
                    <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                    <div class="p-2">
                        <a class="dropdown-item" href="logout.php">
                            <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> Sign Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="page-header-loader" class="overlay-header bg-header-dark">
        <div class="bg-white-10">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                </div>
            </div>
        </div>
    </div>
</header>