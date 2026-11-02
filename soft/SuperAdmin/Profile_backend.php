<?php
include('../config.php');

if (isset($_POST))
{
  extract($_POST);
  if (mysqli_query($con,"UPDATE tblSuperAdmin set UserName='$user_name' , email='$email' WHERE id='".$_SESSION['SuperAdmin']."'" ))
  {
      echo 1 ;
  }
  else{
      echo mysqli_error($con);
  }
}
?>
