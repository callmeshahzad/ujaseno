<!DOCTYPE html> <html lang=en class=gr__atd-us_com>
<meta charset=utf-8>
<title>WTD | Home</title>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">

<meta name=msapplication-TileColor content=#da532c>
<meta name=theme-color content=#ffffff>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel=icon type=image/png sizes=32x32 href="images/1.png">
<link rel="stylesheet" type="text/css" href="css/homestyle.css">
<link rel="stylesheet" type="text/css" href="css/translator.css"> 

</head>
 <body data-gr-c-s-loaded=true cz-shortcut-listen=true style="background-color: #E1EBF4;">
 
<div class="gt-1">
    <div id="google_translate_element" ></div>
</div>
 <div id="app" class="english">
<?php include 'nav.php'; ?>
<?php 
if (isset($_POST['email'])) {
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['password'] = $_POST['password'];
	header("location:shop/index.php");
}
$msg ='';
if (isset($_GET['error'])) {
	$msg = "Invalid Email Password";
	session_destroy();
}
?>
<style type="text/css" media="screen">
.logo{
	z-index: 9999;
    width: 200px;
    margin-left: 5%;
    margin-top: -12%;
}
.btn-login{
    position: absolute;
    float: right;
    right: 15px;
    bottom: 15px;
    width: 150px;
    background: #0015f9;
    border: #0015f9;
    font-weight: bold;
    background-color: #0015f9 !important;
    font-weight: bold !important;
}
.login-section{
    height: 480px;
    border-right: 1px solid red;
}
@media only screen and (max-width: 600px) {
  .register-part{
    display:none;
  }
  .btn-login{
    position: absolute;
    float: right;
    right: 15px;
    bottom: 0px !important;
    width: 150px;
    background: #0015f9;
    border: #0015f9;
    font-weight: bold;
    background-color: #0015f9 !important;
    font-weight: bold !important;
  }
  .login-section{
    height: 280px;
    border-right: 1px solid red;
}
}	
</style>
 <div data-v-5ff8ac3c class="component-section-home vue-router-section" lang=en style=visibility:inherit;opacity:1>
 	<div data-v-5ff8ac3c>
 		<div data-v-b6d53204 data-v-5ff8ac3c class=component-LandingHero>

 			<div data-v-b6d53204 class=bg-container style="margin-left: 5%;">
 				<div data-v-b6d53204 class=bg-masker>
 					<div data-v-436329e0 data-v-b6d53204 class=component-image-pre-loader style=width:100vw;height:100%;position:absolute;top:0;right:0;bottom:0>
 						<div data-v-b329ee4c data-v-436329e0 tabindex=-1 class=resize-observer>
 							<object style=display:block;position:absolute;top:0;left:0;height:100%;width:100%;overflow:hidden;pointer-events:none;z-index:-1 aria-hidden=true tabindex=-1 type=text/html data="data:text/html,<html>" sandbox></object>
 						</div> 
 						<div data-v-436329e0 class=pre-loader-overlay style=display:none></div> 
 						<img data-v-436329e0 src="images/mainbanner.jpg" class="contain top-right" style="object-fit:contain;object-position:95% 0;background-position:95% 0"> 
 						<div data-v-436329e0 class=blue-tint></div>
 					</div>
 				</div> 
 				<svg data-v-b6d53204 xmlns=http://www.w3.org/2000/svg viewBox="0 0 4011 902" preserveAspectRatio="xMaxYMid slice" class=hero-mask>
 					<g fill=none fill-rule=evenodd transform="translate(0 -739)">
 						<ellipse cx=4092.5 cy=785 stroke=#E1EBF4 stroke-width=1000 rx=597.5 ry=598 class=circle style=stroke-dasharray:0,999999px;stroke-dashoffset:3756.77></ellipse>
 						<ellipse cx=4092.5 cy=785 stroke=#FFF stroke-width=1000 rx=597.5 ry=598 class=circle-white style=stroke-dasharray:1e-05px,3766.77px;stroke-dashoffset:0></ellipse>
 						<path fill=#E1EBF4 d="M0 739h4020v902.5H0V739zm4092.5 830.5c-433.026 0-784-351.268-784-784.5S3659.474.5 4092.5.5s784 351.268 784 784.5-350.974 784.5-784 784.5zm0-373c226.954 0 411-184.2 411-411.5s-184.046-411.5-411-411.5-411 184.2-411 411.5 184.046 411.5 411 411.5z" class=path></path>
 					</g>
 				</svg>
 			</div> 
 			<div class="logo"><a><img src="images/1.png" alt="WTD" class="img-responsive logoimg"></a></div>
 			<div data-v-b6d53204 class=common-center-container style="padding-top:0px !important;">

 				<div data-v-b6d53204 class=heading>
 					<div class="row" style="padding-bottom: 30px;">
 						<div class="col-sm-8" style="color: #000;padding: 15px 30px;height: 500px;-webkit-box-shadow: 10px 10px 14px 0px rgba(0,0,0,1);-moz-box-shadow: 10px 10px 14px 0px rgba(0,0,0,1);box-shadow: 10px 10px 14px 0px rgba(0,0,0,1);font-family:Arial,Helvetica,sans-serif;">
 							<div class="row">
 								<div class="col-sm-6 login-section" style="">
                                    <h4 style="font-weight:bold;">Welcome</h4>
                                    <h5 style="padding-left: 5%;">Customer Login</h5><br>
		                            <form action="index.php" method="post" accept-charset="utf-8">
		                            	
		                            	<div class="form-group">
		                            		<label> Email</label>
		                            		<input type="text" name="email" class="form-control" placeholder="Email" required="required">
		                            	</div>
		                            	<div class="form-group">
		                            		<label>Password</label>
		                            		<input type="password" name="password" class="form-control" placeholder="Password" required="required">
		                            	</div>
                                        <?php echo $msg; ?>
		                            	<div class="form-group">
		                            		<button type="submit" class="btn btn-primary btn-login">LOGIN</button>
		                            	</div>
		                            </form>
		                        </div> 
		                        <div class="col-sm-6 register-part" style="height: 480px;">
		                            <?php
		                            if(isset($_GET['msg'])){
		                                $ms = $_GET['msg'];
		                                if($ms == "success"){
		                                    echo '<div class="alert alert-success" style="margin-top: -15px; margin-bottom: -1px;">
                                              <strong>Application successfully submitted!</strong>
                                              <br>
                                              <span>
                                                We appreciate your interest of buisness with WTD USA.
                                                One of our sales representative will contact you shortly.
                                              </span>
                                            </div>';
		                                }
		                            }
		                            
		                            
		                            ?>
		                        	<h4 style="font-weight:bold;">Welcome to WTD USA Online</h4>
		                        	<p>WTD Online offers tire dealers and service shops instant access to pricing, ordering, and order tracking 24 hours a day, 7 days a week.</p>
		                        	<p>It is a free service of WTD, helping dealers stock and grow their businesses through fast delivery, dedicated specialists, and marketing support programs.</p>
		                        	<p>Having trouble logging in? Call Online Customer Care at  (602) 875-8335 for assistance.</p>
		                        	<p>Our Customer Care Team is available:<br>
		                        		Monday–Friday 8:00 AM to 6:30 PM EST<br>
		                        	    Saturday 8:00 AM to 6:00 PM EST</p>
		                        	<a href="index.php#form-section" type="button" class="btn btn-primary" style="position: absolute;left: 15px;bottom: 15px;width: 150px;background: #0015f9;border: #0015f9;font-weight: bold;">REGISTER</a>
		                        </div>
 							</div>
 						</div>
                        
                    </div>
 				</div>
 				<div data-v-b6d53204 class=selector-container>
 					<div data-v-b6d53204 class=donuts style=width:75%>
                    </div>
                </div>
            </div>
        </div>



 <div data-v-2b7285cc data-v-5ff8ac3c id=product-breadth class=component-ProductBreadth style="margin-top: -223px;">
    <svg data-v-2b7285cc xmlns=http://www.w3.org/2000/svg width=331 height=331 viewBox="0 0 331 331" class="donut-bottom" style="margin-top: -162px;">
    <path fill=#A5A5A5 fill-rule=evenodd d="M165.5 331C74.097 331 0 256.903 0 165.5S74.097 0 165.5 0 331 74.097 331 165.5 256.903 331 165.5 331zm1-78c47.773 0 86.5-38.727 86.5-86.5S214.273 80 166.5 80 80 118.727 80 166.5s38.727 86.5 86.5 86.5z"></path>
    </svg> 
 <div data-v-2b7285cc class=common-center-container>
 <h2 data-v-2b7285cc class=>OUR BRANDS </h2> <h4 data-v-2b7285cc class="subheading webkit-font">We are here with bestselling brands not only with the tires also with the wheels, their sizes, and manufacture also accessories as per your requirement.</h4>
         <style>
             #wheeltab{
                 display: none;
             }
         </style>
 	<div data-v-2b7285cc class=tabs-container>
 		<div data-v-9cf6d062 data-v-2b7285cc class=component-Tabs>.
 			<div data-v-9cf6d062 class="logos-tabs-container">
 				<div data-v-9cf6d062 class=tabs>
 					<div data-v-342c0212 data-v-9cf6d062 class="component-TabButton index-0 active" id="tire-tab">
 						<div data-v-342c0212 class=left>
 							<div data-v-342c0212 class=label>Tires
 								<svg data-v-342c0212 xmlns=http://www.w3.org/2000/svg viewBox="0 0 90 90" class=arrow-svg>
 									<path fill=red fill-rule=evenodd d="M90 45L0 90V0z"></path>
 								</svg>
 							</div>
 						</div>
 					</div>
 					<div data-v-342c0212 data-v-9cf6d062 class="component-TabButton index-1" id="wheel-tab">
 						<div data-v-342c0212 class=left>
 							<div data-v-342c0212 class=label>Wheels
 								<svg data-v-342c0212 xmlns=http://www.w3.org/2000/svg viewBox="0 0 90 90" class=arrow-svg>
 									<path fill=red fill-rule=evenodd d="M90 45L0 90V0z"></path>
 								</svg>
 							</div>
 						</div>
 					</div>
                </div>
                <div data-v-9cf6d062 class=logos-container>
                    <div data-v-9cf6d062 class=logos>
                        <div data-v-3cde03ad data-v-9cf6d062 class=component-TabLogos id="tiretab">
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/accelera.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/Achilles.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/AMERICANTOURER.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/AMP.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                             <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/antares-logo.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/auplus.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/Atturo.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/BRIDGESTONE.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/COMFORSER.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/constancy.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/CROSSWIND.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/DCENTI.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/doral.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/DURATURN.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/DURUN.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/FALKEN.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/FARROAD.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/FEDERAL.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/FIRESTONE.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/FORCEUM.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/FURY.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/GINELL.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                           
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/GOLDWAY.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/GOODYEAR.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/GREEN MAX.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/GRENLANDER.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/GROUNDSPEED.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/HAIDA.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/tires/t10.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/HILO.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/INTERTRAC.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/INVOVIC.jpeg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/JINYU.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/KUMHO.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/LANDGOLDEN.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/LEXANI.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/LIONHART.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>

                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/LIZETTI.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/MICHELIN.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/MOMO_.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/MUDCLAW.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/NEUTON.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>

                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/tires/t13.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/Onyx.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/PATRIOT.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/PRESA.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                              <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/tires/t17.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/Radar_Tires_Primary_Logo.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/RDR.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/ROADCLAW.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/RYDANZ.jpeg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/SAFERICH.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/sailun-logo.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/SIERRA.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/STARFIRE.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/supermax.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/SURETRAC.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                             
                            
                          
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/TOYO.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/TRIANGLE.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/VeeRubber.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                              <!-- <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/VELOCITY.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div> -->
                            <div data-v-67e91ef2 data-v-3cde03ad class="component-BrandLogo no-border">
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/VERCELLI.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                              <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/WINRUN.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                              <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/YOKOHAMA.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                              <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/ZEETEX.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                             
                            
                        </div>



                        <!-- wheels logo start from here -->
                        <div data-v-3cde03ad data-v-9cf6d062 class=component-TabLogos index=0 id="wheeltab">
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/AZAD.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/Ballistic.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/ELEMENT.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/elevate.jpeg" class="contain center" style="object-fit:contain;padding-top: 13px;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <!--<img data-v-436329e0 src="images/logos/wheels/FORCE OFFROAD.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">-->
                                        <img data-v-436329e0 src="images/logos/wheels/FORCE OFFROAD.jpeg" class="contain center" style="object-fit:contain;padding-top: 13px;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                             <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/tires/GIOVANNA.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/impact.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                           <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/tires/w21.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <!--<img data-v-436329e0 src="images/logos/wheels/monster-wheels.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">-->
                                        <img data-v-436329e0 src="images/logos/wheels/monster-wheels.jpeg" class="contain center" style="object-fit:contain;padding-top: 13px;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/MOTO METAL.jpg" class="contain center" style="object-fit:contain;padding-top: 13px;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/NSSERIES.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/PINNACLE.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/REPLICA.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/SEVIZIA.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/STRADA.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/street-force.jpeg" class="contain center" style="object-fit:contain;padding-top:10px;;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/U2.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/VERSANTE.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/VERSUS.png" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/velocity-wheels.png" class="contain center" style="object-fit:contain;object-position:50% 50%;padding-top:10px;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            <div data-v-67e91ef2 data-v-3cde03ad class=component-BrandLogo>
                                <div data-v-67e91ef2 class=logo>
                                    <div data-v-436329e0 data-v-67e91ef2 class=component-image-pre-loader>
                                        <img data-v-436329e0 src="images/logos/wheels/XIX.jpg" class="contain center" style="object-fit:contain;object-position:50% 50%;background-position:50% 50%">
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     </div>
     <div data-v-2b7285cc class="product-breadth-blurb webkit-font" style=transform:translate3d(0,97.2829%,0)>
         <div data-v-2b7285cc class=label>Proud to carry more than 25 brands</div>
     </div>
 </div>
    </div>
     <div data-v-0d6be6a8 data-v-5ff8ac3c id=service-offering class=component-ServicesOffering style=background-image:url(img/95a8c6fab98cd7ac816fbe7f9fd3d15f-700.jpg)>
         <div data-v-0d6be6a8 class=common-center-container>
             <h3 data-v-0d6be6a8 class="heading webkit-font">DRIVING YOUR BUSINESS</h3>
             <div data-v-0d6be6a8 class=cards-container>
                 <a data-v-0b309813 data-v-0d6be6a8 href=# class=component-ServicesCard>
                     <div data-v-0b309813 class=card-container>
                         <div data-v-0b309813 class=background-para>
                            <div data-v-0b309813 class=background-image style="background-image:url(images/d1.jpg)">
                            </div>
                        </div> 
                        <div data-v-0b309813 class=overlay></div> 
                        <div data-v-0b309813 class=title-overlay-container>
                            <div data-v-0b309813 class="title webkit-font">Dealer Programs </div>
                        </div> 
                        <svg data-v-0b309813 xmlns=http://www.w3.org/2000/svg width=47 height=49 viewBox="0 0 47 49" class=red style=transform:translate3d(0,98.0614%,0)>
                            <path fill=#FF4D4D fill-rule=evenodd d="M46.758 0L0 48.479h46.758z"></path>
                        </svg>
                    </div> 
                    <h4 data-v-0b309813 class="body-text webkit-font">We give you to deal with the best products as an independent dealer to build your brand selling the tires, wheels and suppliers your consumers demand. Our deal with the best manufacturers. You can get the offers in volume savings, business and marketing support and best selection of products, making an exclusive dealer programs.
                        <div data-v-49614bf8 data-v-0b309813 class="component-ArrowLink small white">
                            <div data-v-49614bf8 class=link>
                                <div data-v-49614bf8 class=label></div> 
                                <div data-v-49614bf8 class=arrow-container>
                                    <!-- <svg data-v-49614bf8 xmlns=http://www.w3.org/2000/svg viewBox="0 0 90 90" class=triangle>
                                        <path fill=red fill-rule=evenodd d="M90 45L0 90V0z"></path>
                                    </svg> -->
                                </div>
                            </div>
                        </div>
                    </h4> 
                </a>
                <a data-v-0b309813 data-v-0d6be6a8 href=service_offering.html class=component-ServicesCard>
                    <div data-v-0b309813 class=card-container>
                        <div data-v-0b309813 class=background-para>
                            <div data-v-0b309813 class=background-image style="background-image:url(images/d2.jpg)"></div>
                        </div> 
                        <div data-v-0b309813 class=overlay></div> 
                        <div data-v-0b309813 class=title-overlay-container>
                            <div data-v-0b309813 class="title webkit-font">Digital Tools</div>
                        </div> 
                        <svg data-v-0b309813 xmlns=http://www.w3.org/2000/svg width=47 height=49 viewBox="0 0 47 49" class=red style=transform:translate3d(0,98.0614%,0)>
                            <path fill=#FF4D4D fill-rule=evenodd d="M46.758 0L0 48.479h46.758z"></path>
                        </svg>
                    </div> 
                    <h4 data-v-0b309813 class="body-text webkit-font">Check the power of WTD by online stream your business operations you can get the access our selections current availability and best prices 24/7.
                    <div data-v-49614bf8 data-v-0b309813 class="component-ArrowLink small white">
                        <div data-v-49614bf8 class=link>
                            <div data-v-49614bf8 class=label></div> 
                            <div data-v-49614bf8 class=arrow-container>
                                <!-- <svg data-v-49614bf8 xmlns=http://www.w3.org/2000/svg viewBox="0 0 90 90" class=triangle>
                                    <path fill=red fill-rule=evenodd d="M90 45L0 90V0z"></path>
                                </svg> -->
                            </div>
                        </div>
                    </div>
                </h4> 
            </a>
            <a data-v-0b309813 data-v-0d6be6a8 href=service_offering.html class=component-ServicesCard>
                <div data-v-0b309813 class=card-container>
                    <div data-v-0b309813 class=background-para>
                        <div data-v-0b309813 class=background-image style="background-image:url(images/d3.jpg)"></div>
                    </div> 
                    <div data-v-0b309813 class=overlay></div> 
                    <div data-v-0b309813 class=title-overlay-container>
                        <div data-v-0b309813 class="title webkit-font">The benefits</div>
                    </div> 
                    <svg data-v-0b309813 xmlns=http://www.w3.org/2000/svg width=47 height=49 viewBox="0 0 47 49" class=red style=transform:translate3d(0,98.0614%,0)>
                        <path fill=#FF4D4D fill-rule=evenodd d="M46.758 0L0 48.479h46.758z"></path>
                    </svg>
                </div> 
                <h4 data-v-0b309813 class="body-text webkit-font">
                    Join the best selling brand in the Ameriaca’s largest and best selling brands with independent dealers. When you will be the member of WTD you will be find out the best benefits from our services and profitabilty .
                    <div data-v-49614bf8 data-v-0b309813 class="component-ArrowLink small white">
                        <div data-v-49614bf8 class=link>
                            <div data-v-49614bf8 class=label></div> 
                            <div data-v-49614bf8 class=arrow-container>
                                <!-- <svg data-v-49614bf8 xmlns=http://www.w3.org/2000/svg viewBox="0 0 90 90" class=triangle>
                                    <path fill=red fill-rule=evenodd d="M90 45L0 90V0z"></path>
                                </svg> -->
                            </div>
                        </div>
                    </div>
                </h4> 
            </a>
            <a data-v-0b309813 data-v-0d6be6a8 href=service_offering.html class=component-ServicesCard>
                <div data-v-0b309813 class=card-container>
                    <div data-v-0b309813 class=background-para>
                        <div data-v-0b309813 class=background-image style="background-image:url(images/d4.jpg)"></div>
                    </div> 
                    <div data-v-0b309813 class=overlay></div> 
                    <div data-v-0b309813 class=title-overlay-container>
                        <div data-v-0b309813 class="title webkit-font">Prefered buyers </div>
                    </div> 
                    <svg data-v-0b309813 xmlns=http://www.w3.org/2000/svg width=47 height=49 viewBox="0 0 47 49" class=red style=transform:translate3d(0,98.0614%,0)>
                        <path fill=#FF4D4D fill-rule=evenodd d="M46.758 0L0 48.479h46.758z"></path>
                    </svg>
                </div> 
                <h4 data-v-0b309813 class="body-text webkit-font">
                    When you will be the part of WTD as a prefered dealer than you will also be te part of TireBuyer installer. when you will be the part of WTD online purchases will be delivered to you for installation. Giving you brand new customers and a new means to expand you business as per you like.
                    <div data-v-49614bf8 data-v-0b309813 class="component-ArrowLink small white">
                        <div data-v-49614bf8 class=link>
                            <div data-v-49614bf8 class=label></div> 
                            <div data-v-49614bf8 class=arrow-container>
                                <!-- <svg data-v-49614bf8 xmlns=http://www.w3.org/2000/svg viewBox="0 0 90 90" class=triangle>
                                    <path fill=red fill-rule=evenodd d="M90 45L0 90V0z"></path>
                                </svg> -->
                            </div>
                        </div>
                    </div>
                </h4> 
            </a>
        </div>
    </div>
</div>
<?php //include("app_store.php")?> 
 <div data-v-52670f54 data-v-5ff8ac3c class=component-NewAtAtd>
 	<div data-v-52670f54 class=common-center-container>
 		<h3 data-v-52670f54 class=heading>NEWS AT WTD</h3> 
 		<h4 data-v-52670f54 class=subheading></h4> 
 		<div data-v-52670f54 class=cards-container>
 			<a data-v-55126885 data-v-52670f54 href=# class=component-NewCard>
 				<div data-v-55126885 class=card-container>
 					<div data-v-55126885 class=background-image-container>
 						<div data-v-55126885 class=background-image-para>
 							<div data-v-55126885 class=background-image style=background-image:url(images/play-store-&-apple-store-banner.png)></div>
 						</div>
 					</div> 
 					<div data-v-55126885 class=title-content-container>
 						<h5 data-v-55126885 class=title>Find Us </h5> <h5 data-v-55126885 class=content>On Play Store As WTDUSA</h5> 
 						<div data-v-55126885 class=button-container>
 							<div data-v-49614bf8 data-v-55126885 class="component-ArrowLink small">
 								<div data-v-49614bf8 class=link>
 									<div data-v-49614bf8 class=label></div> 
 									<div data-v-49614bf8 class=arrow-container>
 										<!-- <svg data-v-49614bf8 xmlns=http://www.w3.org/2000/svg viewBox="0 0 90 90" class=triangle>
 											<path fill=red fill-rule=evenodd d="M90 45L0 90V0z"></path>
 										</svg> -->
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</a>
            <a data-v-55126885 data-v-52670f54 href=# class=component-NewCard>
            <div data-v-55126885 class=card-container>
                <div data-v-55126885 class=background-image-container>
                    <div data-v-55126885 class=background-image-para>
                        <div data-v-55126885 class=background-image style=background-image:url(images/play-store-&-apple-store-banner-1.png)></div>
                    </div>
                </div> 
                <div data-v-55126885 class=title-content-container>
                    <h5 data-v-55126885 class=title>Find Us </h5> 
                    <h5 data-v-55126885 class=content>On Apple Store As WTDUSA</h5> 
                    <div data-v-55126885 class=button-container>
                        <div data-v-49614bf8 data-v-55126885 class="component-ArrowLink small">
                            <div data-v-49614bf8 class=link>
                                <div data-v-49614bf8 class=label></div> 
                                    <div data-v-49614bf8 class=arrow-container>
                                        <!-- <svg data-v-49614bf8 xmlns=http://www.w3.org/2000/svg viewBox="0 0 90 90" class=triangle>
                                            <path fill=red fill-rule=evenodd d="M90 45L0 90V0z"></path>
                                        </svg> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
 			<!-- <a data-v-55126885 data-v-52670f54 href=# class=component-NewCard>
 			<div data-v-55126885 class=card-container>
 				<div data-v-55126885 class=background-image-container>
 					<div data-v-55126885 class=background-image-para>
 						<div data-v-55126885 class=background-image style=background-image:url(img/distri.jpg)></div>
 					</div>
 				</div> 
 				<div data-v-55126885 class=title-content-container>
 					<h5 data-v-55126885 class=title>WTD Announces Official Distribution Date for Million-Square-Foot Mixing Warehouse</h5> 
 					<h5 data-v-55126885 class=content>WTD, Inc. (WTD) today announced that its new one million-square-foot Pocono Mixing Warehouse in Blakeslee, Pennsylvania will officially begin shipments on December 3, 2018.</h5> 
 					<div data-v-55126885 class=button-container>
 						<div data-v-49614bf8 data-v-55126885 class="component-ArrowLink small">
 							<div data-v-49614bf8 class=link>
 								<div data-v-49614bf8 class=label>Read More</div> 
 									<div data-v-49614bf8 class=arrow-container>
 										<svg data-v-49614bf8 xmlns=http://www.w3.org/2000/svg viewBox="0 0 90 90" class=triangle>
 											<path fill=red fill-rule=evenodd d="M90 45L0 90V0z"></path>
 										</svg>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</a> -->
 			<!-- <a data-v-55126885 data-v-52670f54 href=# class=component-NewCard>
 				<div data-v-55126885 class=card-container>
 					<div data-v-55126885 class=background-image-container>
 						<div data-v-55126885 class=background-image-para>
 							<div data-v-55126885 class=background-image style=background-image:url(images/1.jpg)></div>
 						</div>
 					</div> 
 					<div data-v-55126885 class=title-content-container>
 						<h5 data-v-55126885 class=title>Change happens, success is a process</h5> 
 						<h5 data-v-55126885 class=content>WTD is a business with the heart and soul of a company that has 80+ years of experience in the industry and the spirit of a start-up.</h5> 
 						<div data-v-55126885 class=button-container>
 							<div data-v-49614bf8 data-v-55126885 class="component-ArrowLink small">
 								<div data-v-49614bf8 class=link>
 									<div data-v-49614bf8 class=label>Read More</div> 
 									<div data-v-49614bf8 class=arrow-container>
 										<svg data-v-49614bf8 xmlns=http://www.w3.org/2000/svg viewBox="0 0 90 90" class=triangle style=transform:matrix(1,0,0,1,0,0)>
 											<path fill=red fill-rule=evenodd d="M90 45L0 90V0z"></path>
 										</svg>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</a> -->
            <a data-v-55126885 data-v-52670f54 href=# class=component-NewCard>
                <div data-v-55126885 class=card-container>
                    <div data-v-55126885 class=background-image-container>
                        <div data-v-55126885 class=background-image-para>
                            <div data-v-55126885 class=background-image style=background-image:url(images/warehouse.jpg)></div>
                        </div>
                    </div> 
                    <div data-v-55126885 class=title-content-container>
                        <h5 data-v-55126885 class=title>WTD Warehouse Expansion Coming Soon</h5> <h5 data-v-55126885 class=content>WTD Warehouse Expansion</h5> 
                        <div data-v-55126885 class=button-container>
                            <div data-v-49614bf8 data-v-55126885 class="component-ArrowLink small">
                                <div data-v-49614bf8 class=link>
                                    <div data-v-49614bf8 class=label></div> 
                                    <div data-v-49614bf8 class=arrow-container>
                                        <!-- <svg data-v-49614bf8 xmlns=http://www.w3.org/2000/svg viewBox="0 0 90 90" class=triangle>
                                            <path fill=red fill-rule=evenodd d="M90 45L0 90V0z"></path>
                                        </svg> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
 		</div>
 	</div>
 </div>

 <?php include 'distributor_form.php'; ?>

 <?php include 'footer.php'; ?>
     <script>
         $("#wheel-tab").click(function(){
             $(this).addClass("active index-0");
             $("#tire-tab").removeClass("active index-0").addClass("index-1");
             $("#wheeltab").show().css('display','flex');
             $("#tiretab").hide();
         });
         $("#tire-tab").click(function(){
             $(this).addClass("active index-0");
             $("#wheel-tab").removeClass("active index-0").addClass("index-1");
             $("#tiretab").show();
             $("#wheeltab").hide();
         });
     </script>
</div>
</div> 

</div>
 
 
 
