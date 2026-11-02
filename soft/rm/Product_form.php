<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $AddedDate=date("Y-m-d");
 
    $SqliCompanyStore=mysqli_query($con,"SELECT * FROM tblProduct WHERE Name='$Name' AND Status='0' ");
    $Countcompanystore=mysqli_num_rows($SqliCompanyStore);
    if($Countcompanystore > 0){
        echo'2';   
    }
    else{
        if(mysqli_query($con,"INSERT INTO tblProduct (Name,AddedDate,CreatedDate) VALUES ('$Name','$AddedDate','$CreatedDate')"))
          {
            echo 1;
          }
          else{
            echo mysqli_error($con);
          }    
    }
}
?>
 