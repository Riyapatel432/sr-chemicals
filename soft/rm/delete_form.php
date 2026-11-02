<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
    $CreatedDate=date("Y-m-d H:i:s");
    $AddedDate=date("Y-m-d");
  
  if($Flag=='Delete Product'){
     if(mysqli_query($con,"UPDATE tblProduct SET Status='2' WHERE id='$ProductId'"))
      {
        echo 1 ;
      }
      else{
        echo mysqli_error($con);
      } 
  }
  
  if($Flag=='Delete Purchase'){
     if(mysqli_query($con,"UPDATE tblPurchase SET Status='2' WHERE id='$PurchaseId'"))
      {
        echo 1 ;
      }
      else{
        echo mysqli_error($con);
      } 
  }
  
  if($Flag=='Delete Sale'){
     if(mysqli_query($con,"UPDATE tblOrder SET Status='2' WHERE id='$SaleId'"))
      {
        echo 1 ;
      }
      else{
        echo mysqli_error($con);
      } 
  }
}
?>
