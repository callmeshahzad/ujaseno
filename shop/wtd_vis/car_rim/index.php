<?php
$classname="car_rimDAL.php";
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.php';
});
$classname="car_rimBAL.php";
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.php';
});
$db=new car_rimDAL(null);
include '..//Header_Footer/Header.php';
$result=null;
if(isset($_POST['btn_search']))
{
	$objBAL=new car_rimDAL();
	$objBAL->id=$_POST['txt_Search'];
	$objBAL->trimId=$_POST['txt_Search'];
	$objBAL->rimFaceImage=$_POST['txt_Search'];
	$objBAL->imid=$_POST['txt_Search'];
	$objBAL->wheeldiameter=$_POST['txt_Search'];
	$objBAL->wheelwidth=$_POST['txt_Search'];
	$objBAL->wheelboltcircle=$_POST['txt_Search'];
	$result=$db->Search($objBAL);
}
else
{
	$result=$db->LoadAll();
}

?>
</br>
</br>
<a href="Form.php" class="btn btn-primary">Add new car_rim</a>
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
           trimId
        </th>
        <th>
           rimFaceImageImage
        </th>
        <th>
           imid
        </th>
        <th>
           wheeldiameter
        </th>
        <th>
           wheelwidth
        </th>
        <th>
           wheelboltcircle
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
			echo '<td>'.$row['trimId']."</td>";
echo '<td> <img src="'.$row['rimFaceImage'].'" style="height: 50px; "/></td>';			echo '<td>'.$row['imid']."</td>";
			echo '<td>'.$row['wheeldiameter']."</td>";
			echo '<td>'.$row['wheelwidth']."</td>";
			echo '<td>'.$row['wheelboltcircle']."</td>";
			echo '<td> <a href="Form.php?id='.$row['id'].'">Edit</a> | <a href="Form.php?did='.$row['id'].'">Delete</a></td>';
			echo '</tr>';		
		}
?>
</tbody>
</table>
<?php	
include '../Header_Footer/Footer.php';
?>
