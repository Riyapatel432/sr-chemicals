<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
    $CreatedDate=date("Y-m-d H:i:s");
    $AddedDate=date("Y-m-d");
  
  if($Flag=='Delete Admin'){
     if(mysqli_query($con,"UPDATE tblAdmin SET Status='2' WHERE id='$AdminId'"))
      {
        echo 1 ;
      }
      else{
        echo mysqli_error($con);
      } 
  }
  
  if($Flag=='Delete RM'){
     if(mysqli_query($con,"UPDATE tblRM SET Status='2' WHERE id='$RMId'"))
      {
        echo 1 ;
      }
      else{
        echo mysqli_error($con);
      } 
  }
  
  if($Flag=='Delete Accounter'){
     if(mysqli_query($con,"UPDATE tblAccounter SET Status='2'  WHERE id='$AccounterId'"))
      {
        echo 1 ;
      }
      else{
        echo mysqli_error($con);
      } 
  }
  
  if($Flag=='Approve Purchase'){
     if(mysqli_query($con,"UPDATE tblPurchase SET Status='1' , ApprovalId='0' WHERE id='$PurchaseId'"))
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
  
  if($Flag=='Delete Employee'){
     if(mysqli_query($con,"UPDATE tblEmployee SET Status='2' WHERE id='$EmployeeId'"))
      {
        echo 1 ;
      }
      else{
        echo mysqli_error($con);
      } 
  }
  
  if($Flag=='Delete Designation'){
     if(mysqli_query($con,"UPDATE tblDesignation SET Status='2' WHERE id='$DesignationId'"))
      {
        echo 1 ;
      }
      else{
        echo mysqli_error($con);
      } 
  }
  
  if($Flag=='Delete sale'){
     if(mysqli_query($con,"UPDATE tblOrder SET Status='2' WHERE id='$saleId'"))
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
