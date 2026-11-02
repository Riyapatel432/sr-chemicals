<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
    $Sql=mysqli_query($con,"SELECT * FROM tblcompanystore WHERE id='".$_SESSION['companystore']."'");
    $Row=mysqli_fetch_array($Sql);
    if($Row['pass']==$currentpassword)
    {
       if(mysqli_query($con,"UPDATE tblcompanystore SET pass='$newpassword' WHERE id='".$_SESSION['companystore']."'"))
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
