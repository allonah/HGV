<!DOCTYPE html>
<html>
<?php
    if (isset($this->session->userdata['logged_in'])) {

    header("location: http://localhost/HGV_ADMIN/user_login_process");
}
?>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url("assets_admin/plugins/bootstrap/bootstrap.css"); ?>" rel="stylesheet" />
    <link href="<?php echo base_url("assets_admin/font-awesome/css/font-awesome.css"); ?>" rel="stylesheet" />
    <link href="<?php echo base_url("assets_admin/plugins/pace/pace-theme-big-counter.css"); ?>" rel="stylesheet" />
    <link href="<?php echo base_url("assets_admin/css/style.css"); ?>" rel="stylesheet" />
    <link href="<?php echo base_url("assets_admin/css/main-style.css"); ?>" rel="stylesheet" />

    <!-- Page-Level CSS -->
    <link href="<?php echo base_url("assets_admin/plugins/dataTables/dataTables.bootstrap.css"); ?>" rel="stylesheet" />

      
      
</head>

<body class="body-Login-back">
    
    <?php
        if (isset($logout_message)) {
            echo "<div class='message'>";
            echo $logout_message;
            echo "</div>";
        }
    ?>
    <?php
        if (isset($message_display)) {
            echo "<div class='message'>";
            echo $message_display;
            echo "</div>";
        }
    ?>
    
    <div class="container">
       
        <div class ="image" >
            <div class="col-md-1 col-md-offset-1 text-center logo-margin ">
             <img src="<?php echo base_url("assets_admin/img/hgv.png"); ?>" alt="hgv_logo" />
                </div>
		</div>
        <div class="row">    
			<div class="col-md-5 col-md-offset-5">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo base_url();?>Hgv_controller/Login" method="POST">
                            
                            
                            <fieldset>
                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" value="<?php echo $this->input->post('username'); ?>" id="username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" value="<?php echo $this->input->post('password'); ?>" id="password" name="password">
                                </div>
                               
                                <!-- Change this to a button or input when using this as a form -->
                               <input type="submit" value= "Login" class="btn btn-primary">
                            </fieldset>
                            
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url("assets/plugins/jquery-1.10.2.js"); ?>" ></script>
    <script src="<?php echo base_url("assets/plugins/bootstrap/bootstrap.min.js"); ?>" ></script>
    <script src="<?php echo base_url("assets/plugins/metisMenu/jquery.metisMenu.js"); ?>" ></script>

    
    
</body>

</html>
