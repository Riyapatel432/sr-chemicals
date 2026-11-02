<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
    $Sql=mysqli_query($con,"SELECT * FROM tblSuperAdmin WHERE id='".$_SESSION['SuperAdmin']."'");
    $Row=mysqli_fetch_array($Sql);
    if ($Row['pass']== $currentpassword){
       if(mysqli_query($con,"UPDATE tblSuperAdmin SET pass='$newpassword' WHERE id='".$_SESSION['SuperAdmin']."'"))
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
