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
  <?php $utype=$_SESSION['usertype'];mobile($utype); sideBar($utype); ?>
  <!-- End: Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="page-container">
  <?php headerdesktop(); ?>

    <!-- Main content -->
    
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- MAP DATA-->
                                <div class="map-data m-b-40">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-map"></i>map data</h3>
                                    <div class="filters">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <form action="" method="POST">
                                                <select class="select"style="height:30px; font-size:20px;" name="property" onchange="this.form.submit()">
                                                    
                                                    <option style="overflow-x: scroll; " value="" >CCMS Location<?php if ($_POST) {
                                                        // code...
                                                    } ?></option>
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
                                                        <option style="overflow-x: scroll;" value="<?php echo $row1->ID ?>"><?php echo $row1->area_name ?></option>
                                                        
                                                    <?php }?>
                                            </select>
                                            </form>
                                            
                                            
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        
                                    </div>
                                    <?php

   
    ?>
                                    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa45i2L_EdEFQd9xKtmqwG6Pc6lfvsDKg&callback=initMap">
</script>
<script>
    // The following example creates five accessible and
// focusable markers.
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    <?php 
    if (isset($_POST['property'])) {
        require_once("EntityArea.php");
        require_once("ModelArea.php");
        require_once("connection.php");
        global $dbc;
        $area = new EntityArea();
        $areaModel = new ModelArea($dbc);
        $aArrayList = $areaModel -> GetAreaById($_POST['property'])[0];
        if($aArrayList->Longitude!=null && $aArrayList->Latitude!=null){
            echo "center: { lat: ".$aArrayList->Latitude.", lng: ".$aArrayList->Longitude."},";
        }
    }
    else{
        echo "center: { lat: 12.960179278446587, lng: 77.70136220217026 },";
    }
    ?>
    
  });
  const image ="http://ironmanpro.in/images/icon/icons4.png";
  const image1 ="http://ironmanpro.in/images/icon/red.png";
  // Set LatLng and title text for the markers. The first marker (Boynton Pass)
  // receives the initial focus when tab is pressed. Use arrow keys to
  // move between markers; press tab again to cycle through the map controls.
  const tourStops = [
  <?php
        require_once("EntitySinglephase.php");
    	require_once("ModelSinglephase.php");
    	require_once("EntityMultiphase.php");
    	require_once("ModelMultiphase.php");
        require_once("connection.php");
        global $dbc;
        $singlephase = new EntitySinglephase();
    	$singlephaseModel = new ModelSinglephase($dbc);
        $multiphase = new EntityMultiphase();
    	$multiphaseModel = new ModelMultiphase($dbc);
  if($_POST['property']){
        
    	$slsingle=$singlephaseModel->GetSinglephaseByArea($aArrayList->area_name);
    	$slmulti=$multiphaseModel->GetMultiphaseByArea($aArrayList->area_name);
        foreach($slsingle as $rows){
            if ($rows->Device_Status==0)
            $d_status="OFF";
            else $d_status="ON";
            
            if ($rows->Internetconnected==0)
            $i_status="NO";
            else $i_status="YES";
           echo"[{fault: ".$rows->FAULT."},{ lat: ".$rows->LATITUDE.", lng:".$rows->LONGITUDE."}, '"."Device Id :".$rows->SL_ID."</br>Device Status :".$d_status."</br>Internet Connected :".$i_status."</br>Volts :".$rows->VOLT."</br> Current :".$rows->CURRENT."</br>Power :".$rows->POWER."</br>Power Factor :".$rows->PF."</br>Energy :".$rows->ENERGY."</br>Frequency :".$rows->FREQUENCY."'],";
        }
        foreach($slmulti as $rowm){
            if ($rowm->Device_Status==0)
            $d_status="OFF";
            else $d_status="ON";
            
            if ($rowm->Internetconnected==0)
            $i_status="NO";
            else $i_status="YES";
            echo"[{fault: ".$rowm->FAULT."},{ lat: ".$rowm->LATITUDE.", lng:".$rowm->LONGITUDE."}, '"."Device Id :".$rowm->SL_ID."</br>Device Status :".$d_status."</br>Internet Connected :".$i_status."</br>Volts :".$rowm->VOLTR."</br> Current :".$rowm->CURRENTR."</br>Power :".$rowm->POWERR."</br>Power Factor :".$rowm->PFR."</br>Energy :".$rowm->ENERGY."</br>Frequency :".$rowm->FREQUENCY."'],";
        }
  }
  else{
        $slsingle=$singlephaseModel->GetAllSinglephase();
    	$slmulti=$multiphaseModel->GetAllMultiphase();
        foreach($slsingle as $rows){
            if ($rows->Device_Status==0)
            $d_status="OFF";
            else $d_status="ON";
            
            if ($rows->Internetconnected==0)
            $i_status="NO";
            else $i_status="YES";
           echo"[{fault: ".$rows->FAULT."},{ lat: ".$rows->LATITUDE.", lng:".$rows->LONGITUDE."}, '"."Device Id :".$rows->SL_ID."</br>Device Status :".$d_status."</br>Internet Connected :".$i_status."</br>Volts :".$rows->VOLT."</br> Current :".$rows->CURRENT."</br>Power :".$rows->POWER."</br>Power Factor :".$rows->PF."</br>Energy :".$rows->ENERGY."</br>Frequency :".$rows->FREQUENCY."'],";
        }
        foreach($slmulti as $rowm){
            if ($rowm->Device_Status==0)
            $d_status="OFF";
            else $d_status="ON";
            
            if ($rowm->Internetconnected==0)
            $i_status="NO";
            else $i_status="YES";
            echo"[{fault: ".$rowm->FAULT."},{ lat: ".$rowm->LATITUDE.", lng:".$rowm->LONGITUDE."}, '"."Device Id :".$rowm->SL_ID."</br>Device Status :".$d_status."</br>Internet Connected :".$i_status."</br>Volts :".$rowm->VOLTR."</br> Current :".$rowm->CURRENTR."</br>Power :".$rowm->POWERR."</br>Power Factor :".$rowm->PFR."</br>Energy :".$rowm->ENERGY."</br>Frequency :".$rowm->FREQUENCY."'],";
        }
  }
    

  ?>
  ];
  
  const infoWindow = new google.maps.InfoWindow();

  // Create the markers.
  tourStops.forEach(([fault,position, title], i) => {
    const marker = new google.maps.Marker({
      position,
      map,
      icon:fault.fault==0?image:image1,
      title: `${title}`,
      label: `${i + 1}`,
      optimized: false,
    });

    //infowindow content
    // const infoWindow = new google.maps.InfoWindow({
      
    //   title: `${i + 1}. ${title}`,
    //   label: `${i + 1}`,
      
    // });
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
                                    <div id="map" style="width: 100%; height: 650px;"></div>
                                </div>
                                <!-- END MAP DATA-->
                            </div>
                        </div>
                        
                        <?php footer(); ?>
                        
                        
                    </div>
                </div>
            </div>

            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Large Modal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                    <div class="card-header">
                                        Input
                                        <strong>Sizes</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <?php
                                            if(isset($_POST["addarea"]))
                                            {

                                                require_once("EntityArea.php");
                                                require_once("ModelArea.php");
                                                require_once("connection.php");
                                                global $dbc;
                                                $area = new EntityArea();
                                                $areaModel = new ModelArea($dbc);

                                                $area->ID = $_POST["ID"];
                                                $area->area_name = $_POST["area_name"];
                                                $area->Longitude = $_POST["Longitude"];
                                                $area->Latitude = $_POST["Latitude"];

                                                if($areaModel -> InsertArea($area))
                                                {
                                                     echo '<script>alert("Area created successfully...");window.location=window.location.href;</script>';
                                                }
                                                else
                                                {
                                                     echo '<script>alert("Unable to create Area ...");window.location=window.location.href;</script>';
                                                }
                                            }
                                        ?>
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-small" class=" form-control-label">Area Name</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="input-normal" name="area_name" placeholder="Area Name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-normal" class=" form-control-label">Longitude</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="input-normal" name="Longitude" placeholder="Longitude" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-normal" class=" form-control-label">Latitude</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="input-normal" name="Latitude" placeholder="Latitude" class="form-control">
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm" name="addarea">
                                                        <i class="fa fa-dot-circle-o"></i> Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-ban"></i> Reset
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
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

   <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>
    <script src="vendor/vector-map/jquery.vmap.brazil.js"></script>
    <script src="vendor/vector-map/jquery.vmap.europe.js"></script>
    <script src="vendor/vector-map/jquery.vmap.france.js"></script>
    <script src="vendor/vector-map/jquery.vmap.germany.js"></script>
    <script src="vendor/vector-map/jquery.vmap.russia.js"></script>
    <script src="vendor/vector-map/jquery.vmap.usa.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
      
</body>
</html>
