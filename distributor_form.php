<style>

.demo-error {
	display:inline-block;
	color:#FF0000;
	margin-left:5px;
}
.demo-input {
    width: 100%;
    border-radius: 5px;
    border: #CCC 1px solid;
    padding: 10px;
    margin-top: 5px;
}
.demo-btn {
	padding: 10px;
    border-radius: 5px;
    background: #478347;
    border: #325a32 1px solid;
    color: #FFF;
    font-size: 1em;
    width: 100%;
    cursor:pointer;
}
.demo-heading {
	font-size: 1.5em;
    border-bottom: #CCC 1px solid;
    margin-bottom:5px;
}
.demo-table {
    background: #dcfddc;
    border-radius: 5px;
    padding: 10px;
}
.demo-success {
    margin-top: 5px;
    color: #478347;
    background: #e2ead1;
    padding: 10px;
    border-radius: 5px;
}
.captcha-input {
	background: url('captcha_code.php') repeat-y;
	padding-left: 85px;	
	padding-top: 2px;
	background-color: white;
    color: black;
}
</style>
<div data-v-68d9be01 data-v-5ff8ac3c id=form-section class=component-FormSection style="!important; padding:20px; background:url(images/back.png)">
 	<div data-v-68d9be01 class=common-center-container style="-webkit-box-shadow: 3px 3px 5px 5px rgba(0,0,0,0.75);
-moz-box-shadow: 3px 3px 5px 5px rgba(0,0,0,0.75);
box-shadow: 3px 3px 5px 5px rgba(0,0,0,0.75)">
 		<h3 data-v-68d9be01 class="heading webkit-font">FILL THE DEALERSHIP  FORM TO GET THE WTD ADVANTAGE</h3>
 		<h4 data-v-68d9be01 class="subheading webkit-font">Let’s grow your business together. Provide your details, and an WTD associate will contact you.</h4>
 		<?php 
        if ($msg) {
            if ($msg == 'success') {
                echo '<div class="alert alert-success">
                      <strong>Success!</strong> WTD coustomer service repesentative will contact you shorty
                    </div>';
            }else{
                echo '<div class="alert alert-danger">
                      <strong>Oooops!</strong> Application Not send Please try again.
                    </div>';
            }
        }
        ?>
        <div class="row">
            <form id=contact-form action="submitform.php" method="post" style="color: #ffffff;">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>State</label>
                        <input type="text" id="state" name="state" class="form-control" >
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Business Name</label>
                        <input type="text" id="bussiness" name="businessname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>State License No.</label>
                        <input type="text" id="license" name="license" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" id="city" name="city" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>What Are You Interested In</label>
                        <select name="question" class="form-control">
                            <option value="">What are you interested in</option>
                            <option>Dealership Application</option>
                            <option>Business Partnership with WTD USA</option>
                            <option>Learn more about Tire Pros</option>
                            <option>Learn more about TireBuyer</option>
                            <option>Other</option>
                        </select>
                    </div>
					<div class="form-group">
					<label>Captcha Code: <div id="error-captcha" class="demo-error"><?php if (isset($_GET['error_message'])) {echo "Incorrect Captcha Code";}?></div></label>
						
						
						<input name="captcha_code" type="text" class="demo-input captcha-input">
					</div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="float: right;right: 15px;bottom: 15px;width: 150px;background: red;border: red; font-weight:bold">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
 		<!--<form data-v-68d9be01 id=contact-form action="submitform.php" method="post">
 			<div data-v-68d9be01 class=form-container>
 				<div data-v-68d9be01 class=input-wrap>
 					<input data-v-68d9be01 type=text id=Name name=name class=input required value> 
 					<label data-v-68d9be01 for=Name>Name</label>
 				</div> 
 				
 				<div data-v-68d9be01 class=input-wrap>
 					<input data-v-68d9be01 type=text id=City name="businessname" class=input required value> 
 					<label data-v-68d9be01 for=City>Business Name</label>
 				</div> 
 				<div data-v-68d9be01 class=input-wrap>
 					<input data-v-68d9be01 type=email id=Email name=email class="input email" required value> 
 					<label data-v-68d9be01 for=Email>Email</label>
 				</div> 
 				<div data-v-68d9be01 class=input-wrap>
 					<input data-v-68d9be01 type=text id=license name=license class="input" value> 
 					<label data-v-68d9be01 for=Email>State License No.</label>
 				</div> 
 				
 				<div data-v-68d9be01 class=input-wrap>
 					<input data-v-68d9be01 type=tel id=Phone name=phone class=input required value> 
 					<label data-v-68d9be01 for=Phone>Phone</label>
 				</div>
 				<div data-v-68d9be01 class=input-wrap>
 					<input data-v-68d9be01 type=text id=City name=city class=input value> 
 					<label data-v-68d9be01 for=City>City</label>
 				</div> 
 				<div data-v-68d9be01 class=input-wrap>
 					<input data-v-68d9be01 type=text id=State name=state class=input value> 
 					<label data-v-68d9be01 for=State>State</label>
 				</div>  
 				<div data-v-68d9be01 class=form-dropdown>
 					<select data-v-68d9be01 size=1 form=car-form class=dropdown-options name="question">
 						<option data-v-68d9be01 disabled selected value class=option>What are you interested in</option> 
 						<option data-v-68d9be01 class=option>Partner with WTD</option>
 						<option data-v-68d9be01 class=option>Learn more about Tire Pros</option>
 						<option data-v-68d9be01 class=option>Learn more about TireBuyer</option>
 						<option data-v-68d9be01 class=option>Other</option>
 					</select> 
				 	<div data-v-68d9be01 class=placeholder-mimic>
				 		What are you interested in
				 		<div data-v-68d9be01 class=triangle>
				 			<svg viewBox="0 0 90 90">
				 				<path fill=#F0533F fill-rule=evenodd d="M90 45L0 90V0z"></path>
				 			</svg>
				 		</div>
				 	</div>
 				</div>
			</div> 
			 <div data-v-68d9be01 class=button-container> 
			 	<div data-v-36eb5109 data-v-68d9be01 class="component-Button webkit-font">
				 	<button data-v-36eb5109 type=submit class="button-container 2">
				 		<div data-v-36eb5109 class=label>
					 		Submit
					 	</div> 
					 	<div data-v-36eb5109 class=arrow>
					 		<svg viewBox="0 0 90 90">
					 			<path fill=#0015f9 fill-rule=evenodd d="M90 45L0 90V0z"></path>
					 		</svg>
					 	</div>
					</button>
				</div>
			</div>
		</form>-->
	</div>
</div> 