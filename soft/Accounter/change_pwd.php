<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
    $Sql=mysqli_query($con,"SELECT * FROM tblAccounter WHERE id='".$_SESSION['Accounter']."'");
    $Row=mysqli_fetch_array($Sql);
    if (password_verify($currentpassword, $Row['Password'])){
        
        $hashed_password = password_hash($newpassword, PASSWORD_DEFAULT);
       if(mysqli_query($con,"UPDATE tblAccounter SET Password='$hashed_password' WHERE id='".$_SESSION['Accounter']."'"))
       {
         echo 1;
       }
       else
       {
         echo 0;
       }
    }
}
?>
