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
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-data__tool-right">
                                    <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-sm-6">
                                                    <input type="search" id="input-normal" name="SL_ID" placeholder="Search SL Id" class="form-control">
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-sm" name="searchslid">
                                                        <i class="fa fa-search"></i> Search
                                                </button>
                                            </div>
                                            
                                    </form>
                                    
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                         <?php

                                            require_once("EntityStreetlight.php");
                                            require_once("ModelStreetlight.php");
                                            require_once("connection.php");
                                            global $dbc;
                                            $sl = new EntityStreetlight();
                                            $slModel = new ModelStreetlight($dbc);
                                            
                                            if (isset($_POST['searchslid'])) {
                                                $SL_ID=$_POST['SL_ID'];
                                            //$slArrayList = $slModel -> GetStreetlightBySl_id($SL_ID);
                                            $sql = "SELECT * FROM streetlight where SL_ID='{$SL_ID}'";
                                            $result = mysqli_query($dbc, $sql);
                                            
                                            $row = mysqli_fetch_assoc($result);
                                                if ($row['PHASE']==1)
                                                {
                                                    $sql1 = "SELECT * FROM singlephase where SL_ID='{$SL_ID}'";
                                                    $result1 = mysqli_query($dbc, $sql1);
                                                    $row1 = mysqli_fetch_assoc($result1);
                                                    date_default_timezone_set('Asia/Kolkata'); 
                                                    $diff = round((strtotime(date("H:i:s"))-strtotime($row1['TIME']))/60);
                                                    if ($diff >15)
                                                    $sq = "update singlephase set Internetconnected=0 where SL_ID='{$row['SL_ID']}'";
                                                    $res=mysqli_query($dbc, $sq);
                                                ?>
                                                    <thead>
                                                    <tr>
                                                        
                                                        <th>CCMS Id</th>
                                                        <th>Volt</th>
                                                        
                                                        <th>Current</th>
                                                        <th>Power</th>
                                                        <th>Location</th>
                                                        <th>Longitude</th>
                                                        <th>Latitude</th>
                                                        
                                                        <th>Internet Connected</th>
                                                        <th>Device_status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $row['SL_ID'];?></td>
                                                            <td><?php echo $row1['VOLT'];?>V</td>
                                                            <td><?php echo $row1['CURRENT'];?>A</td>
                                                            
                                                            <td><?php echo $row1['POWER'];?>W</td>
                                                            <td><?php echo $row['Area'];?></td>
                                                            <td><?php echo $row['LONGITUDE'];?></td>
                                                            <td><?php echo $row['LATITUDE'];?></td>
                                                            
                                                            <td><div style="height:20px;width:20px;border-radius:50%;background-color:<?php if ($row1['Internetconnected'] ==0 or $diff>15) echo 'red'; else echo 'green';?>"></div></td>
                                                            <td><div style="height:20px;width:20px;border-radius:50%;background-color:<?php if ($row1['Device_Status'] ==0) echo 'red'; else echo 'green';?>"></div></td>
                                                            <td>
                                                                <div class="table-data-feature">
                                                                    <button class="item" data-toggle="modal" data-target="#largeModal" data-placement="top" title="Edit">
                                                                        <i class="zmdi zmdi-edit"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                <?php
                                                }
                                                else{
                                                    $sql1 = "SELECT * FROM multiphase where SL_ID='{$SL_ID}'";
                                                    $result1 = mysqli_query($dbc, $sql1);
                                                    $row1 = mysqli_fetch_assoc($result1);
                                                    $diff = round((strtotime(date("H:i:s"))-strtotime($row1['TIME']))/60);
                                                    if ($diff >15)
                                                    $sq = "update multiphase set Internetconnected=0 where SL_ID='{$row['SL_ID']}'";
                                                    $res=mysqli_query($dbc, $sq);
                                                ?>
                                                    <thead>
                                                        <tr>
                                                            <th>CCMS Id</th>
                                                            <th>Volt-R</th>
                                                            <th>Volt-Y</th>
                                                            <th>Volt-B</th>
                                                            <th>Current-R</th>
                                                            <th>Current-Y</th>
                                                            <th>Current-B</th>
                                                            <th>Power-R</th>
                                                            <th>Power-Y</th>
                                                            <th>Power-B</th>
                                                            <th>Location</th>
                                                            <th>Longitude</th>
                                                            <th>Latitude</th>
                                                            <th>Internet Connected</th>
                                                            <th>Device_status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $row['SL_ID'] ?></td>
                                                            <td><?php echo $row1['VOLTR'];?>V</td>
                                                            <td><?php echo $row1['VOLTY'];?>V</td>
                                                            <td><?php echo $row1['VOLTB'];?>V</td>
                                                            <td><?php echo $row1['CURRENTR'];?>A</td>
                                                            <td><?php echo $row1['CURRENTY'];?>A</td>
                                                            <td><?php echo $row1['CURRENTB'];?>A</td>
                                                            <td><?php echo $row1['POWERR'];?>W</td>
                                                            <td><?php echo $row1['POWERY'];?>W</td>
                                                            <td><?php echo $row1['POWERB'];?>W</td>
                                                             <td><?php echo $row['Area'];?></td>
                                                            <td><?php echo $row['LONGITUDE'];?></td>
                                                            <td><?php echo $row['LATITUDE'];?></td>
                                                           
                                                            <td><div style="height:20px;width:20px;border-radius:50%;background-color:<?php if ($row1['Internetconnected'] ==0 or $diff>15) echo 'red'; else echo 'green';?>"></div></td>
                                                            <td><div style="height:20px;width:20px;border-radius:50%;background-color:<?php if ($row1['Device_Status'] ==0) echo 'red'; else echo 'green';?>"></div></td>
                                                            <td>
                                                                <div class="table-data-feature">
                                                                    
                                                                    <button class="item" data-toggle="modal" data-target="#largeModal" data-placement="top" title="Edit">
                                                                        <i class="zmdi zmdi-edit"></i>
                                                                    </button>
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                <?php
                                                }
                                            ?>
                      
                                        <?php }?>
                                    </table>
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
                            <h5 class="modal-title" id="largeModalLabel">Edit Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                   
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
                                        <form action="adminup.php?id=<?php echo $row['SL_ID']; ?>" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-small" class=" form-control-label">Area Name</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    
                                                    <select name="selectarea" id="select" class="form-control">
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
                                                        
                                                    <?php }
                                                    
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-normal" class=" form-control-label">Longitude</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="input-normal" name="longitude" placeholder="Longitude" class="form-control" value="<?php echo $row['LONGITUDE'];?>">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-normal" class=" form-control-label">Latitude</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="input-normal" name="latitude" placeholder="latitude" class="form-control" value="<?php echo $row['LATITUDE'];?>">
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

   <?php scriptTags() ?>
</body>
</html>
