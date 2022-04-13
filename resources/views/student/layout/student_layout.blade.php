@php

$StudentId = session()->get('UserId');

$student = DB::Table('Student_Master')
->where('Student_Master.Student_Id', '=', $StudentId)
->first();

$messages = DB::Table('Message_Sent')
->join('Message_Draft', 'Message_Draft.Message_Draft_Id', '=', 'Message_Sent.Message_Draft_Id')
->where('Message_Sent.Send_To', '=', 'Student')
->where('Message_Sent.Person_Id', '=', $StudentId)
->where('Message_Sent.Message_Sent_Status', '=', 'Sent')
->orderByDesc('Message_Sent.Message_Sent_Id')
->get();

@endphp

<!DOCTYPE HTML>
<html>

<head>
    <title>TCET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
    <!-- <script src="{{url('js/Chart.js')}}"></script> -->
    <!-- //chart -->

    <!-- Metis Menu -->
    <script src="{{url('js/metisMenu.min.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>
    <link href="{{url('css/custom.css')}}" rel="stylesheet">
    <!--//Metis Menu -->

    <!-- requried-jsfiles-for owl -->
    <!-- <link href="{{url('css/owl.carousel.css')}}" rel="stylesheet">
    <script src="{{url('js/owl.carousel.js')}}"></script> -->
    <!-- <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items: 3,
                lazyLoad: true,
                autoPlay: true,
                pagination: true,
                nav: true,
            });
        });
    </script> -->
    <!-- //requried-jsfiles-for owl -->

    @yield('head_content')
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
                        <a class="navbar-brand" href="{{url('/student/')}}"><span class="fa fa-area-chart"></span> TCET<span class="dashboard_text">Training and Placement</span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="sidebar-menu">
                            <li class="header">MAIN NAVIGATION</li>
                            <li class="treeview">
                                <a href="{{url('/student/')}}">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="{{url('/student/quiz/')}}">
                                    <i class="fa fa-question-circle"></i> <span>Quizzes</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="{{url('/student/company/')}}">
                                    <i class="fa fa-list-alt"></i> <span>Companies</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="{{url('/student/lecture/')}}">
                                    <i class="fa fa-youtube-play"></i> <span>Lectures</span>
                                </a>
                            </li>
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
                    <ul class="nofitications-dropdown">
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                @if($messages != null && count($messages) != 0)
                                <span class="badge">{{count($messages)}}</span>
                                @endif
                            </a>
                            <ul class="dropdown-menu">
                                @if($messages != null && count($messages) != 0)
                                <li>
                                    <div class="notification_header">
                                        <h3>You have {{count($messages)}} new messages</h3>
                                    </div>
                                </li>
                                @endif

                                @if($messages != null && count($messages) != 0)

                                @for($i = 0; $i < count($messages) && $i < 4; $i++) <li>
                                    <a href="{{url('/student/message/view/' . $messages[$i]->Message_Sent_Id)}}">
                                        <div class="user_img"><img src="{{url('images/1.jpg')}}" alt=""></div>
                                        <div class="notification_desc" style="word-wrap: break-word;">
                                            @if(strlen($messages[$i]->Message_Draft_Head) <= 23) <p>{{$messages[$i]->Message_Draft_Head}}</p>
                                                @else
                                                <p>{{substr($messages[$i]->Message_Draft_Head, 0, 23)}}...</p>
                                                @endif
                                                <!-- <p><span>1 hour ago</span></p> -->
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                        </li>

                        @endfor

                        @else

                        <li>No messages</li>

                        @endif
                        <li>
                            <div class="notification_bottom">
                                <a href="{{url('/student/message/')}}">See all messages</a>
                            </div>
                        </li>
                    </ul>
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
                                        <p>{{$student->First_Name . ' ' . $student->Last_Name}}</p>
                                        <span>Student</span>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <!-- <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> -->
                                <!-- <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li> -->
                                <li> <a href="{{url('/student/profile/')}}"><i class="fa fa-suitcase"></i> Profile</a> </li>
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

    <!-- new added graphs chart js-->

    <!-- <script src="{{url('js/Chart.bundle.js')}}"></script> -->
    <script src="{{url('js/utils.js')}}"></script>

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