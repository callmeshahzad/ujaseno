<?php 
include '../admin/config.php';
if (isset($_GET['year'])) {
	$year = $_GET['year'];
 	$q  = "SELECT * FROM tbl_vis_make WHERE year_id= '$year'";
 	$r = $db->query($q);
 	if ($r->num_rows > 0 ) {
 		while ($row = $r->fetch_object()) {
 			echo '<option value="'.$row->id.'">'.$row->make.'</option>';
 		}
 	}
 }

 if (isset($_GET['make'])) {
	$make = $_GET['make'];
 	$q  = "SELECT * FROM tbl_vis_model WHERE make_id= '$make'";
 	$r = $db->query($q);
 	if ($r->num_rows > 0 ) {
 		while ($row = $r->fetch_object()) {
 			echo '<option value="'.$row->id.'">'.$row->model.'</option>';
 		}
 	}
 }

 if (isset($_GET['model'])) {
	$model = $_GET['model'];
 	$q  = "SELECT * FROM tbl_vis_trim WHERE model_id= '$model'";
 	$r = $db->query($q);
 	if ($r->num_rows > 0 ) {
 		while ($row = $r->fetch_object()) {
 			echo '<option value="'.$row->id.'">'.$row->trim.'</option>';
 		}
 	}
 }

 if (isset($_GET['trim'])) {
	$trim = $_GET['trim'];
 	$q  = "SELECT * FROM tbl_vis_car WHERE trim_id= '$trim'";
 	$r = $db->query($q);
 	if ($r->num_rows > 0 ) {
 		$row = $r->fetch_object();
 		$car_pic = $row->car_pic;
 		echo $car_pic;
 	}
 }

 if (isset($_GET['wheel_id'])) {
 	$wheelID = $_GET['wheel_id'];
 	$qw = "SELECT * FROM tbl_vis_wheels WHERE id='$wheelID'";
    $rw = $db->query($qw);
    if($rw->num_rows > 0){
    	$row = $rw->fetch_object();
    	$wheel_pic = $row->wheel_img;
    	echo $wheel_pic;
    }
 }



?>