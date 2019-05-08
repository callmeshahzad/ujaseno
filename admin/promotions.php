<?php 
include "header.php"; 

if(isset($_GET['did'])){
    $did = $_GET['did'];
    $query = "DELETE FROM tbl_promotions WHERE id='$did'";
    $db->query($query);
}


$message = '';
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $image = basename($_FILES['image_file']['name']);
    $target = "../shop/images/promotion_img/".uniqid().$image;
    $query = "INSERT INTO `tbl_promotions`(`title`, `description`,`status`,`image`) VALUES ('$title','$description','1','$target')";
    if ($db->query($query)) {
        if (move_uploaded_file($_FILES['image_file']['tmp_name'],$target)) {
            $message = "success";
        }else{
            $message = "error";
        }
    }else{
        $message = "error";
    }
}



$q = "SELECT * FROM tbl_promotions  ORDER BY id DESC";
$result = $db->query($q);
?>   

<div class="content">
    <div class="container-fluid">
       
        <h4>Promotions</h4>

        
        <div class="row">
            <div class="col-sm-6 center-block" style="float: none;">
                <?php 
                    if (!empty($message)) {
                        if ($message == 'success') {
                            echo '<div class="alert alert-success">
                                  <strong>Success!</strong>Saved
                                </div>';
                        }else{
                            echo '<div class="alert alert-danger">
                                  <strong>Oooops!</strong> Something wrong.
                                </div>';
                        }
                    }
                    ?> 
                <form method="post" action="#" name="save_promotions" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Promotion Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Select Image (400x850)</label><br>
                        <input type="file" name="image_file" class="form-control" style="opacity: 1;margin-top: 20px;">
                    </div>
                    <div class="clearfix"></div><br>
                    <div class="form-group">
                        <button type="submit" name="save_promotions" class="btn btn-info" style="background-color: #0015f9;border-color: #0015f9;">SAVE</button>
                    </div>
                    
                </form>
            </div>
        </div>
        




        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>S#</th>
                <th>Image</th>
                <th>Promotion </th>
                <!-- <th>Description</th> -->
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
                <td><img src="<?=$row->image?>" alt="" class="img-responsive" style="width: 70px;"> </td>
                <td><a href="promotions_list.php?fid=<?=$row->id?>"><?=$row->title?></a></td>
                <!-- <td><?=$row->description?></td> -->
                <td><a href="promotions.php?did=<?=$row->id?>" class="btn btn-danger">Delete</a>
                    <a href="promotions_add.php" class="btn btn-info">Add Sizes</a>
                </td>
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