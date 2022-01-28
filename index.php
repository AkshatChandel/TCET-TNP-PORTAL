<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- //side nav css file -->

    <!-- js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <!--//webfonts-->

    <!-- chart -->
    <script src="js/Chart.js"></script>
    <!-- //chart -->

    <!-- Metis Menu -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
    <style>
        #chartdiv {
            width: 100%;
            height: 295px;
        }
    </style>
    <!--pie-chart -->
    <!-- index page sales reviews visitors pie chart -->
    <script src="js/pie-chart.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function(from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function(from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function(from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });
    </script>
    <!-- //pie-chart -->
    <!-- index page sales reviews visitors pie chart -->

    <!-- requried-jsfiles-for owl -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <script src="js/owl.carousel.js"></script>
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
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <!--left-fixed -navigation-->
            <aside class="sidebar-left">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> TCET<span class="dashboard_text">Design dashboard</span></a></h1>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="sidebar-menu">
                            <li class="header">MAIN NAVIGATION</li>
                            <li class="treeview">
                                <a href="index.html">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-laptop"></i>
                                    <span>Masters</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="grids.html"><i class="fa fa-angle-right"></i> Academic Session</a></li>
                                    <li><a href="Students/"><i class="fa fa-angle-right"></i> Student Master</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="charts.html">
                                    <i class="fa fa-pie-chart"></i>
                                    <span>Charts</span>
                                    <span class="label label-primary pull-right">new</span>
                                </a>
                            </li>
                            <li class="treeview">
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-laptop"></i>
                                    <span>UI Elements</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="general.html"><i class="fa fa-angle-right"></i> General</a></li>
                                    <li><a href="icons.html"><i class="fa fa-angle-right"></i> Icons</a></li>
                                    <li><a href="buttons.html"><i class="fa fa-angle-right"></i> Buttons</a></li>
                                    <li><a href="typography.html"><i class="fa fa-angle-right"></i> Typography</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="widgets.html">
                                    <i class="fa fa-th"></i> <span>Widgets</span>
                                    <small class="label pull-right label-info">08</small>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-edit"></i> <span>Forms</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
                                    <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-table"></i> <span>Tables</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="tables.html"><i class="fa fa-angle-right"></i> Simple tables</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-envelope"></i> <span>Mailbox </span>
                                    <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
                                <ul class="treeview-menu">
                                    <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
                                    <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-folder"></i> <span>Examples</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
                                    <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
                                    <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
                                    <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
                                    <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
                                </ul>
                            </li>
                            <li class="header">LABELS</li>
                            <li><a href="#"><i class="fa fa-angle-right text-red"></i> <span>Important</span></a></li>
                            <li><a href="#"><i class="fa fa-angle-right text-yellow"></i> <span>Warning</span></a></li>
                            <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new messages</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/1.jpg" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li class="odd"><a href="#">
                                        <div class="user_img"><img src="images/4.jpg" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/3.jpg" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/2.jpg" alt=""></div>
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
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">4</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new notification</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/4.jpg" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li class="odd"><a href="#">
                                        <div class="user_img"><img src="images/1.jpg" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/3.jpg" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/2.jpg" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all notifications</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">8</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 8 pending task</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar yellow" style="width:40%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar green" style="width:90%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar red" style="width: 33%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar  blue" style="width: 80%;"></div>
                                        </div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all pending tasks</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <!--notification menu end -->
                <div class="clearfix"> </div>
            </div>
            <div class="header-right">


                <!--search-box-->
                <div class="search-box">
                    <form class="input">
                        <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
                        <label class="input__label" for="input-31">
                            <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                            </svg>
                        </label>
                    </form>
                </div>
                <!--//end-search-box-->

                <div class="profile_details">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span class="prfil-img"><img src="images/2.jpg" alt=""> </span>
                                    <div class="user-name">
                                        <p>Admin Name</p>
                                        <span>Administrator</span>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
                                <li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li>
                                <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="col_3">
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-dollar icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>$452</strong></h5>
                                <span>Total Revenue</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>$1019</strong></h5>
                                <span>Online Revenue</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-money user2 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>$1012</strong></h5>
                                <span>Expenses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget widget1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>$450</strong></h5>
                                <span>Expenditure</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 widget">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>1450</strong></h5>
                                <span>Total Users</span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <div class="row-one widgettable">
                    <div class="col-md-7 content-top-2 card">
                        <div class="agileinfo-cdr">
                            <div class="card-header">
                                <h3>Weekly Sales</h3>
                            </div>

                            <div id="Linegraph" style="width: 98%; height: 350px">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 stat">
                        <div class="content-top-1">
                            <div class="col-md-6 top-content">
                                <h5>Sales</h5>
                                <label>1283+</label>
                            </div>
                            <div class="col-md-6 top-content1">
                                <div id="demo-pie-1" class="pie-title-center" data-percent="45"> <span class="pie-value"></span> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="content-top-1">
                            <div class="col-md-6 top-content">
                                <h5>Reviews</h5>
                                <label>2262+</label>
                            </div>
                            <div class="col-md-6 top-content1">
                                <div id="demo-pie-2" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="content-top-1">
                            <div class="col-md-6 top-content">
                                <h5>Visitors</h5>
                                <label>12589+</label>
                            </div>
                            <div class="col-md-6 top-content1">
                                <div id="demo-pie-3" class="pie-title-center" data-percent="90"> <span class="pie-value"></span> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-2 stat">
                        <div class="content-top">
                            <div class="top-content facebook">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                            <ul class="info">
                                <li class="col-md-6"><b>1,296</b>
                                    <p>Friends</p>
                                </li>
                                <li class="col-md-6"><b>647</b>
                                    <p>Likes</p>
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="content-top">
                            <div class="top-content twitter">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                            <ul class="info">
                                <li class="col-md-6"><b>1,997</b>
                                    <p>Followers</p>
                                </li>
                                <li class="col-md-6"><b>389</b>
                                    <p>Tweets</p>
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="content-top">
                            <div class="top-content google-plus">
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <ul class="info">
                                <li class="col-md-6"><b>1,216</b>
                                    <p>Followers</p>
                                </li>
                                <li class="col-md-6"><b>321</b>
                                    <p>shares</p>
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <div class="charts">
                    <div class="col-md-4 charts-grids widget">
                        <div class="card-header">
                            <h3>Bar chart</h3>
                        </div>

                        <div id="container" style="width: 100%; height:270px;">
                            <canvas id="canvas"></canvas>
                        </div>
                        <button id="randomizeData">Randomize Data</button>
                        <button id="addDataset">Add Dataset</button>
                        <button id="removeDataset">Remove Dataset</button>
                        <button id="addData">Add Data</button>
                        <button id="removeData">Remove Data</button>

                    </div>

                    <div class="col-md-4 charts-grids widget states-mdl">
                        <div class="card-header">
                            <h3>Column & Line Graph</h3>
                        </div>
                        <div id="chartdiv"></div>
                    </div>

                    <div class="clearfix"> </div>
                </div>


                <!-- for amcharts js -->
                <script src="js/amcharts.js"></script>
                <script src="js/serial.js"></script>
                <script src="js/export.min.js"></script>
                <link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
                <script src="js/light.js"></script>
                <!-- for amcharts js -->

                <script src="js/index1.js"></script>

                <div class="charts">
                    <div class="mid-content-top charts-grids">
                        <div class="middle-content">
                            <h4 class="title">Carousel Slider</h4>
                            <!-- start content_slider -->
                            <div id="owl-demo" class="owl-carousel text-center">
                                <div class="item">
                                    <img class="lazyOwl img-responsive" data-src="images/slider1.jpg" alt="name">
                                </div>
                                <div class="item">
                                    <img class="lazyOwl img-responsive" data-src="images/slider2.jpg" alt="name">
                                </div>
                                <div class="item">
                                    <img class="lazyOwl img-responsive" data-src="images/slider3.jpg" alt="name">
                                </div>
                                <div class="item">
                                    <img class="lazyOwl img-responsive" data-src="images/slider4.jpg" alt="name">
                                </div>
                                <div class="item">
                                    <img class="lazyOwl img-responsive" data-src="images/slider5.jpg" alt="name">
                                </div>
                                <div class="item">
                                    <img class="lazyOwl img-responsive" data-src="images/slider6.jpg" alt="name">
                                </div>
                                <div class="item">
                                    <img class="lazyOwl img-responsive" data-src="images/slider7.jpg" alt="name">
                                </div>

                            </div>
                        </div>
                        <!--//sreen-gallery-cursual---->
                    </div>
                </div>

                <div class="col_1">
                    <div class="col-md-4 span_8">
                        <div class="activity_box">
                            <h2>Inbox</h2>
                            <div class="scrollbar" id="style-1">
                                <div class="activity-row">
                                    <div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt="" /></div>
                                    <div class="col-xs-7 activity-desc">
                                        <h5><a href="#">Michael Chris</a></h5>
                                        <p>Hey ! There I'm available.</p>
                                    </div>
                                    <div class="col-xs-2 activity-desc1">
                                        <h6>12:05 PM</h6>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row">
                                    <div class="col-xs-3 activity-img"><img src='images/4.jpg' class="img-responsive" alt="" /></div>
                                    <div class="col-xs-7 activity-desc">
                                        <h5><a href="#">Alexander</a></h5>
                                        <p>Hey ! There I'm available.</p>
                                    </div>
                                    <div class="col-xs-2 activity-desc1">
                                        <h6>12:06 PM</h6>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row">
                                    <div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt="" /></div>
                                    <div class="col-xs-7 activity-desc">
                                        <h5><a href="#">Daniel Lucas</a></h5>
                                        <p>Hey ! There I'm available.</p>
                                    </div>
                                    <div class="col-xs-2 activity-desc1">
                                        <h6>01:30 PM</h6>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row">
                                    <div class="col-xs-3 activity-img"><img src='images/2.jpg' class="img-responsive" alt="" /></div>
                                    <div class="col-xs-7 activity-desc">
                                        <h5><a href="#">Jackson Jacob</a></h5>
                                        <p>Hey ! There I'm available.</p>
                                    </div>
                                    <div class="col-xs-2 activity-desc1">
                                        <h6>01:50 PM</h6>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row">
                                    <div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt="" /></div>
                                    <div class="col-xs-7 activity-desc">
                                        <h5><a href="#">David Samuel</a></h5>
                                        <p>Hey ! There I'm available.</p>
                                    </div>
                                    <div class="col-xs-2 activity-desc1">
                                        <h6>12:20 PM</h6>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>

                                <div class="activity-row">
                                    <div class="col-xs-3 activity-img"><img src='images/4.jpg' class="img-responsive" alt="" /></div>
                                    <div class="col-xs-7 activity-desc">
                                        <h5><a href="#">laura Smith</a></h5>
                                        <p>Hey ! There I'm available.</p>
                                    </div>
                                    <div class="col-xs-2 activity-desc1">
                                        <h6>12:50 PM</h6>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <form action="#" method="post">
                                <input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
                                <input type="submit" value="Submit" />
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 span_8">
                        <div class="activity_box activity_box1">
                            <h3>chat</h3>
                            <div class="scrollbar" id="style-3">
                                <div class="activity-row activity-row1">
                                    <div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt="" /><span>06:01 AM</span></div>
                                    <div class="col-xs-5 activity-img1">
                                        <div class="activity-desc-sub">
                                            <h5>Michael Chris</h5>
                                            <p>Hello ! this is Michael chris</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 activity-desc1"></div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row activity-row1">
                                    <div class="col-xs-2 activity-desc1"></div>
                                    <div class="col-xs-7 activity-img2">
                                        <div class="activity-desc-sub1">
                                            <h5>Alexander</h5>
                                            <p>Hi,How are you ? What about our next meeting?</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt="" /><span>06:02 AM</span></div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row activity-row1">
                                    <div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt="" /><span>06:05 AM</span></div>
                                    <div class="col-xs-5 activity-img1">
                                        <div class="activity-desc-sub">
                                            <h5>Michael Chris</h5>
                                            <p>Yeah fine, Hope you the same</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 activity-desc1"></div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row activity-row1">
                                    <div class="col-xs-2 activity-desc1"></div>
                                    <div class="col-xs-7 activity-img2">
                                        <div class="activity-desc-sub1">
                                            <h5>Alexander</h5>
                                            <p>Wow that's great</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt="" /><span>06:20 PM</span></div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <form action="#" method="post">
                                <input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
                                <input type="submit" value="Send" />
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 span_8">
                        <div class="activity_box activity_box2">
                            <h3>todo</h3>
                            <div class="scrollbar" id="style-2">
                                <div class="activity-row activity-row1">
                                    <div class="single-bottom">
                                        <ul>
                                            <li>
                                                <input type="checkbox" id="brand" value="">
                                                <label for="brand"><span></span> Integer sollicitudin lacinia condimentum.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand1" value="">
                                                <label for="brand1"><span></span> ligula sit amet hendrerit init lorem.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand2" value="">
                                                <label for="brand2"><span></span> Donec aliquam dolor eu augue condimentum.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand9" value="">
                                                <label for="brand9"><span></span> at tristique Pain that produces no resultant.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand8" value="">
                                                <label for="brand8"><span></span> Nulla finibus rhoncus turpis quis tristique.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand7" value="">
                                                <label for="brand7"><span></span> Cupidatat non proident Praising pain.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand3" value="">
                                                <label for="brand3"><span></span> libero vel elementum euismod, mauris tellus</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand4" value="">
                                                <label for="brand4"><span></span> Donec aliquam dolor eu augue condimentum.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand5" value="">
                                                <label for="brand5"><span></span> Orci varius natoque penatibus et magnis dis.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand6" value="">
                                                <label for="brand6"><span></span> parturient Dolorem ipsum quia.</label>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <form action="#" method="post">
                                <input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
                                <input type="submit" value="Submit" />
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>

                </div>

            </div>
        </div>
        <!--footer-->
        <div class="footer">
            <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
        </div>
        <!--//footer-->
    </div>

    <!-- new added graphs chart js-->

    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>

    <script>
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                label: 'Dataset 2',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }]

        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Bar Chart'
                    }
                }
            });

        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            var zero = Math.random() < 0.2 ? true : false;
            barChartData.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return zero ? 0.0 : randomScalingFactor();
                });

            });
            window.myBar.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function() {
            var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
            var dsColor = window.chartColors[colorName];
            var newDataset = {
                label: 'Dataset ' + barChartData.datasets.length,
                backgroundColor: color(dsColor).alpha(0.5).rgbString(),
                borderColor: dsColor,
                borderWidth: 1,
                data: []
            };

            for (var index = 0; index < barChartData.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            barChartData.datasets.push(newDataset);
            window.myBar.update();
        });

        document.getElementById('addData').addEventListener('click', function() {
            if (barChartData.datasets.length > 0) {
                var month = MONTHS[barChartData.labels.length % MONTHS.length];
                barChartData.labels.push(month);

                for (var index = 0; index < barChartData.datasets.length; ++index) {
                    //window.myBar.addData(randomScalingFactor(), index);
                    barChartData.datasets[index].data.push(randomScalingFactor());
                }

                window.myBar.update();
            }
        });

        document.getElementById('removeDataset').addEventListener('click', function() {
            barChartData.datasets.splice(0, 1);
            window.myBar.update();
        });

        document.getElementById('removeData').addEventListener('click', function() {
            barChartData.labels.splice(-1, 1); // remove the label first

            barChartData.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myBar.update();
        });
    </script>
    <!-- new added graphs chart js-->

    <!-- Classie -->
    <!-- for toggle left push menu script -->
    <script src="js/classie.js"></script>
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
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--//scrolling js-->

    <!-- side nav js -->
    <script src='js/SidebarNav.min.js' type='text/javascript'></script>
    <script>
        $('.sidebar-menu').SidebarNav()
    </script>
    <!-- //side nav js -->

    <!-- for index page weekly sales java script -->
    <script src="js/SimpleChart.js"></script>
    <script>
        var graphdata1 = {
            linecolor: "#CCA300",
            title: "Monday",
            values: [{
                    X: "6:00",
                    Y: 10.00
                },
                {
                    X: "7:00",
                    Y: 20.00
                },
                {
                    X: "8:00",
                    Y: 40.00
                },
                {
                    X: "9:00",
                    Y: 34.00
                },
                {
                    X: "10:00",
                    Y: 40.25
                },
                {
                    X: "11:00",
                    Y: 28.56
                },
                {
                    X: "12:00",
                    Y: 18.57
                },
                {
                    X: "13:00",
                    Y: 34.00
                },
                {
                    X: "14:00",
                    Y: 40.89
                },
                {
                    X: "15:00",
                    Y: 12.57
                },
                {
                    X: "16:00",
                    Y: 28.24
                },
                {
                    X: "17:00",
                    Y: 18.00
                },
                {
                    X: "18:00",
                    Y: 34.24
                },
                {
                    X: "19:00",
                    Y: 40.58
                },
                {
                    X: "20:00",
                    Y: 12.54
                },
                {
                    X: "21:00",
                    Y: 28.00
                },
                {
                    X: "22:00",
                    Y: 18.00
                },
                {
                    X: "23:00",
                    Y: 34.89
                },
                {
                    X: "0:00",
                    Y: 40.26
                },
                {
                    X: "1:00",
                    Y: 28.89
                },
                {
                    X: "2:00",
                    Y: 18.87
                },
                {
                    X: "3:00",
                    Y: 34.00
                },
                {
                    X: "4:00",
                    Y: 40.00
                }
            ]
        };
        var graphdata2 = {
            linecolor: "#00CC66",
            title: "Tuesday",
            values: [{
                    X: "6:00",
                    Y: 100.00
                },
                {
                    X: "7:00",
                    Y: 120.00
                },
                {
                    X: "8:00",
                    Y: 140.00
                },
                {
                    X: "9:00",
                    Y: 134.00
                },
                {
                    X: "10:00",
                    Y: 140.25
                },
                {
                    X: "11:00",
                    Y: 128.56
                },
                {
                    X: "12:00",
                    Y: 118.57
                },
                {
                    X: "13:00",
                    Y: 134.00
                },
                {
                    X: "14:00",
                    Y: 140.89
                },
                {
                    X: "15:00",
                    Y: 112.57
                },
                {
                    X: "16:00",
                    Y: 128.24
                },
                {
                    X: "17:00",
                    Y: 118.00
                },
                {
                    X: "18:00",
                    Y: 134.24
                },
                {
                    X: "19:00",
                    Y: 140.58
                },
                {
                    X: "20:00",
                    Y: 112.54
                },
                {
                    X: "21:00",
                    Y: 128.00
                },
                {
                    X: "22:00",
                    Y: 118.00
                },
                {
                    X: "23:00",
                    Y: 134.89
                },
                {
                    X: "0:00",
                    Y: 140.26
                },
                {
                    X: "1:00",
                    Y: 128.89
                },
                {
                    X: "2:00",
                    Y: 118.87
                },
                {
                    X: "3:00",
                    Y: 134.00
                },
                {
                    X: "4:00",
                    Y: 180.00
                }
            ]
        };
        var graphdata3 = {
            linecolor: "#FF99CC",
            title: "Wednesday",
            values: [{
                    X: "6:00",
                    Y: 230.00
                },
                {
                    X: "7:00",
                    Y: 210.00
                },
                {
                    X: "8:00",
                    Y: 214.00
                },
                {
                    X: "9:00",
                    Y: 234.00
                },
                {
                    X: "10:00",
                    Y: 247.25
                },
                {
                    X: "11:00",
                    Y: 218.56
                },
                {
                    X: "12:00",
                    Y: 268.57
                },
                {
                    X: "13:00",
                    Y: 274.00
                },
                {
                    X: "14:00",
                    Y: 280.89
                },
                {
                    X: "15:00",
                    Y: 242.57
                },
                {
                    X: "16:00",
                    Y: 298.24
                },
                {
                    X: "17:00",
                    Y: 208.00
                },
                {
                    X: "18:00",
                    Y: 214.24
                },
                {
                    X: "19:00",
                    Y: 214.58
                },
                {
                    X: "20:00",
                    Y: 211.54
                },
                {
                    X: "21:00",
                    Y: 248.00
                },
                {
                    X: "22:00",
                    Y: 258.00
                },
                {
                    X: "23:00",
                    Y: 234.89
                },
                {
                    X: "0:00",
                    Y: 210.26
                },
                {
                    X: "1:00",
                    Y: 248.89
                },
                {
                    X: "2:00",
                    Y: 238.87
                },
                {
                    X: "3:00",
                    Y: 264.00
                },
                {
                    X: "4:00",
                    Y: 270.00
                }
            ]
        };
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [{
                    X: "6:00",
                    Y: 300.00
                },
                {
                    X: "7:00",
                    Y: 410.98
                },
                {
                    X: "8:00",
                    Y: 310.00
                },
                {
                    X: "9:00",
                    Y: 314.00
                },
                {
                    X: "10:00",
                    Y: 310.25
                },
                {
                    X: "11:00",
                    Y: 318.56
                },
                {
                    X: "12:00",
                    Y: 318.57
                },
                {
                    X: "13:00",
                    Y: 314.00
                },
                {
                    X: "14:00",
                    Y: 310.89
                },
                {
                    X: "15:00",
                    Y: 512.57
                },
                {
                    X: "16:00",
                    Y: 318.24
                },
                {
                    X: "17:00",
                    Y: 318.00
                },
                {
                    X: "18:00",
                    Y: 314.24
                },
                {
                    X: "19:00",
                    Y: 310.58
                },
                {
                    X: "20:00",
                    Y: 312.54
                },
                {
                    X: "21:00",
                    Y: 318.00
                },
                {
                    X: "22:00",
                    Y: 318.00
                },
                {
                    X: "23:00",
                    Y: 314.89
                },
                {
                    X: "0:00",
                    Y: 310.26
                },
                {
                    X: "1:00",
                    Y: 318.89
                },
                {
                    X: "2:00",
                    Y: 518.87
                },
                {
                    X: "3:00",
                    Y: 314.00
                },
                {
                    X: "4:00",
                    Y: 310.00
                }
            ]
        };
        var Piedata = {
            linecolor: "Random",
            title: "Profit",
            values: [{
                    X: "Monday",
                    Y: 50.00
                },
                {
                    X: "Tuesday",
                    Y: 110.98
                },
                {
                    X: "Wednesday",
                    Y: 70.00
                },
                {
                    X: "Thursday",
                    Y: 204.00
                },
                {
                    X: "Friday",
                    Y: 80.25
                },
                {
                    X: "Saturday",
                    Y: 38.56
                },
                {
                    X: "Sunday",
                    Y: 98.57
                }
            ]
        };
        $(function() {
            $("#Bargraph").SimpleChart({
                ChartType: "Bar",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#sltchartype").on('change', function() {
                $("#Bargraph").SimpleChart('ChartType', $(this).val());
                $("#Bargraph").SimpleChart('reload', 'true');
            });
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Linegraph").SimpleChart({
                ChartType: "Line",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Areagraph").SimpleChart({
                ChartType: "Area",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Scatterredgraph").SimpleChart({
                ChartType: "Scattered",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Piegraph").SimpleChart({
                ChartType: "Pie",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                showpielables: true,
                data: [Piedata],
                legendsize: "250",
                legendposition: 'right',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });

            $("#Stackedbargraph").SimpleChart({
                ChartType: "Stacked",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });

            $("#StackedHybridbargraph").SimpleChart({
                ChartType: "StackedHybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });
    </script>
    <!-- //for index page weekly sales java script -->


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"> </script>
    <!-- //Bootstrap Core JavaScript -->

</body>

</html>