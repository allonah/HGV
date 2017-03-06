<!DOCTYPE html>
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
                        <li><a href="#"> <i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
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
                    <li class="">
                        <a href="<?php echo site_url('Hgv_controller/index');?>"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li class="selected">
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
                    <h1 class="page-header">Add New User</h1>
                </div>
                <!--End Page Header -->
            </div>
    



<!-- Form Name -->
<?php echo validation_errors(); ?>
<?php echo form_open('Hgv_controller/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
			<label for="user_type" class="col-md-4 control-label">User Type</label>
			<div class="col-md-8">
				<select name="user_type" class="form-control">
					<option value="">select</option>
					<?php 
					$user_type_values = array(
						'admin'=>'Administrator',
						'manager'=>'Manager',
						'clerk'=>'Clerk',
					);

					foreach($user_type_values as $value => $display_text)
					{
						$selected = ($value == $this->input->post('user_type')) ? ' selected="selected"' : "";

						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					} 
					?>
				</select>
			</div>
		</div>
	<div class="form-group">
		<label for="username" class="col-md-4 control-label">Username</label>
		<div class="col-md-8">
			<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
		</div>
	</div>
	<div class="form-group">
		<label for="first_name" class="col-md-4 control-label">First Name</label>
		<div class="col-md-8">
			<input type="text" name="first_name" value="<?php echo $this->input->post('first_name'); ?>" class="form-control" id="first_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="l_name" class="col-md-4 control-label">Last Name</label>
		<div class="col-md-8">
			<input type="text" name="last_name" value="<?php echo $this->input->post('last_name'); ?>" class="form-control" id="last_name" />
		</div>
	</div>
	<div class="form-group">
			<label for="branch" class="col-md-4 control-label">Branch</label>
			<div class="col-md-8">
				<select name="branch_id" class="form-control">
					<option value="">select</option>
					<?php 
					$branch_values = array(
						'1'=>'HGV',
                                                '2'=>'Little Gab'
                                            
					);

					foreach($branch_values as $value => $display_text)
					{
						$selected = ($value == $this->input->post('branch_id')) ? ' selected="selected"' : "";

						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					} 
					?>
				</select>
			</div>
		</div>
	
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div
        
        <div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="button" class="btn btn-danger" onClick="location.href='<?php echo base_url();?>Hgv_controller/Account'">Cancel</button>
        </div>
	</div>

<?php echo form_close(); ?>
         
      
                
                                   



    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script type="text/javascript" src="<?php echo base_url("assets_admin/plugins/jquery-1.10.2.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets_admin/plugins/bootstrap/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets_admin/plugins/metisMenu/jquery.metisMenu.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets_admin/plugins/pace/pace.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets_admin/scripts/siminta.js"); ?>"></script>
    <!-- Page-Level Plugin Scripts-->
    <script type="text/javascript"  src="<?php echo base_url("assets_admin/plugins/dataTables/jquery.dataTables.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets_admin/plugins/dataTables/dataTables.bootstrap.js"); ?>"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
