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
                                <h4>Training Lectures</h4>
                            </div>
                            <div class="form-body">
                                <form class="form-horizontal" action="" method="POST">
                                    <div class="form-group">
                                        <label for="txt_LectureName" class="col-sm-2 control-label">Lecture Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_LectureName" name="txt_LectureName" placeholder="Lecture Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_LectureCode" class="col-sm-2 control-label">Lecture Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_LectureCode" name="txt_LectureCode" placeholder="Lecture Code">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_LectureDateTime" class="col-sm-2 control-label">Lecture Date</label>
                                        <div class="col-sm-9">
                                            <input type="datetime-local" class="form-control" id="txt_LectureDateTime" name="txt_LectureDateTime">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_LectureLink" class="col-sm-2 control-label">Lecture Link</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_LectureLink" name="txt_LectureLink" placeholder="Lecture Link">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select_LectureStatus" class="col-sm-2 control-label">Lecture Status</label>
                                        <div class="col-sm-9">
                                            <select id="select_LectureStatus" name="select_LectureStatus" class="form-control">
                                                <option value="Active">Active</option>
                                                <option value="De-Active">De-Active</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr color="grey">
                                    <div class="my-4">
                                        <h4>Open For Branches</h4>
                                    </div>
                                    <hr color="grey">

                                    <div class="form-row">
                                        <table class="table table-striped table-hover">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Branch</th>
                                                    <th>Code</th>
                                                    <th>
                                                        <!-- <input type='checkbox' id='radio_CompanyOpenForBranchId_SelectAllBranches' /> -->
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="company-branches-tbody">
                                                <?php

                                                $sql1 = "SELECT * FROM Branch_Master WHERE Branch_Status = 'Active'";
                                                $result1 = $con->query($sql1);

                                                $rowCount = 0;

                                                while ($row1 = mysqli_fetch_array($result1)) {
                                                    $rowCount++;
                                                    echo "<div>";
                                                    echo "<tr>";
                                                    echo "<th>" . $rowCount . "</td>";
                                                    echo "<th>" . $row1['Branch_Name'] . "</th>";
                                                    echo "<th>" . $row1['Branch_Code'] . "</th>";
                                                    // echo "<th><input type='checkbox'/></th>";
                                                    echo "<th></th>";
                                                    echo "</tr>";

                                                    for ($semester = 1; $semester <= 8; $semester++) {
                                                        echo "<tr>";
                                                        echo "<td>" . chr(64 + $semester) . "</td>";
                                                        echo "<td>Semester " . $semester . "</td>";
                                                        echo "<td></td>";
                                                        echo "<td><input type='checkbox' name='checkbox_LectureOpenForBranchId[]' value='" . $row1['Branch_Id'] . "-" . $semester . "'/></td>";
                                                        echo "</tr>";
                                                    }

                                                    echo "</div>";
                                                }

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div>
                                        <center>
                                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                            <button type="reset" class="btn btn-warning">Reset</button>
                                        </center>
                                    </div>

                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $LectureName = $_POST['txt_LectureName'];
                                        $LectureCode = $_POST['txt_LectureCode'];
                                        $LectureDateTime = $_POST['txt_LectureDateTime'];
                                        $LectureLink = $_POST['txt_LectureLink'];
                                        $LectureStatus = $_POST['select_LectureStatus'];

                                        $sql1 = "INSERT INTO Training_Lecture(Lecture_Name, Lecture_Code, Lecture_DateTime, Lecture_Link, Lecture_Status) VALUES('" . $LectureName . "', '" . $LectureCode . "', '" . $LectureDateTime . "', '" . $LectureLink . "', '" . $LectureStatus . "')";

                                        if ($con->query($sql1) === TRUE) {

                                            $sql2 = "SELECT max(Training_Lecture_Id) as id from Training_Lecture";
                                            $result2 = $con->query($sql2);
                                            $row2 = $result2->fetch_assoc();

                                            $LectureId = $row2['id'];

                                            $LectureOpenForBranches = $_POST['checkbox_LectureOpenForBranchId'];

                                            for ($i = 0; $i < count($LectureOpenForBranches); $i++) {
                                                $LectureOpenForBranchAndSemester = explode("-", $LectureOpenForBranches[$i], 2);
                                                $BranchId = $LectureOpenForBranchAndSemester[0];
                                                $Semester = $LectureOpenForBranchAndSemester[1];
                                                $sql3 = "INSERT INTO Training_Lecture_Branch(Training_Lecture_Id, Branch_Id, Semester) VALUES(" . $LectureId . ", " . $BranchId . ", " . $Semester . ")";
                                                $con->query($sql3);
                                            }

                                            echo "<script> location.href='Index.php'; </script>";
                                        } else {
                                            echo "<br>error: " . $sql1 . "<br>" . $con->error;
                                        }
                                    }
                                    ?>

                                </form>
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
        function logout() {
            window.location.href = '../../Login.php';
        }
    </script>
</body>

</html>