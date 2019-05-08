<?php include "header.php"; ?>   
<?php 
$message = '';
if (isset($_GET['delid'])) {
    $delid = $_GET['delid'];
    $query = "DELETE FROM tbl_promotion_catalogs_temp WHERE id='$delid'";
    $db->query($query);
}


if (isset($_GET['save'])) {
    $queryCatalog = "SELECT * FROM tbl_promotion_catalogs_temp";
    $resultCatalog = $db->query($queryCatalog);
    if($resultCatalog->num_rows > 0){
        while ($rowCatalog = $resultCatalog->fetch_object()) {
            $promotionID = $rowCatalog->promotion_id;
            $catalog = $rowCatalog->catalog;
            $query = "INSERT INTO `tbl_promotion_catalogs`(`promotion_id`, `catalog`, `status`) VALUES('$promotionID','$catalog','1')";
            $db->query($query);
        }
        $qDell = "DELETE FROM tbl_promotion_catalogs_temp";
        $db->query($qDell);
        $message = "success";
    }
}

?>
<div class="content">
    <div class="container-fluid" style="overflow-y: scroll;">
        <br>
        <hr>
        <h4>Preview Added Promotions</h4>
         <?php 
            if (!empty($message)) {
                if ($message == 'success') {
                    echo '<div class="alert alert-success">
                          <strong>Success!</strong>Saved
                        </div>';
                }else{
                    echo '<div class="alert alert-danger">
                          <strong>Oooops!</strong> Something wrong.
                        </div>';
                }
            }
            ?> 
        <a href="promotions_add.php" class="btn btn-info">ADD MORE PROMOTIONS</a>
        <a href="preview_list.php?save=yes" class="btn btn-info pull-right">SAVE PROMOTIONS</a>
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
                $queryCatalog = "SELECT * FROM tbl_promotion_catalogs_temp";
                $resultCatalog = $db->query($queryCatalog);
                if($resultCatalog->num_rows > 0){
                    while ($rowCatalog = $resultCatalog->fetch_object()) {
                        $catalog = $rowCatalog->catalog;
                        $promotionID = $rowCatalog->promotion_id;
                        $qPro = "SELECT * FROM tbl_promotions WHERE id='$promotionID'";
                        $rPro = $db->query($qPro);
                        $rowPro = $rPro->fetch_object();
                        $promotionType = $rowPro->title;
                ?>
                <tr>
                   <td><?=$promotionType?></td>
                   <td><?=$catalog?></td>
                   <td><a href="preview_list.php?delid=<?=$rowCatalog->id?>" class="btn btn-danger">Delete</a></td>
               </tr>
                <?php
                    }
                    
                }

           ?>

        </tbody>
        
    </table>
    </div>
</div>

<?php include "footer.php"; ?>   
<script type="text/javascript">
$("#search").on('keypress',function (e) {
    if(e.which == 13) {
        var val = $("#search").val();
        if(val != ''){
            window.location.href="promotions_add.php?search=Search="+val;
        }
    }
});
</script>