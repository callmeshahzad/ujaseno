<?php 
include "header.php"; 

$message = '';
if (isset($_POST['title'])) {
	$title = $_POST['title'];
    $image 	= basename($_FILES['slider_img']['name']);
    $target = "uploads/".uniqid().$image;
    $query 	= "INSERT INTO `tbl_announcement`(`title`,`slider_images`, `status`) VALUES ('$title','$target','1')";
    if ($db->query($query)) {
        if (move_uploaded_file($_FILES['slider_img']['tmp_name'],$target)) {
            $message = "success";
        }else{
            $message = "error";
        }
    }else{
        $message = "error";
    }
}

if (isset($_GET['did'])) {
	$id = $_GET['did'];
	$q = "DELETE FROM tbl_announcement WHERE id='$id'";
	$db->query($q);
}



$q = "SELECT * FROM tbl_announcement  ORDER BY id DESC";
$result = $db->query($q);
?> 

<div class="content">
    <div class="container-fluid">
        <br>
        <hr>
        <h4>Announcement Slider Images</h4>
        <div class="row">
            <div class="col-sm-6 center-block" style="float: none;">
                <?php 
                    if ($message) {
                        if ($message == 'success') {
                            echo '<div class="alert alert-success">
                                  <strong>Success!</strong> Saved
                                </div>';
                        }else{
                            echo '<div class="alert alert-danger">
                                  <strong>Oooops!</strong> Something wrong.
                                </div>';
                        }
                    }
                    ?> 
                <form method="post" action="#" name="save_announcement" enctype="multipart/form-data">
                    <div class="form-group">
                    	<!-- <label>Title</label> -->
                    	<input type="text" name="title" class="form-control" placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                    	<label>Select Slider Image (640x360)</label>
                    	<input type="file" name="slider_img" class="form-control" placeholder="Select Slider Image" required style="opacity: 1;margin-top: 20px;">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="save_announcement" class="btn btn-info" style="background-color: #0015f9;border-color: #0015f9;">SAVE</button>
                    </div>
                    
                </form>
            </div>
        </div>
        
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>S#</th>
                <th>Title </th>
                <th>Slider Image </th>
                <!-- <th>Description</th>
                <th>Size</th> -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if ($result->num_rows > 0 ) {
                $counter = 1;
                while ($row = $result->fetch_object()) {
            ?>
            <tr>
                <td><?=$counter?></td>
                <td><?=$row->title?></td>
                <td><img src="<?php echo $row->slider_images ?>" alt="" style="width: 100px;" /></td>
                <td><a href="announcement.php?did=<?=$row->id?>" class="btn btn-danger">Delete</a></td>
            </tr>

            <?php
                $counter++;
                }
            }

            ?>
            
        </tbody>
        
    </table>
        
    </div>
</div>

<?php include "footer.php"; ?>   