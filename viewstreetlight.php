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
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <?php if ($_SESSION['usertype']=="Sadmin") {
                                               ?>
                                               <div class="row">
                            <div class="col-lg-9">
                                <div class="table-data__tool-right">
                                    <button type="button" class="btn btn-secondary mb-3" data-toggle="modal" data-target="#largeModal">
                                            Add CCMS
                                    </button>
                                    
                                </div>
                            </div>
                            
                        </div>
                                               <?php
                                            }?>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                
                                                <th>CCMS ID</th>
                                                <th>Location</th>
                                                <!-- <th>Sl_pass</th>
                                                <th>Power</th>
                                                <th>Current</th>
                                                <th>Volt</th>
                                                <th>Low_volt</th>
                                                <th>High_volt</th>
                                                <th>D1</th>
                                                <th>D2</th>
                                                <th>D3</th>
                                                <th>D4</th>
                                                <th>Adc1</th>
                                                <th>Adc2</th>
                                                <th>Adc3</th>
                                                <th>Adc4</th> -->
                                                <th>Longitude</th>
                                                <th>Latitude</th>
                                                <!-- <th>Date</th>
                                                <th>Time</th>
                                                <th>Internet</th> -->
                                                <th>Device Status</th> 
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

    require_once("EntityStreetlight.php");
    require_once("ModelStreetlight.php");
    require_once("connection.php");
    global $dbc;
    $streetlight = new EntityStreetlight();
    $streetlightModel = new ModelStreetlight($dbc);

    $streetlightArrayList = $streetlightModel -> GetAllStreetlight();
  
                                                    $sql1 = "SELECT * FROM singlephase";
                                                    $result1 = mysqli_query($dbc, $sql1);
                    
    while($row1 = mysqli_fetch_assoc($result1))
                {
                    $sql = "SELECT * FROM streetlight where SL_ID='{$row1['SL_ID']}'";
                     $result = mysqli_query($dbc, $sql);
                     $row = mysqli_fetch_assoc($result);
?>
                                            <tr>
                                                
                                                <td><a href="viewstreetlightdetail.php?SL_ID=<?php echo $row1['SL_ID'];?>&&Phase=<?php echo $row['PHASE'];?>"><?php echo $row1['SL_ID'];?></a></td>
                                                 <td><?php echo $row1['Area'];?></td>
                                                <td><?php echo $row1['LONGITUDE'];?></td>
                                                <td><?php echo $row1['LATITUDE'];?></td>
                                                
                                                <!--<td><?php //echo $row->Internetconnected;?></td>-->
                                                
                                                 <td><div class="text-center pl-5"><div style="height:20px;width:20px;border-radius:50%;background-color:<?php if ($row1['Device_Status'] ==0) echo 'red'; else echo 'green';?>"></div></div></td> 
                                                <td>
                                                    <div class="table-data-feature">
                                                        
                                                        <button class="item" data-toggle="tooltip" onclick="" data-placement="top" title="Edit">
                                                            <a href="viewstreetlightdetail.php?SL_ID=<?php echo $row1['SL_ID'];?>&&Phase=<?php echo $row['PHASE'];?>"><i class="zmdi zmdi-edit"></i></a>
                                                            
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" onclick="window.location='EntityStreetlightDelete.php?ID=<?php echo $row['SL_ID']; ?>&&Phase=<?php echo $row['PHASE'];?>';"data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                <?php  }
                $sql2 = "SELECT * FROM multiphase";
                $result2 = mysqli_query($dbc, $sql2);
                while($row2 = mysqli_fetch_assoc($result2))
                {
                    $sql = "SELECT * FROM streetlight where SL_ID='{$row2['SL_ID']}'";
                     $result = mysqli_query($dbc, $sql);
                     $row = mysqli_fetch_assoc($result);
                ?>
                                            <tr>
                                                
                                                <td><a href="viewstreetlightdetail.php?SL_ID=<?php echo $row2['SL_ID'];?>&&Phase=<?php echo $row['PHASE'];?>"><?php echo $row2['SL_ID'];?></a></td>
                                                 <td><?php echo $row2['Area'];?></td>
                                                <td><?php echo $row2['LONGITUDE'];?></td>
                                                <td><?php echo $row2['LATITUDE'];?></td>
                                                
                                                <!--<td><?php //echo $row->Internetconnected;?></td>-->
                                                
                                                 <td><div class="text-center pl-5"><div style="height:20px;width:20px;border-radius:50%;background-color:<?php if ($row2['Device_Status'] ==0) echo 'red'; else echo 'green';?>"></div></div></td> 
                                                <td>
                                                    <div class="table-data-feature">
                                                        
                                                        <button class="item" data-toggle="tooltip" onclick="" data-placement="top" title="Edit">
                                                            <a href="viewstreetlightdetail.php?SL_ID=<?php echo $row2['SL_ID'];?>&&Phase=<?php echo $row['PHASE'];?>"><i class="zmdi zmdi-edit"></i></a>
                                                            
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                <?php  }
                ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        

                        <?php //footer(); ?>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Select Area</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                    
                                    <div class="card-body card-block">
                                        <form action="addsl.php" method="POST" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-small" class=" form-control-label"> Phase</label>
                                                </div>
                                               <div class="col col-sm-6">
                                                    <select class="select" name="Phase">
                                                        <option style="overflow-x: scroll;" value="1">Single Phase</option>
                                                        <option style="overflow-x: scroll;" value="3">Multi Phase</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-normal" class=" form-control-label">Area</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <select class="select" name="area_name">
                                                    
                                                        <?php

                                                            require_once("EntityArea.php");
                                                            require_once("ModelArea.php");
                                                            require_once("connection.php");
                                                            global $dbc;
                                                            $area = new EntityArea();
                                                            $areaModel = new ModelArea($dbc);

                                                            $areaArrayList = $areaModel -> GetAllArea();
                                                            foreach($areaArrayList as $row)
                                                            {
                                                        ?>
                                                        <option style="overflow-x: scroll;" value="<?php echo $row->ID ?>"><?php echo $row->area_name ?></option>
                                                        
                                                    <?php }?>
                                            </select>
                                                </div> 
                                                <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-small" class=" form-control-label"> WATT</label>
                                                </div>
                                               <div class="col col-sm-6">
                                                    <input type="text" inputmode="decimal" class="form-control" name="WATT">
                                                </div>
                                            </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm" name="addsl">
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

   <?php scriptTags() ?>
</body>
</html>
