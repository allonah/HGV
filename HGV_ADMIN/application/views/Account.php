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

    <script type="text/javascript" src="<?php echo base_url("assets_admin/plugins/jquery-3.1.1.min.js"); ?>"></script>
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
                    <h1 class="page-header">User</h1>
                </div>
                <!--End Page Header -->
            </div>
        <div class="row">
                <div class="col-lg-12">
                    <!--Timeline -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-user fa-fw"></i>User
                        </div>
                <div class="panel-body">
						<div class="row">    
							<div class="col-xs-8 col-xs-offset-2">
								<div class="input-group">
									<div class="input-group-btn search-panel">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											<span id="search_concept">Filter by</span> <span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
										  <li><a href="#user_id">User ID</a></li>
										  <li><a href="#username">Username</a></li>
										  <li><a href="#firstname">Firstname</a></li>
										  <li><a href="#lastname">Lastname  </a></li>
										  <li><a href="#usertype">User type</a></li>
										</ul>
									</div>
									<input type="hidden" name="search_param" value="all" id="search_param">         
									<input type="text" class="form-control" name="x" placeholder="Search term...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
									</span>
								</div>
							</div>
						</div>
					</div>

                       
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>User ID</th>
                                                    <th>Username</th>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Password</th>
                                                    <th>User type</th>
                                                    <th>Option</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  
                                                    foreach ($user->result() as $row)  
                                                    {  
                                               ?>
                                                <tr>
                                                    <td><?php echo $row->user_id;?></td>
                                                    <td><?php echo $row->username;?></td>
                                                    <td><?php echo $row->first_name;?></td>
                                                    <td><?php echo $row->last_name;?></td>
                                                    <td></td>
                                                    <td><?php echo $row->user_type;?></td>
                                                    <td><button type="button" class="btn btn-info btn-ms" data-toggle="modal" data-target="#myModal1">Edit</button></td>
                                                </tr>
                                                 <?php }  
                                                  ?>
                                                
                <div id="myModal1" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit User</h4>
                          </div>
                            
                            
                            
                          <div class="modal-body">                          
                            
                            <form class="form-inline">
                              <div class="form-group">
                                  <div class="col-lg-offset-1" align="left">
                                    <?php echo form_open('User_control/add_user'); ?>
                                      
                                    <?php echo form_label('Username :'); ?> <?php echo form_error('uname'); ?><br />
                                    <?php echo form_input(array('id' => 'username', 'name' => 'username')); ?><br />
                                      
                                    <?php echo form_label('First name :'); ?> <?php echo form_error('fname'); ?><br />
                                    <?php echo form_input(array('id' => 'fname', 'name' => 'fname')); ?><br />
                                    
                                    <?php echo form_label('Last name :'); ?> <?php echo form_error('lname'); ?><br />
                                    <?php echo form_input(array('id' => 'lname', 'name' => 'lname')); ?><br />
                                   
                                    <?php echo form_label('Password :'); ?> <?php echo form_error('password'); ?><br />
                                    <?php echo form_input(array('id' => 'pword', 'name' => 'pword')); ?><br />
                                    
                                    <?php echo form_label('User Type :'); ?> <?php echo form_error('utype'); ?><br />
                                    <?php echo form_input(array('id' => 'type', 'name' => 'type')); ?><br />  
                                       

                                  </div>
									
									<div class="row"> 
                                      <div class="col-mg-offset-12" align="center">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                             <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
                                            <?php echo form_close(); ?><br/>

                                           
                                        </div>
                                      </div>
                                  </div>				
                                                

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
					<div class="panel-body">
                            <div class="row">		
								<div class="col-lg-12">	
									<nav aria-label="Page navigation">
									  <ul class="pagination">
										<li>
										  <a href="#" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
										  </a>
										</li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li>
										  <a href="#" aria-label="Next">
											<span aria-hidden="true">&raquo;</span>
										  </a>
										</li>
									  </ul>
									</nav>
								</div>
							</div>
				    </div>
				</div>    
                <button id="btn_AddUser" type="button" class="btn btn-primary btn-lg" onClick="location.href='<?php echo base_url();?>Hgv_controller/AddNewAccount'">Add User
                </button>
                        <!-- ADDING USERS-->
               <div id="adduser_modal" class="modal fade">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form id="addUser_form" action="" method="post" class="form-horizontal">
                          <input type="hidden" name="txtId" value="0">
                          <div class="form-group">
                              <label for="username" class="label-control col-md-4">Username</label>
        			<div class="col-md-8">
        				<input type="text" name="username" class="form-control">
                                </div>
                         </div>
                          
                          <div class="form-group">
                              <label for="firstname" class="label-control col-md-4">First Name</label>
        			<div class="col-md-8">
        				<input type="text" name="firstname" class="form-control">
                                </div>
                         </div>
                          
                          <div class="form-group">
                              <label for="lastname" class="label-control col-md-4">Last Name</label>
        			<div class="col-md-8">
        				<input type="text" name="lastname" class="form-control">
                                </div>
                         </div>
                          
                          <div class="form-group">
                              <label for="password" class="label-control col-md-4">Password</label>
        			<div class="col-md-8">
        				<input type="password" name="password" class="form-control">
                                </div>
                         </div>
                          
                          <div class="form-group">
                              <label for="usertype" class="label-control col-md-4">User Type</label>
        			<div class="col-md-8">
        				<input type="text" name="usertype" class="form-control">
                                </div>
                         </div>
                          
                      </form>    
                    <div class="modal-footer">
                        <button id="saveuser_btn" type="button" class="btn btn-primary">Add User</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>



    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
   <!-- <script type="text/javascript" src="<?//php echo base_url("assets_admin/plugins/jquery-1.10.2.js"); ?>"></script>-->
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

   
                 
                //validate entry
               /* 
                var hgv_username = $('input[name=username]');
                var hgv_firstname = $('input[name=firstname]');
                var hgv_lastname = $('input[name=lastname]');
                var hgv_password = $('input[name=password]');
                var hgv_usertype = $('input[name=usertype]');
                var result = '12345';
                
                /*
                if(hgv_username.val()==''){
                    hgv_username.parent().parent().addClass('has-error');
                    }else{
                    hgv_username.parent().parent().removeClass('has-error'); 
                    result += '1';
                    }
                  
                 if(hgv_firstname.val()==''){
                    hgv_firstname.parent().parent().addClass('has-error');
                    }else{
                    hgv_firstname.parent().parent().removeClass('has-error'); 
                    result += '2';
                    }
                
                if(hgv_lastname.val()==''){
                    hgv_lastname.parent().parent().addClass('has-error');
                    }else{
                    hgv_lastname.parent().parent().removeClass('has-error'); 
                    result += '3';
                    }
                    
                    
                if(hgv_password.val()==''){
                    hgv_password.parent().parent().addClass('has-error');
                    }else{
                    hgv_password.parent().parent().removeClass('has-error'); 
                    result += '4';
                    }
                    
                    
                if(hgv_usertype.val()==''){
                    hgv_usertype.parent().parent().addClass('has-error');
                    }else{
                    hgv_usertype.parent().parent().removeClass('has-error'); 
                    result += '5';
                    }
                  
                 
                if(result=='12345'){
                      $.ajax({
                          method: 'POST',
                          url: url,
                          data: data,
                          async: true,
                          dataType: 'jsonp',             
                          success: function(response){ 
                              if(response.success){
                                
                                  $('#adduser_modal').modal('hide');
                                  $('#addUser_form')[0].reset();
							
                                        if(response.type=='add'){
						var type = 'added'
						}else if(response.type=='update'){
							var type ="updated"
							}
					$('.alert-success').html('User '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
							//showAllEmployee();
					}else{
						alert('Error');
					}
                           },
                          error: function(){
                              alert('Could not add data');
                            }
                         
                     });
 
               } */
     //       }); 
  //      }
//} );
        
    </script>
        
</body>

</html>
