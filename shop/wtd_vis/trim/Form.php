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
include '../Header_Footer/Header.php';
$objBAL=new trimBAL();
if(isset($_GET['id']))
{
	foreach($db->Find($_GET['id']) as $row)
	{
		//if($row['id']==$_GET['id'])
		//{
			$objBAL->id=$row['id'];
			$objBAL->modelId=$row['modelId'];
			$objBAL->trim=$row['trim'];
			$objBAL->carImage=$row['carImage'];
			$objBAL->RimLeftMargin=$row['RimLeftMargin'];
			$objBAL->RimRightMargin=$row['RimRightMargin'];
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
	$objBAL->modelId=$_POST['modelId'];
	$objBAL->trim=$_POST['trim'];
	$carImageImageName = pathinfo($_FILES['carImageImage']['name'], PATHINFO_FILENAME);
	$iscarImageImage = (strlen($_FILES['carImageImage']['name']) != 0) ? true : false;
	$carImageImagetarget_dir = "../images/trim_images/";
	$carImageImageFileType = strtolower(pathinfo($_FILES['carImageImage']['name'], PATHINFO_EXTENSION));
	$newcarImageImageName = basename($carImageImageName).date('YmdHis').".". $carImageImageFileType ;
	if ($iscarImageImage) {
	    $target_file = $carImageImagetarget_dir . $newcarImageImageName;
	    if (move_uploaded_file($_FILES['carImageImage']["tmp_name"], $target_file)) {
	    }else {
	        echo "<script type = 'text/javascript'> alert('Error while uploading image');</ script > ";
	    }
	}
	$objBAL->carImage = ($iscarImageImage) ? "../images/trim_images/" . $newcarImageImageName : $_POST['carImage'];
	$objBAL->RimLeftMargin=$_POST['RimLeftMargin'];
	$objBAL->RimRightMargin=$_POST['RimRightMargin'];
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
<h2><?php echo isset($_GET['id'])?"Update ":"Add "; ?>trim</h2>
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
			<label class = "control-label col-md-2">modelId</label>
			<div class="col-md-10">
			    <input type="number"  min="0" max="111111111" step="1" name="modelId" class = "form-control" value="<?php echo $objBAL->modelId;?>" required/>
			</div>
		</div>
		<div class="form-group">
			<label class = "control-label col-md-2">trim</label>
			<div class="col-md-10">
			    <input type="text" name="trim" value="<?php echo $objBAL->trim;?>" class = "form-control" required/>
			</div>
		</div>
		<script  type="text/javascript">function readcarImageImage(input) {if (input.files && input.files[0]) {var reader = new FileReader();reader.onload = function (e) {$('#carImage').attr('src', e.target.result).width('100%').height('auto');};reader.readAsDataURL(input.files[0]);}}</script>
		<div class="form-group text-center">
			<label class = "control-label col-md-2">carImage</label>
			<div class="col-md-10">
			<div class="col-md-10">
               <img style="height: 400px; width: auto; " src=" <?php echo($objBAL->carImage) ? ''. $objBAL->carImage : 'https://image.freepik.com/free-vector/colorful-feathers_23-2147515001.jpg'; ?> " alt="carImage" id="carImage"> <br> <br>
			    <input style="margin-left:30% " type="file" name="carImageImage" accept="image/*" onchange="readcarImageImage(this)">
			    <input type="text" name="carImage" value="<?php echo $objBAL->carImage;?>"  class = "form-control hidden">
			</div>
		</div>
		<div class="form-group">
			<label class = "control-label col-md-2">RimLeftMargin</label>
			<div class="col-md-10">
			    <input type="number"  min="0" max="111111111" step="1" name="RimLeftMargin" class = "form-control" value="<?php echo $objBAL->RimLeftMargin;?>" required/>
			</div>
		</div>
		<div class="form-group">
			<label class = "control-label col-md-2">RimRightMargin</label>
			<div class="col-md-10">
			    <input type="number"  min="0" max="111111111" step="1" name="RimRightMargin" class = "form-control" value="<?php echo $objBAL->RimRightMargin;?>" required/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10"> <br><hr>
			    <input type="submit" name="submit" value="Save" class = "btn btn-default btn-block"/>
			</div>
		</div>
		<div class="form-group">
           <a href="../trim">Back to List</a>
		</div>
	</div>
</form>
