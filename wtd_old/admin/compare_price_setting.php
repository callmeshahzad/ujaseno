<?php include "header.php"; ?>   

 <?php 
    
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
                <div class="row">

                

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2 align="center">Set Compare Price</h2>
                    </div>
                </div>
                    <form name="set_price" action="" method="post">
                        <input type="hidden" name="price_id" value="<?=$priceID?>" id="price_id" >
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 center-block" style="float: none;">
                            <?php 
                                if ($message) {
                                    if ($message == 'success') {
                                        echo '<div class="alert alert-success" id="success-alert">
                                              <strong>Success!</strong> Compare Price Successfully Saved
                                            </div>';


                                            echo '<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
               $("#success-alert").slideUp(500);</script>';

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
                    </form>
                    
                </div>
</div>






<?php include "footer.php"; ?>   