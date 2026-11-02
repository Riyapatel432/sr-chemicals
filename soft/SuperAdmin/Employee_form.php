<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $AddedDate=date("Y-m-d");
 
    if(mysqli_query($con,"INSERT INTO tblEmployee (Designation,Name,Phone,Description,Code,Rate,OtRate,AddedDate,CreatedDate) VALUES ('$Designation','$Name','$Phone','$Description','$Code','$Rate','$OtRate','$AddedDate','$CreatedDate')"))
      {
        echo 1;
      }
      else{
        echo mysqli_error($con);
      }    
}
?>
 