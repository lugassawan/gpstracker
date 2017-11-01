<!DOCTYPE html>
<html>
<?php
    include('inc/koneksi.php');
?>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>GPS Tracker</title>	

		<meta name="keywords" content="GPS Tracker" />
		<meta name="description" content="GTrack - GPS Tracker for vehicle">
		<meta name="author" content="ANS LAB">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">

		<!-- Theme CSS -->
		

		<!-- Skin CSS -->
		<!-- <link rel="stylesheet" href="css/skins/default.css"> -->

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/login.css">

    </head>
    <body class="app flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <a href="index.php">
                    <img alt="GTrack" class="navbar-brand" width="200" height="70" src="img/logos/logo.png">   
                </a>
            </div>
            <form method="POST" action="auth/login_act.php">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card-group mb-0">
                            <div class="card p-4">
                                <div class="card-block">
                                    <h1>Login</h1>
                                    <p class="text-muted">Sign In to your account</p>
                                    <div class="input-group mb-3">
                                        <span class="input-group-addon"><i class="fa fa-user"></i>
                                        </span>
                                        <input type="text" name="uname" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i>
                                        </span>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary px-4">Login</button>
                                        </div>
                                        <div class="col-6 text-right">
                                            <button type="button" class="btn btn-link px-0">Forgot password?</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-inverse card-primary py-5 d-md-down-none" style="width:44%">
                                <div class="card-block text-center">
                                    <div>
                                        <h2>Sign up</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a href="register.php">
                                            <button type="button" class="btn btn-primary active mt-3">Register Now!</button>
                                        </a>
                                        </br></br>
                                        <a href="index.php" style="color:#ffffff;"><p>Back</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
    </body>
</html>