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
include '../Header_Footer/Header.php';
$objBAL=new car_rimBAL();
if(isset($_GET['id']))
{
	foreach($db->Find($_GET['id']) as $row)
	{
		//if($row['id']==$_GET['id'])
		//{
			$objBAL->id=$row['id'];
			$objBAL->trimId=$row['trimId'];
			$objBAL->rimFaceImage=$row['rimFaceImage'];
			$objBAL->imid=$row['imid'];
			$objBAL->wheeldiameter=$row['wheeldiameter'];
			$objBAL->wheelwidth=$row['wheelwidth'];
			$objBAL->wheelboltcircle=$row['wheelboltcircle'];
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
	$objBAL->trimId=$_POST['trimId'];
	$rimFaceImageImageName = pathinfo($_FILES['rimFaceImageImage']['name'], PATHINFO_FILENAME);
	$isrimFaceImageImage = (strlen($_FILES['rimFaceImageImage']['name']) != 0) ? true : false;
	$rimFaceImageImagetarget_dir = "../images/car_rim_images/";
	$rimFaceImageImageFileType = strtolower(pathinfo($_FILES['rimFaceImageImage']['name'], PATHINFO_EXTENSION));
	$newrimFaceImageImageName = basename($rimFaceImageImageName).date('YmdHis').".". $rimFaceImageImageFileType ;
	if ($isrimFaceImageImage) {
	    $target_file = $rimFaceImageImagetarget_dir . $newrimFaceImageImageName;
	    if (move_uploaded_file($_FILES['rimFaceImageImage']["tmp_name"], $target_file)) {
	    }else {
	        echo "<script type = 'text/javascript'> alert('Error while uploading image');</ script > ";
	    }
	}
	$objBAL->rimFaceImage = ($isrimFaceImageImage) ? "../images/car_rim_images/" . $newrimFaceImageImageName : $_POST['rimFaceImage'];
	$objBAL->imid=$_POST['imid'];
	$objBAL->wheeldiameter=$_POST['wheeldiameter'];
	$objBAL->wheelwidth=$_POST['wheelwidth'];
	$objBAL->wheelboltcircle=$_POST['wheelboltcircle'];
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
<h2><?php echo isset($_GET['id'])?"Update ":"Add "; ?>car_rim</h2>
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
			<label class = "control-label col-md-2">trimId</label>
			<div class="col-md-10">
			    <input type="number"  min="0" max="111111111" step="1" name="trimId" class = "form-control" value="<?php echo $objBAL->trimId;?>" required/>
			</div>
		</div>
		<script  type="text/javascript">function readrimFaceImageImage(input) {if (input.files && input.files[0]) {var reader = new FileReader();reader.onload = function (e) {$('#rimFaceImage').attr('src', e.target.result).width('100%').height('auto');};reader.readAsDataURL(input.files[0]);}}</script>
		<div class="form-group text-center">
			<label class = "control-label col-md-2">rimFaceImage</label>
			<div class="col-md-10">
			<div class="col-md-10">
               <img style="height: 400px; width: auto; " src=" <?php echo($objBAL->rimFaceImage) ? ''. $objBAL->rimFaceImage : 'https://image.freepik.com/free-vector/colorful-feathers_23-2147515001.jpg'; ?> " alt="rimFaceImage" id="rimFaceImage"> <br> <br>
			    <input style="margin-left:30% " type="file" name="rimFaceImageImage" accept="image/*" onchange="readrimFaceImageImage(this)">
			    <input type="text" name="rimFaceImage" value="<?php echo $objBAL->rimFaceImage;?>"  class = "form-control hidden">
			</div>
		</div>
		<div class="form-group">
			<label class = "control-label col-md-2">imid</label>
			<div class="col-md-10">
			    <input type="number"  min="0" max="111111111" step="1" name="imid" class = "form-control" value="<?php echo $objBAL->imid;?>" required/>
			</div>
		</div>
		<div class="form-group">
			<label class = "control-label col-md-2">wheeldiameter</label>
			<div class="col-md-10">
			    <input type="number"  min="0" max="111111111" step="1" name="wheeldiameter" class = "form-control" value="<?php echo $objBAL->wheeldiameter;?>" required/>
			</div>
		</div>
		<div class="form-group">
			<label class = "control-label col-md-2">wheelwidth</label>
			<div class="col-md-10">
			    <input type="number"  min="0" max="111111111" step="1" name="wheelwidth" class = "form-control" value="<?php echo $objBAL->wheelwidth;?>" required/>
			</div>
		</div>
		<div class="form-group">
			<label class = "control-label col-md-2">wheelboltcircle</label>
			<div class="col-md-10">
			    <input type="text" name="wheelboltcircle" value="<?php echo $objBAL->wheelboltcircle;?>" class = "form-control" required/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10"> <br><hr>
			    <input type="submit" name="submit" value="Save" class = "btn btn-default btn-block"/>
			</div>
		</div>
		<div class="form-group">
           <a href="../car_rim">Back to List</a>
		</div>
	</div>
</form>
