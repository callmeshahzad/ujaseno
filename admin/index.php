<?php include 'config.php'; ?>
<?php
  
   
   if(isset($_POST['frm_login'])) {
      
      $myuseremail = $_POST['email'];
      $mypassword = $_POST['password']; 
      $error="";
      $sql = "SELECT * FROM login WHERE email = '$myuseremail' and password = '$mypassword' AND user_type=1";
 

      $result = $db->query($sql);
      if ($result->num_rows > 0) {
            $row = $result->fetch_object();
            $_SESSION['user_id'] = $row->user_id;
            $_SESSION['username'] = $row->username;
            $sub_query = "
                  INSERT INTO login_details 
                    (user_id) 
                    VALUES ('".$row->user_id."')
                  ";
            $resultin = $db->query($sub_query);
            $_SESSION['login_details_id'] = $db->insert_id;
            
        header("location:dashboard.php");
  
      }else{
          $error = "Your Login Name or Password is Invalid";
      }
      
   }
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>WTD Dashboard </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css"> -->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>


<body>
    
                <div class="container">
                    <div class="row" align="center">
                        <img src="assets/img/eno-logo.png" style="margin-top: 5%;width: 250px;">
                            <form name="frm_login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="col-md-6 col-sm-6 col-xs-12 center-block" style="float: none; margin-top: 5%;">
                                        <?php 
                                        if(!empty($error)){
                                            echo "<h3>".$error."</h3>";
                                        } 
                                        ?>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter the email"  required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" placeholder="Enter the Password" name="password" required>
                                    </div>
                                    <a href="#" style="float: left;margin-top: 20px;margin-bottom: 15px;">Forget Password ?</a>

                                        <button type="submit" name="frm_login" class="btn btn-info btn-lg btn-block" style="background-color: #0015f9;border-color: #0015f9;">Login</button>
                                </div>

                            </form>
                    </div>
                    
                </div>










</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkM4ai2V2PpYd5rE6ZhDV96bm7HK6E4cQ"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script> -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });

$("#date").datepicker();
$("#date1").datepicker();
</script>
<script type="text/javascript">

    $(document).ready(function(e) {
        // console.log("JQUERY WORKING....");
        $("#setting").click(function(){
            $("#mysetting").slideToggle();
         });    
    })



     $(document).ready(function(e) {
        // console.log("JQUERY WORKING....");
        $("#setting1").click(function(){
            $("#vehical_management").slideToggle();
         });    
    })

    

</script>

</html>