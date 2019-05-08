<div class="right-nav">
 <!--<div class="accordion-wrap" id="rightpanel-MyList">-->
 <!-- <input type="hidden" name="componentUid" id="componentUid" value="HomePageListsComponent"/>-->
 <!-- <h4 id="homepage-lists-heading" data-target="#mylists">MY LISTS -->
 <!-- 	<img id="HomePageListsComponent" src="images/leftDownCaret.png " class="image-icon-blue-question"> -->
  	<!--<img src="" class="arrow-image mylists-arrow-down-right image-icon-down-arrow"> -->
 <!-- </h4> -->
 <!-- 	<div id="homepage-lists-heading-container" class="accordion-container list-accordion-container">-->
 <!--       <a class="btn" href='lists.php'>MANAGE LISTS</a>-->
 <!-- 	</div> -->
 <!-- 	<div class="HomePageListsComponent-helppopup helppopup_right"></div> -->
 <!-- </div> -->
 <!-- <div class="accordion-wrap" id="rightpanel-MyQuote"> -->
 <!-- 	<h4 class="my-quotes-heading" data-target="#myquotes">MY QUOTES<input type="hidden" name="componentUid" id="componentUid" value="DefaultMyQuotesLinkComponent"/>-->
 <!-- 	 <img id="DefaultMyQuotesLinkComponent" src="images/leftDownCaret.png" class="image-icon-blue-question">-->
  	  <!-- <img src="leftDownCaret.png" class="arrow-image myquotes-arrow-down-right image-icon-down-arrow">  -->
 <!-- 	</h4>-->
 <!-- 	   <div id="my-quotes-heading-container" class="accordion-container myquotes-accordion-div">-->
 <!-- 	    <div class="table-responsive p8"> No Quotes Found</div> -->
 <!-- 	</div> -->
 <!-- 	<div class="DefaultMyQuotesLinkComponent-helppopup helppopup_right"></div> -->
 <!-- </div> -->
 <!-- <div class="accordion-wrap" id="rightpanel-MyWarranty"> -->
 <!-- </div> -->
  <!--<div class="accordion-wrap" id="rightpanel-OrderHistory"> 
      <h4 id="order-history-heading" data-target="#orderhistory"> <a href="visualizer.php">Wheel Visualizer </a>
  		<img id="DefaultOrderHistoryAccordionComponent" src="images/leftDownCaret.png" class="image-icon-blue-question">
  	</h4>
  	     <div id="order-history-heading-container" class="accordion-container order-history-accordion-div">
   	     </div> 
   	     <div class="DefaultOrderHistoryAccordionComponent-helppopup helppopup_right"></div> 
   	 </div> -->
   	 <!--<div class="accordion-wrap" id="rightpanel-MyReturns"> 
   	 	<h4 id="return-order-heading" data-target="#myreturns"> MY RETURNS<span class="return-percentage-container">
   	 		<img src="images/return-percentage.png">12.46%</span> 
   	 		<img id="DefaultReturnOrderAccordionComponent" src="images/leftDownCaret.png" class="image-icon-blue-question"> 
   	 		<img src="leftDownCaret.png" class="arrow-image myreturns-arrow-down-right image-icon-down-arrow"> 
   	 	</h4> 
   	 	<div class="accordion-container myreturns-accordion-div" id="return-order-heading-container">
    	</div> 
    	 	<div class="DefaultReturnOrderAccordionComponent-helppopup helppopup_right"></div> 
    	 </div>--> 
    	 <div class="quick-links"> 
    	 	<div class="quick-links-box"> 
    	 		<input type="hidden" name="componentUid" id="componentUid" value="DefaultATDQuickLinkComponent"/> 
    	 		<img id="DefaultATDQuickLinkComponent" src="images/helpBlue.png" class="image-icon-blue-question"> 
    	 		<h4 class="pull-left">QUICK LINKS</h4> 
    	 		<div class="clear"></div> 
    	 	</div> 
    	 	<div class="DefaultATDQuickLinkComponent-helppopup helppopup_right"></div> 
    	 </div> 
    	 <div class="accordion-wrap" id="rightpanel-OrderHistory"> 
          <h4 id="order-history-heading" data-target="#orderhistory"> Announcements
      		<img id="DefaultOrderHistoryAccordionComponent" src="images/leftDownCaret.png" class="image-icon-blue-question">
      	   <!-- <img src="" class="arrow-image orderhistory-arrow-down-right image-icon-down-arrow">-->
      	</h4>
      	     <div id="order-history-heading-container" class="accordion-container order-history-accordion-div">
       	     </div> 
       	     <div class="DefaultOrderHistoryAccordionComponent-helppopup helppopup_right"></div> 
       	 </div>

         <?php 
         $query = "SELECT * FROM tbl_promotions";
         $result = $db->query($query);
         while ($row = $result->fetch_object()) {
           ?>
           <div class="accordion-wrap" id="rightpanel-OrderHistory"> 
            <h4 id="order-history-heading" data-target="#orderhistory">
              <a href="promotions.php?promotion_type=<?=$row->id?>"> <?php echo $row->title; ?>
                <img id="DefaultOrderHistoryAccordionComponent" src="images/leftDownCaret.png" class="image-icon-blue-question">
              </a>
            </h4>
            <div id="order-history-heading-container" class="accordion-container order-history-accordion-div">
            </div> 
            <div class="DefaultOrderHistoryAccordionComponent-helppopup helppopup_right"></div> 
           </div>
           <?php
         }
         ?>
    	 <!-- <div class="accordion-wrap" id="rightpanel-OrderHistory"> 
          <h4 id="order-history-heading" data-target="#orderhistory"> Daily Special
      		<img id="DefaultOrderHistoryAccordionComponent" src="images/leftDownCaret.png" class="image-icon-blue-question">
      	</h4>
      	     <div id="order-history-heading-container" class="accordion-container order-history-accordion-div">
       	     </div> 
       	     <div class="DefaultOrderHistoryAccordionComponent-helppopup helppopup_right"></div> 
       	 </div>
       	 <div class="accordion-wrap" id="rightpanel-OrderHistory"> 
          <h4 id="order-history-heading" data-target="#orderhistory"> Weekly Special
      		<img id="DefaultOrderHistoryAccordionComponent" src="images/leftDownCaret.png" class="image-icon-blue-question">
      	</h4>
      	     <div id="order-history-heading-container" class="accordion-container order-history-accordion-div">
       	     </div> 
       	     <div class="DefaultOrderHistoryAccordionComponent-helppopup helppopup_right"></div> 
       	 </div>
       	 <div class="accordion-wrap" id="rightpanel-OrderHistory"> 
          <h4 id="order-history-heading" data-target="#orderhistory"> Monthaly  Special
      		<img id="DefaultOrderHistoryAccordionComponent" src="images/leftDownCaret.png" class="image-icon-blue-question">
      	</h4>
      	     <div id="order-history-heading-container" class="accordion-container order-history-accordion-div">
       	     </div> 
       	     <div class="DefaultOrderHistoryAccordionComponent-helppopup helppopup_right"></div> 
       	 </div> -->


        	</div> 