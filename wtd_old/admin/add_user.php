<?php 
include "header.php"; 

$loginuserID = $_SESSION['user_id'];

$message = "";
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `login`(`name`, `email`, `username`, `password`, `user_type`, `status`) VALUES('$name','$email','$name','$password','1','1')";

    if($db->query($query)){
        $message = "success";
    }else{
        $message = "error";
    }

}




if (isset($_GET['did'])) {
    $id = $_GET['did'];

    $query = "DELETE FROM login WHERE user_id='$id'";
    $db->query($query);

}

$query = "SELECT * FROM login WHERE user_type='1' AND user_id != '$loginuserID'";
$result = $db->query($query);


?>   

<div class="content">
    <div class="container-fluid">
       
        <h4>Add Admin User</h4>

        
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
                <form method="post" action="#" name="save_user" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="clearfix"></div><br>
                    <div class="form-group">
                        <button type="submit" name="save_user" class="btn btn-info" style="background-color: #0015f9;border-color: #0015f9;">SAVE</button>
                    </div>
                    
                </form>
            </div>
        </div>
        

        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>S#</th>
                <th>Name</th>
                <th>Email </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if ($result->num_rows > 0 ) {
                $counter = 1;
                while ($row = $result->fetch_object()) {
            ?>
            <tr>
                <td><?=$counter?></td>
                <td><?=$row->name?></td>
                <td><?=$row->email?></td>
                <td>
                    <a href="add_user.php?did=<?=$row->user_id?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <?php
                $counter++;
                }
            }

            ?>
            
        </tbody>
        
    </table>


    </div>
</div>

<?php include "footer.php"; ?>   