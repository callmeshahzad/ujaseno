<?php
$classname="yearDAL.php";
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.php';
});
$classname="yearBAL.php";
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.php';
});
$db=new yearDAL(null);
include '../Header_Footer/Header.php';
$objBAL=new yearBAL();
if(isset($_GET['id']))
{
	foreach($db->Find($_GET['id']) as $row)
	{
		//if($row['id']==$_GET['id'])
		//{
			$objBAL->id=$row['id'];
			$objBAL->year=$row['year'];
		//}
		//else{
		//}
	}
}
if(isset($_GET['did']))
{
	$db->Delete($_GET['did']);
		echo "<script type='text/javascript'>location.href = 'index.php';</script>";
}
if(isset($_POST['submit']))
{	
	$objBAL->id=$_POST['id'];
	$objBAL->year=$_POST['year'];
	if($objBAL->id==0)
	{
		$db->Add($objBAL);
		echo "<script type='text/javascript'>location.href = 'index.php';</script>";
	}
	else
	{
		$db->Update($objBAL);
		echo "<script type='text/javascript'>location.href = 'index.php';</script>";
	}
}
?>
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<h2><?php echo isset($_GET['id'])?"Update ":"Add "; ?>year</h2>
<form method="post"  enctype="multipart/form-data">
	<div class="form-horizontal col-sm-6">
		<div class="form-group hidden">
				<label class = "control-label col-md-2">id</label>
				<div class="col-md-10">
				    <input type="text" name="id" class = "form-control" 
					value="<?php echo isset($_GET['id'])?$_GET['id']:0; ?>" required/>
				</div>
		</div>
		<div class="form-group">
			<label class = "control-label col-md-2">year</label>
			<div class="col-md-10">
			    <input type="number"  min="0" max="111111111" step="1" name="year" class = "form-control" value="<?php echo $objBAL->year;?>" required/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10"> <br><hr>
			    <input type="submit" name="submit" value="Save" class = "btn btn-default btn-block"/>
			</div>
		</div>
		<div class="form-group">
           <a href="../year">Back to List</a>
		</div>
	</div>
</form>
