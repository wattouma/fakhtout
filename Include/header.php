<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fakhtout | Best Online Shopping Website</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
<header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +216 24 544 708</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@fakhtout.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->
        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href=" index.php"><img src="images/home/logo.png" alt="" /></a>
                        </div>
                        
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                            <?php
                            if(!empty($_GET["u"])) {
                             if($_GET['u'] == "new") { ?>
                            <li><div class="alert alert-success fade in">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Welcome</strong> You are successfully registred
                            </div></li>
                            <?php } 
                            else if($_GET['u'] == "connected") { ?>
                            <li><div class="alert alert-info fade in">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Welcome back ! </strong> You are successfully connected
                            </div></li>   
                             <?php } 
                            else if($_GET['u'] == "logout") { ?>
                            <li><div class="alert alert-warning fade in">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Info </strong> You are logged out
                            </div></li>                         
                            <?php 
                            }
                            }?>
                             <?php
                            if(!empty($_GET["notif"])) {
                             if($_GET['notif'] == "added") { ?>
                                    <li><div class="alert alert-success fade in">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong></strong> Item added successfully
                                    </div></li>
                             <?php 
                            }
                            elseif($_GET['notif'] == "removed") { ?>
                            <li><div class="alert alert-success fade in">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong></strong> Item removed successfully
                                    </div></li>
                            <?php
                            }
                            }?>
                                <?php 
                                if (session_status() == PHP_SESSION_NONE) {
                                    session_start();
                                }

                                if(!empty($_SESSION)) { 
                                    require ("Model/User.class.php");
                                    $user = unserialize($_SESSION['user']);
                                    ?>
                                    <li><a href="#"><i class="fa fa-user"></i> <?php echo $user->name ?></a></li>
                                    <li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart (<?php 
                                        echo sizeof($user->cart->cart_array);
                                     ?>)</a></li>
                                <?php } else {?>
                                    <li><a href="login.php"><i class="fa fa-user"></i>Account</a></li>
                                    <li><a href="login.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                    <li><a href="login.php"><i class="fa fa-shopping-cart"></i>Cart </a></li>
                                <?php } ?>
                                
                                <?php 
                                if(empty($_SESSION)) { ?>
                                <li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
                                <?php } else { ?>
                                <li><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->
 
    </header>