<?php
require '../../connection.php';
?>

<?php
require '../../connection.php';
?>

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
    <link href="../../css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="../../css/style.css" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href="../../css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href='../../css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- //side nav css file -->

    <!-- js-->
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/modernizr.custom.js"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <!--//webfonts-->

    <!-- chart -->
    <script src="../../js/Chart.js"></script>
    <!-- //chart -->

    <!-- Metis Menu -->
    <script src="../../js/metisMenu.min.js"></script>
    <script src="../../js/custom.js"></script>
    <link href="../../css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
    <style>
        #chartdiv {
            width: 100%;
            height: 295px;
        }
    </style>
    <!--pie-chart -->
    <!-- index page sales reviews visitors pie chart -->
    <script src="../../js/pie-chart.js" type="text/javascript"></script>
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
    <link href="../../css/owl.carousel.css" rel="stylesheet">
    <script src="../../js/owl.carousel.js"></script>
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
                        <a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> Glance<span class="dashboard_text">Design Dashboard</span></a>
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
                                    <span>Components</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="grids.html"><i class="fa fa-angle-right"></i> Grids</a></li>
                                    <li><a href="media.html"><i class="fa fa-angle-right"></i> Media Css</a></li>
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
                                    <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a>
                                    </li>
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
                                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                    <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
                                <ul class="treeview-menu">
                                    <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox</a></li>
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
                            <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a>
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
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <div class=" form-grids row form-grids-right">
                        <div class="widget-shadow " data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>Students</h4>
                            </div>
                            <div class="form-body">
                                <form class="form-horizontal" action="" method="POST">
                                    <div class="form-group">
                                        <label for="txt_FirstName" class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_FirstName" name="txt_FirstName" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_MiddleName" class="col-sm-2 control-label">Middle Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_MiddleName" name="txt_MiddleName" placeholder="Middle Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_LastName" class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_LastName" name="txt_LastName" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_DateOfBirth" class="col-sm-2 control-label">Date Of Birth</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="txt_DateOfBirth" name="txt_DateOfBirth">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select_Gender" class="col-sm-2 control-label">Gender</label>
                                        <div class="col-sm-9">
                                            <select id="select_Gender" name="select_Gender" class="form-control">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_Contact" class="col-sm-2 control-label">Contact</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_Contact" name="txt_Contact" placeholder="Contact">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_Email" class="col-sm-2 control-label">Email ID</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="txt_Email" name="txt_Email" placeholder="Email ID">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_Address" class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_Address" name="txt_Address" placeholder="Address">
                                        </div>
                                    </div>

                                    <hr color="grey">
                                    <div class="my-4">
                                        <h4>Previous Academic Details</h4>
                                    </div>
                                    <hr color="grey">

                                    <div class="form-group">
                                        <label for="txt_10thPercentage" class="col-sm-2 control-label">Class 10 Percentage</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_10thPercentage" name="txt_10thPercentage" placeholder="Class 10 Percentage">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select_IsDiplomaStudent" class="col-sm-2 control-label">Are you a Diploma Student?</label>
                                        <div class="col-sm-9">
                                            <select id="select_IsDiplomaStudent" name="select_IsDiplomaStudent" class="form-control">
                                                <option value="Class 12">No</option>
                                                <option value="Diploma">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group class12-form-group">
                                        <label for="txt_12thPercentage" class="col-sm-2 control-label">Class 12 Percentage</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_12thPercentage" name="txt_12thPercentage" placeholder="Class 12 Percentage">
                                        </div>
                                    </div>
                                    <div class="form-group diploma-form-group">
                                        <label for="txt_DiplomaPercentage" class="col-sm-2 control-label">Diploma Percentage</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_DiplomaPercentage" name="txt_DiplomaPercentage" placeholder="Diploma Percentage">
                                        </div>
                                    </div>
                                    <div class="form-group class12-form-group">
                                        <label for="txt_JEEScore" class="col-sm-2 control-label">JEE Score</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_JEEScore" name="txt_JEEScore" placeholder="JEE Score">
                                        </div>
                                    </div>
                                    <div class="form-group class12-form-group">
                                        <label for="txt_JEEScoreOutOf" class="col-sm-2 control-label">JEE Score Out Of</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_JEEScoreOutOf" name="txt_JEEScoreOutOf" placeholder="JEE Score Out Of">
                                        </div>
                                    </div>
                                    <div class="form-group class12-form-group">
                                        <label for="txt_CETScore" class="col-sm-2 control-label">CET Score</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_CETScore" name="txt_CETScore" placeholder="CET Score">
                                        </div>
                                    </div>
                                    <div class="form-group class12-form-group">
                                        <label for="txt_CETScoreOutOf" class="col-sm-2 control-label">CET Score Out Of</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_CETScoreOutOf" name="txt_CETScoreOutOf" placeholder="CET Score Out Of">
                                        </div>
                                    </div>

                                    <hr color="grey">
                                    <div class="my-4">
                                        <h4>New Academic Details</h4>
                                    </div>
                                    <hr color="grey">

                                    <div class="form-group">
                                        <label for="select_Academic_Session_Id" class="col-sm-2 control-label">Academic Session</label>
                                        <div class="col-sm-9">
                                            <select id="select_Academic_Session_Id" name="select_Academic_Session_Id" class="form-control">
                                                <?php

                                                $sql = "SELECT * FROM academic_master";
                                                $result = $con->query($sql);
                                                while ($row = $result->fetch_array()) {
                                                    echo "<option value ='" . $row['Academic_Id'] . "'>" . $row['Academic_Name'] . "</option>";
                                                }

                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select_Branch" class="col-sm-2 control-label">Branch</label>
                                        <div class="col-sm-9">
                                            <select id="select_Branch" name="select_Branch" class="form-control">
                                                <?php

                                                $sql = "SELECT * FROM branch_master WHERE branch_status = \"Active\"";
                                                $result = $con->query($sql);
                                                while ($row = $result->fetch_array()) {
                                                    echo "<option value ='" . $row['Branch_Id'] . "'>" . $row['Branch_Name'] . "</option>";
                                                }

                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select_Year" class="col-sm-2 control-label">Year</label>
                                        <div class="col-sm-9">
                                            <select id="select_Year" name="select_Year" class="form-control">
                                                <option value='0'>--Select--</option>
                                                <option value='1'>FE</option>
                                                <option value='2'>SE</option>
                                                <option value='3'>TE</option>
                                                <option value='4'>BE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select_Semester" class="col-sm-2 control-label">Semester</label>
                                        <div class="col-sm-9">
                                            <select id="select_Semester" name="select_Semester" class="form-control">
                                                <option value='0'>--Select--</option>
                                                <option value='1'>Semester 1</option>
                                                <option value='2'>Semester 2</option>
                                                <option value='3'>Semester 3</option>
                                                <option value='4'>Semester 4</option>
                                                <option value='5'>Semester 5</option>
                                                <option value='6'>Semester 6</option>
                                                <option value='7'>Semester 7</option>
                                                <option value='8'>Semester 8</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group class12-form-group">
                                        <label for="txt_CollegeId" class="col-sm-2 control-label">College ID</label>
                                        <div class="col-sm-9">
                                            <input type="number" min="1" max="120" class="form-control" id="txt_CollegeId" name="txt_CollegeId" placeholder="College ID">
                                        </div>
                                    </div>
                                    <div class="form-group class12-form-group">
                                        <label for="txt_RollNo" class="col-sm-2 control-label">Roll Number</label>
                                        <div class="col-sm-9">
                                            <input type="number" min="1" max="120" class="form-control" id="txt_RollNo" name="txt_RollNo" placeholder="Roll Number">
                                        </div>
                                    </div>

                                    <div class="col-sm-offset-2">
                                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                    </div>
                                </form>

                                <?php
                                if (isset($_POST['submit'])) {
                                    $FirstName = $_POST['txt_FirstName'];
                                    $MiddleName = $_POST['txt_MiddleName'];
                                    $LastName = $_POST['txt_LastName'];
                                    $CollegeId = $_POST['txt_CollegeId'];
                                    $DateOfBirth = $_POST['txt_DateOfBirth'];
                                    $Gender = $_POST['select_Gender'];
                                    $ContactNo = $_POST['txt_Contact'];
                                    $EmailId = $_POST['txt_Email'];
                                    $Address = $_POST['txt_Address'];

                                    $Class10Percentage = $_POST['txt_10thPercentage'];
                                    $DiplomaStudent_Or_Class12 = $_POST['select_DiplomaStudent_Or_Class12'];
                                    $Class12Percentage = $_POST['txt_12thPercentage'];
                                    $DiplomaPercentage = $_POST['txt_DiplomaPercentage'];
                                    $JEEScore = $_POST['txt_JEEScore'];
                                    $JEEScoreOutOf = $_POST['txt_JEEScoreOutOf'];
                                    $CETScore = $_POST['txt_CETScore'];
                                    $CETScoreOutOf = $_POST['txt_CETScoreOutOf'];
                                    $StudentStatus = "Active";

                                    if ($DiplomaStudent_Or_Class12 == "Class 12") {
                                        $DiplomaPercentage = 0;
                                    } else {
                                        $Class12Percentage = 0;
                                        $JEEScore = 0;
                                        $JEEScoreOutOf = 0;
                                        $CETScore = 0;
                                        $CETScoreOutOf = 0;
                                    }

                                    $AcademicId = $_POST['select_Academic_Session_Id'];
                                    $BranchId = $_POST['select_Branch'];
                                    $Semester = $_POST['select_Semester'];
                                    $RollNo = $_POST['txt_RollNo'];

                                    $sql1 = "INSERT INTO student_master(Student_College_Id, First_Name, Middle_Name, Last_Name, Date_Of_Birth, Gender, Contact_No, Email_Id, Address, Class_10_Percentage, From_Class12_Or_Diploma, Class_12_Percentage, Diploma_Percentage, JEE_Marks, JEE_Out_Of, CET_Marks, CET_Out_Of, Student_Status) VALUES('" . $CollegeId . "', '" . $FirstName . "','" . $MiddleName . "','" . $LastName . "','" . $DateOfBirth . "','" . $Gender . "','" . $ContactNo . "','" . $EmailId . "','" . $Address . "'," . $Class10Percentage . ",'" . $DiplomaStudent_Or_Class12 . "'," . $Class12Percentage . "," . $DiplomaPercentage . "," . $JEEScore . "," . $JEEScoreOutOf . "," . $CETScore . "," . $CETScoreOutOf . ",'" . $StudentStatus . "')";

                                    if ($con->query($sql1) === TRUE) {

                                        $sql2 = "SELECT max(Student_Id) as id from student_master";
                                        $result2 = $con->query($sql2);
                                        $row2 = $result2->fetch_assoc();

                                        $StudentId = $row2['id'];
                                        $StudentClassStatus = "Active";

                                        $sql3 = "INSERT INTO student_class(Student_Id, Academic_Id, Branch_Id, Semester, Roll_No, Student_Class_Status) VALUES(" . $StudentId . "," . $AcademicId . "," . $BranchId . "," . $Semester . "," . $RollNo . ",'" . $StudentClassStatus . "')";

                                        $StudentLoginStatus = "Active";

                                        if ($con->query($sql3) === TRUE) {

                                            $sql4 = "INSERT INTO student_login(Student_Id, Student_Username, Student_Password, Student_Login_Status) VALUES(" . $StudentId . ", 'S" . $CollegeId . "', 'S" . $CollegeId . "', '" . $StudentLoginStatus . "')";

                                            if ($con->query($sql4) === TRUE) {
                                                echo "<script> location.href='Index.php'</script>";
                                            } else {
                                                echo "<br>error: " . $sql4 . "<br>" . $con->error;
                                            }
                                        } else {
                                            echo "<br>error: " . $sql3 . "<br>" . $con->error;
                                        }
                                    } else {
                                        echo "<br>error: " . $sql1 . "<br>" . $con->error;
                                    }
                                }
                                ?>

                                <input type="button" value="Back To List" onclick="window.location.href='Index.php'" class="btn btn-primary" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
    </div>

    <!-- side nav js -->
    <script src='../../js/SidebarNav.min.js' type='text/javascript'></script>
    <script>
        $('.sidebar-menu').SidebarNav()
    </script>
    <!-- //side nav js -->

    <!-- Classie -->
    <!-- for toggle left push menu script -->
    <script src="../../js/classie.js"></script>
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
    <script src="../../js/jquery.nicescroll.js"></script>
    <script src="../../js/scripts.js"></script>
    <!--//scrolling js-->

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.js"> </script>

    <script>
        $(".diploma-form-group").hide();

        $("#select_IsDiplomaStudent").change(function() {
            let isDiplomaStudent = $("#select_IsDiplomaStudent").val();

            if (isDiplomaStudent == "Diploma") {
                $(".diploma-form-group").show();
                $(".class12-form-group").hide();
            } else {
                $(".diploma-form-group").hide();
                $(".class12-form-group").show();
            }
        });

        $("#select_Year").change(function() {
            let year = parseInt($("#select_Year").val());
            $("#select_Semester").empty();

            if (year == 0) {
                let html = "<option value='0'>--Select--</option>" +
                    "<option value='1'>Semester 1</option>" +
                    "<option value='2'>Semester 2</option>" +
                    "<option value='3'>Semester 3</option>" +
                    "<option value='4'>Semester 4</option>" +
                    "<option value='5'>Semester 5</option>" +
                    "<option value='6'>Semester 6</option>" +
                    "<option value='7'>Semester 7</option>" +
                    "<option value='8'>Semester 8</option>";
                $("#select_Semester").append(html);
            } else {
                let html = "";
                switch (year) {
                    case 1:
                        html = "<option value='1'>Semester 1</option><option value='2'>Semester 2</option>"
                        break;
                    case 2:
                        html = "<option value='3'>Semester 3</option><option value='4'>Semester 4</option>"
                        break;
                    case 3:
                        html = "<option value='5'>Semester 5</option><option value='6'>Semester 6</option>"
                        break;
                    case 4:
                        html = "<option value='7'>Semester 7</option><option value='8'>Semester 8</option>"
                        break;
                }

                $("#select_Semester").append(html);
            }
        });

        $("#select_Semester").change(function() {

            let select_Year = document.getElementById("select_Year");
            let options_Year = select_Year.options;

            let Semester = parseInt($("#select_Semester").val());

            if (Semester == 1 || Semester == 2) {
                for (let j = 0, option; option = options_Year[j]; j++) {
                    if (option.value == 1) {
                        select_Year.selectedIndex = j;
                    }
                }
            } else if (Semester == 3 || Semester == 4) {
                for (let j = 0, option; option = options_Year[j]; j++) {
                    if (option.value == 2) {
                        select_Year.selectedIndex = j;
                    }
                }
            } else if (Semester == 5 || Semester == 6) {
                for (let j = 0, option; option = options_Year[j]; j++) {
                    if (option.value == 3) {
                        select_Year.selectedIndex = j;
                    }
                }
            } else if (Semester == 7 || Semester == 8) {
                for (let j = 0, option; option = options_Year[j]; j++) {
                    if (option.value == 4) {
                        select_Year.selectedIndex = j;
                    }
                }
            }
        });
    </script>
    <script>
        function logout() {
            window.location.href = '../../Login.php';
        }
    </script>
</body>

</html>