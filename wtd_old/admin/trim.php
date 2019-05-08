<?php 
include "header.php"; 

$message = '';
if (isset($_POST['trim'])) {
    $make = $_POST['make'];
    $model = $_POST['model'];
    $trim = $_POST['trim'];
    $query = "INSERT INTO `tbl_trim`(`model_id`,`trim`) VALUES ('$model','$trim')";
    if ($db->query($query)) {
        $message = "success";
    }else{
        $message = "error";
    }
}


// $q = "SELECT * FROM tbl_trim, tbl_model , tbl_make";
$q = "SELECT * FROM tbl_trim JOIN tbl_model ON tbl_trim.model_id = tbl_model.id JOIN tbl_make ON tbl_model.make_id = tbl_make.id";
$result = $db->query($q);
?>   


<div class="content">
    <div class="container-fluid">
        <br>
        <hr>
        <h4>Trim</h4>
        <div class="row">
            <div class="col-sm-6 center-block" style="float: none;">
                <form method="post" action="#" name="save">
                    <div class="form-group">
                        <label>Make</label>
                        <select name="make" id="make" class="form-control" required>
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
                        <label>Model</label>
                        <select name="model" id="model" class="form-control" required>
                            <option value="">--SELECT Model--</option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="trim">Trim</label>
                        <input type="text" name="trim" id="trim" class="form-control" required>
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
                <th>Trim</th>
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
                <td><?=$row->trim?></td>
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
<script>
$(document).on('change','#make', function() {
    var make = $(this).val();
    $.ajax({
        type:"GET",
        url: "admin_ajax.php?make="+make,
        success:function(response){
            $("#model").append(response);
        }
    });
});  
</script>