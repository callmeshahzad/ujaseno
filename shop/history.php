<?php include 'header.php'; ?>
<div class="wrapper">
    <div class="content-wrapper full-left">
        <div class="content-wrapper full-left">
            <?php include 'leftnav.php'; ?>
            <style>
                #btn-update{
                    min-width: 50px;
                    font-size: 10px;
                    padding: 4px;
                }
                .updated{
                    color: #008000;
                    display: none;
                }
            </style>
            <div class="middle-wrapper">
                <div class="bread-crumb noprint">
                    <a href="#">Home</a>
                    <a href="#" class="bread-crumb-active" onclick="return false;"> History</a>
                </div>
                <div class="clear"></div>

                <div class="content-container unsubmitted-order-container">

                    <h1>Order History</h1>
                    <h2></h2>
                    <!--<p class="unsubmitted-order-info">This order has not been submitted. To submit this order, click the "Place Order" button below. Products placed on backorder will be invoiced at the price in effect at the time of delivery. Order subject to applicable taxes.
                    <div>Wheels that have been mounted are non-returnable.
                        <strong>Please test fit all wheels before installation.</strong>
                    </div>
                    </p>-->
                    <input id="lastCalculatedTime" name="lastCalculatedTime" value="1551078014493" type="hidden" value="1551078014493"/>
                    <input id="quoteId" name="quoteId" type="hidden" value=""/>
                    <input type="hidden" name="searchUrl" id="searchUrl" value=""/>
                    <div class="unsubmitted-order">
                        <table id="unsubmitted-order-entries">
                            <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Bill Amount</th>
                                <th>Date Time</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $email = $_SESSION['email'];
                                    $query = "SELECT * FROM tbl_order WHERE user_email='$email'";
                                    $result = $db->query($query);
                                    if($result->num_rows > 0 ){
                                        while ($row = $result->fetch_object()){
                                            ?>
                                            <tr>
                                                <td><?=$row->id?></td>
                                                <td style="font-weight: bold">$<?=$row->bill_amount?></td>
                                                <td><?=$row->date_time?></td>
                                                <td><a href="history_detail.php?order_id=<?=$row->id?>">View Detail</a></td>
                                            </tr>

                                            <?php
                                        }
                                    }
                                ?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <?php include 'footer.php'; ?>
