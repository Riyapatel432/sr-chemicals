<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $AddedDate=date("Y-m-d");

    if(mysqli_query($con,"INSERT INTO tbLoan_ledger (FromUser,ToUser,Amount,AddedDate,CreatedDate) VALUES ('0','$Employee','$Loan','$AddedDate','$CreatedDate')"))
    {
        $SqliLoan=mysqli_query($con,"SELECT * FROM tblLoan WHERE Employee='".$Employee."'");
        $RowLoan=mysqli_fetch_array($SqliLoan);
        $CountLoan=mysqli_num_rows($SqliLoan);
        if($CountLoan <= 0){
            if(mysqli_query($con,"INSERT INTO tblLoan (Employee,Loan,remain_amt,AddedDate,CreatedDate) VALUES ('$Employee','$Loan','$Loan','$AddedDate','$CreatedDate')"))
              {
                echo 1;
              }
              else{
                echo mysqli_error($con);
              } 
        }
        else{
            $totalAmt = $RowLoan['Loan'] + $Loan ;
            $totalremain = $RowLoan['remain_amt'] + $Loan ;
            if(mysqli_query($con,"UPDATE tblLoan SET Loan='$totalAmt' , remain_amt='$totalremain'  WHERE Employee='$Employee'"))
              {
                echo 1;
              }
              else{
                echo mysqli_error($con);
              }
        }
    }
    else{
        echo mysqli_error($con);
    }
}
?>
 