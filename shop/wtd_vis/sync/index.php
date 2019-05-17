
<?php

$process = curl_init();
// $host 	= "localhost";
// $dbName = "wtdusao2_wtdusa";
// $user 	= "wtdusao2_wtdusa";
// $pass 	= "WWaTSeSaO]d9";
// $pdo = new PDO('mysql:host=127.0.0.1;dbname=wtd', 'root', '');
$pdo = new PDO('mysql:host=localhost;dbname=wtdusao2_wtdusa', 'wtdusao2_wtdusa', 'WWaTSeSaO]d9');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require '../year/classes/yearDAL.php';
require '../year/classes/yearBAL.php';

require '../make/classes/makeDAL.php';
require '../make/classes/makeBAL.php';

require '../model/classes/modelDAL.php';
require '../model/classes/modelBAL.php';

require '../trim/classes/trimDAL.php';
require '../trim/classes/trimBAL.php';

require '../car_rim/classes/car_rimDAL.php';
require '../car_rim/classes/car_rimBAL.php';

$query = "TRUNCATE `year`; TRUNCATE `make`; TRUNCATE `model`; TRUNCATE `trim`; TRUNCATE `car_rim`;";
$pdo->query($query);

$query = "SELECT DISTINCT Year FROM `car_detail`";
$query .= "WHERE Year='2019'";
$result = $pdo->query($query);
// foreach ($result as $row) {
//     $year = new yearBAL();
//     $year_db = new yearDAL(include ('../Dbconfig.php'));
//     $year->year = $row['Year'];
//     $year_db->Add($year);

//     $yearMaxOBJ = $year_db->LoadMaxObj();
//     $year = $yearMaxOBJ->fetch(PDO::FETCH_ASSOC);
//     $yearVar = $year['year'];
//     // print_r($row['Year']);
//     //Year

//     $query = "SELECT DISTINCT Make FROM `car_detail` ";
//     // $query.=" WHERE Make='audi'";
//     $resultMake = $pdo->query($query);
//     foreach ($resultMake as $rowMake) {
//         $make = new makeBAL();
//         $make_db = new makeDAL(include ('../Dbconfig.php'));
//         $make->make = $rowMake['Make'];
//         $make->yearId = $year['id'];
//         $make_db->Add($make);

//         $makeMaxOBJ = $make_db->LoadMaxObj();
//         $make = $makeMaxOBJ->fetch(PDO::FETCH_ASSOC);
//         $makeVar = $make['make'];
//         // print_r($rowMake['Make']);

//         $query = "SELECT DISTINCT Model FROM `car_detail` WHERE Year='$yearVar' AND Make='$makeVar' ";
//         // $query.=" AND  Model='a4'";
//         $resultModel = $pdo->query($query);
//         foreach ($resultModel as $rowModel) {
//             $model = new modelBAL();
//             $model_db = new modelDAL(include ('../Dbconfig.php'));
//             $model->model = $rowModel['Model'];
//             $model->makeId = $make['id'];
//             $model_db->Add($model);

//             $modelMaxOBJ = $model_db->LoadMaxObj();
//             $model = $modelMaxOBJ->fetch(PDO::FETCH_ASSOC);
//             $modelVar = $model['model'];

//             $query = "SELECT DISTINCT Version FROM `car_detail` WHERE Year='$yearVar' AND Make='$makeVar' AND Model='$modelVar';";
//             // $query.= " WHERE Version=' 2.0TFSi'";
//             $resultTrim = $pdo->query($query);
//             foreach ($resultTrim as $rowTrim) {
//                 $trim = new trimBAL();
//                 $trim_db = new trimDAL(include ('../Dbconfig.php'));
//                 $trim->trim = $rowTrim['Version'];
//                 $trim->modelId = $model['id'];
//                 $trim->carImage = $yearVar." ".$makeVar." ". $modelVar.".png";
//                 $trim->top = 0;
//                 $trim->right = 0;
//                 $trim->left = 0;
//                 $trim_db->Add($trim);

//                 $trimMAXOBJ = $trim_db->LoadMaxObj();
//                 $trim = $trimMAXOBJ->fetch(PDO::FETCH_ASSOC);
//                 $trimVar = $trim['trim'];

//                 $query = "SELECT DISTINCT Rimsize,Boltpattern FROM car_detail WHERE Year='$yearVar' AND Make='$makeVar' AND Model='$modelVar' AND Version='$trimVar' ";
//                 $resultRIM = $pdo->query($query);
//                 foreach ($resultRIM as $rowRIM) {
//                     if (isset($rowRIM['Rimsize'])) {
//                         $wheelSize = $rowRIM['Rimsize'];

//                         $wheeldiameter = substr($wheelSize, strpos($wheelSize, 'x') + 1, 2);

//                         $wheelwidth = substr($wheelSize, 1, strpos($wheelSize, 'J') - 1);
//                         $wheelwidth = str_replace(' ', '%20', $wheelwidth);
//                         $wheelcenterBolt = $rowRIM['Boltpattern'];
//                         if (isset($wheelSize) && isset($wheeldiameter) && isset($wheelwidth) && isset($wheelcenterBolt)
//                             && $wheelcenterBolt != "N/A"
//                             && $wheelSize != ""
//                             && $wheeldiameter != ""
//                             && $wheelcenterBolt != ""
//                         ) {
//                             $urlWheel = "https://wtd-api-helper.herokuapp.com/api?wheeldiameter=" . $wheeldiameter . "&wheelwidth=" . $wheelwidth . "&wheelboltcircle=" . $wheelcenterBolt;
//                             // echo "\n".$urlWheel."\n";
//                             try {
//                                 $response = file_get_contents($urlWheel);
//                                 $result = json_decode($response, true);
//                                 if (isset($result) && count($result) > 0) {
//                                     foreach ($result as $key => $data) {
//                                         $car_rimDb = new car_rimDAL(include ('../Dbconfig.php'));
//                                         $car_rim = new car_rimBAL();
//                                         $car_rim->trimId = $trim['id'];
//                                         $car_rim->rimFaceImage = "";
//                                         $car_rim->imid = $data['imid'];
//                                         $car_rim->wheeldiameter = $wheeldiameter;
//                                         $car_rim->wheelwidth = $wheelwidth;
//                                         $car_rim->wheelboltcircle = $wheelcenterBolt;
//                                         // print_r($car_rim);
//                                         $car_rimDb->Add($car_rim);
//                                     }
//                                 }
//                             } catch (Exception $e) {
//                             }

//                         }
//                     }
//                 }
//             }
//         }
//     }
//     echo "Success :" . $year['year'] . "\n";

// }
echo "connected".$pdo;

?>