<?php 
class makeDAL
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
            $query="INSERT INTO make( "; 
            $query.=" yearId "; 
            $query.=", "; 
            $query.=" make "; 
            $query.=") VALUES ("; 
            $query.="'{$obj->yearId}'"; 
            $query.=", "; 
            $query.="'{$obj->make}'"; 
            $query.=");"; 
                $db->query($query);
       }
    	public function Update($obj){
    		$db=$GLOBALS['pdo'];
            $query="UPDATE make SET "; 
            $query.="yearId='{$obj->yearId}'"; 
            $query.=", "; 
            $query.="make='{$obj->make}'"; 
            $query.="WHERE id='{$obj->id}' ;"; 
             $db->query($query);
       }
    	public function Delete($i){
    		$db=$GLOBALS['pdo'];
            $query="DELETE FROM make"; 
            $query.=" WHERE id='{$i}'"; 
            $query.=";"; 
            $db->query($query);
       }
    	public function Find($i){
    		$db=$GLOBALS['pdo'];
            $query="SELECT * FROM make"; 
            $query.=" WHERE id='{$i}'"; 
            $query.=";"; 
               return $db->query($query);
       }
    	public function LoadAll(){
    		$db=$GLOBALS['pdo'];
            $query="SELECT * FROM make;"; 
            if($db!=null) 
            {
               return $db->query($query);
            }
       }
       public function LoadByYear($yearId){
            $db=$GLOBALS['pdo'];
            $query="SELECT DISTINCT make,yearId,id FROM make WHERE yearId='$yearId' ORDER BY make ASC;"; 
            if($db!=null) 
            {
            return $db->query($query);
            }
        }
    	public function LoadMaxObj(){
    		$db=$GLOBALS['pdo'];
            $query="SELECT * FROM make ORDER BY id DESC LIMIT 0, 1;"; 
            if($db!=null) 
            {
               return $db->query($query);
            }
       }
    	public function Search($obj){
    		$db=$GLOBALS['pdo'];
            $query="SELECT * FROM make WHERE "; 
            $query.= "(id IS NULL OR id LIKE '%{$obj->id}%') ";
            $query.= " OR ";
            $query.= "(yearId IS NULL OR yearId LIKE '%{$obj->yearId}%') ";
            $query.= " OR ";
            $query.= "(make IS NULL OR make LIKE '%{$obj->make}%') ";
            if($db!=null) 
            {
               return $db->query($query);
            }
       }
}
