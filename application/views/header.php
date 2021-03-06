<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Leaf Blast CMS | <?php echo $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dist/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dist/css/bootstrap2/bootstrap-switch.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dist/css/bootstrap2/bootstrap-switch.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dist/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<header>
       <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Leafblast CMS</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url(); ?>users/profiles"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>settings"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <li>
                            <a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <!-- Operators -->
                        <li>
                            <a href="#"><i class="fa fa-hand-spock-o fa-fw"></i> Operators<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>operators/">View All</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>operators/add">Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>ratings">Ratings&nbsp;<span class="fa fa-star-o"></a>
                                </li>
                            </ul>
                        </li>
                        <!-- Users -->
                        <li>
                            <a href=""><i class="fa fa-user fa-fw"></i></i> Users<span class="fa arrow"></a>
                            <!-- <a href="<?php echo base_url(); ?>users/"><i class="fa fa-users fa-fw"></i> Users</a> -->
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>users/">View All</a>                                    
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>users/activated/">Active</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>users/deactivated/">Deactivated</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>reports/"><i class="fa fa-user-times fa-fw"></i> Reports</a>
                        </li>
                        <!-- Graphs -->
                        <li>
                            <a href="<?php echo base_url(); ?>graphs/"><i class="fa fa-bar-chart fa-fw"></i> Graphs <span class="fa arrow"></a></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>graphs/size">Size</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>graphs/time">Time</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>notifications"><i class="glyphicon glyphicon-send"></i> Notifications <span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>notifications/all">All</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>notifications/user">User</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>notifications/timezone">Time Zone</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Financial Tables -->
                        <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Financial Tables<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>earnings/year/<?php echo date('Y'); ?>">Total</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>earnings/operators">Per Operator</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>earnings/time">For a Time Period</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Apointments -->
                        <li>
                            <a href="#"><i class="fa fa-space-shuttle fa-fw"></i> Appointments<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>appointments/view">View All</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>appointments/operators">Per Operator</a>
                                </li>
                                <li>
                                    <a href="#time-of-day">Time / Day <span class="fa arrow"></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo base_url(); ?>appointments/year/<?php echo date('Y'); ?>">Year</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>appointments/months">Month</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>appointments/date">Day</a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#status">Status<span class="fa arrow"></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo base_url(); ?>appointments/assigned">Assigned Appointments</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>appointments/unassigned">Unassigned Appointments</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- Packages -->
                        <li>
                            <a href="#"><i class="fa fa-folder-open-o fa-fw"></i> Packages<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>packages/">View All</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>packages/add">Add</a>
                                </li>
                            </ul>
                        </li>
                        <!-- CarMakes -->
                        <li>
                            <a href="<?php echo base_url(); ?>carmakes"><i class="fa fa-cogs fa-fw"></i> Car Makes</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>    
</header>



        <!-- Navigation -->
 
