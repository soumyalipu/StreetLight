 <?php
    include("connection.php");
    if ($_POST['Phase']==1) {
        require_once("EntitySinglephase.php");
        require_once("ModelSinglephase.php");
        require_once("connection.php");
        global $dbc;
        $singlephase = new EntitySinglephase();
        $singlephaseModel = new ModelSinglephase($dbc);

        $ArrayList = $singlephaseModel -> GetSinglephaseBySl_id($_POST['id']);
  }
  elseif ($_POST['Phase']==3) {
        require_once("EntityMultiphase.php");
        require_once("ModelMultiphase.php");
        require_once("connection.php");
        global $dbc;
        $multiphase = new EntityMultiphase();
        $multiphaseModel = new ModelMultiphase($dbc);

        $ArrayList = $multiphaseModel -> GetMultiphaseBySl_id($_POST['id']);
  }
 
  foreach($ArrayList as $row){
    
  }
  $data=json_encode($row);
    print $data;
 ?>