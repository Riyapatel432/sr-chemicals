<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
    $CreatedDate=date("Y-m-d H:i:s");
    $AddedDate=date("Y-m-d");

  if($Flag=='Approve Purchase'){
     if(mysqli_query($con,"UPDATE tblPurchase SET Status='1' , ApprovalId='".$_SESSION['Admin']."' WHERE id='$PurchaseId'"))
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
  
  if($Flag=='Approve sale'){
     if(mysqli_query($con,"UPDATE tblOrder SET Status='1' WHERE id='$saleId'"))
      {
        echo 1 ;
      }
      else{
        echo mysqli_error($con);
      } 
  }
  
}
?>
