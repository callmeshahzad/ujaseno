<?php
$classname="trimDAL.php";
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.php';
});
$classname="trimBAL.php";
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.php';
});
$db=new trimDAL(null);
include '..//Header_Footer/Header.php';
$result=null;
if(isset($_POST['btn_search']))
{
	$objBAL=new trimDAL();
	$objBAL->id=$_POST['txt_Search'];
	$objBAL->modelId=$_POST['txt_Search'];
	$objBAL->trim=$_POST['txt_Search'];
	$objBAL->carImage=$_POST['txt_Search'];
	$objBAL->RimLeftMargin=$_POST['txt_Search'];
	$objBAL->RimRightMargin=$_POST['txt_Search'];
	$result=$db->Search($objBAL);
}
else
{
	$result=$db->LoadAll();
}

?>
</br>
</br>
<a href="Form.php" class="btn btn-primary">Add new trim</a>
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
           modelId
        </th>
        <th>
           trim
        </th>
        <th>
           carImageImage
        </th>
        <th>
           RimLeftMargin
        </th>
        <th>
           RimRightMargin
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
			echo '<td>'.$row['modelId']."</td>";
			echo '<td>'.$row['trim']."</td>";
echo '<td> <img src="'.$row['carImage'].'" style="height: 50px; "/></td>';			echo '<td>'.$row['RimLeftMargin']."</td>";
			echo '<td>'.$row['RimRightMargin']."</td>";
			echo '<td> <a href="Form.php?id='.$row['id'].'">Edit</a> | <a href="Form.php?did='.$row['id'].'">Delete</a></td>';
			echo '</tr>';		
		}
?>
</tbody>
</table>
<?php	
include '../Header_Footer/Footer.php';
?>
