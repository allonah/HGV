
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HGV COPY CENTER</title>
        <!-- Core CSS - Include with every page -->
        <link href="<?php echo base_url("assets_admin/plugins/bootstrap/bootstrap.css"); ?>" rel="stylesheet" />
        <link href="<?php echo base_url("assets_admin/font-awesome/css/font-awesome.css"); ?>" rel="stylesheet" />
        <link href="<?php echo base_url("assets_admin/plugins/pace/pace-theme-big-counter.css"); ?>" rel="stylesheet" />
        <link href="<?php echo base_url("assets_admin/css/style.css"); ?>" rel="stylesheet" />
        <link href="<?php echo base_url("assets_admin/css/main-style.css"); ?>" rel="stylesheet" />

        <!-- Page-Level CSS -->
        <link href="<?php echo base_url("assets_admin/plugins/dataTables/dataTables.bootstrap.css"); ?>" rel="stylesheet" />

       </head>
    <body>
        <!--  wrapper -->
        <div id="wrapper">
            <!-- navbar top -->
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
                <!-- navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="<?php echo base_url("assets_admin/img/hgv.png"); ?>" alt="hgv_logo" />
                    </a>
                </div>
                <!-- end navbar-header -->
                <!-- navbar-top-links -->
                <ul class="nav navbar-top-links navbar-right">
                    <!-- main dropdown -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                        </a>
                        <!-- dropdown alerts-->
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i>New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i>Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i>New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- end dropdown-alerts -->
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-3x"></i>
                        </a>
                        <!-- dropdown user-->
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a onClick="location.href='<?php echo base_url();?>Hgv_controller/Logout'"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                            </li>
                        </ul>
                        <!-- end dropdown-user -->
                    </li>
                    <!-- end main dropdown -->
                </ul>
                <!-- end navbar-top-links -->

            </nav>
            <!-- end navbar top -->

            <!-- navbar side -->
            <nav class="navbar-default navbar-static-side" role="navigation">
                <!-- sidebar-collapse -->
                <div class="sidebar-collapse">
                    <!-- side-menu -->
                    <ul class="nav" id="side-menu">

                        <li class="selected">
                            <a href="<?php echo site_url('Hgv_controller/dashboard');?>"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Hgv_controller/Account');?>"> <i class="fa fa-user fa-fw"></i>Account</a>
                        </li>
                                            <li>
                            <a href="<?php echo site_url('Hgv_controller/db_bkup');?> "><i class="fa fa-bar-chart-o fa-fw"></i>Database back up</a>
                        </li>
                                        <li>
                            <a href="<?php echo site_url('Hgv_controller/settings');?> "> <i class="fa fa-edit fa-fw"></i>Settings</a>
                        </li>
                    </ul>
                    <!-- end side-menu -->
                </div>
                <!-- end sidebar-collapse -->
            </nav>
            <!-- end navbar side -->
            <!--  page-wrapper -->
            <div id="page-wrapper">

                <div class="row">
                    <!-- Page Header -->
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!--End Page Header -->
                </div>

                <div class="row">
                    <!-- Welcome -->
                    <div class="col-lg-12">
                        <div class="alert alert-info">
                            <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b>Jonny Deen </b>
     <i class="fa  fa-pencil"></i><b>&nbsp;2,000 </b>Support Tickets Pending to Answere. nbsp;
                        </div>
                    </div>
                    <!--end  Welcome -->
                </div>


                <div class="row">
                    <!--quick info section -->
                    <div class="col-lg-3">
                        <div class="alert alert-danger text-center">
                            <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>20 </b>Meetings Sheduled This Month

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="alert alert-success text-center">
                            <i class="fa  fa-beer fa-3x"></i>&nbsp;<b>27 % </b>Profit Recorded in This Month  
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="alert alert-info text-center">
                            <i class="fa fa-rss fa-3x"></i>&nbsp;<b>1,900</b> New Subscribers This Year

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="alert alert-warning text-center">
                            <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>2,000 $ </b>Payment Dues For Rejected Items
                        </div>
                    </div>
                    <!--end quick info section -->
                </div>

                <div class="row">
                    <div class="col-lg-8">




                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i>Simple Table Example
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                            Actions
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>3326</td>
                                                        <td>10/21/2013</td>
                                                        <td>3:29 PM</td>
                                                        <td>$321.33</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3325</td>
                                                        <td>10/21/2013</td>
                                                        <td>3:20 PM</td>
                                                        <td>$234.34</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3324</td>
                                                        <td>10/21/2013</td>
                                                        <td>3:03 PM</td>
                                                        <td>$724.17</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3323</td>
                                                        <td>10/21/2013</td>
                                                        <td>3:00 PM</td>
                                                        <td>$23.71</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3322</td>
                                                        <td>10/21/2013</td>
                                                        <td>2:49 PM</td>
                                                        <td>$8345.23</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!--End simple table example -->

                    </div>

                    <div class="col-lg-4">
                        <div class="panel panel-primary text-center no-boder">
                            <div class="panel-body yellow">
                                <i class="fa fa-bar-chart-o fa-3x"></i>
                                <h3>20,741 </h3>
                            </div>
                            <div class="panel-footer">
                                <span class="panel-eyecandy-title">Daily User Visits
                                </span>
                            </div>
                        </div>
                        <div class="panel panel-primary text-center no-boder">
                            <div class="panel-body blue">
                                <i class="fa fa-pencil-square-o fa-3x"></i>
                                <h3>2,060 </h3>
                            </div>
                            <div class="panel-footer">
                                <span class="panel-eyecandy-title">Pending Orders Found
                                </span>
                            </div>
                        </div>
                        <div class="panel panel-primary text-center no-boder">
                            <div class="panel-body green">
                                <i class="fa fa fa-floppy-o fa-3x"></i>
                                <h3>20 GB</h3>
                            </div>
                            <div class="panel-footer">
                                <span class="panel-eyecandy-title">New Data Uploaded
                                </span>
                            </div>
                        </div>
                        <div class="panel panel-primary text-center no-boder">
                            <div class="panel-body red">
                                <i class="fa fa-thumbs-up fa-3x"></i>
                                <h3>2,700 </h3>
                            </div>
                            <div class="panel-footer">
                                <span class="panel-eyecandy-title">New User Registered
                                </span>
                            </div>
                        </div>







                    </div>

                </div>


















            </div>
            <!-- end page-wrapper -->

        </div>
        <!-- end wrapper -->

        <!-- Core Scripts - Include with every page -->
        <script type="text/javascript" src="<?php echo base_url("assets_admin/plugins/jquery-1.10.2.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets_admin/plugins/bootstrap/bootstrap.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets_admin/plugins/metisMenu/jquery.metisMenu.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets_admin/plugins/pace/pace.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets_admin/scripts/siminta.js"); ?>"></script>
        <!-- Page-Level Plugin Scripts-->
        <script src="<?php echo base_url("assets/plugins/morris/raphael-2.1.0.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/plugins/morris/morris.js"); ?>"></script>
        <script src="<?php echo base_url("assets/scripts/dashboard-demo.js"); ?>"></script>




    </body>

</html>
