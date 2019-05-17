<?php
class car_rimDAL
{
    public $pdo = null;
    public function __construct($connectionString)
    {
        try
        {
            if (!isset($connectionString)) {
                $connectionString = include '../../DbConfig.php';
            }
            $GLOBALS['pdo'] = new PDO($connectionString[0], $connectionString[1], $connectionString[2]);
            $GLOBALS['pdo']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function Add($obj)
    {
        $db = $GLOBALS['pdo'];
        $query = "INSERT INTO car_rim ( ";
        $query .= " trimId ";
        $query .= ", ";
        $query .= " rimFaceImage ";
        $query .= ", ";
        $query .= " imid ";
        $query .= ", ";
        $query .= " wheeldiameter ";
        $query .= ", ";
        $query .= " wheelwidth ";
        $query .= ", ";
        $query .= " wheelboltcircle ";
        $query .= ") VALUES (";
        $query .= "'{$obj->trimId}'";
        $query .= ", ";
        $query .= "'{$obj->rimFaceImage}'";
        $query .= ", ";
        $query .= "'{$obj->imid}'";
        $query .= ", ";
        $query .= "'{$obj->wheeldiameter}'";
        $query .= ", ";
        $query .= "'{$obj->wheelwidth}'";
        $query .= ", ";
        $query .= "'{$obj->wheelboltcircle}'";
        $query .= ");";
        // echo $query;
        $db->query($query);
    }
    public function Update($obj)
    {
        $db = $GLOBALS['pdo'];
        $query = "UPDATE car_rim SET ";
        $query .= "trimId='{$obj->trimId}'";
        $query .= ", ";
        $query .= "rimFaceImage='{$obj->rimFaceImage}'";
        $query .= ", ";
        $query .= "imid='{$obj->imid}'";
        $query .= ", ";
        $query .= "wheeldiameter='{$obj->wheeldiameter}'";
        $query .= ", ";
        $query .= "wheelwidth='{$obj->wheelwidth}'";
        $query .= ", ";
        $query .= "wheelboltcircle='{$obj->wheelboltcircle}' ";
        $query .= "WHERE id='{$obj->id}' ;";
        $db->query($query);
    }

    public function Delete($i)
    {
        $db = $GLOBALS['pdo'];
        $query = "DELETE FROM car_rim";
        $query .= " WHERE id='{$i}'";
        $query .= ";";
        $db->query($query);
    }
    public function Find($i)
    {
        $db = $GLOBALS['pdo'];
        $query = "SELECT * FROM car_rim";
        $query .= " WHERE id='{$i}'";
        $query .= ";";
        return $db->query($query);
    }
    public function LoadAll()
    {
        $db = $GLOBALS['pdo'];
        $query = "SELECT * FROM car_rim;";
        if ($db != null) {
            return $db->query($query);
        }
    }
    public function LoadMaxObj()
    {
        $db = $GLOBALS['pdo'];
        $query = "SELECT * FROM car_rim ORDER BY id DESC LIMIT 0, 1;";
        if ($db != null) {
            return $db->query($query);
        }
    }
    public function LoadByTrim($trimId)
    {
        $db = $GLOBALS['pdo'];
        $query = "SELECT * FROM car_rim WHERE trimId='$trimId'";
        if ($db != null) {
            return $db->query($query);
        }
    }
    public function Search($obj)
    {
        $db = $GLOBALS['pdo'];
        $query = "SELECT * FROM car_rim WHERE ";
        $query .= "(id IS NULL OR id LIKE '%{$obj->id}%') ";
        $query .= " OR ";
        $query .= "(trimId IS NULL OR trimId LIKE '%{$obj->trimId}%') ";
        $query .= " OR ";
        $query .= "(rimFaceImage IS NULL OR rimFaceImage LIKE '%{$obj->rimFaceImage}%') ";
        $query .= " OR ";
        $query .= "(imid IS NULL OR imid LIKE '%{$obj->imid}%') ";
        $query .= " OR ";
        $query .= "(wheeldiameter IS NULL OR wheeldiameter LIKE '%{$obj->wheeldiameter}%') ";
        $query .= " OR ";
        $query .= "(wheelwidth IS NULL OR wheelwidth LIKE '%{$obj->wheelwidth}%') ";
        $query .= " OR ";
        $query .= "(wheelboltcircle IS NULL OR wheelboltcircle LIKE '%{$obj->wheelboltcircle}%') ";
        if ($db != null) {
            return $db->query($query);
        }
    }
}
