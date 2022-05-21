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
  <?php headContent("FILENAME");?>
</head>
<body class="animsition">
<div class="page-wrapper">

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Start: Main Sidebar Container -->
  <?php $utype=$_SESSION['usertype']; mobile($utype);sideBar($utype); ?>
  <!-- End: Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="page-container">
  <?php headerdesktop(); ?>

    <!-- Main content -->
    <div class="main-content">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <form action="" method="GET">
                                            <select name="optionname">
                                                <?php 
                                                    if($_GET['Phase']==1){
                                                    ?>
                                                    	<option value="VOLT">VOLT(V)</option>
	                                                <option value="CURRENT">CURRENT(A)</option>
	                                                <option value="POWER">POWER(W)</option>
	                                                <option value="WATT">ENERGY(KWh)</option>
	                                                <option value="PF">PF</option>
	                                                <option value="frequency">Frequency(Hz)</option>
	                                                <option value="DS">Device Status</option>
	                                                <option value="IC">Internet Connected</option>
	                                                <option value="Fault">Fault</option>
                                                    <?php
                                                        
                                                    }
                                                    elseif($_GET['Phase']==3){
                                            	   ?>
                                            		<option value="VOLTR">VOLT (V)-R</option>
	                                                <option value="VOLTB">VOLT (V)-B</option>
	                                                <option value="VOLTY">VOLT (V)-Y</option>
	                                                
	                                                <option value="CR">CURRENT (A)-R</option>
	                                                <option value="CY">CURRENT (A)-Y</option>
	                                                <option value="CB">CURRENT (A)-B</option>
	                                                <option value="POWERR">POWER (W)-R</option>
	                                                <option value="POWERY">POWER (W)-Y</option>
	                                                <option value="POWERB">POWER (W)-B</option>
	                                                <option value="WATT">ENERGY(KWh)</option>
                                            	    <option value="PFR">PF-R</option>
                                            	    <option value="PFY">PF-Y</option>
                                            	    <option value="PFB">PF-B</option>
	                                                <option value="frequency">Frequency(Hz)</option>
	                                                <option value="DS">Device Status</option>
	                                                <option value="IC">Internet Connected</option>
	                                                <option value="Fault">Fault</option>
                                            	   <?php
                                                    }
                                                    
                                                ?>
                                                
                                                
                                            </select>
                                            <!--<br>-->
                                            &nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                            From:<input type="date" name="fdate" border="1" required>
                                           &ensp;
                                            &nbsp; To:<input type="date" name="tdate" required>
                                            <!--<br>-->
                                            <input type="text" name="Sl_id" value="<?php echo $_GET['Sl_id']?>" style="display: none;">
                                            <input type="text" name="Phase" value="<?php echo $_GET['Phase']?>" style="display: none;">
                                            &ensp;&ensp;&ensp;&ensp;
                                            <input type="submit" name="view" value="VIEW" style="font-weight:bold;font-size:20px;">
                                        </form>
                                        <div id="curve_chart"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Yearly Sales</h3>
                                        <canvas id="sales-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Team Commits</h3>
                                        <canvas id="team-chart"></canvas>
                                    </div>
                                </div>
                            </div> -->
                            
                        </div>
                        <?php echo footer(); ?>
                    </div>
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
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Data'],
            <?php
                if (isset($_GET['view'])) {
                    require_once("EntitySinglephase_status.php");
                    require_once("ModelSinglephase_status.php");
                    require_once("EntityMultiphase_status.php");
                    require_once("ModelMultiphase_status.php");
                    require_once("connection.php");
                    global $dbc;
                    $singlephase_status = new EntitySinglephase_status();
                    $singlephase_statusModel = new ModelSinglephase_status($dbc);
                    $multiphase_status = new EntityMultiphase_status();
                    $multiphase_statusModel = new ModelMultiphase_status($dbc);
                    $vtype=$_GET['optionname'];
                    $fdate=$_GET['fdate'];
                    $tdate=$_GET['tdate'];
                    if ($_GET['Phase']==1) {
                        $sl_statusArrayList = $singlephase_statusModel -> filtervolt($fdate,$tdate,$_GET['Sl_id']);
                    }
                    elseif ($_GET['Phase']==3) {
                        $sl_statusArrayList = $multiphase_statusModel -> filtervolt($fdate,$tdate,$_GET['Sl_id']);
                    }
                    
                    foreach($sl_statusArrayList as $row){
                        
                    if ($_GET['optionname']=="VOLT") {
                        ?>

                        ['<?php echo $row->DATE ?>',  <?php echo $row->VOLT ?>],
                        <?php }
                    
                    elseif ($_GET['optionname']=="CURRENT") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->CURRENT ?>],
                        <?php }
                    
                    elseif ($_GET['optionname']=="POWER") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->POWER ?>],
                        <?php }
                    elseif ($_GET['optionname']=="POWERR") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->POWERR ?>],
                        <?php }
                    elseif ($_GET['optionname']=="POWERY") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->POWERY ?>],
                        <?php }
                    elseif ($_GET['optionname']=="POWERB") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->POWERB ?>],
                        <?php }
                    elseif ($_GET['optionname']=="VOLTR") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->VOLTR ?>],
                        <?php }
                    
                    elseif ($_GET['optionname']=="VOLTB") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->VOLTB ?>],
                        <?php }
                    elseif ($_GET['optionname']=="VOLTY") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->VOLTY ?>],
                        <?php }
                    elseif ($_GET['optionname']=="CY") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->CURRENTY ?>],
                        <?php }
                    elseif ($_GET['optionname']=="CR") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->CURRENTR ?>],
                        <?php }
                    elseif ($_GET['optionname']=="CB") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->CURRENTB ?>],
                        <?php }
                    elseif ($_GET['optionname']=="WATT") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->WATT ?>],
                        <?php }
                    elseif ($_GET['optionname']=="PF") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->PF ?>],
                        <?php }
                    elseif ($_GET['optionname']=="PFR") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->PFR ?>],
                        <?php }
                    elseif ($_GET['optionname']=="PFY") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->PFY ?>],
                        <?php }
                    elseif ($_GET['optionname']=="PFB") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->PFB ?>],
                        <?php }
                    elseif ($_GET['optionname']=="frequency") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->FREQUENCY ?>],
                        <?php }
                     elseif ($_GET['optionname']=="IC") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->Internetconnected ?>],
                        <?php }
                     elseif ($_GET['optionname']=="Fault") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->FAULT ?>],
                        <?php }
                     elseif ($_GET['optionname']=="DS") {
                        ?>
                        ['<?php echo $row->DATE ?>',  <?php echo $row->Device_Status ?>],
                        <?php }
                        
                        
                    }
                }
                else{
                    if ($_GET['Phase']==1) {
                        require_once("EntitySinglephase_status.php");
                        require_once("ModelSinglephase_status.php");
                        require_once("connection.php");
                        global $dbc;
                        $singlephase_status = new EntitySinglephase_status();
                        $singlephase_statusModel = new ModelSinglephase_status($dbc);
                        $sl_statusArrayList = $singlephase_statusModel -> GetSinglephase_statusBySl_id($_GET['Sl_id'])[0];
                        $V=$sl_statusArrayList->VOLT;
                    }
                    elseif ($_GET['Phase']==3) {
                        require_once("EntityMultiphase_status.php");
                        require_once("ModelMultiphase_status.php");
                        require_once("connection.php");
                        global $dbc;
                        $multiphase_status = new EntityMultiphase_status();
                        $multiphase_statusModel = new ModelMultiphase_status($dbc);
                        $sl_statusArrayList = $multiphase_statusModel -> GetMultiphase_statusBySl_id($_GET['Sl_id'])[0];
                        $V=$sl_statusArrayList->VOLTR;
                    }
                    foreach($sl_statusArrayList as $row){
                
                    ?>
                    ['<?php echo $row->DATE ?>',  <?php echo $V; ?>],
                            <?php }}?>
                
        ]);

        var options = {
          title: 'AC Power Analysis',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</body>
</html>
