<?php 
include "header.php"; 

if(isset($_GET['did'])){
    $did = $_GET['did'];
    $query = "DELETE FROM tbl_announcement_alert WHERE id='$did'";
    $db->query($query);
}


$message = '';
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = "INSERT INTO `tbl_announcement_alert`(`title`, `description`,`status`) VALUES ('$title','$description','1')";
    if ($db->query($query)) {
            $message = "success";
    }else{
        $message = "error";
    }
}


$q = "SELECT * FROM tbl_announcement_alert  ORDER BY id DESC";
$result = $db->query($q);
?>   

<div class="content">
    <div class="container-fluid">
       
        <h4>Announcements</h4>

        
        <div class="row">
            <div class="col-sm-6 center-block" style="float: none;">
                <?php 
                    if (!empty($message)) {
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
                <form method="post" action="#" name="save_alert" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Announcement Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Announcement Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    
                    <div class="clearfix"></div><br>
                    <div class="form-group">
                        <button type="submit" name="save_alert" class="btn btn-info" style="background-color: #0015f9;border-color: #0015f9;">SAVE</button>
                    </div>
                    
                </form>
            </div>
        </div>
        




        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>S#</th>
                <th>Title</th>
                <th>Description</th>
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
                <td><?=$row->description?></td>
                <td><a href="announcement_alert.php?did=<?=$row->id?>" class="btn btn-danger">Delete</a>
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