
<style type="text/css">
    section{
          background: linear-gradient(rgb(27, 3, 3), rgba(12, 1, 1, 0.73)), url("images/4.jpg");

}
.row{
/*    padding-right:0px !important;*/
/*     margin-left:0px !important;*/
/*     margin-right:0px !important;*/
/*padding-left:0px !important;*/
}
.col-md-4{
    padding-left:0px !important;
    padding-right: 0px !important;
}
.col-md-3{
    padding-left:0px !important;
    padding-right: 0px !important;
    min-height:14px;
}
 #contactus-form{
     display: none;
 }
</style>
<?php include "contact_form.php"; ?>
    <div class="row">
        <div class="col-md-12">
            <section>
        
       
         <div class="row">
            <div class="col-md-12" style="margin-top:44px;">
                
            </div>
        </div>
        <div class="row" >
            <div class="col-md-1"></div>
        <div class="col-md-2">
            <img src="images/1.png" style="width:50%">
        </div>
        <div class="col-md-3" style="color:white" >
             <div data-v-49caef06 class=address-container>
                <!--<div data-v-49caef06 class="address line-1">Contact Us:</div> -->
                <div data-v-49caef06 class="address line-2">Wholesale Tire distributor
                     </div>
<!--                 <div data-v-49caef06 class="address line-3">PO Box 3145</div>-->
                <div data-v-49caef06 class="address line-4">5137 W Latham st,Phoenix AZ 85043</div>
                <div data-v-49caef06 class="address line-5">Phone: (602) 875 8335</div>
              </div>
        </div>
        <div class="col-md-3">
                  <div data-v-49caef06 class="address-container additional">
                <div data-v-49caef06 class="address title" style="color:red">Additional links:</div> 
                <div data-v-49caef06 class="address additional">
                  <!-- <span> </span> -->
                  <a data-v-49caef06 href="policy.php"> Privacy Policy</a>
                </div>
                <div data-v-49caef06 class="address additional">
                  <!--<span>Terms &amp; Conditions </span>-->
                  <a data-v-49caef06 href="terms.php"> Terms &amp; Conditions</a>
                </div>
                <div data-v-49caef06 class="address additional">
                  <a data-v-49caef06 href="index.php#loginbox"> Login</a>
                </div>
              </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12" style="color:white;">
            <div class="row">
              <ul>
                <li><a href="about.php" class="sub-nav-item">About</a></li>
                <li><a href="careers.php" class="sub-nav-item">Careers</a></li>
                <li><a href="#" onclick="return false" id="contact-form-link" class="sub-nav-item">Contact Us</a></li>
              </ul>
                <!-- <div class="col-m-2">
                     <a data-v-4a7148f0 data-v-49caef06 href=about.php class=component-SubNavItem>
                  <div data-v-4a7148f0 class=sub-nav-item>About </div>
                </a>
                </div>
                
                <div class="col-md-2">
                    <a data-v-4a7148f0 data-v-49caef06 href=careers.php class=component-SubNavItem>
                  <div data-v-4a7148f0 class=sub-nav-item>Careers</div>
                </a>
                </div>
                 <div class="col-md-2">
                    <a data-v-4a7148f0 data-v-49caef06 href=contact.php class=component-SubNavItem>
                  <div data-v-4a7148f0 class=sub-nav-item>Contact Us</div>
                </a>
                </div> -->
            </div>
                 
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
           <hr style="border-top: 1px solid rgba(158, 132, 132, 0.54);"> 
        </div>
        
    </div>
    <div class="row" align="center" style="font-size:20px;margin-bottom:20px;">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div data-v-49caef06 class=bottom-container style="margin-bottom:20px;color:white">
                <p class="taglineess">Design & Developed By <img src="images/logo-ess.png" style="width:30px;"><a href="http://esspk.com/" target="_blank">Expert System Solution</a></p>
            </div>
        </div>
    </div>

    </section>      
        </div>     
      </div>

<style type="text/css" media="screen">
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
.chat-textarea-msg{
    border: 1px solid #ccc !important;
    border-radius: 16px !important;
    padding: 10px;
}

    </style>
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
      <script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<div class="chat-popup" id="myForm" style="border-radius: 40px 0px 40px 0px;padding: 15px;">
  <h4>Live Chat! 
    <button type="button" class="close" aria-label="Close" style="color: #FFF; opacity: 1;" onclick="closeBox()">
      <span aria-hidden="true">&times;</span>
    </button>
  </h4>
  <div class="waiting-box" align="center">
    <img src="images/loader.gif" alt="" style="width: 50px;">
    <h6>Connecting with agent...</h6>
  </div>
  <form action="" class="form-container" id="start-form">
    <div class="form-group">
      <input type="text" name="name" id="name" class="form-control s_name" placeholder="Name*" required>
    </div>
    <div class="form-group">
      <input type="email" name="email" id="email" class="form-control s_email" placeholder="Email*" required>
    </div>
    <div class="form-group">
      <textarea placeholder="Message...!" name="text" id="text" class="form-control"></textarea>
    </div>

    <button type="button" class="btn" onclick="submitForm()">Send</button>
  </form>
</div>

  <div class="chatbtn slide-fwd-center" onclick="openBox()">
    <!-- <h4>I'm here to help!</h4> -->
    <img src="images/lets_talk.png" alt="" class="img-responsive" style="width: 100px;">
  </div>
<!-- <style type="text/css">
  .chat-main-div{
    position: fixed;
    bottom: 2%;
    right: 1%;
    width: 400px;
    background: #fff;
    z-index:9999;
  }
  
</style>
  <div class="table-responsive chat-main-div">
    <div id="user_model_details"></div>
  </div> -->
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
    }
    function openBox() {
      $(".chat-popup").show();
      $("#start-form").show();
      $(".chatbtn").hide();
    }
    function submitForm() {
      var name  = $(".s_name").val();
      var email = $(".s_email").val();
      var text  = $("#text").val();

    //   alert("Name:"+name+"Email:"+email+"Text:"+text);

      $.ajax({
        type: "POST",
        url: "ajaxchat.php",
        data: {name:name,email:email,text:text},
        success:function(result){
          console.log("RESULT: "+result);
        //   alert(result);
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
            url:"admin/support/update_last_activity.php",
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
            url:"admin/support/fetch_user_chat_history.php",
            method:"POST",
            data:{to_user_id:to_user_id},
            success:function(data){
                $('#chat_history_'+to_user_id).html(data);
            }
        })
    }

    function make_chat_dialog_box(to_user_id, to_user_name)
    {
        // var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="Live Chat - '+to_user_name+'">';
        // modal_content += '<div style="height:300px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:10px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
        // modal_content += fetch_user_chat_history(to_user_id);
        // modal_content += '</div>';
        // modal_content += '<div class="form-group">';
        // modal_content += '<textarea name="chat_message_'+to_user_id+'" id="'+to_user_id+'" class="form-control chat_message chat-textarea-msg" placeholder="Type Your Message Here"></textarea>';
        // modal_content += '</div><div class="form-group" align="right">';
        // modal_content+= '<button type="button" id="'+to_user_id+'" class="btn btn-info sendMessage">Send</button></div></div>';
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
        url: "ajaxchat.php?check=1",
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
                url:"admin/support/insert_chat.php",
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
    
    $(document).on('click', ".sendMessage", function(){
        var to_user_id = $(this).attr('id');
        // var chat_message = $('#chat_message_'+to_user_id).html();
        var chat_message = $('.chat-textarea-msg').val();
        // alert("call:"+chat_message+" / "+to_user_id);
        $.ajax({
                url:"admin/support/insert_chat.php",
                method:"POST",
                data:{to_user_id:to_user_id, chat_message:chat_message},
                success:function(data)
                {
                    $("#"+to_user_id).val('');
                    $("#"+to_user_id).focus();
                    update_chat_history_data();
                    var element = $('#chat_message_'+to_user_id).emojioneArea();
                    element[0].emojioneArea.setText('');
                    $('#chat_history_'+to_user_id).html(data);
                }
            })
    });

    $(document).on("click","#contact-form-link",function (e) {
        $("#contactus-form").slideToggle();
        $('html, body').animate({
            scrollTop: $("#contact-form-link").offset().top
        }, 1200);
    });
    // alert(<?php //echo $_SESSION['status_id'] ?>);
    // $(document).on("click",".ui-icon-closethick",function (e) {
    //   // alert();
    //   $.ajax({
    //     type: "GET",
    //     url: "ajaxchat.php?inactivechat=1",
    //     success:function(result){
    //       console.log("RESULT: "+result);
    //       // alert(result);
          
    //     }
    //   });
        
    // });
     $(document).on("click",".close-chat-box",function (e) {
       var to_user_id = $(this).attr('id');
      confirmationMsg(to_user_id);
      $.ajax({
        type: "GET",
        url: "ajaxchat.php?inactivechat=1",
        success:function(result){
          console.log("RESULT: "+result);
          // alert(result);
          // $("#start-form").show();
          $(".chatbtn").show();
          $(".chat-main-div").hide();
          $(".chat-popup").hide();
          
        }
      });
        
    });


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
<script>
    function googleTranslateElementInit() {
     new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        /*
        To remove the "powered by google",
        uncomment one of the following code blocks.
        NB: This breaks Google's Attribution Requirements:
        https://developers.google.com/translate/v2/attribution#attribution-and-logos
    */

    // Native (but only works in browsers that support query selector)
    if(typeof(document.querySelector) == 'function') {
        document.querySelector('.goog-logo-link').setAttribute('style', 'display: none');
        document.querySelector('.goog-te-gadget').setAttribute('style', 'font-size: 0');
    }

    // If you have jQuery - works cross-browser - uncomment this
    jQuery('.goog-logo-link').css('display', 'none');
    jQuery('.goog-te-gadget').css('font-size', '0');
    }
  </script>
  <!-- <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script> -->

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>