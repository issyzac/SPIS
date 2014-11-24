<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Viewport Metatag -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- Plugin Stylesheets first to ease overrides -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/colorpicker/colorpicker.css') }}" media="screen">

    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/fullcalendar/fullcalendar.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/fullcalendar/fullcalendar.print.css') }}" media="print">

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts/ptsans/stylesheet.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts/icomoon/style.css') }}" media="screen">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/mws-style.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icons/icol16.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icons/icol32.css') }}" media="screen">

    <!-- Demo Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}" media="screen">

    <!-- jQuery-UI Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('jui/css/jquery.ui.all.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('jui/jquery-ui.custom.css') }}" media="screen">

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mws-theme.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themer.css') }}" media="screen">


    <title>SPIS</title>

</head>

<body>
<!-- Header -->
<div id="mws-header" class="clearfix">

    <!-- Logo Container -->
    <div id="mws-logo-container">

        <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        <div id="mws-logo-wrap">
            <h2 style="color: #ffffff"> SPIS school </h2>
        </div>
    </div>

    <!-- User Tools (notifications, logout, profile, change password) -->
    <div id="mws-user-tools" class="clearfix">

        <!-- Notifications -->
        <div id="mws-user-notif" class="mws-dropdown-menu">
            <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>

            <!-- Unread notification count -->
            <!--<span class="mws-dropdown-notif">35</span> -->

            <!-- Notifications dropdown -->
            <div class="mws-dropdown-box">
                <div class="mws-dropdown-content">
                    <ul class="mws-notifications">
                        <li class="read">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="read">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                    </ul>
                    <div class="mws-dropdown-viewall">
                        <a href="#">View All Notifications</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Messages -->
        <div id="mws-user-message" class="mws-dropdown-menu">
            <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>

            <!-- Unred messages count -->
            <!-- <span class="mws-dropdown-notif">35</span> -->

            <!-- Messages dropdown -->
            <div class="mws-dropdown-box">
                <div class="mws-dropdown-content">
                    <ul class="mws-messages">
                        <li class="read">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="read">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                    </ul>
                    <div class="mws-dropdown-viewall">
                        <a href="#">View All Messages</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Information and functions section -->
        <div id="mws-user-info" class="mws-inset">

            <!-- User Photo -->
            <div id="mws-user-photo">
                <img src="{{ asset('example/profile.jpg') }}" alt="User Photo">
            </div>

            <!-- Username and Functions -->
            <div id="mws-user-functions">
                <div id="mws-username">
                    Hello, Isaiah Zacharia
                </div>
                <ul>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Change Password</a></li>
                    <li><a href="index.html">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Start Main Wrapper -->
<div id="mws-wrapper">

<!-- Necessary markup, do not remove -->
<div id="mws-sidebar-stitch"></div>
<div id="mws-sidebar-bg"></div>

<!-- Sidebar Wrapper -->
<div id="mws-sidebar">

    <!-- Hidden Nav Collapse Button -->
    <div id="mws-nav-collapse">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- Searchbox -->
    <div id="mws-searchbox" class="mws-inset">
        <form action="typography.html">
            <input type="text" class="mws-search-input" placeholder="Search...">
            <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
        </form>
    </div>

    <!-- Main Navigation -->
    <div id="mws-navigation">
        <ul>
            <li class="active"><a href='{{ url("dashboard") }}'><i class="icon-home"></i> Home </a></li>
            <li><a href='{{ url("classes") }}'><i class="icon-graph"></i> Classes</a></li>
            <li><a href="calendar.html"><i class="icon-calendar"></i> Subjects</a></li>
            <li><a href="files.html"><i class="icon-folder-closed"></i> Users </a></li>
            <li><a href="table.html"><i class="icon-table"></i> Results</a></li>
            <li>
                <a href="#"><i class="icon-list"></i> Others</a>
                <ul>
                    <li><a href="form_layouts.html">Layouts</a></li>
                    <li><a href="form_elements.html">Elements</a></li>
                    <li><a href="form_wizard.html">Wizard</a></li>
                </ul>
            </li>

            <li>
                <a href="icons.html">
                    <i class="icon-pacman"></i>
                    Icons <span class="mws-nav-tooltip">2000+</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- Main Container Start -->
<div id="mws-container" class="clearfix">

<!-- Inner Container Start -->
    @yield('contents')
<!-- Inner Container End -->

<!-- Footer -->
<div id="mws-footer">
    Copyright SPIS 2014. All Rights Reserved.
</div>

</div>
<!-- Main Container End -->

</div>

<!-- JavaScript Plugins -->
<script src="{{ asset('js/libs/jquery-1.8.3.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery.mousewheel.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('custom-plugins/fileinput.js') }}"></script>

<!-- jQuery-UI Dependent Scripts -->
<script src="{{ asset('jui/js/jquery-ui-1.9.2.min.js') }}"></script>
<script src="{{ asset('jui/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('jui/js/jquery.ui.touch-punch.js') }}"></script>

<!-- Plugin Scripts -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<!--[if lt IE 9]>
<script src="{{ asset('js/libs/excanvas.min.js') }}"></script>
<![endif]-->
<script src="{{ asset('plugins/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('plugins/flot/plugins/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('plugins/flot/plugins/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('plugins/flot/plugins/jquery.flot.stack.min.js') }}"></script>
<script src="{{ asset('plugins/flot/plugins/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('plugins/colorpicker/colorpicker-min.js') }}"></script>
<script src="{{ asset('plugins/validate/jquery.validate-min.js') }}"></script>
<script src="{{ asset('custom-plugins/wizard/wizard.min.js') }}"></script>

<!-- Core Script -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/core/mws.js') }}"></script>

<!-- Themer Script (Remove if not needed) -->
<script src="{{ asset('js/core/themer.js') }}"></script>



<!-- Plugin Scripts -->
<script src="{{ asset('plugins/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('plugins/colorpicker/colorpicker-min.js') }}"></script>


<!-- Demo Scripts (remove if not needed) -->
<script src="{{ asset('js/demo/demo.dashboard.js') }}"></script>

</body>
</html>