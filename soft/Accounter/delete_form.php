<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
    $CreatedDate=date("Y-m-d H:i:s");
    $AddedDate=date("Y-m-d");
  
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
  
  if($Flag=='Delete Purchase'){
     if(mysqli_query($con,"UPDATE tblPurchase SET Status='2' WHERE id='$PurchaseId'"))
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
  
  if($Flag=='Delete Loan'){
    $SqliLoan=mysqli_query($con,"SELECT * FROM tbLoan_ledger WHERE id='$LoanId'");
    $RowLoan=mysqli_fetch_array($SqliLoan);
    $SqliLoan12=mysqli_query($con,"SELECT * FROM tblLoan WHERE Employee='".$RowLoan['ToUser']."'");
    $RowLoan12=mysqli_fetch_array($SqliLoan12);
    
     if(mysqli_query($con,"UPDATE tbLoan_ledger SET Status='2' WHERE id='$LoanId'"))
      {
        $totalAmt = $RowLoan12['Loan'] - $RowLoan['Amount'] ;
        $totalremain = $RowLoan12['remain_amt'] - $RowLoan['Amount'] ;
        if(mysqli_query($con,"UPDATE tblLoan SET Loan='$totalAmt' , remain_amt='$totalremain'  WHERE Employee='".$RowLoan['ToUser']."'"))
          {
            echo 1;
          }
          else{
            echo mysqli_error($con);
          }
      }
      else{
        echo mysqli_error($con);
      } 
  }
}
?>
