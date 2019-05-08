<?php include 'config.php'; 
if (isset($_GET['p'])) {
  $p = $_GET['p'];
}else{
  $p = 0;
}
?>
<!DOCTYPE html>
<html lang=en class=gr__atd-us_com>
<!--
 Page saved with SingleFile 
 url: https://www.atd-us.com/en/service-offering 
 saved date: Mon Jan 28 2019 17:49:05 GMT+0500 (Pakistan Standard Time)
-->
<meta charset=utf-8>
<title>WTD|Product Comparison</title>
<meta http-equiv=X-UA-Compatible content="IE=edge">

<meta name=viewport content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
<link rel=manifest href=https://www.atd-us.com/assets/favicons/site.webmanifest> <meta name=msapplication-TileColor content=#da532c>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name=theme-color content=#ffffff>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/comapre.css">
<link rel=icon type=image/png sizes=32x32 href="images/ficon.png">
</head>

<body data-gr-c-s-loaded="true" cz-shortcut-listen=true>
    <div id=app class=english>
       
        <?php include "nav.php" ?>
        <div data-v-a6982a3c class="component-ServiceOffering " style=>
            <div data-v-a6982a3c>
                <div data-v-8ba6f6e2 data-v-a6982a3c class=>
                    <div data-v-8ba6f6e2 class=bg-container style=right:-540px>
                        <div align="center">
                            <h2 style="color:red; font-size: 18px; line-height: 24px;padding: 0 10px 0 0;text-transform: uppercase;text-shadow: 1px 1px 1px #FAFAFA;margin-left:200px;margin-top:100px;">Product Comparison</h2>
                            <?php 
                            
                            $q = "SELECT * FROM tbl_compare_price  ORDER BY id DESC LIMIT 1";
                            $result = $db->query($q);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_object();
                                $priceID = $row->id;
                                $price  = $row->price / 100;
                            }else{
                                $priceID = 0;
                                $price = 0;
                            }

                            $basePrice = (float)$p;

                            $wtdPrice = $basePrice;
                            $atdPrice = $basePrice + $price;
                            $tvPrice = $basePrice + $price + 0.2;
                            $crPrice =$basePrice + $price + 0.1;

                            ?>
                            <div class="row">
                              <div class="col-md-12">
                                 <table class="table-responsive">
                              <thead>
                                 
                                  <tr>
                                      <th><span class="badge badge-primary header-1"  >Brands</span>
                                      </th>
                                      <th> <span class="badge badge-primary header-1"  >WTD</span>
                                      </th>
                                      <th> <span class="badge badge-primary header-1">ATD</span>
                                      </th>
                                      <th> <span class="badge badge-primary header-1">T.V</span>
                                      </th>
                                      <th> <span class="badge badge-primary header-1">C.R</span>
                                      </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr >
                                      <td ><p class="ribbon">
                           <span class="text"><strong class="bold">Falkin tires</strong></span>
                                 </p></td>
                                      <td>$<?=$wtdPrice?></td>
                                      <td>$<?=$atdPrice?></td>
                                      <td>$<?=$tvPrice?></td>
                                      <td>$<?=$crPrice?></td>
                                    
                                  </tr>
                                    <tr>
                                      <td><p class="ribbon">
                           <span class="text"><strong class="bold">Dunlop tires</strong></span>
                                 </p></td>
                                      <td style="color: coral;">$<?=$wtdPrice?></td>
                                      <td style="color: coral;">$<?=$atdPrice?></td>
                                      <td style="color: coral;">$<?=$tvPrice?></td>
                                      <td style="color: coral;">$<?=$crPrice?></td>
                                    
                                  </tr>
                                    <tr>
                                      <td><p class="ribbon">
                           <span class="text"><strong class="bold">Bridgestone</strong></span>
                                 </p></td>
                                      <td style="color: #41e3e3;">$<?=$wtdPrice?></td>
                                      <td style="color: #41e3e3;">$<?=$atdPrice?></td>
                                      <td style="color: #41e3e3;">$<?=$tvPrice?></td>
                                      <td style="color: #41e3e3;">$<?=$crPrice?></td>
                                    
                                  </tr>
                                    <tr>
                                      <td> <p class="ribbon">
                           <span class="text"><strong class="bold"> Pirelli</strong></span>
                                 </p></td>
                                      <td style="color: #80e117;">$<?=$wtdPrice?></td>
                                      <td style="color: #80e117;">$<?=$atdPrice?></td>
                                      <td style="color: #80e117;">$<?=$tvPrice?></td>
                                      <td style="color: #80e117;">$<?=$crPrice?></td>
                                    
                                  </tr>
                                    <tr>
                                      <td><p class="ribbon">
                           <span class="text"><strong class="bold">America tire</strong></span>
                                 </p></td>
                                      <td style="color: #f250b1;">$<?=$wtdPrice?></td>
                                      <td  style="color: #f250b1;">$<?=$atdPrice?></td>
                                      <td style="color: #f250b1;">$<?=$tvPrice?></td>
                                      <td style="color: #f250b1;">$<?=$crPrice?></td>
                                    
                                  </tr>
        
                                </tbody>
                            </table>
                              </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </div>