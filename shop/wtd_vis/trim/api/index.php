<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
$classname = "trimDAL.php";
spl_autoload_register(function ($class_name) {
    include '../classes/' . $class_name . '.php';
});
$classname = "trimBAL.php";
spl_autoload_register(function ($class_name) {
    include '../classes/' . $class_name . '.php';
});
$db = new trimDAL(null);
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'GET':
        if (!empty($_GET['id'])) {
            try {
                $id = intval($_GET['id']);
                header('Content-Type: application/json');
                $results = $db->Find($id)->fetchAll(PDO::FETCH_ASSOC);
                if (isset($results[0])) {
                    $json = json_encode($results[0]);
                    echo $json;
                } else {
                    echo '{}';
                }
            } catch (Exception $e) {
                http_response_code(500);
                $json = json_encode($e);
                echo $json;
            }
        } else if (!empty($_GET['modelId'])) {
            try {
                $id = intval($_GET['modelId']);
                header('Content-Type: application/json');
                $results = $db->LoadByModel($id)->fetchAll(PDO::FETCH_ASSOC);
                if (isset($results)) {
                    $json = json_encode($results);
                    echo $json;
                } else {
                    echo '{}';
                }
            } catch (Exception $e) {
                http_response_code(500);
                $json = json_encode($e);
                echo $json;
            }
        } else {
            try {
                header('Content-Type: application/json');
                $results = $db->LoadAll()->fetchAll(PDO::FETCH_ASSOC);
                $json = json_encode($results);
                echo $json;
            } catch (Exception $e) {
                http_response_code(500);
                $json = json_encode($e);
                echo $json;
            }
        }
        break;
    case 'POST':
        try {
            $data = json_decode(file_get_contents('php://input'), true);
            $trim = new trimBAL();
            $trim->modelId = $data['modelId'];
            $trim->trim = $data['trim'];
            $trim->carImage = $data['carImage'];
            $trim->left = $data['left'];
            $trim->right = $data['right'];
            $trim->top = $data['top'];
            header('Content-Type: application/json');
            $db->Add($trim);
            $results = $db->LoadMaxObj()->fetchAll(PDO::FETCH_ASSOC);
            $json = json_encode($results[0]);
            echo $json;
        } catch (Exception $e) {
            http_response_code(500);
            $json = json_encode($e);
            echo $json;
        }
        break;
    case 'PUT':
        try {
            $data = json_decode(file_get_contents('php://input'), true);
            $trim = new trimBAL();
            $trim->id = $data['id'];
            $trim->modelId = $data['modelId'];
            $trim->trim = $data['trim'];
            $trim->carImage = $data['carImage'];
            $trim->left = $data['left'];
            $trim->right = $data['right'];
            $trim->top = $data['top'];
            header('Content-Type: application/json');
            $db->Update($trim);
            $json = json_encode($data);
            echo $json;
        } catch (Exception $e) {
            http_response_code(500);
            $json = json_encode($e);
            echo $json;
        }
        break;
    case 'DELETE':
        try {
            if (isset($_GET['id'])) {
                $db->Delete($_GET['id']);
                header('Content-Type: application/json');
                echo '{"status":"Executed"}';
            } else {
                header('Content-Type: application/json');
                http_response_code(500);
                echo '{"errorInfo": ["Id not Detected"]}';
            }
        } catch (Exception $e) {
            http_response_code(500);
            $json = json_encode($e);
            echo $json;
        }
        break;
    default:
        header("HTTP / 1.0 405 Method Not Allowed");
        break;
}
