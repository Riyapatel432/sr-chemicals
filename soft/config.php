<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
error_reporting(0);
$servername="localhost";
$username="srchems_chemical";
$password="chemical@123";
$dbname="srchems_chemical";
 $con=mysqli_connect($servername,$username,$password,$dbname);
//   if($con){
//       echo("connection successfully");
//   }
//   else{
//   echo"connection failed";
//   }

?>
