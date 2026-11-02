<?php 
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $add_date=date("Y-m-d");
 if(mysqli_query($con,"INSERT INTO tblPurchase (SessionId,selectDate,BillNo,orderno,PartyName,Product,Unit,Qty,Date,Narration,FinancialYear,AddedDate,CreatedDate) VALUES ('0','$selectDate','$bill_no','$InvoiceNo','$Name','$myProducthide','$myUnithide','$myQtyhide','$myreqDatehide','$myNarrationhide','$financ_year','$add_date','$CreatedDate')"))
  {
        $insertId=mysqli_insert_id($con);
        echo $insertId ;
  }
  else{
    echo mysqli_error($con);
  }   
  
}
?>
