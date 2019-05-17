<?php
$classname="makeDAL.php";
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.php';
});
$classname="makeBAL.php";
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.php';
});
$db=new makeDAL(null);
include '..//Header_Footer/Header.php';
$result=null;
if(isset($_POST['btn_search']))
{
	$objBAL=new makeDAL();
	$objBAL->id=$_POST['txt_Search'];
	$objBAL->yearId=$_POST['txt_Search'];
	$objBAL->make=$_POST['txt_Search'];
	$result=$db->Search($objBAL);
}
else
{
	$result=$db->LoadAll();
}

?>
</br>
</br>
<a href="Form.php" class="btn btn-primary">Add new make</a>
<form method="post">
	<div class="col-sm-6">
	</div>
	<div class="col-sm-6">
		<div class="col-sm-10" >
			<input type="text" name="txt_Search" placeholder="Search" class = "form-control"/>	
		</div>
		<div class="col-sm-2"  >
			<input type="submit" name="btn_search" value="Search" class = "btn btn-primary" style="margin-left:-70px"/>
		</div>		
	</div>
</form>
<table class="table">
<thead>
    <tr>
        <th class="hidden">
           id
        </th>
        <th>
           yearId
        </th>
        <th>
           make
        </th>
		<th>
		</th>
    </tr>
	</thead>
	<tbody>
<?php
	foreach($result as $row)
		{
			echo '<tr >';
			echo '<td class="hidden">'.$row['id']."</td>";
			echo '<td>'.$row['yearId']."</td>";
			echo '<td>'.$row['make']."</td>";
			echo '<td> <a href="Form.php?id='.$row['id'].'">Edit</a> | <a href="Form.php?did='.$row['id'].'">Delete</a></td>';
			echo '</tr>';		
		}
?>
</tbody>
</table>
<?php	
include '../Header_Footer/Footer.php';
?>
