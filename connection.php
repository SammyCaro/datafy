<?php 

/* $dbhost = '127.0.0.1:3307';
$dbuser = 'root';
$dbpass = '';
$db     = 'datafy'; */

$dbhost = 'srv22';
$dbuser = 'cda56698';
$dbpass = 'gKYIQ5GW*hR$f4Q';
$db     = 'cda56698_datafy';

$conn = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$db");
          
// Check connection
if($conn === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>