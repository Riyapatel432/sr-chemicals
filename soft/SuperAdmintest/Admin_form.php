<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $AddedDate=date("Y-m-d");
 
    $SqliCompanyStore=mysqli_query($con,"SELECT * FROM tblAdmin WHERE UserName='$UserName' AND Status='0' ");
    $Countcompanystore=mysqli_num_rows($SqliCompanyStore);
    if($Countcompanystore > 0){
        echo'2';   
    }
    else{
        $hashed_password = password_hash($Password, PASSWORD_DEFAULT);
        if(mysqli_query($con,"INSERT INTO tblAdmin (Name,Phone,UserName,Password,AddedDate,CreatedDate) VALUES ('$Name','$Phone','$UserName','$hashed_password','$AddedDate','$CreatedDate')"))
          {
            echo 1;
          }
          else{
            echo mysqli_error($con);
          }    
    }
}
?>
 