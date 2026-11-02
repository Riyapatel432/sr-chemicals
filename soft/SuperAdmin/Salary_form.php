<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $AddedDate=date("Y-m-d");

    $SqlStock=mysqli_query($con,"SELECT * FROM tblAttendance WHERE Status='0' AND AttStatus='1' AND Employee='$name' AND AddedDate between '$from_date' AND '$to_date'");
    $CountStock=mysqli_num_rows($SqlStock);
    $Sqliloan=mysqli_query($con,"SELECT * FROM tblLoan WHERE Employee='$name' AND Loan >='1'");
    $Countloan=mysqli_num_rows($Sqliloan);
    $Rowloan=mysqli_fetch_array($Sqliloan);
    $SqliEmployee=mysqli_query($con,"SELECT * FROM tblEmployee WHERE id='$name'");
    $RowEmployee=mysqli_fetch_array($SqliEmployee);
    $SqliDesignation=mysqli_query($con,"SELECT * FROM tblDesignation WHERE id='".$RowEmployee['Designation']."'");
    $RowDesignation=mysqli_fetch_array($SqliDesignation);
 
    while($RowStock=mysqli_fetch_array($SqlStock))
    {
        $otdaays += $RowStock['ot'];
        $salary=$CountStock * $RowEmployee['Rate'];
        $ottotalrate=$otdaays * $RowEmployee['OtRate'];
    }
    $toatl = $salary + $ottotalrate;
    
    
    if(mysqli_query($con,"INSERT INTO tblSalary (Employee,AttendedDays,OTHours,Salary,OTRate,EMI,TotalSalary,month,from_Date,to_Date,AddedDate,CreatedDate) VALUES ('".$RowEmployee['id']."','$CountStock','$otdaays','$salary','$ottotalrate','$emi','$toatl','$month','$from_date','$to_date','$AddedDate','$CreatedDate')"))
    {
        $SqliLoan=mysqli_query($con,"SELECT * FROM tblLoan WHERE Employee='".$RowEmployee['id']."'");
        $RowLoan=mysqli_fetch_array($SqliLoan);
        $CountLoan=mysqli_num_rows($SqliLoan);
            $totalAmt = $RowLoan['Loan'] - $emi ;
            $totalremain = $RowLoan['remain_amt'] - $emi ;
            if(mysqli_query($con,"UPDATE tblLoan SET Loan='$totalAmt' , remain_amt='$totalremain'  WHERE Employee='".$RowEmployee['id']."'"))
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
?>
 