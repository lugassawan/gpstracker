<!DOCTYPE html>
<html>
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
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">

		<!-- Theme CSS -->
		

		<!-- Skin CSS -->
		<!-- <link rel="stylesheet" href="css/skins/default.css"> -->

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
        <!-- <link rel="stylesheet" href="css/login.css"> -->
	</head>
	<body>
        <div class="container">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <a href="index.php">
                            <img alt="GTrack" class="navbar-brand" width="200" height="48" src="img/logos/logo.png">   
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                                if(empty($_SESSION['id_user']) AND empty($_SESSION['password'])){
                            ?>
                                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <?php
                                }else{
                            ?>
                                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>  