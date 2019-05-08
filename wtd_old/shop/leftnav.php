<style type="text/css" media="screen">
 .boxcontainer{
    color: #000 !important;
    font-size: 10px !important;
    margin-bottom: 0px !important;
 }   
 .see-more{
    cursor: pointer;
    color: blue;
 }
 .show-less{
    cursor: pointer;
    color: blue;
    display: none;
 }
 select{
     font-weight:bold !important;
     text-transform: uppercase;
     font-size:10px;
 }
</style>

<div class="left-nav"> 
    <div class="accordion-wrap global-search-component" id="leftpanel-KeywordSearch"> 
        <input type="hidden" name="componentUid" id="componentUid" value="DefaultSiteLogoRowComponent"/> 
        <h4 id="keyword-header" data-toggle="collapse" data-target="#key">SEARCH 
            <img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png" class="image-icon-blue-question" >
             
        </h4> 
        <div class="accordion-container collapse in" id="key" data-search-error-tool-tip-text="Must have at least 4 characters"> 
                <input type="search" title="Search by Size, Product #, Article #, Manufacturing #, Model, Brand, Description, or Keyword..." name="qsearch" id="qsearch" placeholder="" value=""/>
                <img src="images/Search.png" class="icon"> 
                <input value="SEARCH" id="qsearchbtn" type="button">
        </div> 
        <div class="DefaultSiteLogoRowComponent-helppopup helppopup_left"></div> 
    </div>

    <?php
    if (isset($_GET['check'])) {
        if ($_GET['check'] == "tire") {
    ?>
    <div class="accordion-wrap" id="leftpanel-VehicleSearch">
        <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/>
        <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle">Tire
            <img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png" class="image-icon-blue-question" >
            <!--<img src="images/"  id="vehicle-down-arrow"> -->
        </h4>
        <div id="vehicle-guide-heading-container" class="accordion-container collapse in" id="vehicle">
            <form id="vehicle-guide-search-form" action="" method="post">
                <label id="fitment-message-label">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                </label>
                <label for="year"></label>
                <select id="a">
                    <option value="">Width</option>
                    <option value="155">155</option>
                    <option value="165">165</option>
                    <option value="175">175</option>
                    <option value="185">185</option>
                    <option value="195">195</option>
                    <option value="205">205</option>
                    <option value="215">215</option>
                    <option value="225">225</option>
                    <option value="235">235</option>
                    <option value="245">245</option>
                    <option value="255">255</option>
                    <option value="265">265</option>
                    <option value="275">275</option>
                    <option value="285">285</option>
                    <option value="295">295</option>
                    <option value="30">30</option>
                    <option value="305">305</option>
                    <option value="31">31</option>
                    <option value="315">315</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="35">35</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="40">40</option>
                    <option value="42">42</option>
                </select>
                <label for="year"></label>
                <select id="b">
                    <option value="">Diameter</option>
                    <option value="10.50">10.50</option>
                    <option value="11.50">11.50</option>
                    <option value="12.50">12.50</option>
                    <option value="13.50">13.50</option>
                    <option value="14.50">14.50</option>
                    <option value="15.50">15.50</option>
                    <option value="25">25</option>
                    <option value="30">30</option>
                    <option value="35">35</option>
                    <option value="40">40</option>
                    <option value="45">45</option>
                    <option value="50">50</option>
                    <option value="55">55</option>
                    <option value="60">60</option>
                    <option value="65">65</option>
                    <option value="70">70</option>
                    <option value="75">75</option>
                    <option value="80">80</option>
                    <option value="85">85</option>
                    <option value="9.5">9.5</option>
                    <option value="R">R</option>
                </select>
                <label for="year"></label>
                <select id="c">
                    <option value="">Tire Size</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="24">24</option>
                    <option value="26">26</option>
                    <option value="28">28</option>
                    <option value="30">30</option>
                </select>

                <label for="fitment-go-link">
                    <input id="tire_search" value="SEARCH" type="button">
                </label>

            </form>
        </div>
        <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div>
    </div>
            <?php
        }
        if ($_GET['check'] == "wheel") {
    ?>
    <div class="accordion-wrap" id="leftpanel-VehicleSearch"> 
        <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/> 
        <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle">Wheel 
            <img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png" class="image-icon-blue-question" > 
            <!--<img src="images/"  id="vehicle-down-arrow"> -->
        </h4> 
        <div id="vehicle-guide-heading-container" class="accordion-container collapse in" id="vehicle"> 
            <form id="vehicle-guide-search-form" action="" method="post">
                <label id="fitment-message-label"> 
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                </label> 
                <label for="year"></label>
                <select id="wdiameter" style="width: 60px;">
                    <option value="">Size</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="24">24</option>
                    <option value="26">26</option>
                </select> x
                <select id="wwidth" style="width: 60px;" >
                    <option value=""></option>
                    <option value="6.5">6.5</option>
                    <option value="6.6">6.6</option>
                    <option value="7">7</option>
                    <option value="7.5">7.5</option>
                    <option value="8">8</option>
                    <option value="8.5">8.5</option>
                    <option value="9">9</option>
                    <option value="9.5">9.5</option>
                    <option value="10">10</option>
                    <option value="10.5">10.5</option>
                    <option value="12">12</option>
                    <option value="14">14</option>
                </select>
                <label for="make"></label>
                <select id="omax">
                    <option value="">Offset</option>
                    <option value="-76">-76</option>
                    <option value="-44">-44</option>
                    <option value="-24">-24</option>
                    <option value="-19">-19</option>
                    <option value="-12">-12</option>
                    <option value="+0">+0</option>
                    <option value="+10">+10</option>
                    <option value="+15">+15</option>
                    <option value="+18">+18</option>
                    <option value="+20">+20</option>
                    <option value="+22">+22</option>
                    <option value="+24">+24</option>
                    <option value="+25">+25</option>
                    <option value="+25.4">+25.4</option>
                    <option value="+27">+27</option>
                    <option value="+28">+28</option>
                    <option value="+30">+30</option>
                    <option value="+31">+31</option>
                    <option value="+32">+32</option>
                    <option value="+35">+35</option>
                    <option value="35">35</option>
                    <option value="+38">+38</option>
                    <option value="+40">+40</option>
                    <option value="40">40</option>
                    <option value="+42">+42</option>
                    <option value="+45">+45</option>
                    <option value="+50">+50</option>
                </select>
                <!--<select id="omin" style="width: 60px;">
                    <option value=""></option>
                    <option value="-76">-76</option>
                    <option value="-44">-44</option>
                    <option value="-24">-24</option>
                    <option value="-19">-19</option>
                    <option value="-12">-12</option>
                    <option value="+0">+0</option>
                    <option value="+10">+10</option>
                    <option value="+15">+15</option>
                    <option value="+18">+18</option>
                    <option value="+20">+20</option>
                    <option value="+22">+22</option>
                    <option value="+24">+24</option>
                    <option value="+25">+25</option>
                    <option value="+25.4">+25.4</option>
                    <option value="+27">+27</option>
                    <option value="+28">+28</option>
                    <option value="+30">+30</option>
                    <option value="+31">+31</option>
                    <option value="+32">+32</option>
                    <option value="+35">+35</option>
                    <option value="35">35</option>
                    <option value="+38">+38</option>
                    <option value="+40">+40</option>
                    <option value="40">40</option>
                    <option value="+42">+42</option>
                    <option value="+45">+45</option>
                    <option value="+50">+50</option>
                </select>-->
                <label for="model"></label>
                <select id="b_circle">
                    <option value="">Bolt Circle</option>
                    <option value="4x100">4x100</option>
                    <option value="4x108">4x108</option>
                    <option value="4x114.3">4x114.3</option>
                    <option value="5x100">5x100</option>
                    <option value="5x108">5x108</option>
                    <option value="5x110">5x110</option>
                    <option value="5x112">5x112</option>
                    <option value="5x114.3">5x114.3</option>
                    <option value="5x115">5x115</option>
                    <option value="5x120">5x120</option>
                    <option value="5x120.65">5x120.65</option>
                    <option value="5x127">5x127</option>
                    <option value="5x139.7">5x139.7</option>
                    <option value="5x150">5x150</option>
                    <option value="5x180">5x180</option>
                    <option value="6x120">6x120</option>
                    <option value="6x135">6x135</option>
                    <option value="6x139.7">6x139.7</option>
                    <option value="8x165">8x165</option>
                    <option value="8x165.1">8x165.1</option>
                    <option value="8x165.10">8x165.10</option>
                    <option value="8x170">8x170</option>
                    <option value="8x180">8x180</option>    
                </select>
                <label ></label>
                <select id="c_bore">
                    <option value="">Center Bore</option>
                </select>
                <label ></label>
                <select id="finish">
                    <option value="">Finish</option>
                </select>
                <label for="fitment-go-link">
                    <input id="wheel_search" value="SEARCH" type="button">
                </label> 
                
            </form>
        </div> 
        <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div> 
    </div>
            <?php
        }
        if($_GET['check'] == "part"){
        ?>
        <div class="accordion-wrap" id="leftpanel-VehicleSearch">
            <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/>
            <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle">Parts Search
                <img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png"
                     class="image-icon-blue-question">
                <!--<img src="images/"  id="vehicle-down-arrow"> -->
            </h4>
            <div id="vehicle-guide-heading-container" class="accordion-container collapse in" id="vehicle">
                <form id="vehicle-guide-search-form" action="" method="post">
                    <label id="fitment-message-label">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                    </label>
                    <label for="part">Parts</label>
                    <!-- <select id="part" name="part" class="">
                        <option selected="true" value="select">select</option> -->
                        <?php
                        $qm = "SELECT * FROM tbl_parts ORDER BY part ASC";
                        $rm = $db->query($qm);
                        if ($rm->num_rows > 0) {
                            while ($row = $rm->fetch_object()) {
                                echo '<label class="boxcontainer">' . $row->part . '
                                            <input type="checkbox" name="parts" value="' . $row->part . '">
                                            <span class="checkmark"></span>
                                        </label>';
                            }
                        }
                        ?>
                    <!-- </select> -->
                    <label for="fitment-go-link">
                        <input id="btnpartsearch" value="SEARCH" type="button">
                    </label>

                </form>
            </div>
            <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div>
        </div>
        <?php
        }

    }else{
        ?>
        <div class="accordion-wrap" id="leftpanel-VehicleSearch">
            <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/>
            <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle">Tire
                <img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png" class="image-icon-blue-question" >
                <!--<img src="images/"  id="vehicle-down-arrow"> -->
            </h4>
            <div id="vehicle-guide-heading-container" class="accordion-container collapse in" id="vehicle">
                <form id="vehicle-guide-search-form" action="" method="post">
                    <label id="fitment-message-label">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                    </label>
                    <label for="year"></label>
                    <select id="a">
                        <option value="">Width</option>
                        <option value="155">155</option>
                        <option value="165">165</option>
                        <option value="175">175</option>
                        <option value="185">185</option>
                        <option value="195">195</option>
                        <option value="205">205</option>
                        <option value="215">215</option>
                        <option value="225">225</option>
                        <option value="235">235</option>
                        <option value="245">245</option>
                        <option value="255">255</option>
                        <option value="265">265</option>
                        <option value="275">275</option>
                        <option value="285">285</option>
                        <option value="295">295</option>
                        <option value="30">30</option>
                        <option value="305">305</option>
                        <option value="31">31</option>
                        <option value="315">315</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="35">35</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="40">40</option>
                        <option value="42">42</option>
                    </select>
                    <label for="year"></label>
                    <select id="b">
                        <option value="">Diameter</option>
                        <option value="10.50">10.50</option>
                        <option value="11.50">11.50</option>
                        <option value="12.50">12.50</option>
                        <option value="13.50">13.50</option>
                        <option value="14.50">14.50</option>
                        <option value="15.50">15.50</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                        <option value="60">60</option>
                        <option value="65">65</option>
                        <option value="70">70</option>
                        <option value="75">75</option>
                        <option value="80">80</option>
                        <option value="85">85</option>
                        <option value="9.5">9.5</option>
                        <option value="R">R</option>
                    </select>
                    <label for="year"></label>
                    <select id="c">
                        <option value="">Tire Size</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="24">24</option>
                        <option value="26">26</option>
                        <option value="28">28</option>
                        <option value="30">30</option>
                    </select>

                    <label for="fitment-go-link">
                        <input id="tire_search" value="SEARCH" type="button">
                    </label>

                </form>
            </div>
            <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div>
        </div>

        <div class="accordion-wrap" id="leftpanel-VehicleSearch">
            <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/>
            <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle">Wheel
                <img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png" class="image-icon-blue-question" >
                <!--<img src="images/"  id="vehicle-down-arrow"> -->
            </h4>
            <div id="vehicle-guide-heading-container" class="accordion-container collapse in" id="vehicle">
                <form id="vehicle-guide-search-form" action="" method="post">
                    <label id="fitment-message-label">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                    </label>
                    <label for="year"></label>
                    <select id="wdiameter" style="width: 60px;">
                        <option value="">Size</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="24">24</option>
                        <option value="26">26</option>
                    </select> x
                    <select id="wwidth" style="width: 60px;" >
                        <option value=""></option>
                        <option value="6.5">6.5</option>
                        <option value="6.6">6.6</option>
                        <option value="7">7</option>
                        <option value="7.5">7.5</option>
                        <option value="8">8</option>
                        <option value="8.5">8.5</option>
                        <option value="9">9</option>
                        <option value="9.5">9.5</option>
                        <option value="10">10</option>
                        <option value="10.5">10.5</option>
                        <option value="12">12</option>
                        <option value="14">14</option>
                    </select>
                    <label for="make"></label>
                    <select id="omax">
                        <option value="">Offset</option>
                        <option value="-76">-76</option>
                        <option value="-44">-44</option>
                        <option value="-24">-24</option>
                        <option value="-19">-19</option>
                        <option value="-12">-12</option>
                        <option value="+0">+0</option>
                        <option value="+10">+10</option>
                        <option value="+15">+15</option>
                        <option value="+18">+18</option>
                        <option value="+20">+20</option>
                        <option value="+22">+22</option>
                        <option value="+24">+24</option>
                        <option value="+25">+25</option>
                        <option value="+25.4">+25.4</option>
                        <option value="+27">+27</option>
                        <option value="+28">+28</option>
                        <option value="+30">+30</option>
                        <option value="+31">+31</option>
                        <option value="+32">+32</option>
                        <option value="+35">+35</option>
                        <option value="35">35</option>
                        <option value="+38">+38</option>
                        <option value="+40">+40</option>
                        <option value="40">40</option>
                        <option value="+42">+42</option>
                        <option value="+45">+45</option>
                        <option value="+50">+50</option>
                    </select>
                    <!--<select id="omin" style="width: 60px;">
                        <option value=""></option>
                        <option value="-76">-76</option>
                        <option value="-44">-44</option>
                        <option value="-24">-24</option>
                        <option value="-19">-19</option>
                        <option value="-12">-12</option>
                        <option value="+0">+0</option>
                        <option value="+10">+10</option>
                        <option value="+15">+15</option>
                        <option value="+18">+18</option>
                        <option value="+20">+20</option>
                        <option value="+22">+22</option>
                        <option value="+24">+24</option>
                        <option value="+25">+25</option>
                        <option value="+25.4">+25.4</option>
                        <option value="+27">+27</option>
                        <option value="+28">+28</option>
                        <option value="+30">+30</option>
                        <option value="+31">+31</option>
                        <option value="+32">+32</option>
                        <option value="+35">+35</option>
                        <option value="35">35</option>
                        <option value="+38">+38</option>
                        <option value="+40">+40</option>
                        <option value="40">40</option>
                        <option value="+42">+42</option>
                        <option value="+45">+45</option>
                        <option value="+50">+50</option>
                    </select>-->
                    <label for="model"></label>
                    <select id="b_circle">
                        <option value="">Bolt Circle</option>
                        <option value="4x100">4x100</option>
                        <option value="4x108">4x108</option>
                        <option value="4x114.3">4x114.3</option>
                        <option value="5x100">5x100</option>
                        <option value="5x108">5x108</option>
                        <option value="5x110">5x110</option>
                        <option value="5x112">5x112</option>
                        <option value="5x114.3">5x114.3</option>
                        <option value="5x115">5x115</option>
                        <option value="5x120">5x120</option>
                        <option value="5x120.65">5x120.65</option>
                        <option value="5x127">5x127</option>
                        <option value="5x139.7">5x139.7</option>
                        <option value="5x150">5x150</option>
                        <option value="5x180">5x180</option>
                        <option value="6x120">6x120</option>
                        <option value="6x135">6x135</option>
                        <option value="6x139.7">6x139.7</option>
                        <option value="8x165">8x165</option>
                        <option value="8x165.1">8x165.1</option>
                        <option value="8x165.10">8x165.10</option>
                        <option value="8x170">8x170</option>
                        <option value="8x180">8x180</option>
                    </select>
                    <label ></label>
                    <select id="c_bore">
                        <option value="">Center Bore</option>
                    </select>
                    <label ></label>
                    <select id="finish">
                        <option value="">Finish</option>
                    </select>
                    <label for="fitment-go-link">
                        <input id="wheel_search" value="SEARCH" type="button">
                    </label>

                </form>
            </div>
            <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div>
        </div>
        <div class="accordion-wrap" id="leftpanel-VehicleSearch">
        <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/>
        <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle">Vehicle
            <img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png" class="image-icon-blue-question" >
            <!--<img src="images/"  id="vehicle-down-arrow"> -->
        </h4>
        <div id="vehicle-guide-heading-container" class="accordion-container collapse in" id="vehicle">
            <form id="vehicle-guide-search-form" action="" method="post">
                <label id="fitment-message-label">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                </label>
                <label for="year"></label>
                <select id="year" name="year" name="year" class="year">
                    <option selected="true" value="Year">Year</option>
                    <?php
                    $currentYear = date('Y');
                    while ($currentYear >= 1950) {
                        echo '<option value="'.$currentYear.'">'.$currentYear.'</option>';
                        $currentYear--;
                    }
                    ?>

                </select>
                <label for="make"></label>
                <select id="make" name="make" class="">
                    <option selected="true" value="Make">Make</option>
                    <?php
                    $qm = "SELECT * FROM tbl_make where year_id='1'";
                    $rm = $db->query($qm);
                    if ($rm->num_rows > 0) {
                        while ($row = $rm->fetch_object()) {
                            echo "<option value='".$row->id."'>".$row->make."</option>";
                        }
                    }
                    ?>
                </select>
                <label for="model"></label>
                <select id="model" name="model"class="">
                    <option selected="true" value="Model">Model</option>
                </select>
                <label for="trim"></label>
                <select id="trim" name="trim" class="">
                    <option selected="true" value="Trim">Trim</option>
                </select>
                <label for="fitment-go-link">
                    <input id="btnasearch" value="SEARCH" type="button">
                </label>

            </form>
        </div>
        <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div>
    </div>
        
        <?php
    }
    ?>
    
    <style>
        /* The container */
        .boxcontainer {
            display: block;
            position: relative;
            padding-left: 35px !important;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .boxcontainer input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 6px;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #fff;
        }

        /* On mouse-over, add a grey background color */
        .boxcontainer:hover input ~ .checkmark {
            background-color: #0015f9;
        }

        /* When the checkbox is checked, add a blue background */
        .boxcontainer input:checked ~ .checkmark {
            background-color: #0015f9;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .boxcontainer input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .boxcontainer .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }
    </style>

    <?php
    if (isset($_GET['check'])) {
        if ($_GET['check'] == "tire") {
            ?>

            <div class="accordion-wrap" id="leftpanel-VehicleSearch">
                <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/>
                <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle">Tire
                    Brands
                    <img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png"
                         class="image-icon-blue-question">
                    <!--<img src="images/"  id="vehicle-down-arrow"> -->
                </h4>
                <div id="vehicle-guide-heading-container" class="accordion-container collapse in" id="vehicle">
                    <form id="vehicle-guide-search-form" action="" method="post">
                        <label id="fitment-message-label">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                        </label>
                        <div id="tire_b_short_list">
                            <?php
                            $br = "SELECT * FROM tbl_brand WHERE type='tire' ORDER BY brand ASC LIMIT 10";
                            $rm = $db->query($br);
                            if ($rm->num_rows > 0) {
                                while ($row = $rm->fetch_object()) {
                                    echo '<label class="boxcontainer">' . $row->brand . '
                            <input type="checkbox" name="tire" value="' . $row->brand . '">
                            <span class="checkmark"></span>
                        </label>';
                                }
                            }
                            ?>
                            </div>
                            <div id="tire_b_long_list" style="display: none;" >
                            <?php
                                $br = "SELECT * FROM tbl_brand WHERE type='tire' ORDER BY brand ASC";
                                $rm = $db->query($br);
                                if ($rm->num_rows > 0) {
                                    while ($row = $rm->fetch_object()) {
                                        echo '<label class="boxcontainer">' . $row->brand . '
                                <input type="checkbox" name="tire" value="' . $row->brand . '">
                                <span class="checkmark"></span>
                            </label>';
                                    }
                                }
                            ?>
                            </div>
                            <br>
                            <p class="see-more" id="seemoretire" onclick="showMore('tire_b_short_list','tire_b_long_list','tire')"><i class="fa fa-plus"></i> Show More</p>
                            <p class="show-less" id="showlesstire" onclick="showLess('tire_b_short_list','tire_b_long_list','tire')"><i class="fa fa-minus"></i> Show Less</p>
                        <label for="fitment-go-link">
                            <input id="btnbrandsearch" value="SEARCH" type="button">
                        </label>

                    </form>
                </div>
                <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div>
            </div>
            <?php
        }
        if ($_GET['check'] == "wheel") {

            ?>
            <div class="accordion-wrap" id="leftpanel-VehicleSearch">
                <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/>
                <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle">Wheels
                    Brands
                    <img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png"
                         class="image-icon-blue-question">
                    <!--<img src="images/"  id="vehicle-down-arrow"> -->
                </h4>
                <div id="vehicle-guide-heading-container" class="accordion-container collapse in" id="vehicle">
                    <form id="vehicle-guide-search-form" action="" method="post">
                        <label id="fitment-message-label">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                        </label>
                        <div id="wheel_b_short_list">
                        <?php
                        $br = "SELECT * FROM tbl_brand WHERE type='wheel' ORDER BY brand ASC LIMIT 10";
                        $rm = $db->query($br);
                        if ($rm->num_rows > 0) {
                            while ($row = $rm->fetch_object()) {
                                echo '<label class="boxcontainer">' . $row->brand . '
                    <input type="checkbox" name="wheel" value="' . $row->brand . '">
                    <span class="checkmark"></span>
                </label>';
                            }
                        }
                        ?>
                        </div>
                        <div id="wheel_b_long_list" style="display: none;">
                            <?php
                            $br = "SELECT * FROM tbl_brand WHERE type='wheel' ORDER BY brand ASC";
                            $rm = $db->query($br);
                            if ($rm->num_rows > 0) {
                                while ($row = $rm->fetch_object()) {
                                    echo '<label class="boxcontainer">' . $row->brand . '
                        <input type="checkbox" name="wheel" value="' . $row->brand . '">
                        <span class="checkmark"></span>
                    </label>';
                                }
                            }
                            ?>
                        </div>
                        <br>
                        <p class="see-more" id="seemorewheel" onclick="showMore('wheel_b_short_list','wheel_b_long_list','wheel')"><i class="fa fa-plus"></i> Show More</p>
                        <p class="show-less" id="showlesswheel" onclick="showLess('wheel_b_short_list','wheel_b_long_list','wheel')"><i class="fa fa-minus"></i> Show Less</p>
                        <label for="fitment-go-link">
                            <input id="btnbrandsearch" value="SEARCH" type="button">
                        </label>

                    </form>
                </div>
                <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div>
            </div>
            <?php
        }
        if ($_GET['check'] == "part") {
            ?>
            <div class="accordion-wrap" id="leftpanel-VehicleSearch">
                <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/>
                <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle">Parts
                    Brands
                    <img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png"
                         class="image-icon-blue-question">
                    <!--<img src="images/"  id="vehicle-down-arrow"> -->
                </h4>
                <div id="vehicle-guide-heading-container" class="accordion-container collapse in" id="vehicle">
                    <form id="vehicle-guide-search-form" action="" method="post">
                        <label id="fitment-message-label">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                        </label>
                        <div id="part_b_short_list">
                            <?php
                            $qm = "SELECT * FROM tbl_parts ORDER BY part ASC LIMIT 10";
                            $rm = $db->query($qm);
                            if ($rm->num_rows > 0) {
                                while ($row = $rm->fetch_object()) {
                                    echo '<label class="boxcontainer">' . $row->part . '
                                            <input type="checkbox" name="parts" value="' . $row->part . '">
                                            <span class="checkmark"></span>
                                        </label>';
                                }
                            }
                            ?>
                            </div>
                            <div id="part_b_long_list" style="display: none;">
                                <?php
                                    $qm = "SELECT * FROM tbl_parts ORDER BY part ASC";
                                    $rm = $db->query($qm);
                                    if ($rm->num_rows > 0) {
                                        while ($row = $rm->fetch_object()) {
                                            echo '<label class="boxcontainer">' . $row->part . '
                                                    <input type="checkbox" name="parts" value="' . $row->part . '">
                                                    <span class="checkmark"></span>
                                                </label>';
                                        }
                                    }
                                    ?>
                            </div>
                            <br>
                        <p class="see-more" id="seemorepart" onclick="showMore('part_b_short_list','part_b_long_list','part')"><i class="fa fa-plus"></i> Show More</p>
                        <p class="show-less" id="showlesspart" onclick="showLess('part_b_short_list','part_b_long_list','part')"><i class="fa fa-minus"></i> Show Less</p>

                        <label for="fitment-go-link">
                            <input id="btnbrandsearch" value="SEARCH" type="button">
                        </label>

                    </form>
                </div>
                <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div>
            </div>
            <?php
        }
    }else{
        ?>
        <div class="accordion-wrap" id="leftpanel-VehicleSearch">
            <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/>
            <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle">Tire
                Brands
                <img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png"
                     class="image-icon-blue-question">
                <!--<img src="images/"  id="vehicle-down-arrow"> -->
            </h4>
            <div id="vehicle-guide-heading-container" class="accordion-container collapse in" id="vehicle">
                <form id="vehicle-guide-search-form" action="" method="post">
                    <label id="fitment-message-label">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                    </label>
                    <div id="tire_b_short_list">
                    <?php
                    $br = "SELECT * FROM tbl_brand WHERE type='tire' ORDER BY brand ASC LIMIT 10";
                    $rm = $db->query($br);
                    if ($rm->num_rows > 0) {
                        while ($row = $rm->fetch_object()) {
                            echo '<label class="boxcontainer">' . $row->brand . '
                    <input type="checkbox" name="tire" value="' . $row->brand . '">
                    <span class="checkmark"></span>
                </label>';
                        }
                    }
                    ?>
                    </div>
                    <div id="tire_b_long_list" style="display: none;" >
                    <?php
                        $br = "SELECT * FROM tbl_brand WHERE type='tire' ORDER BY brand ASC";
                        $rm = $db->query($br);
                        if ($rm->num_rows > 0) {
                            while ($row = $rm->fetch_object()) {
                                echo '<label class="boxcontainer">' . $row->brand . '
                        <input type="checkbox" name="tire" value="' . $row->brand . '">
                        <span class="checkmark"></span>
                    </label>';
                            }
                        }
                    ?>
                    </div>
                    <br>
                    <p class="see-more" id="seemoretire" onclick="showMore('tire_b_short_list','tire_b_long_list','tire')"><i class="fa fa-plus"></i> Show More</p>
                    <p class="show-less" id="showlesstire" onclick="showLess('tire_b_short_list','tire_b_long_list','tire')"><i class="fa fa-minus"></i> Show Less</p>
                    <label for="fitment-go-link">
                        <input id="btnbrandsearch" value="SEARCH" type="button">
                    </label>

                </form>
            </div>
            <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div>
        </div>
        <div class="accordion-wrap" id="leftpanel-VehicleSearch">
            <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/>
            <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle">Wheels
                Brands
                <img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png"
                     class="image-icon-blue-question">
                <!--<img src="images/"  id="vehicle-down-arrow"> -->
            </h4>
            <div id="vehicle-guide-heading-container" class="accordion-container collapse in" id="vehicle">
                <form id="vehicle-guide-search-form" action="" method="post">
                    <label id="fitment-message-label">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                    </label>
                    <div id="wheel_b_short_list">
                        <?php
                        $br = "SELECT * FROM tbl_brand WHERE type='wheel' ORDER BY brand ASC LIMIT 10";
                        $rm = $db->query($br);
                        if ($rm->num_rows > 0) {
                            while ($row = $rm->fetch_object()) {
                                echo '<label class="boxcontainer">' . $row->brand . '
                    <input type="checkbox" name="wheel" value="' . $row->brand . '">
                    <span class="checkmark"></span>
                </label>';
                            }
                        }
                        ?>
                        </div>
                        <div id="wheel_b_long_list" style="display: none;">
                            <?php
                            $br = "SELECT * FROM tbl_brand WHERE type='wheel' ORDER BY brand ASC";
                            $rm = $db->query($br);
                            if ($rm->num_rows > 0) {
                                while ($row = $rm->fetch_object()) {
                                    echo '<label class="boxcontainer">' . $row->brand . '
                        <input type="checkbox" name="wheel" value="' . $row->brand . '">
                        <span class="checkmark"></span>
                    </label>';
                                }
                            }
                            ?>
                        </div>
                        <br>
                        <p class="see-more" id="seemorewheel" onclick="showMore('wheel_b_short_list','wheel_b_long_list','wheel')"><i class="fa fa-plus"></i> Show More</p>
                        <p class="show-less" id="showlesswheel" onclick="showLess('wheel_b_short_list','wheel_b_long_list','wheel')"><i class="fa fa-minus"></i> Show Less</p>

                    <label for="fitment-go-link">
                        <input id="btnbrandsearch" value="SEARCH" type="button">
                    </label>

                </form>
            </div>
            <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div>
        </div>
        <div class="accordion-wrap" id="leftpanel-VehicleSearch">
                <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/>
                <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle">Parts Search
                    <img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png"
                         class="image-icon-blue-question">
                    <!--<img src="images/"  id="vehicle-down-arrow"> -->
                </h4>
                <div id="vehicle-guide-heading-container" class="accordion-container collapse in" id="vehicle">
                    <form id="vehicle-guide-search-form" action="" method="post">
                        <label id="fitment-message-label">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                        </label>
                        <label for="part">Parts</label>
                        <div id="part_b_short_list">
                            <?php
                            $qm = "SELECT * FROM tbl_parts ORDER BY part ASC LIMIT 10";
                            $rm = $db->query($qm);
                            if ($rm->num_rows > 0) {
                                while ($row = $rm->fetch_object()) {
                                    echo '<label class="boxcontainer">' . $row->part . '
                                            <input type="checkbox" name="parts" value="' . $row->part . '">
                                            <span class="checkmark"></span>
                                        </label>';
                                }
                            }
                            ?>
                            </div>
                            <div id="part_b_long_list" style="display: none;">
                                <?php
                                    $qm = "SELECT * FROM tbl_parts ORDER BY part ASC";
                                    $rm = $db->query($qm);
                                    if ($rm->num_rows > 0) {
                                        while ($row = $rm->fetch_object()) {
                                            echo '<label class="boxcontainer">' . $row->part . '
                                                    <input type="checkbox" name="parts" value="' . $row->part . '">
                                                    <span class="checkmark"></span>
                                                </label>';
                                        }
                                    }
                                    ?>
                            </div>
                            <br>
                        <p class="see-more" id="seemorepart" onclick="showMore('part_b_short_list','part_b_long_list','part')"><i class="fa fa-plus"></i> Show More</p>
                        <p class="show-less" id="showlesspart" onclick="showLess('part_b_short_list','part_b_long_list','part')"><i class="fa fa-minus"></i> Show Less</p>

                        <label for="fitment-go-link">
                            <input id="btnpartsearch" value="SEARCH" type="button">
                        </label>

                    </form>
                </div>
                <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div>
            </div>
        <!-- <div class="accordion-wrap" id="leftpanel-VehicleSearch">
            <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/>
            <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle">Parts
                Brands
                <img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png"
                     class="image-icon-blue-question">
            </h4>
            <div id="vehicle-guide-heading-container" class="accordion-container collapse in" id="vehicle">
                <form id="vehicle-guide-search-form" action="" method="post">
                    <label id="fitment-message-label">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                    </label>
                    <?php
                //     $br = "SELECT * FROM tbl_brand WHERE type='part' ORDER BY brand ASC";
                //     $rm = $db->query($br);
                //     if ($rm->num_rows > 0) {
                //         while ($row = $rm->fetch_object()) {
                //             echo '<label class="boxcontainer">' . $row->brand . '
                //     <input type="checkbox" name="part" value="' . $row->brand . '">
                //     <span class="checkmark"></span>
                // </label>';
                //         }
                //     }
                    ?>

                    <label for="fitment-go-link">
                        <input id="btnbrandsearch" value="SEARCH" type="button">
                    </label>

                </form>
            </div>
            <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div>
        </div> -->

        <?php
    }
    ?>
    <div class="accordion-wrap" id="product-type"> 
        <input type="hidden" name="componentUid" id="componentUid" value="DefaultProductTypeSearchComponent"/> 
        <h4 id="product-type-heading" data-toggle="collapse" data-target="#producttype">Category 
            <img id="DefaultProductTypeSearchComponent" src="images/leftDownCaret.png " class="image-icon-blue-question"> 
            <!--<img src="" class="arrow-image producttype-arrow-down-right image-icon-down-arrow"> -->
        </h4> 
        <div class="accordion-container collapse in" id="product-type-heading-container"> 
            <label></label> 
            <select id="product-category" name="productCategory" class="product-category">
                <option value="">Product Category</option>
                <option value="Category=3Misc.%20Tires">Tires</option>
                <option value="Category=5Wheels & Accs.">Wheels</option>
                <option value="Category=7Misc. Parts">Parts</option>
            </select> 
            <input type="button" value="SEARCH" id="psearchbtn"> 
        </div> 
        <div class="DefaultProductTypeSearchComponent-helppopup helppopup_left"></div> 
        <div class="tooltip hidden" id="tooltip-div"> <p class="tooltip-text"></p> </div> 
    </div><!--VIN accordion-wrap--> 
    <!--<div class="accordion-wrap" id="leftpanel-VinSearch"> 
        <h4 id="vin-heading" data-toggle="collapse" data-target="#vin">VIN 
            <img id="DefaultVinSearchComponent" src="images/leftDownCaret.png" class="image-icon-blue-question"> 
        
        </h4> 
        <div class="accordion-container collapse" id="vin"> 
            <form id="fitmentsByVinForm" action="/fitment/trim-options-personalized" method="post">
                <label for="vin">Vehicle VIN Number</label>
                <input id="vin-text" name="vin" type="text" value="" maxlength="17"/>
                <input id="vin-submit" type="button" value="SEARCH"/> 
            </form>
        </div> 
        <div class="DefaultVinSearchComponent-helppopup helppopup_left"></div> 
        <div class="tooltip hidden ui-tooltip" id="tooltip-div-vin"> 
            <p class="tooltip-text">Please enter a 17 character VIN</p> 
        </div> 
    </div>-->
    <div class="accordion-wrap" id="leftpanel-LicensePlateSearch"> 
        <!--<h4 id="license-plate-heading" data-toggle="collapse" data-target="#license">License Plate 
            <img id="DefaultLicensePlateSearchComponent" src="images/leftDownCaret.png" class="image-icon-blue-question"> 
           
        </h4> 
        <div class="accordion-container collapse" id="license"> 
            <form id="fitmentsByLPForm" action="/fitment/trim-options-personalized" method="post">
                <label for="region">State</label>
                <select id="region" name="region">
                    <option selected="true" value="AZ">AZ</option>
                    <option value="AK">AK</option><option value="AL">AL</option><option value="AR">AR</option><option value="AZ">AZ</option><option value="CA">CA</option><option value="CO">CO</option><option value="CT">CT</option><option value="DC">DC</option><option value="DE">DE</option><option value="FL">FL</option><option value="GA">GA</option><option value="HI">HI</option><option value="IA">IA</option><option value="ID">ID</option><option value="IL">IL</option><option value="IN">IN</option><option value="KS">KS</option><option value="KY">KY</option><option value="LA">LA</option><option value="MA">MA</option><option value="MD">MD</option><option value="ME">ME</option><option value="MI">MI</option><option value="MN">MN</option><option value="MO">MO</option><option value="MS">MS</option><option value="MT">MT</option><option value="NC">NC</option><option value="ND">ND</option><option value="NE">NE</option><option value="NH">NH</option><option value="NJ">NJ</option><option value="NM">NM</option><option value="NV">NV</option><option value="NY">NY</option><option value="OH">OH</option><option value="OK">OK</option><option value="OR">OR</option><option value="PA">PA</option><option value="RI">RI</option><option value="SC">SC</option><option value="SD">SD</option><option value="TN">TN</option><option value="TX">TX</option><option value="UT">UT</option><option value="VA">VA</option><option value="VT">VT</option><option value="WA">WA</option><option value="WI">WI</option><option value="WV">WV</option><option value="WY">WY</option>
                </select>
                <label for="licensePlateNo">Plate Number</label>
                <input id="lp-text" name="licensePlateNo" type="text" value="" maxlength="8"/>
                <input id="lp-submit" type="button" value="SEARCH"/> 
            </form>
            <div> 
                <form id="fitments-ByLp-HiddenForm" action="/fitment/trim-options-personalized" method="post">
                    <input id="hidden-year" name="year" name="year" type="hidden" value=""/>
                    <input id="hidden-make" name="make" name="make" type="hidden" value=""/>
                    <input id="hidden-model" name="model" name="model" type="hidden" value=""/>
                    <input id="hidden-trim" name="trim" name="trim" type="hidden" value=""/>
                </form>
                <div id="lpHiddenForm-Holder"></div> 
            </div> 
        </div> 
        <div class="DefaultLicensePlateSearchComponent-helppopup helppopup_left"></div> 
        <div class="tooltip hidden ui-tooltip " id="tooltip-div-LP"> 
            <p class="tooltip-text">Must have at least 1 character</p> 
        </div>--> 
    </div>
</div>