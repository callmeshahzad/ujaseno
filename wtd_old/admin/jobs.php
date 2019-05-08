<?php 
include "header.php"; 

$message = '';
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = "INSERT INTO `tbl_jobs`(`title`, `description`) VALUES ('$title','$description')";
    if ($db->query($query)) {
        $message = "asuccess";
        
    }else{
        $message = "aerror";
    }
}



if(isset($_GET['did'])){
    $did = $_GET['did'];
    $query = "DELETE FROM tbl_jobs WHERE id='$did'";
    
    if($db->query($query)){
        $message = "dsuccess";
    }else{
        $message = "derror";
    }
}



$q = "SELECT * FROM tbl_jobs  ORDER BY id DESC";
$result = $db->query($q);
?>   


<div class="content">
    <div class="container-fluid">
        <br>
        <hr>
        <h4>Current Jobs</h4>
        <div class="row">
            <div class="col-sm-6 center-block" style="float: none;">
                <?php 
                    if (!empty($message)) {
                        if ($message == 'asuccess') {
                            echo '<div class="alert alert-success">
                                  <strong>Success!</strong>Saved
                                </div>';
                        }else if ($message == 'aerror'){
                            echo '<div class="alert alert-danger">
                                  <strong>Oooops!</strong> Something wrong.
                                </div>';
                        }
                    }
                ?> 
                <form method="post" action="#" name="save_job">
                    <div class="form-group">
                        <label for="title">Job Title</label>
                        <input type="text" name="title" id="title" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="save_job" class="btn btn-info" style="background-color: #0015f9;border-color: #0015f9;">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
        <?php 
            if (!empty($message)) {
                if ($message == 'dsuccess') {
                    echo '<div class="alert alert-success">
                          <strong>Success!</strong> Deleted
                        </div>';
                }else if ($message == 'derror'){
                    echo '<div class="alert alert-danger">
                          <strong>Oooops!</strong> Something wrong.
                        </div>';
                }
            }
        ?> 
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>S#</th>
                <th>Job Title </th>
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
                <td><a href="jobs.php?did=<?=$row->id?>" class="btn btn-danger">Delete</a>
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