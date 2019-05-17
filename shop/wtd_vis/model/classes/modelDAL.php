<?php 
class modelDAL
{
    public $pdo=null;
    function __construct($connectionString)
    {		
	    try 
	    {
	        if(!isset($connectionString)){
	            $connectionString = include '../../DbConfig.php';
	        }
		    $GLOBALS['pdo'] = new PDO($connectionString[0],$connectionString[1], $connectionString[2]);
		    $GLOBALS['pdo']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    //echo "Connected successfully"; 			
        }
	    catch(PDOException $e)
        {
		    echo "Connection failed: " . $e->getMessage();			
        }
    }
    	public function Add($obj){
    		$db=$GLOBALS['pdo'];
            $query="INSERT INTO model( "; 
            $query.=" makeId "; 
            $query.=", "; 
            $query.=" model "; 
            $query.=") VALUES ("; 
            $query.="'{$obj->makeId}'"; 
            $query.=", "; 
            $query.="'{$obj->model}'"; 
            $query.=");"; 
            $db->query($query);
       }
    	public function Update($obj){
    		$db=$GLOBALS['pdo'];
            $query="UPDATE model SET "; 
            $query.="makeId='{$obj->makeId}'"; 
            $query.=", "; 
            $query.="model='{$obj->model}'"; 
            $query.="WHERE id='{$obj->id}' ;"; 
             $db->query($query);
       }
    	public function Delete($i){
    		$db=$GLOBALS['pdo'];
            $query="DELETE FROM model"; 
            $query.=" WHERE id='{$i}'"; 
            $query.=";"; 
            $db->query($query);
       }
    	public function Find($i){
    		$db=$GLOBALS['pdo'];
            $query="SELECT * FROM model"; 
            $query.=" WHERE id='{$i}'"; 
            $query.=";"; 
               return $db->query($query);
       }
    	public function LoadAll(){
    		$db=$GLOBALS['pdo'];
            $query="SELECT * FROM model;"; 
            if($db!=null) 
            {
               return $db->query($query);
            }
       }
       public function LoadByMake($makeId){
            $db=$GLOBALS['pdo'];
            $query="SELECT DISTINCT model,makeId,id FROM model WHERE makeId=$makeId ORDER BY model ASC;"; 
            if($db!=null) 
            {
                return $db->query($query);
            }
        }
    	public function LoadMaxObj(){
    		$db=$GLOBALS['pdo'];
            $query="SELECT * FROM model ORDER BY id DESC LIMIT 0, 1;"; 
            if($db!=null) 
            {
               return $db->query($query);
            }
       }
    	public function Search($obj){
    		$db=$GLOBALS['pdo'];
            $query="SELECT * FROM model WHERE "; 
            $query.= "(id IS NULL OR id LIKE '%{$obj->id}%') ";
            $query.= " OR ";
            $query.= "(makeId IS NULL OR makeId LIKE '%{$obj->makeId}%') ";
            $query.= " OR ";
            $query.= "(model IS NULL OR model LIKE '%{$obj->model}%') ";
            if($db!=null) 
            {
               return $db->query($query);
            }
       }
}
