<!DOCTYPE html>
<html>

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
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="admin-hgv/index.php" class="btn btn-lg btn-success btn-block">Login</a>
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
