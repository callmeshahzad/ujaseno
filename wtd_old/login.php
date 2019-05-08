<?php 
include 'session.php';
include 'config.php';

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
<!DOCTYPE html>
<html>
<head>
	
<meta charset=utf-8>
<title>WTD|LOGIN</title>
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
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel=icon type=image/png sizes=32x32 href="images/ficon.png">
</head>
 </head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" type="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<body>
	<?php include 'nav.php'; ?>
	<div class="row" style="padding: 5% 0px; margin-top: 92px;">
		<div class="col-sm-4 center-block" style="float: none;background: #0015f9;color: #fff;padding: 10px 15px;">
			<h2 style="padding: 25px 0px;color: red;font-family: 'AvantGardeGothicITC W08 Bold',monospace;text-align: center;">Login</h2>
			<form action="login.php" method="post" accept-charset="utf-8">

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" required>
				</div>
				<?php echo $msg; ?>
				<div class="form-group">
					<button type="submit" class="btn btn-info" style="background-color: red; border: red">LOGIN</button>
				</div>
			</form>
			
		</div>
   </div>
   <hr>
    <?php include "footer.php"; ?>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>