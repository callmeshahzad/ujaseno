<div class="footer" id="footer"> <p> <a href="#">(602) 875-8335</a> &nbsp;Online Customer Care - Available Mon-Fri 8am-6:30pm, Sat 8am-6pm (GMT-7)</p><span>
	<span title="Privacy Policy">Privacy Policy</span> | 
	<span title="Terms of Service">Terms of Service</span> |
	<span title="FAQ">FAQ</a></span> <span class="copyright">&#169;2019 Wholesale Tire Distributors, LLC.</span>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> 

    <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">-->
    <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
    <!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
    <!--<script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>-->


<script>

	$(document).ready(function(){
	
		$(".account-menu-content a[href$='/managecreditcards']").addClass('hoverClass');
		$('<div id="credit-acct" class="hoverClass"><img src="8996758847518.png" alt="Click here for help!" /></div>').insertBefore(".account-menu-content a[href$='/managecreditcards']");
		
		$('.hoverClass').mouseover(function(){
			$('#credit-acct').css({'display': 'block',
								   'margin-left': '-235px',
								   'margin-top': '-26px',
								   'position': 'absolute',
								   'cursor': 'pointer'
								   });

			$('#credit-acct').click(function(){
				window.location = '/managecreditcards';
			});

		});
		
		$('.hoverClass').mouseout(function(){
			$('#credit-acct').css('display', 'none');
		});
	
	});
	
</script> </div> 
</div>
<div class="fixed-banner">
    <style type="text/css" media="screen">
        #wowslider-container1 .ws_controls{
            display: none !important;
        }
        #wowslider-container1 .ws-title{
            display: none !important;
        }
        #wowslider-container1 .ws_bullets{
            display: none;
        }
        #wowslider-container2 .ws_controls{
            display: none !important;
        }
        #wowslider-container2 .ws-title{
            display: none !important;
        }
        #wowslider-container2 .ws_bullets{
            display: none;
        }
    </style>
    <div id="wowslider-container1">
        <div class="ws_images">
            <ul>
            	<?php 
            	$query = "SELECT * FROM tbl_promotions";
            	$result = $db->query($query);
            	$count1 = 0;
            	while ($row = $result->fetch_object()) {
            	?>
	            	<li><a href="promotions.php?promotion_type=<?=$row->id?>"><img src="<?php echo $row->image; ?>" title="<?php echo $row->title; ?>" id="wows1_<?=$count1?>"/></a></li>
	                <!-- <li><img src="images/2.png" title="2" id="wows1_1"/></li>
	                <li><img src="images/3.png" title="3" id="wows1_2"/></li> -->
            	<?php
            	$count1++;
            	}
            	?>
                
            </ul>
        </div>

        <div class="ws_shadow"></div>
    </div>



</div>
<div class="fixed-banner-right">
    <div id="wowslider-container2">
        <div class="ws_images">
            <ul>
            	<?php 
            	$query = "SELECT * FROM tbl_promotions";
            	$result = $db->query($query);
            	$count2 = 0;
            	while ($row = $result->fetch_object()) {
            	?>
	            	<li><a href="promotions.php?promotion_type=<?=$row->id?>"><img src="<?php echo $row->image; ?>" title="<?php echo $row->title; ?>" id="wows1_<?=$count2?>"/></a></li>
	                <!-- <li><img src="images/2.png" title="2" id="wows1_1"/></li>
	                <li><img src="images/3.png" title="3" id="wows1_2"/></li> -->
            	<?php
            	$count2++;
            	}
            	?>
                <!-- <li><img src="images/2.png" title="2" id="wows2_0"/></li>
                <li><img src="images/3.png" title="3" id="wows2_1"/></li>
                <li><img src="images/1-1.png" title="1-1" id="wows2_2"/></li> -->
            </ul>
        </div>

        <div class="ws_shadow"></div>
    </div>
</div>
<a href="#" id="backToTop" title="Back to top" style="display: none;"><span></span></a>








<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<script type="text/javascript" src="engine2/wowslider.js"></script>
<script type="text/javascript" src="engine2/script.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
});

$("#qsearch").on('keypress',function (e) {
    if(e.which == 13) {
        var val = $("#qsearch").val();
        if(val != ''){
            window.location.href="products.php?search=Search="+val;
        }
    }
});
$(document).on('click','#qsearchbtn', function() {
	var val = $("#qsearch").val();
	if(val != ''){
		window.location.href="products.php?search=Search="+val;
	}
});
$(document).on('change','#menufacturar', function() {
	var val = $(this).val();
	window.location.href="shop.php?search=Manufacturer="+val;
});

$(document).on('click','#navtab-tiresLink', function() {
	
	window.location.href="products.php?search=Category=3Misc.%20Tires&check=tire";
});
$(document).on('click','#navtab-wheelsLink', function() {
	
	window.location.href="products.php?search=Category=5Wheels & Accs.&check=wheel";
});
$(document).on('click','#navtab-resourcesLink', function() {
	
	window.location.href="products.php?search=Category=7Misc. Parts&check=part";
});
$(document).on('click','#psearchbtn', function() {
	var cat = $("#product-category").val();
	window.location.href="products.php?search="+cat;
});

$("#product-category").on('change',function (e) {
    var cat = $("#product-category").val();
    window.location.href="products.php?search="+cat;
});

$(document).on('click','#tire_search', function() {
	var valA = $("#a").val();
	var valB = $("#b").val();
	var valC = $("#c").val();
	var a = '';
	var b = '';
	var c = '';
	if (valA != '') {
		a = "TireSizeA="+valA+"&";
	}
	if (valB != '') {
		b = "TireSizeB="+valB+"&";
	}
	if (valC != '') {
		c = "TireSizeC="+valC;
	}
	window.location.href="products.php?search="+a+b+c+"&check=tire";
	
});
$(document).on('click','#wheel_search', function() {
	var wdiameter 	= $("#wdiameter").val();
	var wwidth 		= $("#wwidth").val();
	var omax 		= $("#omax").val();
	// var omin 		= $("#omin").val();
	var b_circle 	= $("#b_circle").val();
	var c_bore 		= $("#c_bore").val();
	var finish 		= $("#finish").val();
	var wdm = '';
	var wwd = '';
	var omn = '';
	var omx = '';
	var bc = '';
	var cb = '';
	var fn = '';
	if (wdiameter != '') {
		wdm = "WheelDiameter="+wdiameter+"&";
	}
	if (wwidth != '') {
		wwd = "WheelWidth="+wwidth+"&";
	}
	if (omax != '') {
    // alert(omax);
		omx = "WheelOffsetMin="+omax+"&";
	}
	// if (omin != '') {
	// 	omn = "WheelOffsetMin="+omin+"&";
	// }
	if (b_circle != '') {
		bc = "WheelBoltCircle="+b_circle+"&";
	}
	if (c_bore != '') {
		cb = "WheelCenterBore="+c_bore+"&";
	}
	if (finish != '') {
		fn = "WheelFinish="+finish+"&";
	}
window.location.href="products.php?search="+wdm+wwd+omn+omx+bc+cb+fn+"&check=wheel";
  // if(omax.indexOf('+') == -1){
  //   window.location.href="products.php?search="+wdm+wwd+omn+omx+bc+cb+fn+"&check=wheel";
  // }else{
  //   alert("Data Not Found Please Try Again With Diffirent Keyword.");
  // }
	
});

$(document).on('click','#search_type_btna', function() {
	$("#basic_box").hide();
	$("#advance_box").show();
	$("#search_type_btnb").show();
	$("#search_type_btna").hide();
});
$(document).on('click','#search_type_btnb', function() {
	$("#basic_box").show();
	$("#advance_box").hide();
	$("#search_type_btnb").hide();
	$("#search_type_btna").show();
});       

// $(document).on('change','#year', function() {
//     var year = $(this).val();
//     $("#make").empty();
//     $.ajax({
//         type:"GET",
//         url: "../admin/admin_ajax.php?year="+year,
//         success:function(response){
//           // alert(response);
//             $("#make").append("<option value=''>Make</option>");
//             $("#make").append(response);
//         }
//     });
// }); 
$(document).on('change','#make', function() {
    var make = $(this).val();
    var myear = $("#year").val();
    $("#model").empty();
    $.ajax({
        type:"GET",
        url: "../admin/admin_ajax.php?make="+make+"&myear="+myear,
        success:function(response){
        	// alert(response);
            $("#model").append("<option value=''>Model</option>");
            $("#model").append(response);
        }
    });
});  
$(document).on('change','#model', function() {
    var model = $(this).val();
    var momake = $("#make").val();
    var moyear = $("#year").val();
    $("#trim").empty();
    let url="/admin/admin_ajax.php?momake="+momake+"&moyear="+moyear+"&model="+model;
    $.ajax({
        type:"GET",
        url: "../admin/admin_ajax.php?momake="+momake+"&moyear="+moyear+"&model="+model,
        success:function(response){
            $("#trim").append("<option value=''>Trim</option>");
            $("#trim").append(response);
        }
    });
});  
$(document).on('click','#btnasearch', function() {
    var trim = $("#trim").val();
    var tmake = $("#make").val();
    var tyear = $("#year").val();
    var tmodel = $("#model").val();
    // alert("call ");
    $.ajax({
        type:"GET",
        url: "../admin/admin_ajax.php?trim="+trim+"&tmake="+tmake+"&tyear="+tyear+"&tmodel="+tmodel,
        success:function(response){
            window.location.href="cars.php?search="+response;
        }
    });
});

// $("#trim").on('change',function (e) {
//     var trim = $("#trim").val();
//     var make = $("#make").val();
//     var model = $("#model").val();
//     var year = $("#year").val();
//     $.ajax({
//         type:"GET",
//         url: "../admin/admin_ajax.php?trim="+trim+"&tmake="+make+"&tmodel="+model+"&tyear="+year,
//         success:function(response){
//           // alert(response);
//             window.location.href="products.php?search="+response;  
//         }
//     });
// });
    $('input[name="tire"]').click(function(){
        if($(this).is(":checked")){
            var brand = "Manufacturer="+$(this).val();
            window.location.href="products.php?search="+brand+"&Category=3Misc.%20Tires&check=tire";
//            alert("Checkbox is checked."+brand);
        }
    });
    $('input[name="wheel"]').click(function(){
        if($(this).is(":checked")){
            var brand = "Manufacturer="+$(this).val();
            window.location.href="products.php?search="+brand+"&Category=5Wheels &check=wheel";
//            alert("Checkbox is checked."+brand);
        }
    });
    $('input[name="parts"]').click(function(){
        if($(this).is(":checked")){
            var brand = "Search="+$(this).val();
            window.location.href="products.php?search="+brand+"&check=part";
//            alert("Checkbox is checked."+brand);
        }
    });
$("#part").on('change',function (e) {
    var part = $("#part").val();
    if(part != "select"){
	    window.location.href="products.php?search=Search="+part+"&check=part";
	}
});

$("#btnpartsearch").on('click',function(e) {
	var part = $("#part").val();
	if(part != "select"){
		window.location.href="products.php?search=Search="+part+"&check=part";
	}
})


// Show More And less

function showMore(short,long,brand) {
	$("#"+short).hide();
	$("#"+long).show();
	$("#seemore"+brand).hide();
	$("#showless"+brand).show();
}
function showLess(short,long,brand) {
	$("#"+long).hide();
	$("#"+short).show();
	$("#showless"+brand).hide();
	$("#seemore"+brand).show();
}
</script>


<!-- Live Chat Area -->

<style type="text/css" media="screen">
@import url(https://fonts.googleapis.com/css?family=Oswald:400,300);
@import url(https://fonts.googleapis.com/css?family=Open+Sans);
body
{
    font-family: 'Open Sans', sans-serif;
}

.popup-box-on {
    display: block !important;
}
.off {
    display: none;
}
.chat_box .chat_message_wrapper ul.chat_message > li + li {
    margin-top: 4px;
}

#search.open {
    opacity: 1;
    transform: translate(0px, 0px) scale(1, 1);
}
#search {
    background-color: #fff;
    height: 100%;
    left: 0;
    position: fixed;
    top: 0;
    transition: all 0.5s ease-in-out 0s;
    width: 100%;
    z-index: 2000;
    
}
#search .close {
    color: #0015f9;
    font-size: 40px;
    opacity: 1;
    padding: 10px 17px;
    position: fixed;
    right: 15px;
    top: 15px;
}
button.close {
    background: transparent none repeat scroll 0 0;
    border: 0 none;
    cursor: pointer;
}
.close {
    float: right;
    font-weight: bold;
    line-height: 1;
    text-shadow: 0 1px 0 #fff;
}

#search input[type="text"] {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 0 none;
    color: #333;
    font-family: "Open Sans",sans-serif;
    font-size: 50px;
    font-weight: 300;
    margin: -51px auto 0;
    outline: medium none;
    padding-left: 30px;
    padding-right: 30px;
    position: absolute;
    text-align: center;
    top: 50%;
    width: 100%;
}
#search .btn {
    left: 50%;
    margin-top: 60px;
    padding: 10px 50px;
    position: absolute;
    top: 50%;
    transform: translateX(-50%);
}
.chatbtn{
  position: fixed;           
  padding: 10px 25px;
  /*background: #0025f9;           */
  color: #fff;           
  bottom: 30px;
  right: 15px;           
  z-index: 9999;           
  border-radius: 30px 30px 0px 30px;           
  cursor: pointer;  
  
  -webkit-transition: width 2s, height 2s, -webkit-transform 2s; 
  transition: width 2s, height 2s, transform 2s;
  }       
  .chatbtn:hover{
  position: fixed;           
  padding: 20px 35px;
  /*background: #0025f9;           */
  color: #fff;           
  bottom: 40px;
  right: 20px;           
  z-index: 9999;           
  border-radius: 40px 40px 0px 40px;           
  cursor: pointer;  
  -webkit-transform: rotate(360deg); /* Safari */
  transform: rotate(360deg);
  
  -webkit-transition: width 2s, height 2s, -webkit-transform 2s; /* Safari */
  transition: width 2s, height 2s, transform 2s;
  }       
.chat-popup {       
  display: none; 
  position: fixed;     
  right: 15px;     
  border: 3px solid #f1f1f1;     
  z-index:9;     
  width: 300px;     
  bottom: 30px; 
}

/* Add styles to the form container */
.form-container {
  padding: 10px;
  background-color: white;
  border-radius: 0px 0px 20px 0px;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: red;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.chat-popup > h4{
  padding: 10px;
  background: #0025f9;
  color: #fff;
  margin: 0px;
  border-radius: 15px 0px 0px 0px;
}
.waiting-box{
  background: #fff;
  padding: 15px;
  display: none;
}


.chat_message_area
{
    position: relative;
    width: 100%;
    height: auto;
    background-color: #FFF;
    border: 1px solid #CCC;
    border-radius: 3px;
}

#group_chat_message
{
    width: 100%;
    height: auto;
    min-height: 80px;
    overflow: auto;
    padding:6px 24px 6px 12px;
}

.image_upload
{
    position: absolute;
    top:3px;
    right:3px;
}
.image_upload > form > input
{
    display: none;
}

.image_upload img
{
    width: 24px;
    cursor: pointer;
}
    </style>

   
    
<div class="chat-popup" id="myForm" style="border-radius: 40px 0px 40px 0px;padding: 15px;">
  <h4>Live Chat! 
    <button type="button" class="close" aria-label="Close" style="color: #FFF; opacity: 1;" onclick="closeBox()">
      <span aria-hidden="true">&times;</span>
    </button>
  </h4>
  <div class="waiting-box" align="center">
    <img src="../images/loader.gif" alt="" style="width: 50px;">
    <h6>Connecting with agent...</h6>
  </div>
  <form action="" class="form-container" id="start-form">
    <div class="form-group">
      <input type="text" name="name" id="name" class="form-control s_name" placeholder="Name*" style="width:100%" required>
    </div>
    <div class="form-group">
      <input type="email" name="email" id="email" class="form-control s_email" placeholder="Email*" style="width:100%" required>
    </div>
    <div class="form-group">
      <textarea placeholder="Message...!" name="text" id="text" class="form-control"></textarea>
    </div>

    <button type="button" class="btn" onclick="submitForm()">Send</button>
  </form>
</div>

  <div class="chatbtn slide-fwd-center" onclick="openBox()">
    <!-- <h4>I'm here to help!</h4> -->
    <img src="../images/lets_talk.png" alt="" class="img-responsive" style="width: 100px;">
  </div>

  <!--<div class="table-responsive" style="position: fixed;bottom: 2%;right: 0%;width: 300px;background: #fff;z-index:9999;">-->
  <!--  <div id="user_model_details"></div>-->
  <!--</div>-->
  <style type="text/css">
  .chat-main-div{
    position: fixed;
    bottom: 2%;
    right: 1%;
    width: 380px !important;
    background: #fff;
    z-index: 9999;
    border-radius: 20px;
    padding: 10px 10px 0px 10px;
    display: none;
  }
  .chat-header{
    background-color: #0015f9;
    color: #fff;
    padding: 8px;
    border-radius: 15px 15px 0px 0px;
    font-weight: bold;
  }
  .chat-textarea-msg{
    border: 1px solid #ccc !important;
    border-radius: 16px !important;
    padding: 10px;
    /*margin:10px;*/
    height:50px !important;
    width: 100% !important;
  }
  .close-chat-box{
    float: right;
  }
  .hide-chat-box{
   float: right;
   margin-right: 10px; 
  }
  .hide-chat-box{
    cursor: pointer;
  }
</style>
  <div class="table-responsive chat-main-div">
    <!--<div class="chat-header" id="chat_header"> Live Chat <h4 id="userName"></h4></div>-->
    <div id="user_model_details"></div>
  </div>


<script type="text/javascript">
    setInterval(function(){
        update_last_activity();
        update_chat_history_data();
        
    }, 2000);
    checkResponse();
    function closeBox() {
      $(".chat-popup").hide();
      $(".chatbtn").show();
      $("#miniusChat").hide();
    }
    function openBox() {
      $(".chat-popup").show();
      $("#start-form").show();
      $(".chatbtn").hide();
      $("#miniusChat").hide();
    }
    function submitForm() {
      var name  = $(".s_name").val();
      var email = $(".s_email").val();
      var text  = $("#text").val();

      // alert("Name:"+name+"Email:"+email+"Text:"+text);

      $.ajax({
        type: "POST",
        url: "../ajaxchat.php",
        data: {name:name,email:email,text:text},
        success:function(result){
          console.log("RESULT: "+result);
          if (result == "success") {
            $("#start-form").hide();
            $(".waiting-box").show();
            checkResponse();
          }
        }
      });
    }


    function update_last_activity()
    {
        $.ajax({
            url:"../admin/support/update_last_activity.php",
            success:function()
            {

            }
        })
    }

    function update_chat_history_data()
    {
        var height1 = 0;
        $('.chat_history').each(function(){
            var to_user_id = $(this).data('touserid');
            fetch_user_chat_history(to_user_id);
            height1 += parseInt($(this).height());
        });
        height1 += '';
        var height = parseInt($(".chat_history").height())+ height1;
        $('.chat_history').animate({scrollTop: height});
    }

    function fetch_user_chat_history(to_user_id)
    {
        $.ajax({
            url:"../admin/support/fetch_user_chat_history.php",
            method:"POST",
            data:{to_user_id:to_user_id},
            success:function(data){
                $('#chat_history_'+to_user_id).html(data);
            }
        })
    }

    function make_chat_dialog_box(to_user_id, to_user_name)
    {
        // var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="Live Chat '+to_user_name+'">';
        // modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
        // modal_content += fetch_user_chat_history(to_user_id);
        // modal_content += '</div>';
        // modal_content += '<div class="form-group">';
        // modal_content += '<textarea name="chat_message_'+to_user_id+'" id="'+to_user_id+'" class="form-control chat_message" style="margin-top:-25px;width:300px;"></textarea>';
        // modal_content += '</div><div class="form-group" align="right">';
        // modal_content+= '</div></div>';
        // $('#user_model_details').html(modal_content);
        $(".chat-main-div").show();
        var modal_content = '<div class="chat-header" id="chat_header">Live Chat - '+to_user_name+'<span class="close-chat-box" id="'+to_user_id+'"><i class="fa fa-window-close" aria-hidden="true" style="color: #fff;font-size: 18px;"></i></span><span class="hide-chat-box"><i class="fa fa-minus" aria-hidden="true" style="color: #fff;font-size: 18px;"></i></span></div>';
        modal_content += '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="Live Chat - '+to_user_name+'">';
        modal_content += '<div style="height:300px; border:0px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:10px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
        modal_content += fetch_user_chat_history(to_user_id);
        modal_content += '</div>';
        modal_content += '<div class="form-group">';
        modal_content += '<input type="text" name="chat_message_'+to_user_id+'" id="'+to_user_id+'" class="form-control chat_message chat-textarea-msg send-chat-msg" placeholder="Type Your Message Here"></input>';
        modal_content += '</div><div class="form-group" align="right">';
        modal_content+= '</div></div>';
        $('#user_model_details').html(modal_content);

    }


    function checkResponse() {
      $.ajax({
        type: "GET",
        url: "../ajaxchat.php?check=1",
        success:function(result){
          console.log("RESULT: "+result);
          if (result == "waiting") {
            setTimeout(function(){ checkResponse(); }, 3000);
          }else if(result == "inactive"){
            console.log("Chat Box Not Active");
            checkResponse();
          }else{

            $(".waiting-box").hide();
            var to_user_id = result.substring(0,result.indexOf('u'));
            var to_user_name = result.substring(result.indexOf('u')+1);
            // alert("Chat active:"+to_user_id+" U:"+to_user_name);
            make_chat_dialog_box(to_user_id, to_user_name);
            $("#user_dialog_"+to_user_id).dialog({
                autoOpen:false,
                width:400
            });
            $('#user_dialog_'+to_user_id).dialog('open');
            $('#chat_message_'+to_user_id).emojioneArea({
                pickerPosition:"top",
                toneStyle: "bullet"
            });
          }
        }
      });
    }

    $(document).on("keypress", ".send-chat-msg", function(e){
        if(e.which == 13){
            var to_user_id = $(this).attr('id');
            var chat_message = $(this).val();
            $.ajax({
                url:"../admin/support/insert_chat.php",
                method:"POST",
                data:{to_user_id:to_user_id, chat_message:chat_message},
                success:function(data)
                {
                    $("#"+to_user_id).val('');
                    update_chat_history_data();
                    var element = $('#chat_message_'+to_user_id).emojioneArea();
                    element[0].emojioneArea.setText('');
                    $('#chat_history_'+to_user_id).html(data);
                }
            })
        }
    });

    $(document).on("click","#contact-form-link",function (e) {
        $("#contactus-form").slideToggle();
        $('html, body').animate({
            scrollTop: $("#contact-form-link").offset().top
        }, 1500);
    });

    $(document).on("click",".close-chat-box",function (e) {
      var to_user_id = $(this).attr('id');    
      confirmationMsg(to_user_id);
      $.ajax({
        type: "GET",
        url: "../ajaxchat.php?inactivechat=1",
        success:function(result){
          console.log("RESULT: "+result);
          // alert(result);
          // $("#start-form").show();
          $(".chatbtn").show();
          $(".chat-main-div").hide();
          $(".chat-popup").hide();
          $("#miniusChat").hide();
          
        }
      });
        
    });
    // function confirmationMsg() {
    //   var txt;
    //   var r = confirm("Are You Sure You Want To Close The Live Chat ! ");
    //   if (r == true) {
    //     txt = "You pressed OK!";
    //   } else {
    //     txt = "You pressed Cancel!";
    //   }
    //   // document.getElementById("demo").innerHTML = txt;
    // }
    


  </script>
  <style type="text/css">
    .minius-chat-box{
      display: none; 
      position: fixed;     
      right: 15px;     
      border: 3px solid #f1f1f1;     
      z-index:9;     
      width: 280px;     
      bottom: 30px;
      border-radius: 40px 0px 40px 0px;
      padding: 10px;
    }
    .open-chat-box{
      float: right;
      margin-right: 10px;
    }
    .internal-chat-div{
      border-radius: 40px 0px 40px 0px;
      padding: 10px;
      background-color: #0015f9;
      color: #fff;
    }
    .close-chat-box{
      cursor: pointer;
    }
    .open-chat-box{
      cursor: pointer;
    }
  </style>
  <div class="minius-chat-box" id="miniusChat">
    <div class="internal-chat-div">
      <h4>Live Chat! <span class="close-chat-box"><i class="fa fa-window-close" aria-hidden="true" style="color: #fff;font-size: 18px;"></i></span><span class="open-chat-box"><i class="fa fa-window-maximize" aria-hidden="true" style="color: #fff;font-size: 18px;"></i></span></h4>
    </div>
  </div>
  <script type="text/javascript">
    $(document).on("click",".hide-chat-box",function (e) {
      // alert("hide fun call");
      $("#miniusChat").show();
      $(".chatbtn").hide();
      $(".chat-main-div").hide();
      $(".chat-popup").hide();
        
    });
    $(document).on("click",".open-chat-box",function (e) {
      // alert("show fun call");
      $(".chat-main-div").show();
      $("#miniusChat").hide();
      $(".chatbtn").hide();
      $(".chat-popup").hide();
        
    });
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <script type="text/javascript">
     function confirmationMsg(to_user_id) {
      var to_user_id = to_user_id;
      $.confirm({
          title: 'Are You Satisfied With This Chat',
          content: '',
          buttons: {
              // confirm: function () {

              //     // $.alert('Confirmed!');
              // },
              // cancel: function () {
              //     $.alert('Canceled!');
              // },
              yes: {
                  text: 'Yes',
                  btnClass: 'btn-blue',
                  action: function(){
                      
                      $.ajax({
                      type: "GET",
                      data:{to_user_id:to_user_id},
                      url: "../ajaxchat.php?review=1",
                      success:function(result){
                        console.log("RESULT: "+result);
                        $.alert('Thank You For Your Feedback');
                      }
                    });
                      
                  }// action end
              },
              somethingElse: {
                  text: 'No',
                  btnClass: 'btn-blue',
                  action: function(){
                      // $.alert('call no?');
                      $.ajax({
                      type: "GET",
                      data:{to_user_id:to_user_id},
                      url: "../ajaxchat.php?noreview=1",
                      success:function(result){
                        console.log("RESULT: "+result);
                        $.alert('Thank You For Your Feedback');
                      }
                    });
                  }
              }
          }
      });
     
    }
  </script>

</body>


</html>