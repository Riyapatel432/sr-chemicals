<?php
include("../config.php");

if(isset($_POST))
{
  extract($_POST);
  $Sql=mysqli_query($con,"SELECT * FROM tblcompanystore WHERE binary UserName='$username' AND binary pass='$password' AND Status='0'");
  $count=mysqli_num_rows($Sql);
  if($count > 0)
  {
    $Row=mysqli_fetch_array($Sql);
    $id=$Row['id'];
    $_SESSION['companystore']=$id;
    echo 1 ;
  }
  else{
    echo mysqli_error($con);
  }
}
?>
