<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "xyoegxjc_noelalbinson";
 $dbpass = "n03ln03l05";
 $db = "xyoegxjc_vst_database";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>


