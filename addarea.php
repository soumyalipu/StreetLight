<?php
ob_start();
    include("connection.php");
    include("function.php");
  if(!isset($_SESSION['user']))
    {
        header("Location:login.php");
    }
?>
<?php
	if(isset($_POST["updatearea"]))
	{
        require_once("EntityArea.php");
    	require_once("ModelArea.php");
    	require_once("connection.php");
    	global $dbc;
    	$area = new EntityArea();
    	$areaModel = new ModelArea($dbc);

		$area->ID = $_POST["a_id"];
		$area->area_name = $_POST["area_name"];
		$area->Longitude = $_POST["Longitude"];
		$area->Latitude = $_POST["Latitude"];

		if($areaModel -> UpdateArea($area))
		{
			 echo '<script>alert("Area updated successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to updated Area ...");window.location=window.location.href;</script>';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("FILENAME");?>
  <script>
      function setEditModal(val)
      {
          console.log(val);
          var data=val.split(',')
          console.log(data[0],data[1],data[2],data[3],$('#a_name'));
          document.getElementById('a_id').value=data[0];
          document.getElementById('a_name').value=data[1];
          document.getElementById('a_longi').value=data[2];
          document.getElementById('a_lati').value=data[3];
      }
  </script>
</head>
<body class="animsition">
<div class="page-wrapper">

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Start: Main Sidebar Container -->
  <?php $utype="Sadmin";mobile($utype); sideBar($utype); ?>
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
                                    <button type="button" class="btn btn-secondary mb-3" data-toggle="modal" data-target="#largeModal">
                                            Add Location
                                        </button>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="row ">
                            <div class="col-lg-12">
                                <!--<div class="au-card au-card--bg-blue au-card-top-countries m-b-30">-->
                                    <div class="au-card-inner">
                                        <div class="table-responsive " style="border-top-left-radius:12px;border-top-right-radius:12px">
                                            <table class="table table-borderless table-striped table-earning ">
                                                <thead>
                                                    <tr>
                                                        <th>Location Name</th>
                                                        <th>Latitude</th>
                                                        <th>Longitude</th>
                                                        
                                                        <th class="text-right">Settings</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
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
                                                            $setval=$row->ID.','.$row->area_name.','.$row->Longitude.','.$row->Latitude;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row->area_name ?></td>
                                                        <td ><?php echo $row->Latitude ?></td>
                                                        <td><?php echo $row->Longitude ?></td>
                                                        
                                                        <td >
                                                           <div class="table-data-feature">
                                                        <!--<button id="ebutton" type="button" class="item" data-id="<?php echo $row->ID; ?>" onclick="<script>  $('.item').click(function() {-->
                                                        <!--                                                                          var id = $(this).data('id');-->
                                                        <!--                                                                          window.alert('id');   -->
                                                        <!--                                                                          } );-->
                                                        <!--                                                                          </script>" -->
                                                        <!--         data-toggle="modal" data-target="#largeModaledit">-->
                                                        <button id="ebutton" type="button" class="item" data-id="<?php echo $row->ID; ?>" onclick="setEditModal('<?php echo $setval; ?>')" data-toggle="modal" data-target="#largeModaledit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                                <button class="item" data-toggle="tooltip" onclick="window.location='EntityAreaDelete.php?ID=<?php echo $row->ID; ?>';" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <!--</div>-->
                            </div>
                        
                        <?php //footer(); ?>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Add Location</h5>
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
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-small" class=" form-control-label">Location Name</label>
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
            <div class="modal fade" id="largeModaledit" tabindex="-1" role="dialog" aria-labelledby="largeModaledit" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModaledit">Edit Location</h5>
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

                                            require_once("EntityArea.php");
                                            require_once("ModelArea.php");
                                            require_once("connection.php");
                                            global $dbc;
                                            $area = new EntityArea();
                                            $areaModel = new ModelArea($dbc);
                                            $aid=$variable;
                                            $area = $areaModel -> GetAreaById($aid)[0];
                                        ?>
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-small" class=" form-control-label">Location Name</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="a_name" name="area_name" placeholder="Area Name" class="form-control" >
                                                    <input type="text" id="a_id" name="a_id" placeholder="Area Name" class="form-control" style="display:none;" >
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-normal" class=" form-control-label">Longitude</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="a_longi" name="Longitude" placeholder="Longitude" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-normal" class=" form-control-label">Latitude</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="a_lati" name="Latitude" placeholder="Latitude" class="form-control">
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm" name="updatearea">
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
