<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  
<meta charset=utf-8>
<title>WTD|LOGIN</title>
<meta http-equiv=X-UA-Compatible content="IE=edge">

<meta name=viewport content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
<link rel=manifest href=https://www.atd-us.com/assets/favicons/site.webmanifest> <meta name=msapplication-TileColor content=#da532c>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name=theme-color content=#ffffff>
<style type="text/css">
 .qty{
  width:30px;
 }
</style>
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/checkout.css">
<link rel=icon type=image/png sizes=32x32 href="images/ficon.png">
</head>
 </head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" type="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/translator.css"> 
<body>

<div id="google_translate_element" class="gt-1"></div>
  <?php include 'nav.php'; ?>
  <div data-v-a6982a3c class="component-ServiceOffering ">
            <div data-v-a6982a3c>
                <div data-v-8ba6f6e2 data-v-a6982a3c class=>
                    <div data-v-8ba6f6e2 class=bg-container style=right:-540px>
                        <div class="top">
                          <div class="row" align="center">
                            
                            <div  class="col-md-12 col-sm-12 col-xs-12">
                             <h4 style="color:black;" class="cart_title">Cart</h4></div>
                          </div>
                            <div class="row" align="center">
                              <div class="col-md-12">
                                 <table class="table-responsive">
                              <thead>
                                 
                                  <tr>
                                      <th> Qty </th>
                                      <!-- <th>image</th> -->
                                      <th>Part#</th>
                                      <!-- <th>  Description</th> -->
                                      <th>  Price</th>
                                       <!-- <th> FET </th> -->
                                       <th>  Total </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                  $orders = $_SESSION['cart'];
                                  $subTotal = 0;
                                  foreach ($orders as $order) {
                                    $total = $order['qty'] * $order['price'];
                                    echo '<tr>
                                      <td ><input type="Qty" name="" value="'.$order['qty'].'" style="width: 20%"></td>
                                      <td>'.$order['catalog'].'</td>
                                      <td>$'.$order['price'].'</td>
                                      <td>$'.$total.'</td>
                                    
                                  </tr>';
                                  $subTotal += $total;
                                  }
                                  $shiping = 0;
                                  $netTotal = $subTotal + $shiping;
                                  ?>
                                 <!--  <tr >
                                      <td ><input type="Qty" name="" style="width: 20%"></td>
                                      <td><img src="rim.jpg" style="width:35%"></td>
                                      <td>WinPro</td>
                                      <td>5X110+40 GLOSSY SILVER  </td>
                                      <td>$0.00</td>
                                      <td>$0.00</td>
                                      <td>$0.00</td>
                                    
                                  </tr> -->
                                   
                                   </tbody>
                            </table>
                              
                            <div class="row">
                            <div class="col-md-6 col-xs-12 col-sm-6">
                             <button class="btn btn-info " style="background-color: #0015f9; border: #0015f9">Update Qty</button>
                            </div>
                            <div class="col-md-6">
                              <div class="col-sm-6">
                                <h5 style="color:black">Subtotal:</h5>
                                <h5 style="color: black">Shipping</h5>
                                <h5 style="color: black">Total</h5>
                              </div>
                               <div class="col-sm-6" style="width:13%">
                                <h5 style="color:black">$<?php echo $subTotal ?></h5>
                                <h5 style="color: black">$<?php echo $shiping ?></h5>
                                <h5 style="color: black">$<?php echo $netTotal ?></h5>
                              </div>
                              

                              
                            </div>
                          </div>
                              </div>
                            </div>
                          
                           <div class="row" style="margin-bottom:50px;">
                            <div class="col-md-2"></div>
                             <div class="col-md-3">
                              <div class="alert alert-success" style="display: none;">
                                Order Successfully Placed
                              </div>
                               <form style="color: black">
                                   <div class="form-group">
          Address:<input type="address" class="form-control" name="address">
                                 </div>
    <div class="form-group">
     PO Box#<input type="pobox" class="form-control" name="pobox">
      <div class="form-group">
      Order Notes:
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  </div> 
  <button type="button" class="btn btn-info" style="background-color: #0015f9; border: #0015f9" onclick="placeOrder()">Place order</button>
                               </form>

                             </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <hr>
    <?php include 'footer.php'; ?>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
  function placeOrder() {
    $.ajax({
        type:"GET",
        url: "ajax.php?order=yes",
        success:function(response){
          console.log(response);
          if(response == "SUCCESS"){
            $(".alert-success").show();
          }
        }
      });
  }
</script>