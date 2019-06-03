<div data-v-68d9be01 data-v-5ff8ac3c id="contactus-form" class=component-FormSection style="padding-top:50px; background:url(images/background-tire.jpg)">
    <div data-v-68d9be01 class=common-center-container style="-webkit-box-shadow: 3px 3px 5px 5px rgba(0,0,0,0.75);
-moz-box-shadow: 3px 3px 5px 5px rgba(0,0,0,0.75);
box-shadow: 3px 3px 5px 5px rgba(0,0,0,0.75)">
        <h3 data-v-68d9be01 class="heading webkit-font">Contact US</h3>
        <?php
        if (!empty($msg)) {
            if ($msg == 'success') {
                echo '<div class="alert alert-success">
                      <strong>Success!</strong> Query Submited Successfully
                    </div>';
            }else{
                echo '<div class="alert alert-danger">
                      <strong>Oooops!</strong> Please try again.
                    </div>';
            }
        }
        ?>
        <div class="row">
            <form id=contact-form action="submitform.php" method="post" style="color: #ffffff;">
                <div class="col-sm-6 center-block" style="float: none;">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="float: right;right: 15px;bottom: 15px;width: 150px;background: red;border: red; font-weight:bold">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>