<?php 
include "header.php"; 

$message = '';
if (isset($_POST['model'])) {
    $make = $_POST['make'];
    $model = $_POST['model'];
    $query = "INSERT INTO `tbl_model`(`make_id`, `model`) VALUES ('$make','$model')";
    if ($db->query($query)) {
        $message = "success";
    }else{
        $message = "error";
    }
}


// $q = "SELECT * FROM tbl_model , tbl_make";
$q = "SELECT * FROM tbl_model JOIN tbl_make ON tbl_model.make_id = tbl_make.id";
$result = $db->query($q);
?>   


<div class="content">
    <div class="container-fluid">
        <br>
        <hr>
        <h4>Model</h4>
        <div class="row">
            <div class="col-sm-6 center-block" style="float: none;">
                <form method="post" action="#" name="save">
                    <div class="form-group">
                        <label>Make</label>
                        <select name="make" class="form-control" required>
                            <option value="">--SELECT MAKE--</option>
                            <?php 
                            $qm = "SELECT * FROM tbl_make";
                            $rm = $db->query($qm);
                            if ($rm->num_rows > 0) {
                                while ($row = $rm->fetch_object()) {
                                    echo "<option value='".$row->id."'>".$row->make."</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" name="model" id="model" class="form-control" required>
                    </div>
            
                    <div class="form-group">
                        <button type="submit" name="save" class="btn btn-info" style="background-color: #0015f9;border-color: #0015f9;">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>S#</th>
                <th>Make</th>
                <th>Model</th>
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
                <td><?=$row->make?></td>
                <td><?=$row->model?></td>
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