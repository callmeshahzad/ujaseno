<?php 
include "header.php"; 

$message = '';
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $year  = $_POST['year'];
    $query = "INSERT INTO `tbl_make`(`make`,`year_id`) VALUES ('$title','$year')";
    if ($db->query($query)) {
        $message = "success";
    }else{
        $message = "error";
    }
}


$q = "SELECT * FROM tbl_make ";
$result = $db->query($q);
?>   


<div class="content">
    <div class="container-fluid">
        <br>
        <hr>
        <h4>Make</h4>
        <div class="row">
            <div class="col-sm-6 center-block" style="float: none;">
                <form method="post" action="#" name="save">
                    <div class="form-group">
                        <label for="title">Year</label>
                        <select name="year" class="form-control" required>
                        	<option value="">Select Year</option>
                        	<?php 
                        	$qYear = "SELECT * FROM tbl_year ORDER BY year DESC";
                        	$rYear = $db->query($qYear);
                        	if($rYear->num_rows > 0){
                        		while ($row = $rYear->fetch_object()) {
                        			echo '<option value="'.$row->id.'">'.$row->year.'</option>';
                        		}
                        	}

                        	?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Make</label>
                        <input type="text" name="title" id="title" class="form-control" required="required">
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