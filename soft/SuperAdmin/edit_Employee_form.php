<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $AddedDate=date("Y-m-d");
    
     if(mysqli_query($con,"UPDATE tblEmployee SET Designation='$Designation1' , Name='$Name1' , Phone='$Phone1' , Description='$Description1' , Code='$Code1' , Rate='$Rate1' , OtRate='$OtRate1' WHERE id='$Employee_Id'"))
      {
        echo 1;
      }
      else{
        echo mysqli_error($con);
      }
}
?>
