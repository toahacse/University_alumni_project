<?php
session_start();
if(empty($_SESSION['user_email'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Dhaka University Alumni Association</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php echo $_SESSION['User'];?>
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> News Info<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_news.php"><i class="fa fa-dashboard fa-fw"></i>Add News</a>
                            </li>
                            <li>
                                <a href="manage_news.php"><i class="fa fa-dashboard fa-fw"></i>Manage News</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Committee meeting<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_meeting.php"><i class="fa fa-dashboard fa-fw"></i>Add meeting</a>
                            </li>
                            <li>
                                <a href="manage_meeting.php"><i class="fa fa-dashboard fa-fw"></i>Manage meeting</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Upcoming Events<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_events.php"><i class="fa fa-dashboard fa-fw"></i>Add Events</a>
                            </li>
                            <li>
                                <a href="manage_events.php"><i class="fa fa-dashboard fa-fw"></i>Manage Events</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Scholarship<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_scholarship.php"><i class="fa fa-dashboard fa-fw"></i>Add Scholarship</a>
                            </li>
                            <li>
                                <a href="manage_scholarship.php"><i class="fa fa-dashboard fa-fw"></i>Manage Scholarship</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Documents<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_documents.php"><i class="fa fa-dashboard fa-fw"></i>Add Documents</a>
                            </li>
                            <li>
                                <a href="manage_documents.php"><i class="fa fa-dashboard fa-fw"></i>Manage Documents</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Notice<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_notice.php"><i class="fa fa-dashboard fa-fw"></i>Add Notice</a>
                            </li>
                            <li>
                                <a href="manage_notice.php"><i class="fa fa-dashboard fa-fw"></i>Manage Notice</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Gallery<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_gallery.php"><i class="fa fa-dashboard fa-fw"></i>Add Gallery</a>
                            </li>
                            <li>
                                <a href="manage_gallery.php"><i class="fa fa-dashboard fa-fw"></i>Manage Gallery</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Journey Of DUAA<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_journey_of_duaa.php"><i class="fa fa-dashboard fa-fw"></i>Add Journey Of DUAA</a>
                            </li>
                            <li>
                                <a href="manage_journey_of_duaa.php"><i class="fa fa-dashboard fa-fw"></i>Manage Journey Of DUAA</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Committee<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_committe.php"><i class="fa fa-dashboard fa-fw"></i>Add Committee</a>
                            </li>
                            <li>
                                <a href="manage_committie.php"><i class="fa fa-dashboard fa-fw"></i>Manage Committee</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Activities<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_activities.php"><i class="fa fa-dashboard fa-fw"></i>Add Activities</a>
                            </li>
                            <li>
                                <a href="manage_activities.php"><i class="fa fa-dashboard fa-fw"></i>Manage Activities</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="view_contact.php"><i class="fa fa-bar-chart-o fa-fw"></i> View All Contact Message</a>
                    </li>


                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">


