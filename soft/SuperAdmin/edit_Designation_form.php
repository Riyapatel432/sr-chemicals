<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $AddedDate=date("Y-m-d");
  $SqlDesignation=mysqli_query($con,"SELECT * FROM tblDesignation WHERE Status='0' AND Name='$Name1' AND id != '$Designation_Id'");
  $CountDesignation=mysqli_num_rows($SqlDesignation);
  if($CountDesignation > 0){
         echo 2 ;
     }
    else{ 
     if(mysqli_query($con,"UPDATE tblDesignation SET Name='$Name1' WHERE id='$Designation_Id'"))
      {
        echo 1;
      }
      else{
        echo mysqli_error($con);
      }
    }
}
?>
