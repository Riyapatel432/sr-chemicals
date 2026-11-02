<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $AddedDate=date("Y-m-d");
  $SqlAdmin=mysqli_query($con,"SELECT * FROM tblAdmin WHERE Status='0' AND Name='$Name1' AND id != '$Admin_Id'");
  $CountAdmin=mysqli_num_rows($SqlAdmin);
  if($CountAdmin > 0){
         echo 2 ;
     }
    else{
    $hashed_password1 = password_hash($Password1, PASSWORD_DEFAULT); 
     if(mysqli_query($con,"UPDATE tblAdmin SET Name='$Name1' , Phone='$Phone1' , UserName='$UserName1' , Password='$hashed_password1' WHERE id='$Admin_Id'"))
      {
        echo 1;
      }
      else{
        echo mysqli_error($con);
      }
    }
}
?>
