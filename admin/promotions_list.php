<?php include "header.php"; ?>   
<?php 
$message = '';
$msg = '';
if (isset($_GET['delid'])) {
    $delid = $_GET['delid'];

    $queryCheckRemain = "SELECT * FROM tbl_promotion_catalogs WHERE id='$delid'";
    $resultCheckRemain = $db->query($queryCheckRemain);
    $rowCheckRemain = $resultCheckRemain->fetch_object();

    $proID = $rowCheckRemain->promotion_id;
    $qProCheck = "SELECT * FROM tbl_promotion_catalogs WHERE promotion_id='$proID'";
    $rProCheck = $db->query($qProCheck);

    if($rProCheck->num_rows == 1){
        $msg = "last";
        $did = $delid;
    }else{
        $query = "DELETE FROM tbl_promotion_catalogs WHERE id='$delid'";
        $db->query($query);
    }
    
}


if(isset($_GET['lastdid'])){
    $lastdid = $_GET['lastdid'];
    $query = "DELETE FROM tbl_promotion_catalogs WHERE id='$lastdid'";
        $db->query($query);
}



if(isset($_GET['fid'])){
    $fid = $_GET['fid'];
    $queryPromotion = "SELECT * FROM tbl_promotions WHERE id='$fid'";
}else{
    $fid = '';
    $queryPromotion = "SELECT * FROM tbl_promotions";
}



?>
<div class="content">
    <div class="container-fluid" style="overflow-y: scroll;">
        <?php 
        if ($msg == "last") {
            echo '<div class="alert alert-success">Are you sure you want to delete? Your list will empty. <a href="promotions_list.php?lastdid='.$did.'&fid='.$fid.'"> Yes Delete</a></div>';
        }
        ?>
        <br>
        <hr>
        <h4>Promotions</h4>
        <?php 
        $q = "SELECT * FROM tbl_promotions";
        $r = $db->query($q);
        if ($r->num_rows > 0) {
            while ($rowR = $r->fetch_object()) {
        ?>
            <a href="promotions_list.php?fid=<?=$rowR->id?>" class="btn btn-info"><?=$rowR->title?></a>
        <?php
            }
        }
        ?>
            <a href="promotions_add.php" class="btn btn-info pull-right">Add Promotions</a>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Promotion Type</th>
                <th>Catalog</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 

            
            $resultPromotion = $db->query($queryPromotion);
            while ($rowPromotion = $resultPromotion->fetch_object()) {
                $promotionID = $rowPromotion->id;
                $promotionType = $rowPromotion->title;

                $queryCatalog = "SELECT * FROM tbl_promotion_catalogs WHERE promotion_id='$promotionID'";
                $resultCatalog = $db->query($queryCatalog);
                if($resultCatalog->num_rows > 0){
                    while ($rowCatalog = $resultCatalog->fetch_object()) {
                        $catalog = $rowCatalog->catalog;
                ?>
                <tr>
                   <td><?=$promotionType?></td>
                   <td><?=$catalog?></td>
                   <td><a href="promotions_list.php?delid=<?=$rowCatalog->id?>&fid=<?=$promotionID?>" class="btn btn-danger">Delete</a></td>
               </tr>
                <?php
                    }
                    
                }

            }
           ?>

        </tbody>
        
    </table>
    </div>
</div>

<?php include "footer.php"; ?>   
