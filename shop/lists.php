<?php include 'header.php'; ?>

<?php

if (isset($_POST['list_title'])){
    $list_title = $_POST['list_title'];
    $email = $_SESSION['email'];
    $query = "INSERT INTO tbl_lists (email,list_title) VALUES('$email','$list_title')";
    $db->query($query);
}
?>

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
                    <a href="#" class="bread-crumb-active" onclick="return false;"> My List</a>
                </div>
                <div class="clear"></div>

                <div class="content-container unsubmitted-order-container">

                    <h1>My Lists</h1>
                    <h2></h2>
                    <form action="" method="post" style="float: right">
                        <p>Create New</p>
                        <input type="text" name="list_title" placeholder="List Title">
                        <button class="btn" type="submit">Create</button>
                    </form>
                    <div class="unsubmitted-order">
                        <table id="unsubmitted-order-entries">
                            <thead>
                            <tr>
                                <th>S.R#</th>
                                <th>Lists</th>
                                <th>Created Date Time</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $email = $_SESSION['email'];
                            $query = "SELECT * FROM tbl_lists WHERE email='$email'";
                            $result = $db->query($query);
                            if($result->num_rows > 0 ){
                                while ($row = $result->fetch_object()){
                                    ?>
                                    <tr>
                                        <td><?=$row->id?></td>
                                        <td style="font-weight: bold"><?=$row->list_title?></td>
                                        <td><?=$row->date_time?></td>
                                        <td><a href="list_detail.php?list_id=<?=$row->id?>">View List</a></td>
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
