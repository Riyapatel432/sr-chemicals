<?php
include('../config.php');

if (isset($_POST))
{
  extract($_POST);
  if (mysqli_query($con,"UPDATE tblcompanystore set UserName='$user_name' , Name='$name' , Phone='$Phone' WHERE id='".$_SESSION['companystore']."'" ))
  {
      echo 1 ;
  }
  else{
      echo mysqli_error($con);
  }
}
?>
