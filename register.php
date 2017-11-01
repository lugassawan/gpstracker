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
            <form method="POST" action="auth/register_act.php">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card mx-4">
                            <div class="card-block p-4">
                                <h1>Register</h1>
                                <p class="text-muted">Create your account</p>
                                <div class="input-group mb-3">
                                    <span class="input-group-addon"><i class="fa fa-user"></i>
                                    </span>
                                    <input type="text" name="uname" class="form-control" placeholder="Username">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-addon">@</span>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i>
                                    </span>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="input-group mb-4">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i>
                                    </span>
                                    <input type="password" name="repass" class="form-control" placeholder="Repeat password">
                                </div>

                                <button type="submit" class="btn btn-block btn-success">Create Account</button>
                            </div>
                            <div class="card-footer p-4">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="index.php">
                                            <button class="btn btn-block" type="button">
                                                <span>Back</span>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="login.php">
                                            <button class="btn btn-block" type="button">
                                                <span>Sign In</span>
                                            </button>
                                        </a>
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