<?php include 'session.php';?>
<?php include 'config.php';?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Oswald:400,300);
@import url(https://fonts.googleapis.com/css?family=Open+Sans);
body
{
    font-family: 'Open Sans', sans-serif;
}

.popup-box-on {
    display: block !important;
}
.off {
    display: none;
}
.chat_box .chat_message_wrapper ul.chat_message > li + li {
    margin-top: 4px;
}

#search.open {
    opacity: 1;
    transform: translate(0px, 0px) scale(1, 1);
}
#search {
    background-color: #fff;
    height: 100%;
    left: 0;
    position: fixed;
    top: 0;
    transition: all 0.5s ease-in-out 0s;
    width: 100%;
    z-index: 2000;

}
#search .close {
    color: #0015f9;
    font-size: 40px;
    opacity: 1;
    padding: 10px 17px;
    position: fixed;
    right: 15px;
    top: 15px;
}
button.close {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    cursor: pointer;
}
.close {
    float: right;
    font-weight: bold;
    line-height: 1;
    text-shadow: 0 1px 0 #fff;
}

#search input[type="text"] {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 0 none;
    color: #333;
    font-family: "Open Sans",sans-serif;
    font-size: 50px;
    font-weight: 300;
    margin: -51px auto 0;
    outline: medium none;
    padding-left: 30px;
    padding-right: 30px;
    position: absolute;
    text-align: center;
    top: 50%;
    width: 100%;
}
#search .btn {
    left: 50%;
    margin-top: 60px;
    padding: 10px 50px;
    position: absolute;
    top: 50%;
    transform: translateX(-50%);
}
nav {
    background: #0015f9 none repeat scroll 0 0 !important;
    border: medium none !important;
    border-radius: 151px !important;
}
.s-icon a {
    background: #fff none repeat scroll 0 0 !important;
    border-radius: 40px !important;
    color: #0015f9 !important;
    font-size: 26px;
    height: 44px;
    margin: 3px -12px 0 0;
    padding: 7px 0 0 !important;
    text-align: center;
    width: 44px;
}
.navbar-inverse .navbar-nav > li > a {
    color: #fff;
}
.navbar-inverse .navbar-brand {
    background: #fff none repeat scroll 0 0 !important;
    border-radius: 50px;
     color: #0015f9 !important;
    height: auto;
    margin: 3px 0 2px -12px !important;
    padding: 12px 20px !important;
}
.btn-lg, .btn-group-lg > .btn {
    border-radius: 153px;
    font-size: 29px;
}
.btn-site {
    background: #0015f9 none repeat scroll 0 0;
    color: #fff !important;
}
@media only screen and (max-width: 600px) {
nav {
    background: #0015f9 none repeat scroll 0 0 !important;
    border: medium none !important;
    border-radius: 0px !important;
}
.navbar-inverse .navbar-brand {
    background: #fff none repeat scroll 0 0 !important;
    border-radius: 50px;
    color: #0015f9 !important;
    height: auto;
    margin: 2px 0 2px 5px !important;
    padding: 12px 20px !important;
}

}
.navbar-inverse .navbar-nav>li>a{
    color:#fff !important;
    font-size:24px !important;
}
.navbar-right {
    margin-top: 15px !important;
}
@media only screen and (min-width : 320px) and (max-width:414px) {
    .line{
        font-size:13px !important;
        margin-top:45px
    }
}
@media screen
and (min-device-width: 1200px)
and (max-device-width: 1600px)
and (-webkit-min-device-pixel-ratio: 1) {
    .line{
        font-size:52px !important;
    }
}

</style>
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- <div class="container-fluid" style="">
    <div class="row">
       <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">
                <img src="img/1.png" class="" alt="WTD" style="width:160px;height:51px;">
              </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-3">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="distribution_network.php">Distribution Network</a></li>
                <li><a href="product_selection.php">Product Selection</a></li>
                <?php
// if (isset($_SESSION['email'])) {
//     echo '<li><a href="shop/products.php">Shop</a></li>';
// }
?>
                <li><a href="about.php">About</a></li>
                <li><a href="careers.php">Careers</a></li>
                <li><a href="contactus.php">Countact Us</a></li>
                <?php
// if (isset($_SESSION['email'])) {
//     echo '<li><a href="logout.php">Logout</a></li>';
//   }else{
//     echo '<li><a href=login.php>Login</a></li>';
//   }
?>

              </ul>
            </div>
          </div>
        </nav>

  </div>
</div> -->
