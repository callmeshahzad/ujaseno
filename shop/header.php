<?php include '../session.php'; 
if (!isset($_SESSION['email'])) {
    header("location:../index.php");
}else{
    $url = "http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/GetProducts?Search=valve";
    
    $username = $_SESSION['email']."-96";
    $password = $_SESSION['password'];

    $process = curl_init();
    curl_setopt($process, CURLOPT_URL, $url);
    curl_setopt($process, CURLOPT_TIMEOUT, 300000);
    curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($process, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
    curl_setopt($process, CURLOPT_FOLLOWLOCATION,TRUE);
    curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
    curl_setopt($process, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    $return = curl_exec($process);
    $httpcode = curl_getinfo($process,CURLINFO_HTTP_CODE);
    if ($httpcode != 200) {
        session_destroy();
        header("location:../index.php?error");
    }
    if(curl_errno($process)){
        throw new Exception(curl_error($ch));
    }
    curl_close($process);
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <title>WTD ONLINE</title>
    <link rel="stylesheet" type="text/css" href="css/global.min.css">
    <link rel="stylesheet" href="css/jquery-ui-1.8.23.custom.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-sanitize.js"></script>
        <script src="wtd_vis/angularjs/WTD_APP.js"></script>
        <script src="wtd_vis/angularjs/scopeService.js"></script>
        <script src="wtd_vis/vis/vis.controller.js"></script>
    <link rel="stylesheet" href="css/global.min.css">
    <style>
        @media screen and (-webkit-min-device-pixel-ratio:0) {
            h1 .filter select {padding-right:30px}
        }
        .product-description .product-heading, .product-description.product-heading {
           white-space: normal !important;
           font-size: 11px !important;
        }
        .fixed-banner{
            position: fixed;
            top: 3%;
            left: 0px;
            width: 130px;
        }
        .fixed-banner-right{
            position: fixed;
            top: 3%;
            right: 0px;
            width: 130px;
        }
        span.item-count {
            background: #1500f9;
            padding: 1px 6px;
            color: #fff;
            border-radius: 50%;
            position: absolute;
            top: 3px;
            right: 10px;
        }
        .header-fixed{
            position: fixed;
            z-index: 99;
            background-color: #fff;
            width: 1000px;
        }
        .top-header-margin{
            margin-top: 79px;
            position: relative;
        }
        @media only screen and (min-width: 1200px) {
            .wrapper{
                position: relative;
                width: 1300px;
                overflow: hidden;
                margin: 0 auto;   
            }
            .header-fixed {
                position: fixed;
                z-index: 99;
                background-color: #fff;
                width: 1300px;
            }
            .right-nav {
                width: 350px;
                float: left;
                background: #fff;
                margin-top: 20px;
            }
            .middle-wrapper {
                width: 1100px;
                float: left;
                padding-left: 20px;
                padding-top: 20px;
            }
        }
        @media only screen and (min-width: 1300px) {
            .wrapper{
                position: relative;
                width: 1200px;
                overflow: hidden;
                margin: 0 auto;   
            }
            .header-fixed {
                position: fixed;
                z-index: 99;
                background-color: #fff;
                width: 1200px;
            }
            .right-nav {
                width: 325px;
                float: left;
                background: #fff;
                margin-top: 20px;
            }
            .middle-wrapper {
                width: 950px;
                float: left;
                padding-left: 20px;
                padding-top: 20px;
            }
        }
    </style>
   
    <link rel="icon" type="image/x-icon" href="/_ui/desktop/atdonline/images/favicon.ico" >
    <link rel="shortcut icon" type="image/x-icon" href="/_ui/desktop/atdonline/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="engine2/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/translator.css" />
    <script type="text/javascript" src="engine2/jquery.js"></script>
    <link rel=icon type=image/png sizes=32x32 href="../images/1.png">

    
</head>
<?php
if(isset($_SESSION['cart'])){
    $cartCount = $_SESSION['cart'];
    $count = count($cartCount);
}else{
    $count = 0;
}
?>
<body class="language-en"  style="null" >

    <script src="js/vendor.min.js"></script> 
    <script src="js/wtd.min.js"></script>

    <div class="wrapper " id="content">
    
        <a name="top"></a>
        <div class="header full-left header-fixed" id="header-full-left">
            <div class="top-header full-left" style="background-color:#0015f9">
                <?php include "nav.php"; ?>

            </div> 
            <div class="bottom-header full-left" align="center">
              
                <a class="ATD-logo gs" href="#">
                    <img src="images/1.png" style="max-height: 70px;margin-top: -25px;margin-left:-11px;" /> 
                </a>
                <ul class="nav nav-tabs pull-left margin-rgt"> 
                    <li class="pull-left button-gap " id="navtab-homeLinkNew"> 
                        <a class="" id="homeLinkNew-nav-link" href="index.php"> 
                            <span class="icon-Home nav-icon nav-Home"></span> 
                            <span class="link-name">Home</span> 
                        </a>
                    </li> 
                    <li class="pull-left button-gap " id="navtab-tiresLink"> 
                        <a class="arrow first" href="#"> 
                            <span class="icon-Tires nav-icon nav-Tires"></span> 
                            <span class="link-name">TIRES</span> 
                        </a> 
                    </li> 
                    <!-- <li class="pull-left button-gap " id="navtab-customLink"> 
                        <a class="" id="custom-nav-link" href="#"> 
                            <span class="icon-Custom nav-icon nav-Custom"></span> 
                            <span class="link-name">Custom</span> 
                        </a> 
                    </li>  -->
                    <li class="pull-left button-gap " id="navtab-wheelsLink"> 
                        <a class="arrow first" href="#"> 
                            <span class="icon-Wheels nav-icon nav-Wheels"></span> 
                            <span class="link-name">WHEELS</span> 
                        </a> 
                    </li> 

                    <li class="pull-left button-gap " id="navtab-resourcesLink"> 
                        <a class="" id="resources-nav-link" href="#"> 
                            <span class="icon-Resources nav-icon nav-Resources"></span> 
                            <span class="link-name">PARTS</span> 
                        </a>
                    </li> 
                    <li class="pull-left button-gap " id="navtab-contactLink"> 
                        <a class="" id="contact-nav-link" href="contact.php"> 
                            <span class="icon-Contact nav-icon nav-Contact"></span> 
                            <span class="link-name">CONTACT</span> 
                        </a>
                    </li>
                    <li class="pull-left button-gap " id="navtab-contactLink"> 
                        <a class="" id="contact-nav-link" href="cart.php"> 
                            <img src="images/shoppingcart.png" class="img-responsive" style="width: 100%;height: 25px;">
                            <span class="link-name" style="margin-left: 5px;">CART</span>
                        </a>
                        <span class="item-count"><?=$count?></span>
                    </li>
                    <li class="pull-left button-gap " id="navtab-contactLink">
                        <a class="" id="contact-nav-link" href="../logout.php">
                            <img src="images/logout.png" class="img-responsive" style="width: 100%;height: 25px;">
                            <span class="link-name" style="margin-left: 5px;">LOGOUT</span>
                        </a>
                    </li>
                    <li class="pull-left button-gap " id="navtab-contactLink" style="padding: 15px 0 0 0px; font-size:11px !important">
                        <span class="link-name" style=""><strong>Welcome</strong><br/> <?=$_SESSION['email']?></span>
                    </li>
                   
                </ul> 
                <div class="pull-right"> </div> 
            </div> 
            <div class="top-header full-left"> 
                <ul class="sub-tophead pull-right"> </ul> 
            </div>
        </div>