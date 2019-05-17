<?php
class trimDAL
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
        $query = "INSERT INTO trim ( ";
        $query .= " modelId ";
        $query .= ", ";
        $query .= " trim ";
        $query .= ", ";
        $query .= " carImage ";
        $query .= ", ";
        $query .= " `left` ";
        $query .= ", ";
        $query .= " `right` ";
        $query .= ", ";
        $query .= " top ";
        $query .= ") VALUES (";
        $query .= "'{$obj->modelId}'";
        $query .= ", ";
        $query .= "'{$obj->trim}'";
        $query .= ", ";
        $query .= "'{$obj->carImage}'";
        $query .= ", ";
        $query .= "'{$obj->left}'";
        $query .= ", ";
        $query .= "'{$obj->right}'";
        $query .= ", ";
        $query .= "'{$obj->top}'";
        $query .= ");";
        // echo $query;
        $db->query($query);
    }
    public function Update($obj)
    {
        $db = $GLOBALS['pdo'];
        $query = "UPDATE trim SET ";
        $query .= "modelId='{$obj->modelId}'";
        $query .= ", ";
        $query .= "trim='{$obj->trim}'";
        $query .= ", ";
        $query .= "carImage='{$obj->carImage}'";
        $query .= ", ";
        $query .= "left='{$obj->left}'";
        $query .= ", ";
        $query .= "right='{$obj->right}'";
        $query .= ", ";
        $query .= "top='{$obj->top}'";
        $query .= "WHERE id='{$obj->id}' ;";
        $db->query($query);
    }

    public function Delete($i)
    {
        $db = $GLOBALS['pdo'];
        $query = "DELETE FROM trim";
        $query .= " WHERE id='{$i}'";
        $query .= ";";
        $db->query($query);
    }
    public function Find($i)
    {
        $db = $GLOBALS['pdo'];
        $query = "SELECT * FROM trim";
        $query .= " WHERE id='{$i}'";
        $query .= ";";
        return $db->query($query);
    }
    public function LoadAll()
    {
        $db = $GLOBALS['pdo'];
        $query = "SELECT * FROM trim;";
        if ($db != null) {
            return $db->query($query);
        }
    }
    public function LoadByModel($modelId)
    {
        $db = $GLOBALS['pdo'];
        $query = "SELECT * FROM trim WHERE modelId='$modelId' ORDER BY trim ASC;";
        if ($db != null) {
            return $db->query($query);
        }
    }
    public function LoadMaxObj()
    {
        $db = $GLOBALS['pdo'];
        $query = "SELECT * FROM trim ORDER BY id DESC LIMIT 0, 1;";
        if ($db != null) {
            return $db->query($query);
        }
    }
    public function Search($obj)
    {
        $db = $GLOBALS['pdo'];
        $query = "SELECT * FROM trim WHERE ";
        $query .= "(id IS NULL OR id LIKE '%{$obj->id}%') ";
        $query .= " OR ";
        $query .= "(modelId IS NULL OR modelId LIKE '%{$obj->modelId}%') ";
        $query .= " OR ";
        $query .= "(trim IS NULL OR trim LIKE '%{$obj->trim}%') ";
        $query .= " OR ";
        $query .= "(carImage IS NULL OR carImage LIKE '%{$obj->carImage}%') ";
        $query .= " OR ";
        $query .= "(RimLeftMargin IS NULL OR RimLeftMargin LIKE '%{$obj->RimLeftMargin}%') ";
        $query .= " OR ";
        $query .= "(RimRightMargin IS NULL OR RimRightMargin LIKE '%{$obj->RimRightMargin}%') ";
        if ($db != null) {
            return $db->query($query);
        }
    }
}
