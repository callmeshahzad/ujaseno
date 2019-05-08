<?php 
include 'config.php';

?>
<?php 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$q = "SELECT * FROM tbl_promotions WHERE id='$id'";
	$r = $db->query($q);
	if ($r->num_rows > 0 ) {
		$row = $r->fetch_object();
		$title = $row->title;
		$description = $row->description;
	}else{
		$title = '';
		$description = '';
	}
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
		<div class="col-sm-6 center-block" style="float: none;">
			<h2 style="color: #0015f9"><?=$title?></h2>
			<p><?=$description?></p>
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