<script type="text/javascript" src="js/topfilternav.js"></script>
<div class="row">
    <div class="col-sm-12">
        <div class="accordion-wrap" id="leftpanel-VehicleSearch">
            <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/>
            <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle" style="background:#1500f9 !important;
        color:#fff !important;">Tire
                <!--<img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png" class="image-icon-blue-question" >-->
                <!--<img src="images/"  id="vehicle-down-arrow"> -->
            </h4>
            <div id="vehicle-guide-heading-container" class="" id="vehicle">
                <form id="vehicle-guide-search-form" action="" method="post" style="text-align: center;width: 100%;margin-top: 10px;">
                    <label id="fitment-message-label">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                    </label>
                    <!--<label for="year"></label>-->
                    <select id="top_a">
                        
                        <?php 
                        if(isset($_GET['search'])){
                            $type = substr($search,0,strpos($search,'&'));
                            $title = substr($type,0,strpos($type,'='));
                            $value = substr($type,strpos($type,'=')+1);
                            if($title == "TireSizeA"){
                                echo '<option value="'.$value.'" selected>'.$value.'</option>';
                            }
                        }
                        ?>
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
                    <!--<label for="year"></label>-->
                    <select id="top_b">
                        <?php 
                        if(isset($_GET['TireSizeB'])){
                            echo '<option value="'.$_GET["TireSizeB"].'" selected>'.$_GET["TireSizeB"].'</option>';
                        }
                        ?>
                        
                        <option value="">Ratio</option>
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
                    <!--<label for="year"></label>-->
                    <select id="top_c">
                        <?php 
                        if(isset($_GET['TireSizeC'])){
                            echo '<option value="'.$_GET["TireSizeC"].'" selected>'.$_GET["TireSizeC"].'</option>';
                        }
                        ?>
                        
                        <option value="">Rim Size</option>
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
                    <br>
                    <label for="fitment-go-link" style="padding: 0px !important">
                        <input id="top_tire_search" value="SEARCH" type="button" style="background:red !important;">
                    </label>

                </form>
            </div>
            <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="accordion-wrap" id="leftpanel-VehicleSearch"> 
            <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/> 
            <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle" style="background:#1500f9 !important;
        color:#fff !important;">Wheel 
                <!--<img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png" class="image-icon-blue-question" > -->
                <!--<img src="images/"  id="vehicle-down-arrow"> -->
            </h4> 
            <div id="vehicle-guide-heading-container" class="a" id="vehicle"> 
                <form id="vehicle-guide-search-form" action="" method="post" style="text-align: center;margin-top: 10px;">
                    <label id="fitment-message-label"> 
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                    </label> 
                    
                    <!--<label for="year"></label>-->
                    <select id="top_wdiameter" style="width: 60px;">
                        <?php 
                        if(isset($_GET['search'])){
                            $type = substr($search,0,strpos($search,'&'));
                            $title = substr($type,0,strpos($type,'='));
                            $value = substr($type,strpos($type,'=')+1);
                            if($title == "WheelDiameter"){
                                echo '<option value="'.$value.'" selected>'.$value.'</option>';
                            }
                        }
                        ?>
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
                    <select id="top_wwidth" style="width: 60px;" >
                        <?php 
                        if(isset($_GET['WheelWidth'])){
                            echo '<option value="'.$_GET["WheelWidth"].'" selected>'.$_GET["WheelWidth"].'</option>';
                        }
                        ?>
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
                    <!--<label for="make"></label>-->
                    <select id="top_omax">
                        <option value="">Offset</option>
                        <?php 
                        if(isset($_GET['WheelOffsetMin'])){
                            echo '<option value="'.$_GET["WheelOffsetMin"].'" selected>'.$_GET["WheelOffsetMin"].'</option>';
                        }
                        ?>
                        <!-- <option value="-76">-76</option>
                        <option value="-44">-44</option>
                        <option value="-24">-24</option>
                        <option value="-19">-19</option>
                        <option value="-12">-12</option> -->
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
                    <!--<label for="model"></label>-->
                    <select id="top_b_circle">
                        <?php 
                        if(isset($_GET['WheelBoltCircle'])){
                            echo '<option value="'.$_GET["WheelBoltCircle"].'" selected>'.$_GET["WheelBoltCircle"].'</option>';
                        }
                        ?>
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
                    <!--<label ></label>-->
                    <select id="top_c_bore">
                        <option value="">Center Bore</option>
                    </select>
                    <!--<label ></label>-->
                    <select id="top_finish">
                        <option value="">Finish</option>
                        <option value="GLOSSY SILVER">GLOSSY SILVER</option>
                        <option value="MATTE BLACK">MATTE BLACK</option>
                        <option value="MATTE ANTRACITE POLISHED">MATTE ANTRACITE POLISHED</option>
                        <option value="BMF">BMF</option>
                        <option value="WLP">WLP</option>
                        <option value="BLP">BLP</option>
                        <option value="SMF">SMF</option>
                        <option value="SILVER">SILVER</option>
                        <option value="HYPER SILVER">HYPER SILVER</option>
                        <option value="MATTE CARBON BLACK DIAMOND CUT">MATTE CARBON BLACK DIAMOND CUT</option>
                        <option value="GLOSSY SILVER">GLOSSY SILVER</option>
                        <option value="BRN">BRN</option>
                        <option value="MATTE BLACK">MATTE BLACK</option>
                        <option value="BLACK">BLACK</option>
                        <option value="MATTE ANTHRACITE DIAMOND CUT">MATTE ANTHRACITE DIAMOND CUT</option>
                        <option value="MATTE BLACK ANTHRACITE CUT">MATTE BLACK ANTHRACITE CUT</option>
                        <option value="MATTE CARBON BLACK">MATTE CARBON BLACK</option>
                        <option value="MATTE ANTHRACITE">MATTE ANTHRACITE</option>
                        <option value="MATTE ANTHRACITE DIAMOND CUT">MATTE ANTHRACITE DIAMOND CUT</option>
                        <option value="MB+RC">MB+RC</option>
                        <option value="MATTE ANTHRCITE">MATTE ANTHRCITE</option>
                        <option value="BLACK MACHINED FACE">BLACK MACHINED FACE</option>
                        <option value="MB">MB</option>
                        <option value="MATTE TITAN">MATTE TITAN</option>
                        <option value="MB+MF">MB+MF</option>
                        <option value="MATTE CARBON BLACK">MATTE CARBON BLACK</option>
                        <option value="GLOSS BLACK MILLED EDGE SPOKE">GLOSS BLACK MILLED EDGE SPOKE</option>
                        <option value="GLOSS BLACK MACHINED">GLOSS BLACK MACHINED</option>
                        <option value="BRONZE">BRONZE</option>
                        <option value="GUNMETAL MACHINED FACE">GUNMETAL MACHINED FACE</option>
                        <option value="BLACK [CADILLAC ESCALADE REPLICA]">BLACK [CADILLAC ESCALADE REPLICA]</option>
                        <option value="GLOSS BLACK">GLOSS BLACK</option>
                        <option value="BLACK MILLED">BLACK MILLED</option>
                        <option value="BLACK [DODGE HELLCAT REPLICA]">BLACK [DODGE HELLCAT REPLICA]</option>
                        <option value="SILVER MACHINE FACE">SILVER MACHINE FACE</option>
                        <option value="DARK TINT LUCENT">DARK TINT LUCENT</option>
                        <option value="SILVER/MACHINED FACE">SILVER/MACHINED FACE</option>
                        <option value="BLACK/MILLED">BLACK/MILLED</option>
                        <option value="MATTE BLACK W/MACHINED BALL CUT & DRILL HOLES">MATTE BLACK W/MACHINED BALL CUT & DRILL HOLES</option>
                        <option value="BLACK MILLED + DOTS">BLACK MILLED + DOTS</option>
                        <option value="GLOSS BLK W/MACHINED FACE">GLOSS BLK W/MACHINED FACE</option>
                        <option value="S-BLK MILLED">S-BLK MILLED</option>
                        <option value="YELLOW/MILLED">YELLOW/MILLED</option>
                        <option value="BLACK MILLED [F02]">BLACK MILLED [F02]</option>
                        <option value="SLYDER CHROME">SLYDER CHROME</option>
                        <option value="RED MILLED">RED MILLED</option>
                        <option value="BLK MILLED -44MM">BLK MILLED -44MM</option>
                        <option value="S-BLK">S-BLK</option>
                        <option value="CB-73.1 CHROME">CB-73.1 CHROME</option>
                        <option value="SILVER MACHINED">SILVER MACHINED</option>
                        <option value="BLK">BLK</option>
                        <option value="GLOSS BLACK W/BALL CUT ACCENTS">GLOSS BLACK W/BALL CUT ACCENTS</option>
                        <option value="CHROME">CHROME</option>
                        <option value="GLOSS BLACK W/ BALL CUT ACCENTS">GLOSS BLACK W/ BALL CUT ACCENTS</option>
                        <option value="CB CHROME">CB CHROME</option>
                        <option value="BRUSH FACE SILVER">BRUSH FACE SILVER</option>
                        <option value="MATTE BLACK/ GLOSS BLACK LIP">MATTE BLACK/ GLOSS BLACK LIP</option>
                        <option value="SEMI MATTE SILVER/ CHROME SS LIP">SEMI MATTE SILVER/ CHROME SS LIP</option>
                        <option value="GLOSS BLACK MILLED EDGE">GLOSS BLACK MILLED EDGE</option>
                        <option value="BLS">BLS</option>
                    </select>

                    <br>
                    <label for="fitment-go-link" style="padding: 0px !important">
                        <input id="top_wheel_search" value="SEARCH" type="button" style="background:red !important;">
                    </label> 
                    
                </form>
            </div> 
            <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div> 
        </div>    
    </div>
    <div class="col-sm-12">
    <div class="accordion-wrap" id="leftpanel-VehicleSearch">
        <input type="hidden" name="componentUid" id="componentUid" value="DefaultVehicleGuideComponent"/>
        <h4 id="vehicle-guide-heading" class="collapsed" data-toggle="collapse" data-target="#vehicle" style="background:#1500f9 !important;
     color:#fff !important;">Vehicle
            <!--<img id="DefaultVehicleGuideComponent" src="images/leftDownCaret.png" class="image-icon-blue-question" >-->
            <!--<img src="images/"  id="vehicle-down-arrow"> -->
        </h4>
        <div id="vehicle-guide-heading-container" class="" id="vehicle">
            <form id="vehicle-guide-search-form" action="" method="post" style="text-align: center;margin-top: 10px;">
                <label id="fitment-message-label">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Check Vehicle Fitment
                </label>
                <label for="top_year"></label>
                <select id="top_year" name="year" class="year">
                    <option selected="true" value="Year">Year</option>
                    <?php
                    $qYear = "SELECT DISTINCT `Year` FROM car_detail ORDER BY Year DESC";
                    $rYear = $db->query($qYear);
                    if($rYear->num_rows > 0){
                        while ($row = $rYear->fetch_object()) {
                            echo '<option value="'.$row->Year.'">'.$row->Year.'</option>';
                        }
                    }
                    /*$currentYear = date('Y');
                    while ($currentYear >= 1950) {
                        echo '<option value="'.$currentYear.'">'.$currentYear.'</option>';
                        $currentYear--;
                    }*/
                    ?>

                </select>
                <!--<label for="make"></label>-->
                <select id="top_make" name="make" class="">
                    <option selected="true" value="Make">Make</option>
                    <?php
                    
                    $qm = "SELECT DISTINCT `Make` FROM car_detail ";
                    $rm = $db->query($qm);
                    if ($rm->num_rows > 0) {
                        while ($row = $rm->fetch_object()) {
                            echo "<option value='".$row->Make."'>".$row->Make."</option>";
                        }
                    }
                    ?>
                </select>
                <!--<label for="model"></label>-->
                <select id="top_model" name="model"class="">
                    <option selected="true" value="Model">Model</option>
                </select>
                <!--<label for="trim"></label>-->
                <select id="top_trim" name="trim" class="">
                    <option selected="true" value="Trim">Trim</option>
                </select>
                <br>
                <label for="fitment-go-link" style="padding: 0px !important">
                    <input id="top_btnasearch" value="SEARCH" type="button" style="background:red !important;">
                </label>

            </form>
        </div>
        <div class="DefaultVehicleGuideComponent-helppopup helppopup_left"></div>
    </div>
    </div>
</div>