<?php
include("../config.php");
extract($_POST);

if(isset($Flag))
{

  if($Flag == "Find Invoice No")
  {
    $CreatedDate=date("Y-m-d H:i:s");
    $AddedDate=$selectDate;
    $added_date=date("Y-m-d");
    $InvoiceNoYear=date("Y",strtotime($AddedDate));
    $BillNo;
    $SqlCheck=mysqli_query($con,"SELECT * FROM tblPurchase WHERE SessionId='".$_SESSION['RM']."' AND SessionType='R' ORDER BY CreatedDate DESC");
    $CountCheck=mysqli_num_rows($SqlCheck);
    $SqlCheckFinanceYear=mysqli_query($con,"SELECT * FROM tblPurchase WHERE SessionId='".$_SESSION['RM']."' AND SessionType='R' ORDER BY CreatedDate DESC");
    $RowCheckFinanceYear=mysqli_fetch_array($SqlCheckFinanceYear);
    $RowCheck=mysqli_fetch_array($SqlCheck);
    $NextBillNo=$RowCheck['BillNo'] + 1;
    $FutureYear=date('Y-04-01', strtotime('+1 year', strtotime($RowCheckFinanceYear['FinancialYear'])) );
    $FinanceYear=date('Y', strtotime('+1 year', strtotime($RowCheckFinanceYear['FinancialYear'])) );
    $GetDateMonth=date('m-d', strtotime($AddedDate) );
    $GetPastYear=date('Y', strtotime('-1 year', strtotime($AddedDate)) );
    $SqlCheckPastYear=mysqli_query($con,"SELECT * FROM tblPurchase WHERE FinancialYear='$GetPastYear' AND SessionId='".$_SESSION['RM']."' AND SessionType='R' ORDER BY CreatedDate DESC");
    $CountCheckPastYear=mysqli_num_rows($SqlCheckPastYear);
    $RowCheckPastYear=mysqli_fetch_array($SqlCheckPastYear);
    if($GetDateMonth >= '04-01')
    {
      $SqlCheckEntry=mysqli_query($con,"SELECT * FROM tblPurchase WHERE FinancialYear='$InvoiceNoYear' AND SessionId='".$_SESSION['RM']."' AND SessionType='R' ORDER BY CreatedDate DESC");
      $CountCheckEntry=mysqli_num_rows($SqlCheckEntry);
      $RowCheckEntry=mysqli_fetch_array($SqlCheckEntry);
      $NextBillNo=$RowCheckEntry['BillNo'] + 1;
      if($CountCheckEntry > 0)
      {
           $ThisBillNo=$NextBillNo;
           $BillNo=$ThisBillNo;
           $FinancialYear=$InvoiceNoYear;
      }
      else
      {
        $BillNo='1';
        $FinancialYear=$InvoiceNoYear;
      }
    }
    else
    {
    $test='YES';
      $SqlCheckEntry=mysqli_query($con,"SELECT * FROM tblPurchase WHERE FinancialYear='$GetPastYear' AND SessionId='".$_SESSION['RM']."' AND SessionType='R' ORDER BY CreatedDate DESC");
      $CountCheckEntry=mysqli_num_rows($SqlCheckEntry);
      $RowCheckEntry=mysqli_fetch_array($SqlCheckEntry);
      $NextBillNo=$RowCheckEntry['BillNo'] + 1;
      if($CountCheckEntry > 0)
      {
           $ThisBillNo=$NextBillNo;
           $BillNo=$ThisBillNo;
           $FinancialYear=$GetPastYear;
      }
      else
      {
        $BillNo='1';
        $FinancialYear=$GetPastYear;
      }
    }
    $NextYear=$FinancialYear + 1;
    echo $BillNo.",".$FinancialYear.",TS-".$FinancialYear."-".$NextYear."/".$BillNo;
  }
}
?>
