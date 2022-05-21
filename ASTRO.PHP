<?php
date_default_timezone_set('Asia/Kolkata');
$sun_info = date_sun_info(strtotime(date("Y-m-d")), 12.933933049752007, 77.60745500599926);

$mtime=date("H:i",$sun_info["sunrise"]);
$etime= date("H:i",$sun_info["sunset"]);
if(date("H:i")>$mtime){

    echo "Hello";
}
if(date("H:i")<$etime){

    echo "Hello1";
}
?>