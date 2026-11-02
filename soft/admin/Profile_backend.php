<?php
include('../config.php');

if (isset($_POST))
{
  extract($_POST);
  if (mysqli_query($con,"UPDATE tblAdmin set UserName='$user_name' , Name='$name' , Phone='$Phone' , email='$email' WHERE id='".$_SESSION['Admin']."'" ))
  {
      echo 1 ;
  }
  else{
      echo mysqli_error($con);
  }
}
?>
