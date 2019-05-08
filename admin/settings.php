<?php 
include "header.php"; 

$loginuserID = $_SESSION['user_id'];

$message = "";
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE login set name='$name',email='$email',username='$name',password='$password' WHERE user_id='$loginuserID'";
    if($db->query($query)){
        $message = "success";
    }else{
        $message = "error";
    }

}






$q = "SELECT * FROM login  WHERE user_id='$loginuserID'";
$result = $db->query($q);
$row = $result->fetch_object();
?>   

<div class="content">
    <div class="container-fluid">
       
        <h4>Settings</h4>

        
        <div class="row">
            <div class="col-sm-6 center-block" style="float: none;">
               <?php 
                if (!empty($message)) {
                    if ($message == 'success') {
                        echo '<div class="alert alert-success">
                              <strong>Success!</strong> Saved
                            </div>';
                    }else{
                        echo '<div class="alert alert-danger">
                              <strong>Oooops!</strong> Something wrong.
                            </div>';
                    }
                }
                ?> 
                <form method="post" action="#" name="save_setting" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?=$row->name?>" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?=$row->email?>" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?=$row->password?>" required>
                    </div>
                    <div class="clearfix"></div><br>
                    <div class="form-group">
                        <button type="submit" name="save_setting" class="btn btn-info" style="background-color: #0015f9;border-color: #0015f9;">SAVE</button>
                    </div>
                    
                </form>
            </div>
        </div>
        
    </div>
</div>

<?php include "footer.php"; ?>   