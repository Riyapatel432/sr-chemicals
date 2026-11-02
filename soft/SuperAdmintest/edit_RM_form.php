<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $AddedDate=date("Y-m-d");
  $SqlRM=mysqli_query($con,"SELECT * FROM tblRM WHERE Status='0' AND Name='$Name1' AND id != '$RM_Id'");
  $CountRM=mysqli_num_rows($SqlRM);
  if($CountRM > 0){
         echo 2 ;
     }
    else{
    $hashed_password1 = password_hash($Password1, PASSWORD_DEFAULT); 
     if(mysqli_query($con,"UPDATE tblRM SET Name='$Name1' , Phone='$Phone1' , UserName='$UserName1' , Password='$hashed_password1' WHERE id='$RM_Id'"))
      {
        echo 1;
      }
      else{
        echo mysqli_error($con);
      }
    }
}
?>
