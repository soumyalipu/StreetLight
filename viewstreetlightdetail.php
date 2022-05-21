<?php
ob_start();
    include("connection.php");
  include("function.php");
  if(!isset($_SESSION['user']))
{
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("CCMS Panel");?>
  
  <style>
  
#lab{
  transform: scale(0.8);
  display: block;
  width: 160px;
  background: #ccc;
  height: 80px;
  border-radius: 40px;
  background: linear-gradient(to bottom, #9e9e9e 30%, #f4f4f4);
  box-shadow: 0 2px 0 0 #fff, 0 -2px 0 0 #969494;
  position: relative;
  -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
}
#lab input {
  display: none;
}
label div {
  display: block;
  width: 120px;
  height: 50px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  background: linear-gradient(to bottom, #8b8c8e 20%, #f4f4f4);
  border-radius: 25px;
}
#lab div:after {
  content: "";
  position: absolute;
  display: block;
  height: 46px;
  width: 116px;
  left: 2px;
  top: 2px;
  border-radius: 23px;
  background: #828080;
  box-shadow: inset 0 0 30px 0 rgba(0, 0, 0, 0.8);
  transition: 0.2s;
}
#lab i {
  display: block;
  width: 60px;
  height: 60px;
  position: absolute;
  background: linear-gradient(to top, #9e9e9e 20%, #f4f4f4);
  border-radius: 50%;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.7);
  top: 10px;
  left: 15px;
  transition: 0.25s;
}
#lab i:after {
  content: "";
  position: absolute;
  display: block;
  width: 52px;
  height: 52px;
  left: 4px;
  top: 4px;
  border-radius: 50%;
  background: #d5d4d4;
  z-index: 1;
}
#lab input:checked ~ i {
  top: 10px;
  left: 86px;
}
#lab input:checked + div:after {
  background: #f7931e;
  box-shadow: inset 0 0 30px 0 rgba(0, 0, 0, 0.6);
}
#lab input:checked + div > .off {
  color: transparent;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0);
}
#lab input:checked + div > .on {
  color: #c6631d;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
}
#lab:after {
  content: "";
  position: absolute;
  display: block;
  width: 164px;
  height: 84px;
  border-radius: 42px;
  background: red;
  top: -2px;
  left: -2px;
  z-index: -1;
  background: linear-gradient(to bottom, #969494, #fff);
}
#lab:hover {
  cursor: pointer;
}
#lab:focus, #lab:active {
  outline: 0;
}

.on,
.off {
  text-transform: uppercase;
  position: absolute;
  left: 17px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 1.2em;
  font-weight: 600;
  z-index: 2;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  letter-spacing: 1px;
  transition: 0.25s;
}

.on {
  color: transparent;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0);
}

.off {
  left: initial;
  right: 17px;
  color: #444;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
}
  </style>
</head>
<body class="animsition">
<div class="page-wrapper">

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Start: Main Sidebar Container -->
  <?php $utype=$_SESSION['usertype'];mobile($utype); sideBar($utype); ?>
  <!-- End: Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="page-container">
  <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap" style="float: right;">
                            
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" style="font-size:26px" href="#"><?php if ($_SESSION['usertype']=="Admin") {
                                            	echo"Admin";
                                            }else{echo"Super Admin";}?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">

                                                    <h5 class="name">
                                                        <a href="#"><?php if ($_SESSION['usertype']=="Admin") {
                                            	echo"Admin";
                                            }else{echo"Superadmin";}?></a>
                                                    </h5>
                                                    <span class="email"><?php if ($_SESSION['usertype']=="Admin") {
                                            	echo $_SESSION['user'];
                                            }else{echo $_SESSION['user'];}?></span>
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($_SESSION['usertype']=="Sadmin") {
                                    ?>
                                    <div class="ml-5">
                                    <button class="btn btn-lg btn-info">
                                        <a style="color:white;" href="chartview.php?Sl_id=<?php echo $_GET['SL_ID']?>&&Phase=<?php echo $_GET['Phase'] ?>">
                                        <i class="fa fa-bar-chart-o"></i>
                                        </a>
                                    </button>
                                </div>
                                    <?php
                                } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>
  <?php
  if ($_GET['Phase']==1) {
        require_once("EntitySinglephase.php");
        require_once("ModelSinglephase.php");
        require_once("connection.php");
        global $dbc;
        $singlephase = new EntitySinglephase();
        $singlephaseModel = new ModelSinglephase($dbc);

        $ArrayList = $singlephaseModel -> GetSinglephaseBySl_id($_GET['SL_ID']);
  }
  elseif ($_GET['Phase']==3) {
        require_once("EntityMultiphase.php");
        require_once("ModelMultiphase.php");
        require_once("connection.php");
        global $dbc;
        $multiphase = new EntityMultiphase();
        $multiphaseModel = new ModelMultiphase($dbc);

        $ArrayList = $multiphaseModel -> GetMultiphaseBySl_id($_GET['SL_ID']);
  }
 
  foreach($ArrayList as $row){
    
  }
  
    date_default_timezone_set('Asia/Kolkata'); 
    $diff = round((strtotime(date("H:i:s"))-strtotime($row->TIME))/60);
    if ($diff >15){
        // echo "<script>console.log('OKKKK');</script>";
        if($_GET['Phase']==3)
            // $sq = "update multiphase set Internetconnected=0,POWERR=0 where SL_ID='{$row->SL_ID}'";
            
            $sq="UPDATE `multiphase` SET `POWERR`=0,`POWERY`=0,`POWERB`=0,`CURRENTR`=0,`CURRENTY`=0,`CURRENTB`=0,`VOLTR`=0,`VOLTY`=0,`VOLTB`=0,`PFR`=0,`PFY`=0,`PFB`=0,`Internetconnected`=0,`Device_Status`=0,`FREQUENCY`=0,`ENERGY`=0 WHERE SL_ID='{$row->SL_ID}'";
        else
            $sq="UPDATE `singlephase` SET `POWER`=0,`CURRENT`=0,`VOLT`=0,`PF`=0,`Internetconnected`=0,`Device_Status`=0,`FREQUENCY`=0,`ENERGY`=0 WHERE SL_ID='{$row->SL_ID}'";
    }
     $res=mysqli_query($dbc, $sq);
?>
    <!-- Main content -->
    <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h4 class="title-1"><?php echo "CCMS Id - ".$_GET['SL_ID']; ?></h4>

                                    <div style=" float: left;">
                                        <table>
                                            <tr>
                                                
                                       <td> <label class="mr-3" style="font-size:20px" ><b> Sunset Time:<?php echo substr($row->A_E_TIME,0,5); ?></b></label></td>
                                       <td> <label class="mr-3" style="font-size:20px" > <b>Sunrise Time:<?php echo substr($row->A_M_TIME,0,5); ?></b></label></td>
                                      
                                      
                                    <!--  <label class="switch switch-text switch-primary switch-pill mr-5" >-->
                                    <!--  <input type="checkbox" class="switch-input " id="SMODE" <?php //if ($row->SMODE==1){echo"checked";-->  } ?> onclick="getValue('SMODE');">-->
                                    <!--  <span data-on="Manual" data-off="Auto" class="switch-label"></span>-->
                                    <!--  <span class="switch-handle"></span>-->
                                    <!--</label>-->
                                    <td><div>
                                    <label id="lab">
                                      <input type="checkbox" id="SMODE" <?php if ($row->SMODE==1){echo"checked"; } ?> onclick="getValue('SMODE');">
                                      <div>
                                        <span class="on">MM</span>
                                        <span class="off">AM</span>
                                      </div>  
                                      <i></i>
                                    </label>
                                    </div></td>
                                    <td><div>
                                    <label id="lab">
                                      <input type="checkbox" id="MMODE" <?php if ($row->MMODE==1){
                                                    echo"checked";
                                                  } ?> onclick="getmValue('MMODE');" <?php if ($row->SMODE==0){
                                                    echo"Disabled";
                                                  } ?>>
                                      <div>
                                        <span class="on">on</span>
                                        <span class="off">off</span>
                                      </div>  
                                      <i></i>
                                    </label>
                                    </div></td>
                                    </tr>
                                    </table>
                                    
                                    
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--<div class="row m-t-25">-->
                        <!--   <div class="col-lg-12">-->
                        <!--        <div class="au-card chart-percent-card">-->
                                    <!--<div class="au-card-inner">-->
                                        <div class="row bg-white p-3" style="border-radius:5px;">
                                                  <div class="col-lg-4 text-center">
                                                      <label for="switch" class="form-label">
                                                        <h3 class="title-2">CCMS Status</h3>
                                                      </label>
                                                         <br>
                                                    <img id="d_status" class="" src=" <?php if ($row->Device_Status==1 or $diff <15){
                                                            echo"images/icon/pon.png";
                                                    }
                                                             else{echo"images/icon/poff.png";}?>">
                                                  </div>
                                                  <div class="col-lg-4 text-center">
                                                      <label for="switch" class="form-label">
                                                        <h3 class="title-2">Internet Connected</h3>
                                                      </label>
                                                      <br>
                                                      <img class="" src=" <?php if ($row->Internetconnected==1){echo"images/icon/wifigreen.png";}
                                                             else{echo"images/icon/wifired.png";}?>">
                                                  </div>
                                                  <div class="col-lg-4 text-center">
                                                      <div class="">
                                                          <label for="switch" class="form-label ">
                                                            <h3 class="title-2">Alarm</h3>
                                                          </label><br>
                                                          <img  src=" <?php if ($row->FAULT==0){echo"images/icon/alarmgreen.png";}
                                                                 else{echo"images/icon/alarmred.png";}?>">
                                                     </div>
                                                  </div>
                                                  

                                        </div>
                                            
                                    <!--</div>-->
                        <!--        </div>-->
                        <!--    </div> -->
                        <!--</div>-->
                        <div class="row m-t-25 ">
                            <div class="col-sm-6 col-lg-4 pl-2">
                                <div>
                                    <div class="overview__inner" id="g1" >
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-lg-4 pl-2">
                                <div>
                                    <div class="overview__inner" id="g3" >
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-sm-6 col-lg-4 pl-2">
                                <div class="align-center">
                                    <div class="overview__inner" id="g2"  >
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        <div id="mpr" style="display:none;" class="row">
                            <div class="col-sm-6 col-lg-4">
                              <div>
                                  <div class="overview__inner" id="g4" >
                                      <div class="overview-box clearfix">
                                          <div class="icon">
                                              <i class="zmdi zmdi-account-o"></i>
                                          </div>
                                          <div class="text">
                                              
                                          </div>
                                      </div>
                                      <div class="overview-chart">
                                          <canvas id="widgetChart1"></canvas>
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div>
                                    <div class="overview__inner" id="g6" >
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 ">
                                <div>
                                    <div class="overview__inner" id="g5" >
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div>
                                    <div class="overview__inner" id="g7">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-sm-6 col-lg-4">
                                <div>
                                    <div class="overview__inner" id="g9" >
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                             <div class="col-sm-6 col-lg-4">
                                <div>
                                    <div class="overview__inner" id="g8" >
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div>
                                    <div class="overview__inner" id="g13" >
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-lg-4">
                                <div>
                                    <div class="overview__inner" id="g15">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div>
                                    <div class="overview__inner" id="g14">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-lg-4">
                                <div>
                                    <div class="overview__inner" id="g10">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div>
                                    <div class="overview__inner" id="g11">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4" id="ex">
                                <div>
                                    <div class="overview__inner" id="g12">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="col-lg-12" >
                              <!--Map script-->
                              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                              <?php 
                              if ($_GET['Phase']==1) {
                                ?>
                                <script type="text/javascript">
                                  google.charts.load('current', {'packages':['gauge']});
                                  google.charts.setOnLoadCallback(drawChart);

                                  function drawChart() {

                                    var data1 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['Volt', <?php echo ($row->VOLT);?>],
                                    ]);
                                    var formatter = new google.visualization.NumberFormat(
                                        
                                        {   fractionDigits: 2,
                                            suffix: 'V'}
                                    );
                                        formatter.format(data1,1);
                                        
                                    var data2 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['Current', <?php echo $row->CURRENT;?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {fractionDigits: 2,suffix: 'A'}
                                    );
                                        formatter.format(data2,1);
                                    var data3 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['Power', <?php echo $row->POWER;?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {suffix: 'W',fractionDigits: 2}
                                    );
                                        formatter.format(data3,1);
                                    var data10 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['PF', <?php echo $row->PF;?>],
                                    ]);
                                    var data11 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['FREQ', <?php echo $row->FREQUENCY;?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {suffix: 'Hz',fractionDigits: 2}
                                    );
                                        formatter.format(data11,1);
                                    var data12 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['Energy', <?php echo $row->ENERGY;?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {suffix: 'KWh',fractionDigits: 2}
                                    );
                                        formatter.format(data12,1);
                                    var options1 = {
                                        max:300,
                                      redFrom: 270, redTo: 300,
                                      yellowFrom:250, yellowTo: 270,
                                      minorTicks: 5
                                    };
                                    var options2 = {
                                        max:100,
                                      redFrom: 90, redTo: 100,
                                      yellowFrom:75, yellowTo: 90,
                                      minorTicks: 5
                                    };
                                    var options3 = {
                                        max:6000,
                                      redFrom: 5500, redTo: 6000,
                                      yellowFrom:4500, yellowTo: 5500,
                                      minorTicks: 5
                                    };
                                    var options4 = {
                                        max:1,
                                      redFrom: 90, redTo: 100,
                                      yellowFrom:75, yellowTo: 90,
                                      minorTicks: 5
                                    };
                                    var options5 = {
                                        max:100,
                                      redFrom: 90, redTo: 100,
                                      yellowFrom:75, yellowTo: 90,
                                      minorTicks: 5
                                    };
                                    var options6 = {
                                        max:1000,
                                      redFrom: 90, redTo: 100,
                                      yellowFrom:75, yellowTo: 90,
                                      minorTicks: 5
                                    };
                                    var chart1 = new google.visualization.Gauge(document.getElementById('g1'));
                                    var chart2 = new google.visualization.Gauge(document.getElementById('g2'));
                                    var chart3 = new google.visualization.Gauge(document.getElementById('g3'));
                                    var chart10 = new google.visualization.Gauge(document.getElementById('g10'));
                                    var chart11 = new google.visualization.Gauge(document.getElementById('g11'));
                                    var chart12 = new google.visualization.Gauge(document.getElementById('g12'));
                                    chart1.draw(data1, options1);
                                    chart2.draw(data3, options3);
                                    chart3.draw(data2, options2);
                                    chart10.draw(data10, options4);
                                    chart11.draw(data11, options5);
                                    chart12.draw(data12, options6);
                                  }
                                  setInterval(function() {
                                      $.ajax({
                                         type:"POST",
                                         url: "getdata.php",
                                         data:{id:<?php echo $_GET["SL_ID"] ?>,Phase:<?php echo $_GET["Phase"] ?>},
                                         dataType: "json",
                                         success:function(data){
                                            //  console.log(data);
                                                  google.charts.setOnLoadCallback(drawChart);
                
                                                  function drawChart() {
                
                                                    var data1 = google.visualization.arrayToDataTable([
                                                      ['Label', 'Value'],
                                                      ['Volt', data["VOLT"]],
                                                    ]);
                                                    var formatter = new google.visualization.NumberFormat(
                                                        
                                                        {   fractionDigits: 2,
                                                            suffix: 'V'}
                                                    );
                                                        formatter.format(data1,1);
                                                        
                                                    var data2 = google.visualization.arrayToDataTable([
                                                      ['Label', 'Value'],
                                                      ['Current', data["CURRENT"]],
                                                    ]);
                                                     var formatter = new google.visualization.NumberFormat(
                                                        {fractionDigits: 2,suffix: 'A'}
                                                    );
                                                        formatter.format(data2,1);
                                                    var data3 = google.visualization.arrayToDataTable([
                                                      ['Label', 'Value'],
                                                      ['Power', data["POWER"]],
                                                    ]);
                                                     var formatter = new google.visualization.NumberFormat(
                                                        {suffix: 'W',fractionDigits: 2}
                                                    );
                                                        formatter.format(data3,1);
                                                    var data10 = google.visualization.arrayToDataTable([
                                                      ['Label', 'Value'],
                                                      ['PF', data["PF"]],
                                                    ]);
                                                    var data11 = google.visualization.arrayToDataTable([
                                                      ['Label', 'Value'],
                                                      ['FREQ', data["FREQUENCY"]],
                                                    ]);
                                                     var formatter = new google.visualization.NumberFormat(
                                                        {suffix: 'Hz',fractionDigits: 2}
                                                    );
                                                        formatter.format(data11,1);
                                                    var data12 = google.visualization.arrayToDataTable([
                                                      ['Label', 'Value'],
                                                      ['Energy', data["ENERGY"]],
                                                    ]);
                                                     var formatter = new google.visualization.NumberFormat(
                                                        {suffix: 'KWh',fractionDigits: 2}
                                                    );
                                                        formatter.format(data12,1);
                                                    var options1 = {
                                                        max:300,
                                                      redFrom: 270, redTo: 300,
                                                      yellowFrom:250, yellowTo: 270,
                                                      minorTicks: 5
                                                    };
                                                    var options2 = {
                                                        max:100,
                                                      redFrom: 90, redTo: 100,
                                                      yellowFrom:75, yellowTo: 90,
                                                      minorTicks: 5
                                                    };
                                                    var options3 = {
                                                        max:6000,
                                                      redFrom: 5500, redTo: 6000,
                                                      yellowFrom:4500, yellowTo: 5500,
                                                      minorTicks: 5
                                                    };
                                                    var options4 = {
                                                        max:1,
                                                      redFrom: 90, redTo: 100,
                                                      yellowFrom:75, yellowTo: 90,
                                                      minorTicks: 5
                                                    };
                                                    var options5 = {
                                                        max:100,
                                                      redFrom: 90, redTo: 100,
                                                      yellowFrom:75, yellowTo: 90,
                                                      minorTicks: 5
                                                    };
                                                    var options6 = {
                                                        max:1000,
                                                      redFrom: 90, redTo: 100,
                                                      yellowFrom:75, yellowTo: 90,
                                                      minorTicks: 5
                                                    };
                                                    var chart1 = new google.visualization.Gauge(document.getElementById('g1'));
                                                    var chart2 = new google.visualization.Gauge(document.getElementById('g2'));
                                                    var chart3 = new google.visualization.Gauge(document.getElementById('g3'));
                                                    var chart10 = new google.visualization.Gauge(document.getElementById('g10'));
                                                    var chart11 = new google.visualization.Gauge(document.getElementById('g11'));
                                                    var chart12 = new google.visualization.Gauge(document.getElementById('g12'));
                                                    chart1.draw(data1, options1);
                                                    chart2.draw(data3, options3);
                                                    chart3.draw(data2, options2);
                                                    chart10.draw(data10, options4);
                                                    chart11.draw(data11, options5);
                                                    chart12.draw(data12, options6);
                                                  }
                                      
                                         }
                                      });
                                  }, 5000);
                                </script>
                                <?php  
                              }
                              elseif ($_GET['Phase']==3) {
                                ?>
                                <script type="text/javascript">
                                  google.charts.load('current', {'packages':['gauge']});
                                  google.charts.setOnLoadCallback(drawChart);
                                  function drawChart() {
                                    var data1 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['Volt-R', <?php echo $row->VOLTR; ?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {suffix: 'V',fractionDigits: 2}
                                    );
                                        formatter.format(data1,1);
                                        
                                    var data2 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['Volt-B', <?php echo $row->VOLTB;?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {suffix: 'V',fractionDigits: 2}
                                    );
                                        formatter.format(data2,1);
                                    var data3 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['Volt-Y', <?php echo $row->VOLTY;?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {suffix: 'V',fractionDigits: 2}
                                    );
                                        formatter.format(data3,1);
                                    var data4 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['Current-R', <?php echo $row->CURRENTR;?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {suffix: 'A',fractionDigits: 2}
                                    );
                                        formatter.format(data4,1);
                                    var data5 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['Current-B', <?php echo $row->CURRENTB;?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {suffix: 'A',fractionDigits: 2}
                                    );
                                        formatter.format(data5,1);
                                    var data6 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['Current-Y', <?php echo $row->CURRENTY;?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {suffix: 'A',fractionDigits: 2}
                                    );
                                        formatter.format(data6,1);
                                    var data7 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['Power-R', <?php echo $row->POWERR;?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {suffix: 'W',fractionDigits: 2}
                                    );
                                        formatter.format(data7,1);
                                    var data8 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['Power-B', <?php echo $row->POWERB;?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {suffix: 'W',fractionDigits: 2}
                                    );
                                        formatter.format(data8,1);
                                    var data9 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['Power-Y', <?php echo $row->POWERY;?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {suffix: 'W',fractionDigits: 2}
                                    );
                                        formatter.format(data9,1);
                                    var data10 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['PF-R', <?php echo $row->PFR;?>],
                                    ]);
                                        formatter.format(data10,1);
                                    var data11 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['PF-B', <?php echo $row->PFB;?>],
                                    ]);
                                        formatter.format(data11,1);
                                    var data12 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['PF-Y', <?php echo $row->PFY;?>],
                                    ]);
                                    var data13 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['FREQ', <?php echo $row->FREQUENCY;?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {suffix: 'Hz',fractionDigits: 2}
                                    );
                                        formatter.format(data13,1);
                                    var data14 = google.visualization.arrayToDataTable([
                                      ['Label', 'Value'],
                                      ['Energy', <?php echo $row->ENERGY;?>],
                                    ]);
                                     var formatter = new google.visualization.NumberFormat(
                                        {suffix: 'KWh',fractionDigits: 2}
                                    );
                                        formatter.format(data14,1);
                                    var optionsvr = {
                                     max:300,
                                      redFrom: 270, redTo: 300,
                                      yellowFrom:250, yellowTo: 270,
                                      minorTicks: 5
                                    };
                                    var optionsvb = {
                                     max:300,
                                      redFrom: 270, redTo: 300,
                                      yellowFrom:250, yellowTo: 270,
                                      minorTicks: 5
                                    };
                                    var optionsvy = {
                                     max:300,
                                      redFrom: 270, redTo: 300,
                                      yellowFrom:250, yellowTo: 270,
                                      minorTicks: 5
                                    };
                                    var optionscr = {
                                     max:100,
                                      redFrom: 90, redTo: 100,
                                      yellowFrom:75, yellowTo: 90,
                                      minorTicks: 5
                                    };
                                    var optionscb = {
                                     max:100,
                                      redFrom: 90, redTo: 100,
                                      yellowFrom:75, yellowTo: 90,
                                      minorTicks: 5
                                    };
                                    var optionscy = {
                                     max:100,
                                      redFrom: 90, redTo: 100,
                                      yellowFrom:75, yellowTo: 90,
                                      minorTicks: 5
                                    };
                                    var optionspr = {
                                     max:6000,
                                      redFrom: 5500, redTo: 6000,
                                      yellowFrom:4500, yellowTo: 5500,
                                      minorTicks: 5
                                    };
                                    var optionspb = {
                                     max:6000,
                                      redFrom: 5500, redTo: 6000,
                                      yellowFrom:4500, yellowTo: 5500,
                                      minorTicks: 5
                                    };
                                    var optionspy = {
                                     max:6000,
                                      redFrom: 5500, redTo: 6000,
                                      yellowFrom:4500, yellowTo: 5500,
                                      minorTicks: 5
                                    };
                                     var optionspf = {
                                     max:1,
                                      redFrom: 90, redTo: 100,
                                      yellowFrom:75, yellowTo: 90,
                                      minorTicks: 5
                                    };
                                     
                                    document.getElementById('ex').style.display="none";
                                    document.getElementById('mpr').style.display="flex";
                                    var chart1 = new google.visualization.Gauge(document.getElementById('g1'));
                                    var chart2 = new google.visualization.Gauge(document.getElementById('g2'));
                                    var chart3 = new google.visualization.Gauge(document.getElementById('g3'));
                                    var chart4 = new google.visualization.Gauge(document.getElementById('g4'));
                                    var chart5 = new google.visualization.Gauge(document.getElementById('g5'));
                                    var chart6 = new google.visualization.Gauge(document.getElementById('g6'));
                                    var chart7 = new google.visualization.Gauge(document.getElementById('g7'));
                                    var chart8 = new google.visualization.Gauge(document.getElementById('g8'));
                                    var chart9 = new google.visualization.Gauge(document.getElementById('g9'));
                                    var chart10 = new google.visualization.Gauge(document.getElementById('g13'));
                                    var chart11 = new google.visualization.Gauge(document.getElementById('g14'));
                                    var chart12 = new google.visualization.Gauge(document.getElementById('g15'));
                                    var chart13 = new google.visualization.Gauge(document.getElementById('g10'));
                                    var chart14 = new google.visualization.Gauge(document.getElementById('g11'));
                                    
                                    chart1.draw(data1, optionsvr);
                                    chart2.draw(data2, optionsvb);
                                    chart3.draw(data3, optionsvy);
                                    chart4.draw(data4, optionscr);
                                    chart5.draw(data5, optionscb);
                                    chart6.draw(data6, optionscy);
                                    chart7.draw(data7, optionspr);
                                    chart8.draw(data8, optionspb);
                                    chart9.draw(data9, optionspy);
                                    chart10.draw(data10, optionspf);
                                    chart11.draw(data11, optionspf);
                                    chart12.draw(data12, optionspf);
                                    chart13.draw(data13, optionscr);
                                    chart14.draw(data14, optionscr);
                                  }
                                  setInterval(function() {
                                      $.ajax({
                                         type:"POST",
                                         url: "getdata.php",
                                         data:{id:<?php echo $_GET["SL_ID"] ?>,Phase:<?php echo $_GET["Phase"] ?>},
                                         dataType: "json",
                                         success:function(data){
                                             google.charts.setOnLoadCallback(drawChart);
                                        function drawChart() {
                                            var data1 = google.visualization.arrayToDataTable([
                                              ['Label', 'Value'],
                                              ['Volt-R', data["VOLTR"]],
                                            ]);
                                             var formatter = new google.visualization.NumberFormat(
                                                {suffix: 'V',fractionDigits: 2}
                                            );
                                                formatter.format(data1,1);
                                                
                                            var data2 = google.visualization.arrayToDataTable([
                                              ['Label', 'Value'],
                                              ['Volt-B', data["VOLTB"]],
                                            ]);
                                             var formatter = new google.visualization.NumberFormat(
                                                {suffix: 'V',fractionDigits: 2}
                                            );
                                                formatter.format(data2,1);
                                            var data3 = google.visualization.arrayToDataTable([
                                              ['Label', 'Value'],
                                              ['Volt-Y', data["VOLTY"]],
                                            ]);
                                             var formatter = new google.visualization.NumberFormat(
                                                {suffix: 'V',fractionDigits: 2}
                                            );
                                                formatter.format(data3,1);
                                            var data4 = google.visualization.arrayToDataTable([
                                              ['Label', 'Value'],
                                              ['Current-R', data["CURRENTR"]],
                                            ]);
                                             var formatter = new google.visualization.NumberFormat(
                                                {suffix: 'A',fractionDigits: 2}
                                            );
                                                formatter.format(data4,1);
                                            var data5 = google.visualization.arrayToDataTable([
                                              ['Label', 'Value'],
                                              ['Current-B', data["CURRENTB"]],
                                            ]);
                                             var formatter = new google.visualization.NumberFormat(
                                                {suffix: 'A',fractionDigits: 2}
                                            );
                                                formatter.format(data5,1);
                                            var data6 = google.visualization.arrayToDataTable([
                                              ['Label', 'Value'],
                                              ['Current-Y', data["CURRENTY"]],
                                            ]);
                                             var formatter = new google.visualization.NumberFormat(
                                                {suffix: 'A',fractionDigits: 2}
                                            );
                                                formatter.format(data6,1);
                                            var data7 = google.visualization.arrayToDataTable([
                                              ['Label', 'Value'],
                                              ['Power-R', data["POWERR"]],
                                            ]);
                                             var formatter = new google.visualization.NumberFormat(
                                                {suffix: 'W',fractionDigits: 2}
                                            );
                                                formatter.format(data7,1);
                                            var data8 = google.visualization.arrayToDataTable([
                                              ['Label', 'Value'],
                                              ['Power-B', data["POWERB"]],
                                            ]);
                                             var formatter = new google.visualization.NumberFormat(
                                                {suffix: 'W',fractionDigits: 2}
                                            );
                                                formatter.format(data8,1);
                                            var data9 = google.visualization.arrayToDataTable([
                                              ['Label', 'Value'],
                                              ['Power-Y', data["POWERY"]],
                                            ]);
                                             var formatter = new google.visualization.NumberFormat(
                                                {suffix: 'W',fractionDigits: 2}
                                            );
                                                formatter.format(data9,1);
                                            var data10 = google.visualization.arrayToDataTable([
                                              ['Label', 'Value'],
                                              ['PF-R', data["PFR"]],
                                            ]);
                                                formatter.format(data10,1);
                                            var data11 = google.visualization.arrayToDataTable([
                                              ['Label', 'Value'],
                                              ['PF-B', data["PFB"]],
                                            ]);
                                                formatter.format(data11,1);
                                            var data12 = google.visualization.arrayToDataTable([
                                              ['Label', 'Value'],
                                              ['PF-Y', data["PFY"]],
                                            ]);
                                            var data13 = google.visualization.arrayToDataTable([
                                              ['Label', 'Value'],
                                              ['FREQ', data["FREQUENCY"]],
                                            ]);
                                             var formatter = new google.visualization.NumberFormat(
                                                {suffix: 'Hz',fractionDigits: 2}
                                            );
                                                formatter.format(data13,1);
                                            var data14 = google.visualization.arrayToDataTable([
                                              ['Label', 'Value'],
                                              ['Energy', data["ENERGY"]],
                                            ]);
                                             var formatter = new google.visualization.NumberFormat(
                                                {suffix: 'KWh',fractionDigits: 2}
                                            );
                                                formatter.format(data14,1);
                                            var optionsvr = {
                                             max:300,
                                              redFrom: 270, redTo: 300,
                                              yellowFrom:250, yellowTo: 270,
                                              minorTicks: 5
                                            };
                                            var optionsvb = {
                                             max:300,
                                              redFrom: 270, redTo: 300,
                                              yellowFrom:250, yellowTo: 270,
                                              minorTicks: 5
                                            };
                                            var optionsvy = {
                                             max:300,
                                              redFrom: 270, redTo: 300,
                                              yellowFrom:250, yellowTo: 270,
                                              minorTicks: 5
                                            };
                                            var optionscr = {
                                             max:100,
                                              redFrom: 90, redTo: 100,
                                              yellowFrom:75, yellowTo: 90,
                                              minorTicks: 5
                                            };
                                            var optionscb = {
                                             max:100,
                                              redFrom: 90, redTo: 100,
                                              yellowFrom:75, yellowTo: 90,
                                              minorTicks: 5
                                            };
                                            var optionscy = {
                                             max:100,
                                              redFrom: 90, redTo: 100,
                                              yellowFrom:75, yellowTo: 90,
                                              minorTicks: 5
                                            };
                                            var optionspr = {
                                             max:6000,
                                              redFrom: 5500, redTo: 6000,
                                              yellowFrom:4500, yellowTo: 5500,
                                              minorTicks: 5
                                            };
                                            var optionspb = {
                                             max:6000,
                                              redFrom: 5500, redTo: 6000,
                                              yellowFrom:4500, yellowTo: 5500,
                                              minorTicks: 5
                                            };
                                            var optionspy = {
                                             max:6000,
                                              redFrom: 5500, redTo: 6000,
                                              yellowFrom:4500, yellowTo: 5500,
                                              minorTicks: 5
                                            };
                                             var optionspf = {
                                             max:1,
                                              redFrom: 90, redTo: 100,
                                              yellowFrom:75, yellowTo: 90,
                                              minorTicks: 5
                                            };
                                             
                                            document.getElementById('ex').style.display="none";
                                            document.getElementById('mpr').style.display="flex";
                                            var chart1 = new google.visualization.Gauge(document.getElementById('g1'));
                                            var chart2 = new google.visualization.Gauge(document.getElementById('g2'));
                                            var chart3 = new google.visualization.Gauge(document.getElementById('g3'));
                                            var chart4 = new google.visualization.Gauge(document.getElementById('g4'));
                                            var chart5 = new google.visualization.Gauge(document.getElementById('g5'));
                                            var chart6 = new google.visualization.Gauge(document.getElementById('g6'));
                                            var chart7 = new google.visualization.Gauge(document.getElementById('g7'));
                                            var chart8 = new google.visualization.Gauge(document.getElementById('g8'));
                                            var chart9 = new google.visualization.Gauge(document.getElementById('g9'));
                                            var chart10 = new google.visualization.Gauge(document.getElementById('g13'));
                                            var chart11 = new google.visualization.Gauge(document.getElementById('g14'));
                                            var chart12 = new google.visualization.Gauge(document.getElementById('g15'));
                                            var chart13 = new google.visualization.Gauge(document.getElementById('g10'));
                                            var chart14 = new google.visualization.Gauge(document.getElementById('g11'));
                                            
                                            chart1.draw(data1, optionsvr);
                                            chart2.draw(data2, optionsvb);
                                            chart3.draw(data3, optionsvy);
                                            chart4.draw(data4, optionscr);
                                            chart5.draw(data5, optionscb);
                                            chart6.draw(data6, optionscy);
                                            chart7.draw(data7, optionspr);
                                            chart8.draw(data8, optionspb);
                                            chart9.draw(data9, optionspy);
                                            chart10.draw(data10, optionspf);
                                            chart11.draw(data11, optionspf);
                                            chart12.draw(data12, optionspf);
                                            chart13.draw(data13, optionscr);
                                            chart14.draw(data14, optionscr);
                                          }
                                             
                                             
                                         }
                                      });
                                  }, 5000);
                                </script>
                                <?php
                              }
                              ?>
                               
                              
                            </div>
                        </div>

                        <div class="row mt-5">
                          <?php 

                            if ($_GET['Phase']==1) {
                              ?>
                              <div class="col-lg-12">
                                
                                <div class="au-card recent-report">
                                    <div class="text-dark h3 mb-3"><b>CCMS Settings</b></div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="au-card-inner">
                                               <h3 class="title-2">Set Voltage</h3>
                                               <div class="p-2">
                                                  <label for="customRange1" class="form-label">High</label>
                                                  <input type="range" class="form-range" id="customRange1" value="<?php echo $row->HIGH_VOLT;?>" onchange="updateTextInput(this.value,'HIGH_VOLT',<?PHP echo $row->SL_ID; ?>,'textInput1');" max="300">
                                                  <input type="text" id="textInput1" value="<?php echo $row->HIGH_VOLT;?>">
                                                  <br>
                                                  <label for="customRange2" class="form-label">Low</label>
                                                  <input type="range" class="form-range" id="customRange2" value="<?php echo $row->LOW_VOLT;?>" onchange="updateTextInput(this.value,'LOW_VOLT',<?PHP echo $row->SL_ID; ?>,'textInput2');" max="300">
                                                  <input type="text" id="textInput2" value="<?php echo $row->LOW_VOLT;?>">
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="au-card-inner">
                                               <h3 class="title-2">Set Current</h3>
                                               <div class="p-2">
                                              <label for="customRange1" class="form-label">High</label>
                                              <input type="range" class="form-range" id="customRange1" value="<?php echo $row->HC;?>" onchange="updateTextInput(this.value,'HC',<?PHP echo $row->SL_ID; ?>,'textInput3');">
                                              <input type="text" id="textInput3" value="<?php echo $row->HC;?>">
                                              <br>
                                              <label for="customRange2" class="form-label">Low</label>
                                              <input type="range" class="form-range" id="customRange2" value="<?php echo $row->LC;?>" onchange="updateTextInput(this.value,'LC',<?PHP echo $row->SL_ID; ?>,'textInput4');">
                                              <input type="text" id="textInput4" value="<?php echo $row->LC;?>">
                                              </div>
                                            </div>
                                        </div>
                                        <!--<div class="col-lg-4">-->
                                        <!--    <div class="au-card-inner">-->
                                        <!--       <h3 class="title-2">Set Power</h3>-->
                                        <!--       <div class="p-2">-->
                                        <!--      <label for="customRange1" class="form-label">High</label>-->
                                             
                                        <!--      <input type="range" class="form-range" id="customRange1" value="<?php echo $row->HC;?>" onchange="updateTextInput(this.value,'HP',<?PHP echo $row->SL_ID; ?>,'textInput5');">-->
                                        <!--      <input type="text" id="textInput3"  value="<?php echo $row->HC;?>">-->
                                            
                                        <!--      <br>-->
                                        <!--      <label for="customRange2" class="form-label">Low</label>-->
                                        <!--      <input type="range" class="form-range" id="customRange2" value="<?php echo $row->LC;?>" onchange="updateTextInput(this.value,'LP',<?PHP echo $row->SL_ID; ?>,'textInput6');">-->
                                        <!--      <input type="text" id="textInput4" value="<?php echo $row->LC;?>">-->
                                        <!--      </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                
                                <?php
                            }
                            elseif ($_GET['Phase']==3) {
                              ?>
                              <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="text-dark h4 mb-3"><b>CCMS Settings</b></div>
                                    <div class="au-card-inner">
                                        <div class="row">
                                        <div class="col-lg-4">
                                          <h3 class="title-2">Set Voltage-R</h3>
                                          <hr>
                                          <label for="customRange1" class="form-label">High</label>
                                          <input type="range" class="form-range" id="customRange1" onchange="updateTextInput(this.value,'HVR',<?PHP echo $row->SL_ID; ?>,'textInput1');"  value="<?php echo $row->HIGH_VOLTR;?>" max="300">
                                          <input type="text" id="textInput1" value="<?php echo $row->HIGH_VOLTR;?>">
                                          <br>
                                          <label for="customRange1" class="form-label">Low</label>
                                          <input type="range" class="form-range" id="customRange1" onchange="updateTextInput(this.value,'LVR',<?PHP echo $row->SL_ID; ?>,'textInput2');"  value="<?php echo $row->LOW_VOLTR;?>" max="300">
                                          <input type="text" id="textInput2" value="<?php echo $row->LOW_VOLTR;?>">
                                        </div>
                                        <div class="col-lg-4">
                                          <h3 class="title-2">Set Voltage-Y</h3>
                                          <hr>
                                          <label for="customRange1" class="form-label">High</label>
                                          <input type="range" class="form-range" id="customRange1" onchange="updateTextInput(this.value,'HBY',<?PHP echo $row->SL_ID; ?>,'textInput5');" value="<?php echo $row->HIGH_VOLTY;?>" max="300">
                                          <input type="text" id="textInput5" value="<?php echo $row->HIGH_VOLTY;?>">
                                          <br>
                                          <label for="customRange1" class="form-label">Low</label>
                                          <input type="range" class="form-range" id="customRange1" onchange="updateTextInput(this.value,'LVY',<?PHP echo $row->SL_ID; ?>,'textInput6');" value="<?php echo $row->LOW_VOLTY;?>" max="300">
                                          <input type="text" id="textInput6" value="<?php echo $row->LOW_VOLTY;?>">
                                        </div>
                                        <div class="col-lg-4">
                                          <h3 class="title-2">Set Voltage-B</h3>
                                          <hr>
                                          <label for="customRange1" class="form-label">High</label>
                                          <input type="range" class="form-range" id="customRange1" onchange="updateTextInput(this.value,'HVB',<?PHP echo $row->SL_ID; ?>,'textInput3');" value="<?php echo $row->HIGH_VOLTB;?>" max="300">
                                          <input type="text" id="textInput3" value="<?php echo $row->HIGH_VOLTB;?>">
                                          <br>
                                          <label for="customRange1" class="form-label">Low</label>
                                          <input type="range" class="form-range" id="customRange1" onchange="updateTextInput(this.value,'LVB',<?PHP echo $row->SL_ID; ?>,'textInput4');" value="<?php echo $row->LOW_VOLTB;?>"max="300">
                                          <input type="text" id="textInput4" value="<?php echo $row->LOW_VOLTB;?>">
                                        </div>
                                        

                                        <!-- current-->
                                        <div class="col-lg-4 mt-5">
                                          <h3 class="title-2">Set Current-R</h3>
                                          <hr>
                                          <label for="customRange1" class="form-label">High</label>
                                          <input type="range" class="form-range" id="customRange1" onchange="updateTextInput(this.value,'HCR',<?PHP echo $row->SL_ID; ?>,'textInput7');"  value="<?php echo $row->HCR;?>">
                                          <input type="text" id="textInput7" value="<?php echo $row->HCR;?>">
                                          <br>
                                          <label for="customRange1" class="form-label">Low</label>
                                          <input type="range" class="form-range" id="customRange1" onchange="updateTextInput(this.value,'LCR',<?PHP echo $row->SL_ID; ?>,'textInput8');"  value="<?php echo $row->LCR;?>">
                                          <input type="text" id="textInput8" value="<?php echo $row->LCR;?>">
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                          <h3 class="title-2">Set Current-Y</h3>
                                          <hr>
                                          <label for="customRange1" class="form-label">High</label>
                                          <input type="range" class="form-range" id="customRange1" onchange="updateTextInput(this.value,'HCY',<?PHP echo $row->SL_ID; ?>,'textInput11');" value="<?php echo $row->HCY;?>">
                                          <input type="text" id="textInput11" value="<?php echo $row->HCY;?>">
                                          <br>
                                          <label for="customRange1" class="form-label">Low</label>
                                          <input type="range" class="form-range" id="customRange1" onchange="updateTextInput(this.value,'LCY',<?PHP echo $row->SL_ID; ?>,'textInput12');" value="<?php echo $row->LCY;?>">
                                          <input type="text" id="textInput12" value="<?php echo $row->LCY;?>">
                                        </div>
                                        <div class="col-lg-4 mt-5">
                                          <h3 class="title-2">Set Current-B</h3>
                                          <hr>
                                          <label for="customRange1" class="form-label">High</label>
                                          <input type="range" class="form-range" id="customRange1" onchange="updateTextInput(this.value,'HCB',<?PHP echo $row->SL_ID; ?>,'textInput9');" value="<?php echo $row->HCB;?>">
                                          <input type="text" id="textInput9" value="<?php echo $row->HCB;?>">
                                          <br>
                                          <label for="customRange1" class="form-label">Low</label>
                                          <input type="range" class="form-range" id="customRange1" onchange="updateTextInput(this.value,'LCB',<?PHP echo $row->SL_ID; ?>,'textInput10');" value="<?php echo $row->LCB;?>">
                                          <input type="text" id="textInput10" value="<?php echo $row->LCB;?>">
                                        </div>
                                        

                                </div>
                                    </div>
                                </div>
                              <?php
                            }

                          ?>
                            
                            </div>

                            
                        </div>
                        <div class="row">
                          <div class="col-lg-9">
                            
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>Update Location</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-map"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        
                                        <form action="adminup.php?id=<?php echo $_GET['SL_ID']; ?>&&Phase=<?php echo $_GET['Phase']?>" method="post" class="form-horizontal">
                                          <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Location</a>
                                                    </h5>
                                                    <select class="class=au-input au-input--full" name="selectarea">
                                                      <option style="overflow-x: scroll;" value="<?php echo $row->Area ?>"><?php echo $row->Area ?></option>
                                                        <?php

                                                            require_once("EntityArea.php");
                                                            require_once("ModelArea.php");
                                                            require_once("connection.php");
                                                            global $dbc;
                                                            $area = new EntityArea();
                                                            $areaModel = new ModelArea($dbc);

                                                            $areaArrayList = $areaModel -> GetAllArea();
                                                            foreach($areaArrayList as $row1)
                                                            {
                                                        ?>
                                                        <option style="overflow-x: scroll;" value="<?php echo $row1->area_name ?>"><?php echo $row1->area_name ?></option>
                                                        
                                                    <?php }?>
                                                </div>
                                            </div>
                                            
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    
                                                    <input type="text" class="au-input au-input--full" name="longitude" value="<?PHP echo $row->LONGITUDE ?>">
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    
                                                    <input type="text" class="au-input au-input--full" name="latitude" value="<?PHP echo $row->LATITUDE ?>">
                                                </div>
                                            </div>
                                            <div class="au-task__footer">
                                                <button class="btn btn-primary" name="addarea">Update Location</button>
                                            </div>
                                        </div>
                                        </form>
                                        <hr>
                                            <div class="row p-1">
                                                <div class="col-2"></div>
                                                  <div class="col-8">
                                                      <label for="switch" class="form-label">
                                                        <h3 class="title-2">Phone Number</h3>
                                                      </label>
                                                      <form action="updatephone.php" method="post">
                                                          <input type="number" class="au-input" value="<?php echo $row->PHONE; ?>" name="PHONE" placeholder="PhoneNumber">
                                                          <input type="text" class="au-input" value="<?php echo $_GET['SL_ID'] ?>" name="SL_ID" style="display:none;">
                                                          <button type="submit" class="btn btn-success btn-lg" name="updatephone">Update</button>  
                                                      </form>
                                                      
                                                  </div>
                                                <div class="col-2"></div>
                                            </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>View Map</h3>
                                        <button class="au-btn-plus">
                                            <i class="fas fa-map"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            
                                    
                                      <script async
                                      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa45i2L_EdEFQd9xKtmqwG6Pc6lfvsDKg&callback=initMap">
                                      </script>
                                      <script>
                                          // The following example creates five accessible and
                                      // focusable markers.
                                      function initMap() {
                                        const map = new google.maps.Map(document.getElementById("map"), {
                                          zoom: 20,
                                          center: { lat: <?php echo $row->LATITUDE ?>,lng: <?php echo $row->LONGITUDE ?> },
                                        });
                                        const image ="http://ironmanpro.in/images/icon/icons4.png";
                                        const image1 ="http://ironmanpro.in/images/icon/red.png";
                                        
                                        // Set LatLng and title text for the markers. The first marker (Boynton Pass)
                                        // receives the initial focus when tab is pressed. Use arrow keys to
                                        // move between markers; press tab again to cycle through the map controls.
                                        const tourStops = [
                                        <?php
                                                if ($rows->Device_Status==0)
                                                $d_status="OFF";
                                                else $d_status="ON";
                                                
                                                if ($rows->Internetconnected==0)
                                                $i_status="NO";
                                                else $i_status="YES";
                                            if ($_GET['Phase']==3) {
                                                 echo"[{fault: ".$row->FAULT."},{ lat: ".$row->LATITUDE.", lng:".$row->LONGITUDE."}, '"."Device Id :".$row->SL_ID."</br>Device Status :".$d_status."</br>Internet Connected :".$i_status."</br>Volts :".$row->VOLTR."</br> Current :".$row->CURRENTR."</br>Power :".$row->POWERR."</br>Power Factor :".$row->PFR."</br>Energy :".$row->ENERGY."</br>Frequency :".$row->FREQUENCY."'],";
                                            }
                                            else{
                                                 echo"[{fault: ".$row->FAULT."},{ lat: ".$row->LATITUDE.", lng:".$row->LONGITUDE."}, '"."Device Id :".$row->SL_ID."</br>Device Status :".$d_status."</br>Internet Connected :".$i_status."</br>Volts :".$row->VOLT."</br> Current :".$row->CURRENT."</br>Power :".$row->POWER."</br>Power Factor :".$row->PF."</br>Energy :".$row->ENERGY."</br>Frequency :".$row->FREQUENCY."'],";
                                            }
                                         
                                      

                                        ?>
                                        ];
                                        const infoWindow = new google.maps.InfoWindow();
                                        // Create an info window to share between markers.
                                       // const infoWindow = new google.maps.InfoWindow();

                                        // Create the markers.
                                        tourStops.forEach(([fault,position, title], i) => {
                                          const marker = new google.maps.Marker({
                                            position,
                                            map,
                                            icon:fault.fault==0?image:image1,
                                            title: `${title}`,
                                            //label: `${i + 1}`,
                                            optimized: false,
                                          });

                                          //infowindow content
                                          
                                          // Add a click listener for each marker, and set up the info window.
                                          marker.addListener("click", () => {
                                            infoWindow.close();
                                            infoWindow.setContent(marker.getTitle());
                                            infoWindow.open({anchor: marker,
                                            map,
                                            shouldFocus: false,});
                                          });
                                        });
                                      }
                                      </script>
                                    <div id="map" style="width: 100%; height: 545px;"></div>
                                            </div>
                                            
                                        </div>
                                        
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php footer(); ?>
                    </div>
                </div>
            </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  

  <!-- Control Sidebar -->
      <!-- Control sidebar content goes here -->
  
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

   <?php scriptTags() ?>
   <script type="text/javascript">
    function getValue(val) {
        console.log(val);
       var isChecked = document.getElementById(val).checked;
        
       
       if (val=="SMODE") {
        if(isChecked){
         document.getElementById("MMODE").disabled=false;
         console.log("Input is checked");
         $.ajax({
          type:"POST",
          url:"update-data.php",
          data:{KeyS:'SMODE',value:1,Target:<?PHP echo $_GET['SL_ID'] ?>},
         success:function(data){
            //alert(data);
          }
         });
         } else {
          document.getElementById("MMODE").disabled=true;
          document.getElementById("MMODE").checked=false;
           console.log("Input is not  checked");
           $.ajax({
            type:"POST",
            url:"update-data.php",
            data:{KeyS:'SMODE',value:0,Target:<?PHP echo $_GET['SL_ID'] ?>},
            success:function(data){
              //alert(data);
            }
           });
          $.ajax({
            type:"POST",
            url:"update-data.php",
            data:{KeyS:'MMODE',value:0,Target:<?PHP echo $_GET['SL_ID'] ?>},
            success:function(data){
              //alert(data);
            }
          });
         }
         
        } 
        // else{
        //   var m=document.getElementById('SOMDE').checked;
        //   var s=document.getElementById('MOMDE').checked;
        //   if (m) {
        //                 window.alert("m");
        //     document.getElementById('MMODE').disabled=false;
        //     if (s) {
        //       alert("hejiu");
        //         $.ajax({
        //           type:"POST",
        //           url:"update-data.php",
        //           data:{KeyS:'MMODE',value:1,Target:<?PHP echo $_GET['SL_ID'] ?>},
        //           success:function(data){
        //             alert(data);
        //           }
        //          })
        //       }
        //       else{
        //         $.ajax({
        //           type:"POST",
        //           url:"update-data.php",
        //           data:{KeyS:'MMODE',value:0,Target:<?PHP echo $_GET['SL_ID'] ?>},
        //           success:function(data){
        //             alert(data);
        //           }
        //         })
        //       }
        //     }
        // }
        // elseif(val=="MMODE"){
        //   if (document.getElementById('SMODE').checked==true) {
        //     document.getElementById('MMODE').disabled=false;
        //     if (isChecked) {
        //       $.ajax({
        //         type:"POST",
        //         url:"update-data.php",
        //         data:{KeyS:'MMODE',value:1,Target:<?PHP echo $_GET['SL_ID'] ?>},
        //         success:function(data){
        //           //alert(data);
        //         }
        //        })
        //     }
        //     else{
        //       $.ajax({
        //         type:"POST",
        //         url:"update-data.php",
        //         data:{KeyS:'MMODE',value:0,Target:<?PHP echo $_GET['SL_ID'] ?>},
        //         success:function(data){
        //           //alert(data);
        //         }
        //       })
        //     }
        //     }
          
        // }
    }
    function getmValue(val) {
       var isChecked = document.getElementById(val).checked;
        
       
       if (val=="MMODE") {
        if(isChecked){
         console.log("Input is checked");
         $.ajax({
          type:"POST",
          url:"update-data.php",
          data:{KeyS:'MMODE',value:1,Target:<?PHP echo $_GET['SL_ID'] ?>},
          success:function(data){
            //alert(data);
            let id=document.getElementById("d_status");
            id.src="http://ironmanpro.in/images/icon/pon.png";
          }
         })
         } else {
           console.log("Input is not  checked");
           $.ajax({
            type:"POST",
            url:"update-data.php",
            data:{KeyS:'MMODE',value:0,Target:<?PHP echo $_GET['SL_ID'] ?>},
            success:function(data){
                let id=document.getElementById("d_status");
            id.src="http://ironmanpro.in/images/icon/poff.png";
            }
           })
         }
         
        } 
    }
    function getpValue(val) {
       var isChecked = document.getElementById(val).checked;
        
       
       if (val=="Phasestatus") {
        if(isChecked){
         console.log("Input is checked");
         $.ajax({
          type:"POST",
          url:"update-data.php",
          data:{KeyS:'PHASE',value:3,Target:<?PHP echo $_GET['SL_ID'] ?>},
          success:function(data){
            window.location="viewstreetlightdetail.php?SL_ID=<?PHP echo $_GET['SL_ID'] ?>&&Phase=3";
          }
         })
         } else {
           console.log("Input is not  checked");
           $.ajax({
            type:"POST",
            url:"update-data.php",
            data:{KeyS:'PHASE',value:1,Target:<?PHP echo $_GET['SL_ID'] ?>},
            success:function(data){
              window.location="viewstreetlightdetail.php?SL_ID=<?PHP echo $_GET['SL_ID'] ?>&&Phase=1";
            }
           })
         }
         
        } 
    }
     function updateTextInput(val,key,target,oputid) {
         // document.getElementById(oputid).value=val; 
          $.ajax({
            type:"POST",
            url:"update-data.php",
            data:{value:val,KeyS:key,Target:target},
            success:function(data){
              //alert(data);
              document.getElementById(oputid).value=val; 
            }
          })
        }

    
   
   </script>
</body>
</html>
