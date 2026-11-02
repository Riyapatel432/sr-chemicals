<?php 
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $add_date=date("Y-m-d");
 if(mysqli_query($con,"INSERT INTO tblOrder (SessionType,SessionId,Payment,Dispatch,ponumber,podate,Name,Narration,Product,Unit,Qty,Rate,AddedDate,CreatedDate) VALUES ('R','".$_SESSION['RM']."','$Payment','$Dispatch','$ponumber','$podate','$Name','$Narration','$myProducthide','$myUnithide','$myQtyhide','$myRatehide','$add_date','$CreatedDate')"))
  {
        $insertId=mysqli_insert_id($con);
        echo $insertId ;
  }
  else{
    echo mysqli_error($con);
  }   
  
}
?>
