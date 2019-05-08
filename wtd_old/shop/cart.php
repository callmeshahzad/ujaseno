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
        <a href="#" class="bread-crumb-active" onclick="return false;"> Cart</a> 
    </div> 
    <div class="clear"></div> 
    <div id="cutOffTimeMessage" class="content"> 
        <div class="cutOffTimeMsgParagraphs"> <p>Please contact your DC for cutoff and delivery times.</p> 
            <p>LocalPlus cutoff is 05:00 PM 02/25/2019 for orders to be delivered 02/25/2019.</p> 
        </div> 
    </div> 
    <div class="content-container unsubmitted-order-container"> 

    <h2> <img src="images/shoppingcart.png" alt="cart" class="img-responsive" style="float:left;width: 30px;"> Cart</h2> 
    <h2></h2> 
    <p class="unsubmitted-order-info">This order has not been submitted. To submit this order, click the "Place Order" button below. Products placed on backorder will be invoiced at the price in effect at the time of delivery. Order subject to applicable taxes. 
        <div>Wheels that have been mounted are non-returnable. 
            <strong>Please test fit all wheels before installation.</strong>
        </div>
    </p> 
        <input id="lastCalculatedTime" name="lastCalculatedTime" value="1551078014493" type="hidden" value="1551078014493"/>
        <input id="quoteId" name="quoteId" type="hidden" value=""/>
        <input type="hidden" name="searchUrl" id="searchUrl" value=""/> 
        <div class="unsubmitted-order"> 
            <table id="unsubmitted-order-entries"> 
                <thead> 
                    <tr> 
                        <th>Product</th> 
                        <th class="qty">Qty</th> 
                        <th>Est Delivery Date</th> 
                        <th>Unit Cost</th> 
                        <th>Total</th> 
                        <th>&nbsp;</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    <?php 
                    if(isset($_SESSION['cart'])){
                        $orders = $_SESSION['cart'];
                          $subTotal = 0;
                          $indexCounter = 0;
                          foreach ($orders as $order) {
                            $total = $order['qty'] * $order['price'];
                            echo '<tr id="itemrow'.$indexCounter.'"><td>'.$order['catalog'].'</td>
                              <td ><input type="text" name="qtyupdate" value="'.$order['qty'].'" id="qty'.$indexCounter.'" indexcounter="'.$indexCounter.'" price="'.$order['price'].'" style="width: 20%" >
                                <button class="btn btn-info" type="button" id="btn-update" onclick="updateOrder('.$indexCounter.','.$order['price'].')">Update</button>
                                <img src="../images/loader.gif" style="width: 20px; height: 20px; display: none" id="loader'.$indexCounter.'">
                                <span class="updated" id="msgupdate'.$indexCounter.'">Updated</span>
                              </td>
                              <td></td>
                              <td>$'.$order['price'].'</td>
                              <td id="totalprice'.$indexCounter.'">$'.$total.'</td>
                              <td><i class="fa fa-trash" style="font-size:20px;cursor:pointer;" title="Remove" onclick="removeItem('.$indexCounter.')"></i></td>                        
                          </tr>';
                          $subTotal += $total;
                          $indexCounter++;
                          }
                          $shiping = 0;
                          $netTotal = $subTotal + $shiping;
                    }else{
//                      header("location:products.php");
                        $shiping = '';
                        $netTotal = '';
                        $total = '';
                        $subTotal = '';
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
                <div class="customer-info-totals"> 
                    <table cellspacing="0"> 
                        <tr> 
                            <td class="customer-info"> 
                                <!--<div> <h3> <strong>Customer ID:</strong> <?php //echo $_SESSION['email'] ?></h3> -->
                                    <div class="form-field"> 
                                        <div class="field-label pull-left first-comment"> 
                                            <strong> PO #</strong> 
                                        </div> 
                                        <div class="pull-left customer-info-po second-comment"> 
                                            <div class="bold-border"> 
                                                <input id="customerPO" name="purchaseOrderNumber" maxLength="40" type="text" value="" size="45"/>
                                            </div> 
                                        </div> 
                                        <div class="clear"></div> 
                                    </div> 
                                    <div class="form-field"> 
                                        <div class="input-comments"> 
                                            <div> 
                                                <div class="field-label pull-left first-comment">
                                                    <strong>Customer Name</strong> <small></small> 
                                                </div> 
                                                <div class="pull-left second-comment customer-name"> 
                                                    <div class="bold-border"> 
                                                        <input id="name" name="name" maxLength="30" type="text" value="" size="45"/><br/> 
                                                    </div> 
                                                </div> 
                                                <div class="clear"></div> 
                                            </div> 
                                            <div> 
                                                <div class="field-label pull-left first-comment"> 
                                                    <strong>
                                                        <style>.first-comment small { display: none !important; } .first-comment p { font-size:70% !important; font-weight: bold !important;} .customer-input-comments {margin-top: -45px !important;}
                                                    </style>
                                                    Comments (Optional)<br/><br/>
                                                        <p>Use this to add instruction or notes intended for 
                                                            <strong>your location</strong> only. (Eg., Match work orders, leave notes for yourself or co-workers)
                                                        </p>
                                                    </strong> <small>()</small> 
                                                </div> 
                                                <div class="pull-left second-comment"> 
                                                    <div class="pull-left customer-info-po"> 
                                                        <div class="bold-border-textarea"> 
                                                            <textarea id="comment" name="customerComment"> </textarea>
                                                        </div> 
                                                        <div class="comments-counter pull-right"> 
                                                            <small><span>80</span> Characters Max</small> 
                                                        </div> 
                                                        <div class="clear"></div> 
                                                        <label onclick="devlieryOption('deliver')">
                                                            <input type="radio" name="order_type" id="order_type" value="deliver" style="width: auto;margin-top: 15px;">
                                                            <span style="font-size: 13px;padding: 10px;">Delivery</span>
                                                        </label>
                                                        <label onclick="devlieryOption('call')">
                                                            <input type="radio" name="order_type" id="call_type" value="call" style="width: auto;margin-top: 15px;">
                                                            <span style="font-size: 13px;padding: 10px;">Will Call</span>
                                                        </label>
                                                        <div id="options" style="padding: 10px;display: none;">
                                                            <label>
                                                                <input type="radio" name="deliver_option" id="morning" value="morning" style="width: auto;margin-top: 15px;">
                                                                <span style="font-size: 13px;padding: 10px;">Morning</span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="deliver_option" value="noon" id="noon" style="width: auto;margin-top: 15px;">
                                                                <span style="font-size: 13px;padding: 10px;">Noon</span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="deliver_option" value="hotshot" id="hotshot" style="width: auto;margin-top: 15px;">
                                                                <span style="font-size: 13px;padding: 10px;">Hot shot</span>
                                                            </label>
                                                        </div>
                                                    </div> 
                                                </div> 
                                            </div> 
                                            <div class="clear"></div> 
                                            <div class="input_comments_id-error"> 
                                                <small></small> 
                                            </div> <br/> 
                                        </div> 
                                        <div class="clear"></div> 
                                    </div> <br/> 
                                    <div class="customer-input-comments"> 
                                        <span class="customer-input-comments-alert">Attention:</span> 
                                        <span class="customer-input-comments-alert">&nbsp;Please contact the DC directly for all order comments that require immediate attention.</span> 
                                    </div> 
                                </td> 
                                <td class="totals"> 
                                    <table class="totals-table"> 
                                        <tr> 
                                            <td class="field-label">In Stock Total</td> 
                                            <td class="value" id="sub-total"> $<?php echo $subTotal; ?></td>
                                        </tr> 
                                        <tr> 
                                            <td class="field-label">Freight</td> 
                                            <td class="value">$<?php echo $shiping; ?></td> 
                                        </tr> 
                                        <tr> 
                                            <td class="field-label bigger">Order Total</td> 
                                            <td class="value bigger" id="net-total"> $<?php echo $netTotal; ?></td>
                                        </tr> 
                                    </table> 
                                    <div class="hr-line"></div> 
                                    <div class="alert alert-success" style="display: none; width: 70%;">
                                        Order Successfully Placed
                                      </div>
                                      <div class="alert alert-danger" style="display: none;">
                                        API SERVER ERROR
                                      </div>
                                    <div class='order-page-buttons right'> 
                                        <a onclick="placeOrder()" class="button theme-color place-order" style="background:#0015f9"> Place Order </a>
                                        <img src="../images/loader.gif" class="img-responsive" id="loaderplaceorder" style="width:100px;height: 100px; display: none;">

                                </div> 
                            </td> 
                        </tr> 
                    </table> 
                </div> 
            <div class="clear"></div> 
        </div>
    </div> 
</div>
</div> 
<div class="clear"></div> 
<?php include 'footer.php'; ?>
<script type="text/javascript">
    function devlieryOption(opt) {
        if(opt == "deliver"){
            $("#options").show();
        }else{
            $("#options").hide();
        }
    }
    function placeOrder() {
        var dt = new Date();
        var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
        var po = $("#customerPO").val();
        var comment = $("#comment").val() + "Time:"+time;
    
        if(!$('#order_type').is(':checked') && !$('#call_type').is(':checked')){
            alert("Please select Will call or delivery");

        }else{
            if($('#order_type').is(':checked')){
                if(!$('#morning').is(':checked') && !$('#noon').is(':checked') && !$('#hotshot').is(':checked')){
                    alert("Please select delivery Options");
                }else{
                    var delivery = $('#order_type').val();
                    if($('#morning').is(':checked')){
                        var option = $('#morning').val(); 
                    }

                    if($('#noon').is(':checked')){
                        var option = $('#noon').val(); 
                    }

                    if($('#hotshot').is(':checked')){
                        var option = $('#hotshot').val(); 
                    }
                    var poo = po +" "+ delivery +" "+ option;
                    $(".place-order").hide();
                    $("#loaderplaceorder").show();
                    $.ajax({
                        type:"GET",
                        url: "ajax.php?order=yes&po="+poo+"&comment="+comment,
                        success:function(response){
            //                alert(response);
                            $("#loaderplaceorder").hide();
                          if(response == "SUCCESS"){
                            $(".alert-success").show();
                            setTimeout(function() {
                                window.location.href="index.php";
                            },5000);
                            
                          }else{
                              $(".alert-danger").show();
                          }
                        }
                    });
                }

            }else{
                $(".place-order").hide();
                $("#loaderplaceorder").show();
                $.ajax({
                    type:"GET",
                    url: "ajax.php?order=yes&po="+po+"&comment="+comment,
                    success:function(response){
        //                alert(response);
                        $("#loaderplaceorder").hide();
                      if(response == "SUCCESS"){
                        $(".alert-success").show();
                        setTimeout(function() {
                            window.location.href="index.php";
                        },5000);
                        
                      }else{
                          $(".alert-danger").show();
                      }
                    }
                });
            }
            
        }
        
        
    }

    $("input[name=qtyupdate]").on("keydown",function search(e) {
        if(e.keyCode == 13) {
            var price = $(this).attr('price');
            var indexNo = $(this).attr('indexcounter');
            updateOrder(indexNo,price);
        }
    });
    function updateOrder(indexNo,price) {
        var qty = $("#qty"+indexNo).val();
        $("#loader"+indexNo).show();
        $.ajax({
            type:"GET",
            url: "ajax.php?updateorder=yes&index="+indexNo+"&qty="+qty+"&price="+price,
            success:function(response){
                console.log(response);
                var netTotal = response.substring(response.indexOf('netTotal')+8,response.indexOf('subTotal'));
                var subTotal = response.substring(response.indexOf('subTotal')+8,response.indexOf('total'));
                var total = response.substring(response.indexOf('total')+5);
                $("#totalprice"+indexNo).text("$"+total);
                $("#sub-total").text("$"+subTotal);
                $("#net-total").text("$"+netTotal);
                $("#loader"+indexNo).hide();
                $("#msgupdate"+indexNo).fadeIn();
                setTimeout(function() {
                    $("#msgupdate"+indexNo).fadeOut("slow");
                }, 2000 );
            }
        });
    }
    function removeItem(indexNo) {
        $.ajax({
            type:"GET",
            url: "ajax.php?remove=yes&index="+indexNo,
            success:function(response){
                console.log(response);
                var netTotal = response.substring(response.indexOf('netTotal')+8,response.indexOf('subTotal'));
                var subTotal = response.substring(response.indexOf('subTotal')+8);

                $("#sub-total").text("$"+subTotal);
                $("#net-total").text("$"+netTotal);
                $("#itemrow"+indexNo).remove();

            }
        });
    }

</script>