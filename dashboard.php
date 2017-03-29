<?php 
    include('../include/session.php');
    include('logic/count.php'); 

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HGV Copy Center</title>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	 <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

       <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/vertical-offset.css" rel="stylesheet">

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
                <a class="navbar-brand" href="dashboard.php">HGV Copy Center</a>
            </div>
             <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-alert" > 
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['login_user'] ?></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="change_password.php"><i class="fa fa-eraser fa-fw"></i> Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="../include/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li> 
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>

            <ul class="nav  navbar-top-links navbar-right ">
                <li class="dropdown">
                    <a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/charts.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/charts.html#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/charts.html#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/charts.html#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/charts.html#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/charts.html#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="https://blackrockdigital.github.io/startbootstrap-sb-admin/charts.html#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="">View All</a>
                        </li>
                    </ul>
                </li>
                </ul>
        
        <div class="menu">
           <?php include 'navbar-sidemenu.php'; ?>
        </div>
           
             
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            HGV
                            <small>Dashboard</small>
                        </h1>
                    </div>
                </div>


            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-10 text-left">
                                    <div class="huge"><?php echo $supply_count  ?></div>
                                    <div>Inventory Count</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"> <a href="supplies.php">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                </div>
                                <div class="col-xs-10 text-left">
                                    <div class="huge"><?php echo $order_count  ?></div>
                                    <div>Pending Orders</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="orders.php">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    
                                </div>
                                <div class="col-xs-10 text-left">
                                    <div class="huge">85</div>
                                    <div>Used Item</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            

        <div class="vert-offset-top-5">
            <div class="row">
                <div class="col-lg-4 text-left">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Recently Added Supplies
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-stripped table-bordered table-hover">
                                    <thead class="t_sortable">
                                        <tr>
                                          <th>Item Name</th>
                                          <th>Quantity</th>
                                          <th>Unit</th>
                                        </tr>
                                </thead>
                                <tbody>
                                   
                                    <tr>
                                     
                                         <?php
                                            include ('logic/recently_added.php');
                                          ?>
                        
                                    </tr>
                                  
                                 
                               
                                </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4 text-left">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Recently Ordered Supplies
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-stripped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Item Name</th>
                                            <th>Quantity</th>
                                            <th>Unit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <?php
                                            include ('logic/recently_ordered.php');
                                          ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4 text-left">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Recently Used Supplies
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-stripped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Item Name</th>
                                            <th>Quantity</th>
                                            <th>Unit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Marrocco 12 x 18</td>
                                            <td>50</td>
                                            <td>reams</td>
                                        </tr>
                                        <tr>
                                            <td>PVC Short</td>
                                            <td>20</td>
                                            <td>reams</td>

                                        </tr>
                                        <tr>
                                            <td>A4 Paper</td>
                                            <td>15</td>
                                            <td>reams</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
                
                
                
                
                

            </div>
            <!-- /.row -->
            
            
             <div class="col-lg-4 text-left">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Recently Transferred Supplies
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-stripped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Item Name</th>
                                            <th>Quantity</th>
                                            <th>To Branch</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Marrocco 12 x 18</td>
                                            <td>200</td>
                                            <td>Little Gab</td>
                                        </tr>
                                        <tr>
                                            <td>PVC Short</td>
                                            <td>150</td>
                                            <td>Little Gab</td>

                                        </tr>
                                        <tr>
                                            <td>A4 Paper</td>
                                            <td>250</td>
                                            <td>Little Gab</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            
            
             <div class="col-lg-4 text-left">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Supply Alerts
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-stripped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Item Name</th>
                                            <th>Quantity</th>
                                            <th>Critical Point</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Marrocco 12 x 18</td>
                                            <td>5</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>PVC Short</td>
                                            <td>10</td>
                                            <td>8</td>

                                        </tr>
                                        <tr>
                                            <td>A4 Paper</td>
                                            <td>15</td>
                                            <td>15</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

         </div> 
            <!-- vert offset -->

          </div>
            <!-- /.container-fluid -->

                <div>
                    <a href="supplies.php" role="button" type="submit" class="btn btn-primary">
                        <i><img src="images/alert.png" height="50px" width="50px"></i></br>
                        <span><span>Product Alert</span></span>
                    </a>

                    <a href="supplies.php" role="button" type="submit" class="btn btn-primary">
                        <i><img src="images/supplies.png" height="50px" width="75px"></i></br>
                        <span><span>Supplies</span></span>
                    </a>

                    <a href="supplier.php" role="button" type="submit" class="btn btn-primary">
                        <i><img src="images/supplier.png" height="50px" width= "75px"></i></br>
                        <span><span>Supplier</span></span>
                    </a>

                    <a href="overviewchart.php" role="button" type="submit" class="btn btn-primary">
                        <i><img src="images/orders.png" height="50px" width="75px"></i></br>
                        <span><span>Orders</span></span>
                    </a>

                    <a href="supplies.php" role="button" type="submit" class="btn btn-primary">
                        <i><img src="images/reports.png" height="50px" width="75px"></i></br>
                        <span><span>Reports</span></span>
                    </a>

                    <a href="supplies.php" role="button" type="submit" class="btn btn-primary">
                        <i><img src="images/monitoring.png" height="50px" width="75px"></i></br>
                        <span><span>Monitoring</span></span>
                    </a>

                    <a href="supplies.php" role="button" type="submit" class="btn btn-primary">
                        <i><img src="images/settings.png" height="50px" width="75px"></i></br>
                        <span><span>Settings</span></span>
                    </a>

                    <a href="supplies.php" role="button" type="submit" class="btn btn-primary">
                        <i><img src="images/logout.png" height="50px" width="75px"></i></br>
                        <span><span>Logout</span></span>
                    </a>

                </div>

                    



                
             </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	
	<!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	 <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
