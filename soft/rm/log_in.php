<?php
include("../config.php");

if(isset($_POST))
{
  extract($_POST);

  $Sql=mysqli_query($con,"SELECT * FROM tblRM WHERE UserName='$username'");
  $count=mysqli_num_rows($Sql);
  while($Row=mysqli_fetch_array($Sql)){
   if (password_verify($password, $Row['Password'])){ 
       $id=$Row['id'];
       $_SESSION['RM']=$id;
       echo 1 ;
    }
   else{
    echo mysqli_error($con);
   }
  }
  
}
?>
