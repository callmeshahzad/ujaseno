<?php 
include 'config.php';

if (isset($_GET['year'])) {
	$year = $_GET['year'];
 	// -- $q  = "SELECT * FROM tbl_make WHERE year_id= '$year'";
 	$q = "SELECT DISTINCT `Make` FROM car_detail WHERE Year='$year' GROUP BY Make";
 	$r = $db->query($q);
 	if ($r->num_rows > 0 ) {
 		while ($row = $r->fetch_object()) {
 			echo '<option value="'.$row->Make.'">'.$row->Make.'</option>';
 		}
 	}
 }

if (isset($_GET['make'])) {
	$make = $_GET['make'];
	$year = $_GET['myear'];
 	// $q  = "SELECT * FROM tbl_model WHERE make_id= '$make'";
 	$q = "SELECT DISTINCT `Model` FROM car_detail WHERE Make='$make' AND Year='$year' GROUP BY Model";
 	$r = $db->query($q);
 	if ($r->num_rows > 0 ) {
 		while ($row = $r->fetch_object()) {
 			echo '<option value="'.$row->Model.'">'.$row->Model.'</option>';
 		}
 	}
 }

 if (isset($_GET['model'])) {
	$model = $_GET['model'];
	$make = $_GET['momake'];
	$year = $_GET['moyear'];
 	// $q  = "SELECT * FROM tbl_trim WHERE model_id= '$model'";
 	$q = "SELECT DISTINCT `Version` FROM car_detail WHERE Make='$make' AND Year='$year' AND Model='$model'";
	// echo "Query: ".$q;

 	$r = $db->query($q);
 	if ($r->num_rows > 0 ) {
 		while ($row = $r->fetch_object()) {
 			echo '<option value="'.$row->Version.'">'.$row->Version.'</option>';
 		}
 	}
 }

 // if (isset($_GET['trim'])) {
	// $trim = $_GET['trim'];
	// $model = $_GET['tmodel'];
	// $make = $_GET['tmake'];
	// $year = $_GET['tyear'];
 // 	// $q  = "SELECT * FROM tbl_car_detail WHERE trim_id= '$trim'";
 // 	$q = "SELECT * FROM car_detail WHERE Make='$make' AND Year='$year' AND Model='$model' AND Version LIKE '%$trim%' GROUP BY Version";
 // 	$r = $db->query($q);
 // 	if ($r->num_rows > 0 ) {
 // 		while ($row = $r->fetch_object()) {
 // 			$trim = $row->Tiresize;
 // 			// echo $trim;
 // 			$ttrim = substr($trim,7,9);
 // 			echo "Search=".$ttrim;
 // 			// echo 'TireSizeA='.$row->tsizea.'&TireSizeB='.$row->tsizeb.'&TireSizeC='.$row->tsizec;
 // 		}
 // 	}
 // }

 if (isset($_GET['trim'])) {
	$trim = $_GET['trim'];
	$model = $_GET['tmodel'];
	$make = $_GET['tmake'];
	$year = $_GET['tyear'];
 	// $q  = "SELECT * FROM tbl_car_detail WHERE trim_id= '$trim'";
 	$q = "SELECT * FROM car_detail WHERE Make='$make' AND Year='$year' AND Model='$model' AND Version='$trim' ";
	 $r = $db->query($q);
	//  echo "<script>alert('".count($r)."') </script>";
	// echo $q;
	// echo "<pre>";
	$lastTrim="";
	$lastWheeldiameter="";
	$lastWheelwidth="";
	$lastcenterBolt="";
	if ($r->num_rows > 0 ) {
		while ($row = $r->fetch_object()) {
			$trim = $row->Tiresize;
					// echo $trim;
			$lastTrim=substr($trim,7,10);
					// echo 'TireSizeA='.$row->tsizea.'&TireSizeB='.$row->tsizeb.'&TireSizeC='.$row->tsizec;
			$wheelSize = $row->Rimsize;
			$lastWheeldiameter = substr($wheelSize,strpos($wheelSize,'x')+1,2);

			$lastWheelwidth = substr($wheelSize,1,strpos($wheelSize,'J')-1);

			$lastcenterBolt = $row->Boltpattern;
		}
				
	}
	echo $lastTrim;
	echo "&WheelDiameter=".$lastWheeldiameter;
	echo "&WheelWidth=".$lastWheelwidth;
	echo "&WheelBoltCircle=".$lastcenterBolt;


	// echo "</pre>";
 	// $row = $r->fetch_object();

 	// // tire size
 	// $trim = $row->Tiresize;
 	// $ttrim = substr($trim,7,9);
 	// // echo "Search=".$ttrim;
 	// echo $ttrim;
 	// // $Vdata =1;
 	// // echo "Vdata=".$Vdata;
 	// // echo "&TT=".$ttrim;

 	// //wheel size 
 	// $wheelSize = $row->Rimsize;
 	// $Wheeldiameter = substr($wheelSize,strpos($wheelSize,'x')+1,2);
 	// echo "&WheelDiameter=".$Wheeldiameter;
 	// $Wheelwidth = substr($wheelSize,1,strpos($wheelSize,'J')-1);
 	// echo "&WheelWidth=".$Wheelwidth;
 	
 	// $centerBolt = $row->Boltpattern;
 	// echo "&WheelBoltCircle=".$centerBolt;
 	
 	
 }


?>