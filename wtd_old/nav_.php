<?php include 'session.php';  ?>
<?php include 'config.php';  ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<nav class="navbar">
    <span class="navbar-toggle" id="js-navbar-toggle" style="color: red;">
          <i class="fa fa-bars"></i>
    </span>
   
	<a data-v-fdc68d42 data-v-3e7f1b2b href=home.html class="logo router-link-active component-Logo has-collapsed" style="transform-origin:0 100% 0;transform:matrix(1,0,0,1,0,0);width: 160px;height: 51px;"><img data-v-fdc68d42 src='img/1.png' class=nav-logo style="background-blend-mode:normal!important;background-clip:border-box!important;background-position:50% 50%!important;background-color:rgba(0,0,0,0)!important;background-size:100% 100%!important;background-origin:content-box!important;background-repeat:no-repeat!important"></a>
    <ul class="main-nav" id="js-menu">
      <li>
        <a href=index.php class="nav-links">Home</a>
		
      </li>
      <li>
        |<a href=distribution_network.php class="nav-links">Distribution Network</a>
		
      </li>
      <li>
        |<a href=product_selection.php class="nav-links">Product Selection</a>
		
      </li>
      <!-- <li>
        |<a href=service_offering.html class="nav-links">Service Offering</a>
		
      </li> -->
      <?php 
      if (isset($_SESSION['email'])) {
          echo '<li style="margin-right: 100px;">
          |<a href="shop.php" class="nav-links">Shop</a>
        </li>';
        }
      ?>
      
      <li>
        <a href=about.php class="nav-links">About</a>
			
      </li>
      <li>
        |<a href=careers.php class="nav-links">Careers</a>
      </li>
       <?php 
      if (isset($_SESSION['email'])) {
          echo '<li style="margin-right: 100px;">
          |<a href="logout.php" class="nav-links">Logout</a>
        </li>';
        }else{
          echo '<li>
        |<a href=login.php class="nav-links">Login</a>
      </li>';
        }
      ?>
      
    </ul>
  </nav> 

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
let mainNav = document.getElementById("js-menu");
let navBarToggle = document.getElementById("js-navbar-toggle");
navBarToggle.addEventListener("click", function() {
	//alert();
  mainNav.classList.toggle("active");
});
</script>