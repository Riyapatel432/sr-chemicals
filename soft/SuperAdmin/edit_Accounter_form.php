<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $AddedDate=date("Y-m-d");
  $SqlAccounter=mysqli_query($con,"SELECT * FROM tblAccounter WHERE Status='0' AND UserName='$UserName1' AND id != '$Accounter_Id'");
  $CountAccounter=mysqli_num_rows($SqlAccounter);
  if($CountAccounter > 0){
         echo 2 ;
     }
    else{
    $hashed_password1 = password_hash($Password1, PASSWORD_DEFAULT); 
     if(mysqli_query($con,"UPDATE tblAccounter SET Name='$Name1' , Phone='$Phone1' , UserName='$UserName1' , Password='$hashed_password1' WHERE id='$Accounter_Id'"))
      {
        echo 1;
      }
      else{
        echo mysqli_error($con);
      }
    }
}
?>
