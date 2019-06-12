<?php
include 'session.php';
$msg = '';
if (isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $title = $_POST['subject'];

    $to = 'Liz@wtdusaonline.com, waseem@wtdusaonline.com';

    $subject = 'Job Application Request';

    $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
    $headers .= "Reply-To: " . strip_tags($_POST['email']) . "\r\n";
    // $headers .= "CC: susan@example.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';
    $message = '<h4>' . $title . '</h4>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
    $message .= "<tr><td><strong>Business Name:</strong> </td><td>" . strip_tags($_POST['businessname']) . "</td></tr>";
    $message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
    $message .= "<tr><td><strong>License:</strong> </td><td>" . strip_tags($_POST['license']) . "</td></tr>";
    $message .= "<tr><td><strong>City:</strong> </td><td>" . strip_tags($_POST['city']) . "</td></tr>";
    $message .= "<tr><td><strong>State:</strong> </td><td>" . strip_tags($_POST['state']) . "</td></tr>";
    $message .= "<tr><td><strong>Question:</strong> </td><td>" . strip_tags($_POST['question']) . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
    if (mail($to, $subject, $message, $headers)) {
        $msg = "success";
    } else {
        $msg = "error";
    }

}

?>

<!DOCTYPE html> <html lang=en class=gr__atd-us_com>
<meta charset=utf-8>
<title>WTD | Careers</title>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
<link rel=manifest href=https://www.atd-us.com/assets/favicons/site.webmanifest>
<meta name=msapplication-TileColor content=#da532c>
<meta name=theme-color content=#ffffff>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/careers.css">
<link rel="stylesheet" type="text/css" href="css/careers1.css">
<link rel="stylesheet" type="text/css" href="css/translator.css">
<link rel=icon type=image/png sizes=32x32 href="images/1.png">
    <style>
        /* #google_translate_element{
            position: fixed;
            top: 0;
            left: 800px;
            z-index: 999;
            width: 100%;
            height: 23px;
            float: right;
        } */
    </style>
</head>

<body data-gr-c-s-loaded=true cz-shortcut-listen=true class=hide-contact-button style="overflow-x: auto;background-color:#E1EBF4">
 <div id=app class=english>
     <?php include "nav.php";?>

 	<style type="text/css">
		.closebtn{
			position: fixed;
		    top: 2%;
		    right: 2%;
		    z-index: 9999;
		    width: 50px;
		}
	</style>
<!--<a href="index.php" class="closebtn">
    <img src="images/close.png" class="img-responsive" alt="">
    </a>-->
<a href="index.php" class="btn btn-danger closebtn" style="width:auto; margin-top: 20px;">
    Back To Home

</a>

<div class="gt-1">
    <div id="google_translate_element" ></div>
</div>
 	<div data-v-0b5d6b6e class="component-Careers vue-router-section" lang=en style=visibility:inherit;opacity:1 >
        <div class="logo" style="">
            <a href="index.php">
                <img src="images/1.png" alt="WTD" class="img-responsive logoimg" style="position:absolute;top:0px;z-index: 9999;">
            </a>
        </div>
        <div data-v-0b5d6b6e>
        <div data-v-c0b305c2 data-v-0b5d6b6e class=component-CareersHero>
            <div data-v-c0b305c2 class=bg-container style=left:-321px>
                <div data-v-c0b305c2 class=bg-masker>
                    <div data-v-436329e0 data-v-c0b305c2 class=component-image-pre-loader style=width:100vw;height:100%;position:absolute;top:0;left:0>
                        <div data-v-b329ee4c data-v-436329e0 tabindex=-1 class=resize-observer>
                            <object style=display:block;position:absolute;top:0;left:0;height:100%;width:100%;overflow:hidden;pointer-events:none;z-index:-1 aria-hidden=true tabindex=-1 type=text/html data="data:text/html,<html>" sandbox></object>
                        </div>
                        <div data-v-436329e0 class=pre-loader-overlay style=display:none></div>
                        <img data-v-436329e0 src="images/background-tire.jpg" class="contain top-left" style="object-fit:contain;object-position:0 0;background-position:0 0">
                    </div>
                </div>
                <svg data-v-c0b305c2 viewBox="0 0 4011 515" xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink preserveAspectRatio="xMinYMid slice" class=hero-mask>
                    <defs>
                        <path id=a d="M0 0h4011v515H0z" class=path-1></path>
                    </defs>
                    <g fill=none fill-rule=evenodd>
                        <mask id=b fill=#fff>
                            <use xlink:href=#a></use>
                        </mask>
                        <g mask=url(#b)>
                            <g transform="translate(0 -437)">
                                <circle stroke=#E1EBF4 stroke-width=529 cx=1283 cy=809 r=809 class=circle style=stroke-dasharray:0,999999px;stroke-dashoffset:5084.1></circle>
                                <circle stroke=#FFF stroke-width=529 cx=1283 cy=809 r=809 class=circle-white style=stroke-dasharray:1e-05px,5094.1px;stroke-dashoffset:0></circle>
                                <path d="M880.604 437h804.792C1775.771 534.712 1831 665.406 1831 809c0 49.11-6.46 96.711-18.577 142H753.577C741.46 905.711 735 858.11 735 809c0-143.594 55.229-274.288 145.604-372zm-601.167 0C236.473 552.863 213 678.19 213 809c0 48.142 3.18 95.542 9.34 142H0V437h279.437zm2007.126 0H4011v514H2343.66c6.16-46.458 9.34-93.858 9.34-142 0-130.81-23.473-256.137-66.437-372zM1165 437h2846v515H1165V437z" fill=#E1EBF4 fill-rule=nonzero class=path-2></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div data-v-c0b305c2 class=common-center-container>
                <div data-v-c0b305c2 class=text-container>
                    <div data-v-c0b305c2 class=titles-container>
                        <div data-v-c0b305c2 class=black>
                            <div class=line style=display:block;text-align:right;position:relative;transform:matrix(1,0,0,1,0,0)>
                            <!-- WORK-->
                        </div>
                        </div>
                        <div data-v-c0b305c2 class=blue>
                            <div class=line style=display:block;text-align:right;position:relative;transform:matrix(1,0,0,1,0,0)>Work With Us
                            <br class="bR"/>
                                Stay Ahead Of
                                <br class="bR"/>
                                The Curve </div>
                        </div>
                    </div>
                    <h3 data-v-c0b305c2 class=subheading>
                        <div class=line style=display:block;text-align:right;position:relative;transform:matrix(1,0,0,1,0,0)>
                        <!-- Stay ahead of the curve --> 
                        </div>
                    </h3>
                </div>
            </div>
        </div>

            <div data-v-191b6ba8 data-v-0b5d6b6e class=component-CareersJobs style="padding-top:50px;padding-bottom:50px">
                <svg data-v-191b6ba8 xmlns=http://www.w3.org/2000/svg width=331 height=331 viewBox="0 0 331 331" class=donut-background style=transform:translate3d(25%,-3.91063%,0)>
                    <path fill=#A5A5A5 fill-rule=evenodd d="M165.5 331C74.097 331 0 256.903 0 165.5S74.097 0 165.5 0 331 74.097 331 165.5 256.903 331 165.5 331zm1-78c47.773 0 86.5-38.727 86.5-86.5S214.273 80 166.5 80 80 118.727 80 166.5s38.727 86.5 86.5 86.5z"></path>
                </svg>
                <div data-v-191b6ba8 class=common-center-container>
                    <div data-v-191b6ba8 class=content-container>
                        <div data-v-191b6ba8 class=jobs-container>
                            <h3 data-v-191b6ba8 class=heading>NO MATTER WHERE YOU ARE, WE’RE HIRING</h3>
                            <h4 data-v-191b6ba8 class=subheading>WTD offers many different roles across all disciplines throughout North America.</h4>

                            <?php
$query = "SELECT * FROM tbl_jobs";
$result = $db->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_object()) {
        ?>
                                    <div data-v-191b6ba8 class=job-container style="margin-top: 10%;">
                                        <div data-v-191b6ba8 class=job-title><?=$row->title?></div>
                                        <h5 data-v-191b6ba8 class=job-blurb>
                                            <?=$row->description?>
                                        </h5>
                                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal" style="background: red;border-color: red;float: right;">APPLY</button>
                                    </div>
                                    <?php
}
}
?>


                        </div>
                        <div data-v-191b6ba8 class=alerts-wrapper>
                            <div data-v-191b6ba8 class=alerts-container style=background-image:url(img/back.png)>
                                <div data-v-191b6ba8 class=alerts-text>job alerts</div>
                                <div data-v-36eb5109 data-v-191b6ba8 class="component-Button webkit-font">
                                    <a data-v-36eb5109 href=#form-section class="button-container 1">
                                        <div data-v-36eb5109 class=label>Subscribe</div>
                                        <div data-v-36eb5109 class=arrow>
                                            <svg viewBox="0 0 90 90" style=transform:matrix(1,0,0,1,0,0)>
                                                <path fill=red fill-rule=evenodd d="M90 45L0 90V0z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div data-v-68d9be01 data-v-25239b16 id=form-section class=component-FormSection style="background-image: url(images/action.jpg);padding-top:120px;padding-bottom:120px">
                <div data-v-68d9be01 class=container style="-webkit-box-shadow: 3px 3px 5px 5px rgba(0,0,0,0.75);
-moz-box-shadow: 3px 3px 5px 5px rgba(0,0,0,0.75);
box-shadow: 3px 3px 5px 5px rgba(0,0,0,0.75)">
                    <h3 data-v-68d9be01 class="heading webkit-font">Apply For Job</h3>
                    <!-- <h4 data-v-68d9be01 class="subheading webkit-font">Let’s grow your business together. Provide your details, and an WTD associate will contact you.</h4>  -->
                    <form action="#" method="post" style="color:#fff;">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type=text name=name class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type=email name=email class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type=tel name=phone class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type=text name=city class="form-control">
                            </div>
                            <div class="form-group">
                                <label>State</label>
                                <input type=text name=state class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Interested</label>
                                <select name="subject" class="form-control">
                                    <option>What are you interested in</option>
                                    <option>HR specialist</option>
                                    <option>Retirement plan counselor</option>
                                    <option>Staffing consultant</option>
                                    <option>Chief financial officer</option>
                                    <option>Controller</option>
                                    <option>Credit manager</option>
                                    <option>Tax specialist</option>
                                    <option>Certified financial planner</option>
                                    <option>Financial analyst</option>
                                    <option>Investment advisor</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" style="float: right;right: 15px;bottom: 15px;width: 150px;background: red;border: red; font-weight:bold">SUBMIT</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
           <div class="container career-container">
               <div class="row"> 
                   <div class="col-sm-6">
                       <h4 style="color: #000;">HOW WE ROLL OUR CAREER</h4>
                       <h2 style="color:#0015F9">OUR CULTURE VALUES</h2>
                       <p style="color: #000;">Culture of any of organization is very much important so WTD provides a culture
                                    where you feel easy and you can do your best work rather you are fresh from your
                                    school or you are an experienced so we welcome to be the part of WTD with great
                                    experience that will be a challenge for you wo work as leading which you can do
                                    by your own.<br>
                                    Our big believes that anyone can think great, anyone can think different, when
                                    different peoples come at the same panel things are happen in a very great way, in
                                    a very different way, when people from different experience and from the different
                                    backgrounds it become a great combo it generates great ideas to lead the industry.
                                    For this sake we organize celebrations to reward our employee which will make
                                    the strong team culture.<br>
                                    Expertise and excellence are exceptions as being a part of WTD we except from
                                    you to do your best which is best in you just do that that will pay you the best. You
                                    do your best we will take our best.</p>
                   </div>
                   <div class="col-sm-6 career-container-column">
                   <div data-v-023c1ffa class=circles-container>
                            <div data-v-023c1ffa class=largee style=transform:translate3d(0,-11.7196%,0)>
                                <div data-v-023c1ffa class=image style=background-image:url(images/tire_pros.jpg)></div>
                            </div> 
                            <div data-v-023c1ffa class=smalll style=transform:translate3d(0,11.7196%,0)>
                                <div data-v-023c1ffa class=image style="background-image:url(images/d3.jpg)"></div>
							</div>
						</div>
                   </div>
               </div>
           </div>




            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999;">
                <div class="modal-dialog" role="document" style="z-index:99999;">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Application for JOB</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Attach Resume</label>
                                    <input type="file" name="resume" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="careers.php" class="btn btn-primary" style="background: red;border:red;">Apply</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



  	<style type="text/css">
  		.component-FormSection[data-v-68d9be01]{position:relative;min-height:50vh;background-color:#0015f9}.heading[data-v-68d9be01],.subheading[data-v-68d9be01]{color:#ffffff;margin-bottom:29px}@media (min-width:300px) and (max-width:1024px){.heading[data-v-68d9be01],.subheading[data-v-68d9be01]{max-width:none}}.subheading[data-v-68d9be01]{margin-bottom:38px}.heading[data-v-68d9be01],.subheading[data-v-68d9be01]{letter-spacing:normal}.heading[data-v-68d9be01]{font-size:21px;line-height:1.2}@media (min-width:1025px){.heading[data-v-68d9be01]{font-size:36px;line-height:1.05556}}.subheading[data-v-68d9be01]{font-size:16px;line-height:1}@media (min-width:1025px){.subheading[data-v-68d9be01]{font-size:24px;line-height:1.08333}}@media (min-width:1025px){.form-container[data-v-68d9be01]{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:justify;justify-content:space-between;width:100%}}@media (min-width:728px) and (max-width:1024px){.form-container[data-v-68d9be01]{padding:0 80px 40px}}@media (min-width:300px) and (max-width:727px){.form-container[data-v-68d9be01]{margin-bottom:30px}}.form-container input[data-v-68d9be01]:focus{outline:none}.form-container[data-v-68d9be01] ::-webkit-input-placeholder{text-align:center;font-size:27px;letter-spacing:0em;margin-right:-0em;line-height:1em;color:#001D34;font-style:normal;font-weight:400;font-family:"AvantGardeGothicITC W08 Book",monospace;-webkit-font-variant-ligatures:no-common-ligatures;color:#787878;padding-right:25px;text-transform:uppercase}.form-container[data-v-68d9be01] ::placeholder{text-align:center;font-size:27px;letter-spacing:0em;margin-right:-0em;line-height:1em;color:#001D34;font-style:normal;font-weight:400;font-family:"AvantGardeGothicITC W08 Book",monospace;-webkit-font-variant-ligatures:no-common-ligatures;color:#787878;padding-right:25px;text-transform:uppercase}@media (min-width:728px) and (max-width:1024px){.form-container[data-v-68d9be01] ::-webkit-input-placeholder{font-size:28px}.form-container[data-v-68d9be01] ::placeholder{font-size:28px}}@media (min-width:300px) and (max-width:727px){.form-container[data-v-68d9be01] ::-webkit-input-placeholder{font-size:18px}.form-container[data-v-68d9be01] ::placeholder{font-size:18px}}.input-wrap[data-v-68d9be01]{margin-bottom:45px;position:relative;width:45%}@media (min-width:728px) and (max-width:1024px){.input-wrap[data-v-68d9be01]{width:100%}}@media (min-width:300px) and (max-width:727px){.input-wrap[data-v-68d9be01]{margin-bottom:30px;width:100%}}.input-wrap input[data-v-68d9be01]{background:#e1ebf4;border:none;border-radius:0;cursor:text;height:65px;font-size:27px;letter-spacing:0em;margin-right:-0em;line-height:1em;color:#001D34;font-style:normal;font-weight:400;font-family:"AvantGardeGothicITC W08 Book",monospace;-webkit-font-variant-ligatures:no-common-ligatures;padding:0 20px;position:relative;transition:background 300ms ease-out;width:100%}@media (min-width:728px) and (max-width:1024px){.input-wrap input[data-v-68d9be01]{font-size:25px}}@media (min-width:300px) and (max-width:727px){.input-wrap input[data-v-68d9be01]{font-size:15px;height:45px;line-height:45px}}.input-wrap input[data-v-68d9be01]:last-of-type{margin-bottom:0}.input-wrap label[data-v-68d9be01]{font-size:27px;letter-spacing:0em;margin-right:-0em;font-style:normal;font-weight:400;font-family:"AvantGardeGothicITC W08 Book",monospace;-webkit-font-variant-ligatures:no-common-ligatures;color:#787878;line-height:65px;left:0;pointer-events:none;position:absolute;text-align:center;text-transform:uppercase;top:0;transform:translate3d(0,0%,0);transition:transform 300ms ease-out;transition-property:color,transform;width:100%}@media (min-width:728px) and (max-width:1024px){.input-wrap label[data-v-68d9be01]{font-size:25px}}@media (min-width:300px) and (max-width:727px){.input-wrap label[data-v-68d9be01]{font-size:15px;line-height:45px}}.input-wrap input[data-v-68d9be01]:focus{background:#ffffff}.input-wrap input:focus+label[data-v-68d9be01],.input-wrap.filled label[data-v-68d9be01]{color:#e1ebf4;transform:translate3d(0,-75%,0)}.form-dropdown[data-v-68d9be01]{background-color:#e1ebf4;height:65px;cursor:pointer;width:45%;position:relative}@media (min-width:300px) and (max-width:1024px){.form-dropdown[data-v-68d9be01]{width:100%}}@media (min-width:300px) and (max-width:727px){.form-dropdown[data-v-68d9be01]{height:45px}}.form-dropdown .placeholder-mimic[data-v-68d9be01]{background-color:#e1ebf4;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;width:100%;height:100%;white-space:nowrap;pointer-events:none;overflow:hidden;font-size:27px;letter-spacing:0em;margin-right:-0em;line-height:1em;font-style:normal;font-weight:400;font-family:"AvantGardeGothicITC W08 Book",monospace;-webkit-font-variant-ligatures:no-common-ligatures;color:#787878;text-transform:uppercase;transition:transform 300ms ease-out;transition-property:background,transform;position:relative;padding:0 20px;z-index:2}@media (min-width:300px) and (max-width:1024px){.form-dropdown .placeholder-mimic[data-v-68d9be01]{font-size:25px}}@media (min-width:300px) and (max-width:727px){.form-dropdown .placeholder-mimic[data-v-68d9be01]{font-size:14px;text-align:left}}.form-dropdown select:focus+.placeholder-mimic[data-v-68d9be01],.form-dropdown:hover .placeholder-mimic[data-v-68d9be01]{background:#ffffff}.form-dropdown select:focus+.placeholder-mimic .triangle[data-v-68d9be01],.form-dropdown:hover .placeholder-mimic .triangle[data-v-68d9be01]{transform:translate3d(-50%,-25%,0) rotate(90deg)}.form-dropdown .triangle[data-v-68d9be01]{position:absolute;top:50%;right:10px;overflow:visible;transform:translate3d(-50%,-50%,0) rotate(90deg);transition:transform 300ms ease-out}.form-dropdown .triangle svg[data-v-68d9be01]{display:block;height:auto;width:20px}@media (min-width:300px) and (max-width:727px){.form-dropdown .triangle svg[data-v-68d9be01]{margin-bottom:10px;width:15px}}.dropdown-options[data-v-68d9be01]{border:0;border-radius:0;cursor:pointer;height:100%;left:0;margin:0;padding:0;position:absolute;outline:0;text-align:center;top:0;width:100%;z-index:1}@media (min-width:300px) and (max-width:1024px){.dropdown-options[data-v-68d9be01]{width:100%}}.dropdown-options .option[data-v-68d9be01]{font-size:30px;letter-spacing:0em;margin-right:-0em;line-height:1em;font-style:normal;font-weight:400;font-family:"AvantGardeGothicITC W08 Book",monospace;-webkit-font-variant-ligatures:no-common-ligatures;color:#787878;width:100%;height:65px}@media (min-width:300px) and (max-width:1024px){.dropdown-options .option[data-v-68d9be01]{font-size:28px}}@media (min-width:300px) and (max-width:727px){.dropdown-options .option[data-v-68d9be01]{font-size:18px}}.button-container[data-v-68d9be01]{position:relative;display:-ms-flexbox;display:flex;-ms-flex-pack:end;justify-content:flex-end}@media (min-width:1025px){.button-container[data-v-68d9be01]{padding-top:10px}}.component-Button[data-v-36eb5109]{position:relative;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0}.component-Button .button-container[data-v-36eb5109]{background-color:red;border-top-right-radius:0px;border-width:0;display:-ms-flexbox;display:flex;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center;cursor:pointer;padding:25px 0;transition:background 400ms;width:315px;position:relative}.component-Button .button-container[data-v-36eb5109]:hover{background-color:red}@media (min-width:728px) and (max-width:1024px){.component-Button .button-container[data-v-36eb5109]{border-top-right-radius:0px;width:233px}}@media (min-width:300px) and (max-width:727px){.component-Button .button-container[data-v-36eb5109]{border-top-right-radius:0px;padding:12px 0;width:175px}}.component-Button .label[data-v-36eb5109]{font-size:24px;letter-spacing:0em;line-height:1em;font-style:normal;font-weight:400;font-family:"AvantGardeGothicITC W08 Bold",monospace;-webkit-font-variant-ligatures:no-common-ligatures;text-transform:uppercase;margin-right:20px;color:#ffffff;margin-left:auto;position:relative;max-width:55%;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0}@media (min-width:300px) and (max-width:727px){.component-Button .label[data-v-36eb5109]{font-size:14px}}.component-Button[data-v-36eb5109] .arrow{overflow:hidden;position:relative;margin-left:0;margin-right:auto;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0}.component-Button[data-v-36eb5109] .arrow svg{width:16px;height:19px}@media (min-width:300px) and (max-width:727px){.component-Button[data-v-36eb5109] .arrow svg{width:10px;height:12px}}.component-Button[data-v-36eb5109] .arrow svg path{fill:#ffffff}button[data-v-36eb5109]:disabled{opacity:0.5;pointer-events:none}
  	</style>

	<?php include 'footer.php';?>
</div>
</div>
<!-- <a>
	<div data-v-8d6b7dc0 class=component-PartnerWithUs style=transform:matrix(1,0,0,1,0,0);visibility:hidden;opacity:0><svg data-v-8d6b7dc0 width=514 height=67 viewBox="0 0 514 67" xmlns=http://www.w3.org/2000/svg><title>5B981CDA-5D95-492C-90F7-F66049ADD8F8</title><g fill=none fill-rule=evenodd><path d="M.445 1v65.425h513.414C472.538 22.808 430.239 1 386.964 1H.444z" fill=red></path><path d="M513.859 66.391C471.314 22.775 430.379.966 391.054.966H.439" stroke=#FFF></path></g></svg> <div data-v-8d6b7dc0 class=text>
 Partner With Us
 <svg data-v-8d6b7dc0 xmlns=http://www.w3.org/2000/svg viewBox="0 0 90 90" class=arrow><path fill=red fill-rule=evenodd d="M90 45L0 90V0z"></path></svg></div></div> <div data-v-78ab565b class=component-TopButton><div data-v-78ab565b class=text-arrow-container><svg data-v-78ab565b width=100 height=70 viewBox="0 0 100 70" xmlns=http://www.w3.org/2000/svg class=top-image><title>6833C91B-BC6D-4A2A-802F-97BBCF8FE658</title><g fill=none fill-rule=evenodd><path d="M1.425 69.252h98.208V.765c-28.7.271-51.137 8.48-67.312 24.625C16.147 41.535 5.848 56.156 1.425 69.252z" fill=red></path><path d="M99.934.766c-44.55 0-77.4 22.771-98.553 68.313" stroke=#FFF></path></g></svg> <div data-v-78ab565b class=content-container><svg data-v-78ab565b xmlns=http://www.w3.org/2000/svg viewBox="0 0 90 90" class=arrow><path fill=red fill-rule=evenodd d="M90 45L0 90V0z"></path></svg> <div data-v-78ab565b class=text>Top</div></div></div></div></a> --></div>



