<?php include 'config.php'; ?>
<?php 

if(!isset($_SESSION['user_id'])){
    header("location:index.php");
}else{
    $loginuserID = $_SESSION['user_id']; 
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>WTD Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css"> -->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<style type="text/css" media="screen">
.sidebar[data-color="purple"] .nav li.active a, .off-canvas-sidebar[data-color="purple"] .nav li.active a {
    background-color: #0015f9 !important;
}
</style>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    <img src="assets/img/eno-logo.png" style="margin-top: 5%;width: 200px;">
                </a>
            </div>
            <div class="sidebar-wrapper" style="height: 450px !important;">
                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                        
                    <li>
                        <a href="promotions.php">
                            <i class="material-icons">content_paste</i>
                            <p>Promotions</p>
                        </a>
                    </li>
                    <li>
                        <a href="announcement.php">
                            <i class="material-icons">content_paste</i>
                            <p>Announcement Slider</p>
                        </a>
                    </li>
                    <li>
                        <a href="announcement_alert.php">
                            <i class="material-icons">content_paste</i>
                            <p>Announcement</p>
                        </a>
                    </li>   
                    <li>
                        <a href="jobs.php">
                            <i class="material-icons">content_paste</i>
                            <p>Current Jobs</p>
                        </a>
                    </li>  
                    <li>
                        <a href="brand_links.php">
                            <i class="material-icons">content_paste</i>
                            <p>Manufacture Links</p>
                        </a>
                    </li>
                    <li>
                        <a href="make.php">
                            <i class="material-icons">content_paste</i>
                            <p>Makes</p>
                        </a>
                    </li>
                    <li>
                        <a href="model.php">
                            <i class="material-icons">content_paste</i>
                            <p>Models</p>
                        </a>
                    </li>
                    <li>
                        <a href="trim.php">
                            <i class="material-icons">content_paste</i>
                            <p>Trim</p>
                        </a>
                    </li>
                    <li>
                        <a href="car_detail.php">
                            <i class="material-icons">content_paste</i>
                            <p>Car Detail</p>
                        </a>
                    </li>
                    <li>
                        <a href="compare_price_setting.php">
                            <i class="material-icons">content_paste</i>
                            <p>Set Compare Price</p>
                        </a>
                    </li>
                    <li>
                        <a href="support.php">
                            <i class="material-icons">content_paste</i>
                            <p>Support</p>
                        </a>
                    </li>                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="dashboard.php">  Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li> -->
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="settings.php">Settings</a>
                                    </li>
                                    <li>
                                        <a href="add_user.php">Add Admin User</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li> -->
                                    <!-- <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li> -->
                                    <!-- <li>
                                        <a href="#">Another Notification</a>
                                    </li> -->
                                    <li>
                                        <a href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                       <!--  <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form> -->
                    </div>
                </div>
            </nav>
            


         