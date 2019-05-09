

function top_loadModel(make,myear){
  $("#top_model").empty();
  $.ajax({
        type:"GET",
        url: "../admin/admin_ajax.php?make="+make+"&myear="+myear,
        success:function(response){
          // alert(response);
            $("#top_model").append("<option value=''>Model</option>");
            $("#top_model").append(response);
        }
    });
}
function top_laodTrim(model,momake,moyear){
  $("#top_trim").empty();
  let url="/admin/admin_ajax.php?momake="+momake+"&moyear="+moyear+"&model="+model;
    $.ajax({
        type:"GET",
        url: "../admin/admin_ajax.php?momake="+momake+"&moyear="+moyear+"&model="+model,
        success:function(response){
            $("#top_trim").append("<option value=''>Trim</option>");
            $("#top_trim").append(response);
        }
    });
} 

$("#top_qsearch").on('keypress',function (e) {
    if(e.which == 13) {
        var val = $("#top_qsearch").val();
        if(val != ''){
            window.location.href="products.php?search=Search="+val;
        }
    }
});
$(document).on('click','#top_qsearchbtn', function() {
    var val = $("#top_qsearch").val();
    if(val != ''){
        window.location.href="products.php?search=Search="+val;
    }
});

$(document).on('click','#top_tire_search', function() {
    var valA = $("#top_a").val();
    var valB = $("#top_b").val();
    var valC = $("#top_c").val();
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
$(document).on('click','#top_wheel_search', function() {
    var wdiameter   = $("#top_wdiameter").val();
    var wwidth      = $("#top_wwidth").val();
    var omax        = $("#top_omax").val();
    // var omin         = $("#top_omin").val();
    var b_circle    = $("#top_b_circle").val();
    var c_bore      = $("#top_c_bore").val();
    var finish      = $("#top_finish").val();
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
    //  omn = "WheelOffsetMin="+omin+"&";
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

$(document).on('change','#top_make', function() {
    var make = $(this).val();
    var myear = $("#top_year").val();
    top_loadModel(make,myear);    
}); 

$(document).on('change','#top_model', function() {
    var model = $(this).val();
    var momake = $("#top_make").val();
    var moyear = $("#top_year").val();
    top_laodTrim(model,momake,moyear);
});  
$(document).on('click','#top_btnasearch', function() {
    var trim = $("#top_trim").val();
    var tmake = $("#top_make").val();
    var tyear = $("#top_year").val();
    var tmodel = $("#top_model").val();
    // alert("call ");
    $.ajax({
        type:"GET",
        url: "../admin/admin_ajax.php?trim="+trim+"&tmake="+tmake+"&tyear="+tyear+"&tmodel="+tmodel,
        success:function(response){
            window.location.href="cars.php?search="+response+"&Year="+tyear+"&Make="+tmake+"&Model="+tmodel+"&Trim="+trim;
        }
    });
});