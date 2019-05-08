<?php 
include 'config.php';

if (isset($_GET['make'])) {
	$make = $_GET['make'];
 	$q  = "SELECT * FROM tbl_model WHERE make_id= '$make'";
 	$r = $db->query($q);
 	if ($r->num_rows > 0 ) {
 		while ($row = $r->fetch_object()) {
 			echo '<option value="'.$row->id.'">'.$row->model.'</option>';
 		}
 	}
 }

 if (isset($_GET['model'])) {
	$model = $_GET['model'];
 	$q  = "SELECT * FROM tbl_trim WHERE model_id= '$model'";
 	$r = $db->query($q);
 	if ($r->num_rows > 0 ) {
 		while ($row = $r->fetch_object()) {
 			echo '<option value="'.$row->id.'">'.$row->trim.'</option>';
 		}
 	}
 }

 if (isset($_GET['trim'])) {
	$trim = $_GET['trim'];
 	$q  = "SELECT * FROM tbl_car_detail WHERE trim_id= '$trim'";
 	$r = $db->query($q);
 	if ($r->num_rows > 0 ) {
 		while ($row = $r->fetch_object()) {
 			echo 'TireSizeA='.$row->tsizea.'&TireSizeB='.$row->tsizeb.'&TireSizeC='.$row->tsizec;
 		}
 	}
 }



?>