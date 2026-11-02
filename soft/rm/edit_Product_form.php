<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $AddedDate=date("Y-m-d");
  $SqlProduct=mysqli_query($con,"SELECT * FROM tblProduct WHERE Status='0' AND Name='$Name1' AND id != '$Product_Id'");
  $CountProduct=mysqli_num_rows($SqlProduct);
  if($CountProduct > 0){
         echo 2 ;
     }
    else{ 
     if(mysqli_query($con,"UPDATE tblProduct SET Name='$Name1' WHERE id='$Product_Id'"))
      {
        echo 1;
      }
      else{
        echo mysqli_error($con);
      }
    }
}
?>
