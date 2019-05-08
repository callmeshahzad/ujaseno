<?php 
include "header.php"; 

$message = '';
if (isset($_POST['price'])) {
    $price = $_POST['price'];
    $priceID = $_POST['price_id'];
    $q = "SELECT * FROM tbl_compare_price WHERE id='$priceID'";
    $result = $db->query($q);
    if ($result->num_rows > 0 ) {
        $row = $result->fetch_object();
        $qup = "UPDATE tbl_compare_price SET price='$price' WHERE id='$priceID'";
        if ($db->query($qup)) {
            $message = "success";
        }else{
            $message = "error";
        }

    }else{
        $query = "INSERT INTO `tbl_compare_price`(`price`, `status`) VALUES ('$price','active')";
        if ($db->query($query)) {
            $message = "success";
        }else{
            $message = "error";
        }
    }
    
}


$q = "SELECT * FROM tbl_compare_price  ORDER BY id DESC LIMIT 1";
$result = $db->query($q);
if ($result->num_rows > 0) {
    $row = $result->fetch_object();
    $priceID = $row->id;
    $price  = $row->price;
}else{
    $priceID = 0;
    $price = '';
}

?>   


<div class="content">
                <div class="container-fluid">
                    <h2>Welcome To WTD Admin Dashboard</h2>
                    <br>
                    <hr>
                    <!-- <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h4 align="center">Set Compare Price</h4>
                        </div>
                    </div> -->
                        <!-- <form name="set_price" action="" method="post">
                            <input type="hidden" name="price_id" value="<?=$priceID?>" id="price_id" >
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 center-block" style="float: none;">
                                <?php 
                                    if ($message) {
                                        if ($message == 'success') {
                                            echo '<div class="alert alert-success">
                                                  <strong>Success!</strong> Compare Price Successfully Saved
                                                </div>';
                                        }else{
                                            echo '<div class="alert alert-danger">
                                                  <strong>Oooops!</strong> Something wrong.
                                                </div>';
                                        }
                                    }
                                    ?> 
                                <div class="form-group">
                                    <input type="text" class="form-control" id="price" placeholder="Enter the Price in cents" name="price" value="<?=$price?>" required>
                                </div>
                                <button type="submit" name="set_price" class="btn btn-info btn-lg btn-block" style="background-color: #0015f9;border-color: #0015f9;">Save</button>

                            </div>

                            
                        </div>
                        </form> -->
                    <!-- <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">person</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">New User Registration(Today)</p>
                                    <h3 class="title">39
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    	<i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">person</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Users</p>
                                    <h3 class="title">5500</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">person</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Information Users </p>
                                    <h3 class="title">900</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">content_paste</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Product Information Items </p>
                                    <h3 class="title">2000</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="green">
                                    <div class="ct-chart" id="dailySalesChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">User Registraction (Per Week)</h4>
                                    <p class="category">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="orange">
                                    <div class="ct-chart" id="emailsSubscriptionChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">User Traffic (Per Month)</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="red">
                                    <div class="ct-chart" id="completedTasksChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">App Usage</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                </div>
            </div>






<?php include "footer.php"; ?>   