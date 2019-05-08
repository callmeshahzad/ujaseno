<?php 
include "header.php"; 

$message = '';
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $type = $_POST['type'];
    $web = '';
    $youtube = $_POST['youtube'];
    $query = "INSERT INTO `tbl_brand`(`brand`,`type`, `website`, `youtube`) VALUES ('$title','$type','$web','$youtube')";
    if ($db->query($query)) {
        $message = "success";
    }else{
        $message = "error";
    }
}


$q = "SELECT * FROM tbl_brand  ORDER BY id DESC";
$result = $db->query($q);
?>   


<div class="content">
    <div class="container-fluid">
        <br>
        <hr>
        <h4>Manufacture Links</h4>
        <div class="row">
            <div class="col-sm-6 center-block" style="float: none;">
                <form method="post" action="#" name="save_job">
                    <div class="form-group">
                        <label for="title">Manufacture Name</label>
                        <input type="text" name="title" id="title" class="form-control" required="required">
                    </div>
<!--                    <div class="form-group">-->
<!--                        <label for="title">Manufacture Website URL</label>-->
<!--                        <input type="text" name="web" id="title" class="form-control">-->
<!--                    </div>-->
                    <div class="form-group">
                        <label for="title">Manufacture Youtube URL</label>
                        <input type="text" name="youtube" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Manufacture Type</label>
                        <select name="type" class="form-control" required>
                            <option value="">--Select--</option>
                            <option value="tire">Tire</option>
                            <option value="wheel">Wheel</option>
                            <option value="part">Part</option>
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <button type="submit" name="save_job" class="btn btn-info" style="background-color: #0015f9;border-color: #0015f9;">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>S#</th>
                <th>Manufacture Name</th>
                <th>Type</th>
                <th>Youtube Link</th>
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
                <td><?=$row->brand?></td>
                <td><?=$row->type?></td>
                <td><?=$row->youtube?></td>
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