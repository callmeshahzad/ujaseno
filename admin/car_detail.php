<?php 
include "header.php"; 

$message = '';
if (isset($_POST['trim'])) {
    $trim = $_POST['trim'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $query = "INSERT INTO `tbl_car_detail`(`trim_id`,`tsizea`,`tsizeb`,`tsizec`) VALUES ('$trim','$a','$b','$c')";
    if ($db->query($query)) {
        $message = "success";
    }else{
        $message = "error";
    }
}


// $q = "SELECT * FROM tbl_car_detail, tbl_trim, tbl_model , tbl_make";
$q = "SELECT * FROM tbl_car_detail JOIN tbl_trim ON tbl_car_detail.trim_id = tbl_trim.id JOIN tbl_model ON tbl_trim.model_id = tbl_model.id JOIN tbl_make ON tbl_model.make_id = tbl_make.id";
$result = $db->query($q);
?>   


<div class="content">
    <div class="container-fluid">
        <br>
        <hr>
        <h4>Car Tire Detail</h4>
        <div class="row">
            <div class="col-sm-6 center-block" style="float: none;">
                <form method="post" action="#" name="save">
                    <div class="form-group">
                        <label>Make</label>
                        <select name="make" id="make" class="form-control" required>
                            <option value="">--SELECT MAKE--</option>
                            <?php 
                            echo $qm = "SELECT * FROM tbl_make";
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
                        <label>Trim</label>
                        <select name="trim" id="trim" class="form-control" required>
                            <option value="">--SELECT Trim--</option>
                            
                        </select>
                    </div>
                    <div class="Tire">
                        <h4>Tire Detail</h4>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-control" id="a" name="a">
                                    <option value="">Select</option>
                                    <option value="155">155</option>
                                    <option value="165">165</option>
                                    <option value="175">175</option>
                                    <option value="185">185</option>
                                    <option value="195">195</option>
                                    <option value="205">205</option>
                                    <option value="215">215</option>
                                    <option value="225">225</option>
                                    <option value="235">235</option>
                                    <option value="245">245</option>
                                    <option value="255">255</option>
                                    <option value="265">265</option>
                                    <option value="275">275</option>
                                    <option value="285">285</option>
                                    <option value="295">295</option>
                                    <option value="30">30</option>
                                    <option value="305">305</option>
                                    <option value="31">31</option>
                                    <option value="315">315</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="35">35</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="40">40</option>
                                    <option value="42">42</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-control" id="b" name="b">
                                    <option value="">Select</option>
                                    <option value="10.50">10.50</option>
                                    <option value="11.50">11.50</option>
                                    <option value="12.50">12.50</option>
                                    <option value="13.50">13.50</option>
                                    <option value="14.50">14.50</option>
                                    <option value="15.50">15.50</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                    <option value="35">35</option>
                                    <option value="40">40</option>
                                    <option value="45">45</option>
                                    <option value="50">50</option>
                                    <option value="55">55</option>
                                    <option value="60">60</option>
                                    <option value="65">65</option>
                                    <option value="70">70</option>
                                    <option value="75">75</option>
                                    <option value="80">80</option>
                                    <option value="85">85</option>
                                    <option value="9.5">9.5</option>
                                    <option value="R">R</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-control" id="c" name="c">
                                    <option value="">Select</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="24">24</option>
                                    <option value="26">26</option>
                                    <option value="28">28</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        
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
                <th>Tire Size</th>
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
                <td><?=$row->tsizea?>X<?=$row->tsizeb?>X<?=$row->tsizec?></td>
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
$(document).on('change','#model', function() {
    var make = $(this).val();
    $.ajax({
        type:"GET",
        url: "admin_ajax.php?model="+make,
        success:function(response){
            $("#trim").append(response);
        }
    });
});  
</script>