<?php
include('../config.php');

if (isset($_POST))
{
  extract($_POST);
  if (mysqli_query($con,"UPDATE tblRM set UserName='$user_name' , Name='$name' , Phone='$Phone' , email='$email' WHERE id='".$_SESSION['RM']."'" ))
  {
      echo 1 ;
  }
  else{
      echo mysqli_error($con);
  }
}
?>
