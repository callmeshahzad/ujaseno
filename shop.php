<?php
include 'session.php';

if (isset($_GET['search'])) {
	$search = $_GET['search'];
	$url = "http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/GetProducts?".$search;
}else{
	$url = "http://wtdusaonline.com/DesktopModules/AutoBiz_Vault/API/ProductListing/GetProducts?Search=valve";
}

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
$info = curl_getinfo($process);
$arr = explode("\t", $return); 
array_shift($arr);
$products = array();
$counter = 0;
$catalogCounter = 13;
$desCounter = 14;
$brand = 15;
$alternate = 16;
$size = 17;
$Image0 = 18;
$fet = 19;
$itemTypeId = 20;
$ItemType = 21;
$price = 22;
$pricenofet = 23;
$avail1121420 = 24;
$isAvailable = 25;
foreach ($arr as $ar) {
	if($counter === $catalogCounter ){
		$data['catalog'] = $ar;
		$catalogCounter += 13;
	}
	if($counter === $desCounter ){
		$data['description'] = $ar;
		$desCounter += 13;
	}
	if($counter === $brand ){
		$data['brand'] = $ar;
		$query = "SELECT * FROM tbl_brand WHERE brand='$ar'";
		$result = $db->query($query);
		if($result->num_rows > 0 ){
			$row = $result->fetch_object();
			$data['website'] = $row->website;
			$data['youtube'] = $row->youtube;
		}else{
			$data['website'] = '#';
			$data['youtube'] = '#';
		}
		$brand += 13;
	}
	if($counter === $alternate ){
		$data['alternate'] = $ar;
		$alternate += 13;
	}
	if($counter === $size ){
		$data['size'] = $ar;
		$size += 13;
	}
	if($counter === $Image0 ){
		$data['image'] = "http://wtdusaonline.com/Portals/96/WebSyncImages/".$ar;
		$Image0 += 13;
	}
	if($counter === $fet ){
		$data['fet'] = $ar;
		$fet += 13;
	}
	if($counter === $itemTypeId ){
		$data['item_type_id'] = $ar;
		$itemTypeId += 13;
	}
	if($counter === $ItemType ){
		$data['item_type'] = $ar;
		$ItemType += 13;
	}
	if($counter === $price ){
		$data['price'] = $ar;
		$price += 13;
	}
	if($counter === $pricenofet ){
		$data['pricenofet'] = $ar;
		$pricenofet += 13;
	}
	if($counter === $avail1121420 ){
		$data['avail1121420'] = $ar;
		$avail1121420 += 13;
	}
	if($counter === $isAvailable ){
		$data['isAvailable'] = substr($ar,0,3);
		$isAvailable += 13;
		array_push($products,$data);
	}	
	$counter++;
}
if(curl_errno($process)){
    throw new Exception(curl_error($ch));
}
curl_close($process);
?>
<!DOCTYPE html>
<html>
<head>
	
<meta charset=utf-8>
<title>WTD|Shop</title>
<meta http-equiv=X-UA-Compatible content="IE=edge">

<meta name=viewport content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
<link rel=manifest href=https://www.atd-us.com/assets/favicons/site.webmanifest> <meta name=msapplication-TileColor content=#da532c>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name=theme-color content=#ffffff>
<style type="text/css">
 .qty{
  width:30px;
 }
</style>
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/shop.css">
<link rel=icon type=image/png sizes=32x32 href="images/1.png">
</head>
 </head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" type="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<body id="google_translate_element">
	<?php include 'nav.php'; ?>
	<style type="text/css">
    	.announcements p{
    		font-size: 20px;
    		color: gray;
    	}
    	h4{
    		color: #0015f9;
    	}

    </style>
<div class="container">
    <div class="row" id="basic_box">
    	<h2 style="color: #0015f9;">Search Product</h2>
    	<div class="col-md-6">
    		<div class="announcements">
    			<h4>Announcements</h4>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    		</div>
    		<div class="quick-search">
    			<h4>Quick Search</h4>	
				<div class="form-group">
                    <input name="search-product" id="qsearch" type="text" class="form-control" placeholder="Search">
                </div>
    		</div>
    		<div class="Manufacturers">
    			<h4>Manufacturers</h4>
    			<div class="form-group">
    				<select class="form-control" id="menufacturar">
    					<option value="">Select Manufacturers</option>
    					<option value="GRENLANDER">GRENLANDER</option>
    					<option value="ACHILLES">ACHILLES</option>
    					<option value="AMERICAN TOURER">AMERICAN TOURER</option>
    					<option value="AMP">AMP</option>
    					<option value="ANATRES">ANATRES</option>
    					<option value="ANTARES">ANTARES</option>
    					<option value="ATTURO">ATTURO</option>
    					<option value="BANNERS">BANNERS</option>
    					<option value="BRIDGESTONE">BRIDGESTONE</option>
    				</select>
    			</div>
    		</div>
    		<div class="Categories">
    			<h4>Categories</h4>
    			<div class="form-group">
    				<select class="form-control" id="category">
    					<option value="">Select Categories</option>
    					<option value="Fees">Fees</option>
    					<option value="Parts">Parts</option>
    					<option value="Wheels">Wheels</option>
    					<option value="Tire">Tire</option>
    				</select>
    			</div>
    		</div>


    	</div>
    	</form>
    	<div class="col-md-6">
    		<div class="Tire">
    			<h4>Tire</h4>
    			<div class="col-md-3">
    				<div class="form-group">
	    				<select class="form-control" id="a">
	    					<option value="">Select</option>
	    					<option value="155">155</option>
	    					<option value="165">165</option>
	    					<option value="175">175</option>
	    					<option value="185">185</option>
	    					<option value="195">195</option>
	    					<option value="205">205</option>
	    					<option value="215">215</option>
	    				</select>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="form-group">
	    				<select class="form-control" id="b">
	    					<option value="">Select</option>
	    					<option value="10.50">10.50</option>
	    					<option value="11.50">11.50</option>
	    					<option value="12.50">12.50</option>
	    					<option value="13.50">13.50</option>
	    					<option value="14.50">14.50</option>
	    					<option value="15.50">15.50</option>
	    					<option value="25">25</option>
	    					<option value="30">30</option>
	    					<option value="35">35</option>
	    				</select>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="form-group">
	    				<select class="form-control" id="c">
	    					<option value="">Select</option>
	    					<option value="13">13</option>
	    					<option value="14">14</option>
	    					<option value="15">15</option>
	    					<option value="16">16</option>
	    					<option value="17">17</option>
	    					<option value="18">18</option>
	    					<option value="19">19</option>
	    					<option value="20">20</option>
	    				</select>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="form-group">
	  					<button type="submit" class="btn btn-info" id="tire_search" style="background-color: #0015f9; border: #0015f9">Search</button>
    				</div>
    			</div>
    		</div>
    		<div class="clearfix"></div>
    		<div class="Wheels">
    			<h4>Wheels</h4>
    			<h5>Size:</h5>
    			<div class="col-md-5">
    				<div class="form-group">
	    				<select class="form-control" id="wdiameter">
	    					<option value="">Select</option>
	    					<option value="15">15</option>
	    					<option value="16">16</option>
	    					<option value="17">17</option>
	    					<option value="18">18</option>
	    					<option value="19">19</option>
	    					<option value="20">20</option>
	    					<option value="21">21</option>
	    					<option value="22">22</option>
	    				</select>
    				</div>
    			</div>
    			<div class="col-md-2" align="center">X</div>
    			<div class="col-md-5">
    				<div class="form-group">
	    				<select class="form-control" id="wwidth">
	    					<option value="">Select</option>
	    					<option value="6.5">6.5</option>
	    					<option value="6.6">6.6</option>
	    					<option value="7">7</option>
	    					<option value="7.5">7.5</option>
	    					<option value="8">8</option>
	    					<option value="8.5">8.5</option>
	    					<option value="9">9</option>
	    				</select>
    				</div>
    			</div>
    			<div class="clearfix"></div>
    			<h5>Offset:</h5>
    			<div class="col-md-5">
    				<div class="form-group">
	    				<select class="form-control" id="omax">
	    					<option value="">Select</option>
	    					<option value="-76">-76</option>
	    					<option value="-44">-44</option>
	    					<option value="-24">-24</option>
	    					<option value="-19">-19</option>
	    					<option value="-12">-12</option>
	    					<option value="+0">+0</option>
	    					<option value="+10">+10</option>
	    					<option value="+15">+15</option>
	    					<option value="+18">+18</option>
	    					<option value="+20">+20</option>
	    					<option value="+22">+22</option>
	    					<option value="+24">+24</option>
	    					<option value="+25">+25</option>
	    					<option value="+25.5">+25.5</option>
	    				</select>
    				</div>
    			</div>
    			<div class="col-md-2" align="center">-</div>
    			<div class="col-md-5">
    				<div class="form-group">
	    				<select class="form-control" id="omin">
	    					<option value="">Select</option>
	    					<option value="-76">-76</option>
	    					<option value="-44">-44</option>
	    					<option value="-24">-24</option>
	    					<option value="-19">-19</option>
	    					<option value="-12">-12</option>
	    					<option value="+0">+0</option>
	    					<option value="+10">+10</option>
	    					<option value="+15">+15</option>
	    					<option value="+18">+18</option>
	    					<option value="+20">+20</option>
	    					<option value="+22">+22</option>
	    					<option value="+24">+24</option>
	    					<option value="+25">+25</option>
	    					<option value="+25.5">+25.5</option>
	    				</select>
    				</div>
    			</div>
    			<div class="clearfix"></div>
    			<h5>Bolt Circle:</h5>
    			<div class="col-md-12">
    				<div class="form-group">
	    				<select class="form-control" id="b_circle">
	    					<option value="">Select</option>
	    					<option value="4x100">4x100</option>
	    					<option value="4x108">4x108</option>
	    					<option value="4x114.3">4x114.3</option>
	    					<option value="5x100">5x100</option>
	    					<option value="5x108">5x108</option>
	    					<option value="5x110">5x110</option>
	    					<option value="5x112">5x112</option>
	    					<option value="5x114.3">5x114.3</option>
	    					<option value="5x115">5x115</option>
	    					<option value="5x120">5x120</option>
	    					<option value="5x120.65">5x120.65</option>
	    					<option value="5x127">5x127</option>
	    					<option value="5x139.7">5x139.7</option>
	    					<option value="5x150">5x150</option>
	    				</select>
    				</div>
    			</div>
    			<div class="clearfix"></div>
    			<h5>Center Bore:</h5>
    			<div class="col-md-12">
    				<div class="form-group">
	    				<select class="form-control" id="c_bore">
	    					<option value="">Select</option>
	    				</select>
    				</div>
    			</div>
    			<div class="clearfix"></div>
    			<h5>Finish:</h5>
    			<div class="col-md-12">
    				<div class="form-group">
	    				<select class="form-control" id="finish">
	    					<option value="">Select</option>
	    				</select>
    				</div>
    			</div>
    			<div class="clearfix"></div>
    			<div class="col-md-12" align="center">
	    			<div class="form-group">
		  				<button type="button" class="btn btn-info" id="wheel_search" style="background-color: #0015f9; border: #0015f9">Search</button>
	    			</div>
    			</div>
    		</div>


    	</div>
  	<a href="#" id="search_type_btna">Advance Search</a>
  	<a href="#" id="search_type_btnb" style="display: none;">Basic Search</a>
    </div>
    <div class="row" id="advance_box" style="display: none;">
    	<h2 style="color: #0015f9;">Car Search</h2>
    	<div class="col-sm-6">
    		<div class="form-group">
    			<h5 for="make">Select Make</h5>
    			<select name="make" id="make" class="form-control">
                    <option value="">--SELECT MAKE--</option>
                    <?php 
                    $qm = "SELECT * FROM tbl_make";
                    $rm = $db->query($qm);
                    if ($rm->num_rows > 0) {
                        while ($row = $rm->fetch_object()) {
                            echo "<option value='".$row->id."'>".$row->make."</option>";
                        }
                    }
                    ?>
                </select>
    		</div>
    		<div class="form-group">
                <label>Model</label>
                <select name="model" id="model" class="form-control">
                    <option value="">--SELECT Model--</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label>Trim</label>
                <select name="trim" id="trim" class="form-control" required>
                    <option value="">--SELECT Trim--</option>
                    
                </select>
            </div>
    		<div class="form-group">
    			<button type="button" class="btn btn-primary" id="btnasearch">Search</button>
    		</div>
    	</div>
    </div>
    <a href="#" id="search_type_btnb" style="display: none;">Basic Search</a>
</div>
        <div>
        	<h2 style="color: #333; font-size: 18px; line-height: 24px;padding: 0 10px 0 0;text-transform: uppercase;text-shadow: 1px 1px 1px #FAFAFA;margin-left:300px;margin-top: 92px;">Product listing<a href="checkout.php" class="btn btn-info pull-right" style="margin-right: 12%;background-color: #0015f9; border: #0015f9">CART</a></h2>

        </div>
	<div align="center" style="width:100%;">
		<div class='table-responsive'>
		<table id="example" cellpadding="10"cellspacing="10" class="table table-striped table-bordered" style="width:80%;">
        <thead>
            <tr>
                <th></th>
                <th>#Parts</th>
                <th>Description</th>
                <th>Size</th>
                <th>Manufacturer</th>
                <th>FET</th>
                <th>Price</th>
                <th>Wholesale Tire Distributor Avail</th>
                <th>Wholesale Tire Distributor Buy</th>
                <th>Links</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php 
        	if (!empty($products)) {        	
        	foreach ($products as $product) {
				echo '<tr>
					<td><img src="'.$product['image'].'" style="width:100px;height:120px;"></td>
					<td>'.$product['catalog'].'</td>
					<td>'.$product['description'].'</td>
					<td>'.$product['size'].'</td>
					<td>'.$product['brand'].'</td>
					<td>'.$product['fet'].'</td>
					<td>$'.$product['price'].'</td>
					<td>'.$product['avail1121420'].'</td>
					<td><input type="text"  class="qty"  name="qty" id="'.$product['catalog'].','.$product['price'].'"><i class="fa fa-arrow-left"></i></td>
					<td><a target="_blank" href="'.$product['website'].'">Website</a>
					<a target="_blank" href="'.$product['youtube'].'">Youtube</a></td>
					<td><a href="product_comparsion.php?p='.$product['price'].'">Compare</a></td>
				</tr>';

				}
			}else{
				header("location:login.php?error");
			}
        	?>
        </tbody>
    </table>
	</div>
   </div>
    <?php include "footer.php"; ?>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
});
$(document).on('blur','.qty', function() {
	    var qty = $(this).val();
	    var productID = $(this).attr('id');
	    $(this).attr("disabled", "disabled");
	    $.ajax({
	    	type:"GET",
	    	url: "ajax.php?pid="+productID+"&qty="+qty,
	    	success:function(response){
	    		$("#"+productID).addClass("fa-check");
	    		$("#"+productID).removeClass("fa-arrow-left");
	    	}
	    });
});
$(document).on('blur','#qsearch', function() {
	var val = $(this).val();
	if(val != ''){
		window.location.href="shop.php?search=Search="+val;
	}
});
$(document).on('change','#menufacturar', function() {
	var val = $(this).val();
	window.location.href="shop.php?search=Manufacturer="+val;
});
$(document).on('change','#category', function() {
	var val = $(this).val();
	window.location.href="shop.php?search=Category="+val;
});
$(document).on('click','#tire_search', function() {
	var valA = $("#a").val();
	var valB = $("#b").val();
	var valC = $("#c").val();
	window.location.href="shop.php?search=TireSizeA="+valA+"&TireSizeB="+valB+"&TireSizeC="+valC+"";
});
$(document).on('click','#wheel_search', function() {
	var wdiameter = $("#wdiameter").val();
	var wwidth = $("#wwidth").val();
	var omax = $("#omax").val();
	var omin = $("#omin").val();
	var b_circle = $("#b_circle").val();
	var c_bore = $("#c_bore").val();
	var finish = $("#finish").val();
	window.location.href="shop.php?search=WheelDiameter="+wdiameter+"&WheelWidth="+wwidth+"&WheelOffsetMin="+omin+"&WheelOffsetMax="+omax+"&WheelBoltCircle="+b_circle+"WheelCenterBore="+c_bore+"&WheelFinish="+finish+"";
});

$(document).on('click','#search_type_btna', function() {
	$("#basic_box").hide();
	$("#advance_box").show();
	$("#search_type_btnb").show();
	$("#search_type_btna").hide();
});
$(document).on('click','#search_type_btnb', function() {
	$("#basic_box").show();
	$("#advance_box").hide();
	$("#search_type_btnb").hide();
	$("#search_type_btna").show();
});       
$(document).on('change','#make', function() {
    var make = $(this).val();
    $.ajax({
        type:"GET",
        url: "admin/admin_ajax.php?make="+make,
        success:function(response){
            $("#model").append(response);
        }
    });
});  
$(document).on('change','#model', function() {
    var make = $(this).val();
    $.ajax({
        type:"GET",
        url: "admin/admin_ajax.php?model="+make,
        success:function(response){
            $("#trim").append(response);
        }
    });
});  
$(document).on('click','#btnasearch', function() {
    var trim = $("#trim").val();
    $.ajax({
        type:"GET",
        url: "admin/admin_ajax.php?trim="+trim,
        success:function(response){
            window.location.href="shop.php?search="+response;
        }
    });
});  
</script>