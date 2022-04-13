@php

$StaffId = session()->get('UserId');

$staff = DB::Table('Staff_Master')
->where('Staff_Master.Staff_Id', '=', $StaffId)
->first();

@endphp

<!DOCTYPE HTML>
<html>

<head>
    <title>TCET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="TCET" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{url('css/style.css')}}" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href="{{url('css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href="{{url('css/SidebarNav.min.css')}}" media='all' rel='stylesheet' type='text/css' />
    <!-- //side nav css file -->

    <!-- js-->
    <script src="{{url('js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{url('js/modernizr.custom.js')}}"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <!--//webfonts-->

    <!-- chart -->
    <script src="{{url('js/Chart.js')}}"></script>
    <!-- //chart -->

    <!-- Metis Menu -->
    <script src="{{url('js/metisMenu.min.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>
    <link href="{{url('css/custom.css')}}" rel="stylesheet">
    <!--//Metis Menu -->

    <!-- requried-jsfiles-for owl -->
    <link href="{{url('css/owl.carousel.css')}}" rel="stylesheet">
    <script src="{{url('js/owl.carousel.js')}}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items: 3,
                lazyLoad: true,
                autoPlay: true,
                pagination: true,
                nav: true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        <!--left-fixed -navigation-->
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <aside class="sidebar-left">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('/admin/')}}"><span class="fa fa-area-chart"></span> TCET<span class="dashboard_text">Training and Placement</span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="sidebar-menu">
                            <li class="header">MAIN NAVIGATION</li>
                            <li class="treeview">
                                <a href="{{url('/admin/')}}">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-laptop"></i>
                                    <span>Institute Management</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{url('/admin/academicsession/')}}"><i class="fa fa-angle-right"></i>Academic Session</a></li>
                                    <li><a href="{{url('/admin/branch/')}}"><i class="fa fa-angle-right"></i>Branch Master</a></li>
                                    <li><a href="{{url('/admin/designation/')}}"><i class="fa fa-angle-right"></i>Designation</a></li>
                                    <li><a href="{{url('/admin/staff/')}}"><i class="fa fa-angle-right"></i>Staff Master</a></li>
                                    <li><a href="{{url('/admin/student/')}}"><i class="fa fa-angle-right"></i>Student Master</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="{{url('/admin/quiz/')}}">
                                    <i class="fa fa-question-circle"></i> <span>Quizzes</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="{{url('/admin/company/')}}">
                                    <i class="fa fa-list-alt"></i> <span>Companies</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="{{url('/admin/announcement/')}}">
                                    <i class="fa fa-bell-o"></i> <span>Announcement</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="{{url('/admin/message/')}}">
                                    <i class="fa fa-envelope"></i> <span>Message</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="{{url('/admin/lecture/')}}">
                                    <i class="fa fa-youtube-play"></i> <span>Lectures</span>
                                </a>
                            </li>
                            <!-- <li class="treeview">
                                <a href="{{url('/student/company/')}}">
                                    <i class="fa fa-bar-chart-o"></i> <span>Reports</span>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </aside>
        </div>
        <!--left-fixed -navigation-->

        <!-- header-starts -->
        <div class="sticky-header header-section ">
            <div class="header-left">

                <!--toggle button start-->
                <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                <!--toggle button end-->
                <div class="profile_details_left">
                    <!--notifications of menu start -->
                    <!-- <ul class="nofitications-dropdown">
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new messages</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="user_img"><img src="{{url('images/1.jpg')}}" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li class="odd"><a href="#">
                                        <div class="user_img"><img src="{{url('images/4.jpg')}}" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="{{url('images/3.jpg')}}" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all messages</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul> -->
                    <div class="clearfix"> </div>
                </div>
                <!--notification menu end -->
                <div class="clearfix"> </div>
            </div>
            <div class="header-right">
                <div class="profile_details">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span class="prfil-img"><img src="{{url('images/2.jpg')}}" alt=""> </span>
                                    <div class="user-name">
                                        <p>{{$staff->First_Name . ' ' . $staff->Last_Name}}</p>
                                        <span>Administrator</span>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <!-- <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li> -->
                                <!-- <li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li> -->
                                <li> <a href="{{url('/logout/')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //header-ends -->

        <div id="page-wrapper">
            <div class="main-page">
                @yield('main_content')
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; TCET. All Rights Reserved | Developed by <a href="https://github.com/AkshatChandel" target="_blank">Akshat Chandel</a>, <a href="https://github.com/AkshatChandel" target="_blank">Darshil</a>, <a href="https://github.com/AkshatChandel" target="_blank">Hinal</a></p>
    </div>

    <!-- Classie -->
    <!-- for toggle left push menu script -->
    <script src="{{url('js/classie.js')}}"></script>
    <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;

        showLeftPush.onclick = function() {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeftPush');
        };


        function disableOther(button) {
            if (button !== 'showLeftPush') {
                classie.toggle(showLeftPush, 'disabled');
            }
        }
    </script>
    <!-- //Classie -->
    <!-- //for toggle left push menu script -->

    <!--scrolling js-->
    <script src="{{url('js/jquery.nicescroll.js')}}"></script>
    <script src="{{url('js/scripts.js')}}"></script>
    <!--//scrolling js-->

    <!-- side nav js -->
    <script src="{{url('js/SidebarNav.min.js')}}" type='text/javascript'></script>
    <script>
        $('.sidebar-menu').SidebarNav()
    </script>
    <!-- //side nav js -->

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('js/bootstrap.js')}}"> </script>
    <!-- //Bootstrap Core JavaScript -->

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>