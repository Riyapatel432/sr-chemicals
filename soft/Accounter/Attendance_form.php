<?php 
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $add_date=date("Y-m-d");
  
  
  $ExtractEmployee = explode("$$",$myEmployeehide);
  $ExtractCode = explode("$$",$myCodehide);
  $ExtractStatus = explode("$$",$myStatushide);
  $Extractot = explode("$$",$myothide);
  $Extractot = explode("$$",$myothide);
  $ExtracShift = explode("$$",$myShifthide);
  
  for($i=0;$i < sizeof($ExtractEmployee);$i++)
    {
        $SqliAtten=mysqli_query($con,"SELECT * FROM tblAttendance WHERE Employee='".$ExtractEmployee[$i]."' AND selectDate='".$selectDate."'");
        $RowAtten=mysqli_fetch_array($SqliAtten);
        $CountAtten=mysqli_num_rows($SqliAtten);
        
        if($CountAtten <= 0){
            if(mysqli_query($con,"INSERT INTO tblAttendance (SessionId,selectDate,Employee,Code,AttStatus,ot,Shift,AddedDate,CreatedDate) VALUES ('".$_SESSION['Accounter']."','$selectDate','".$ExtractEmployee[$i]."','".$ExtractCode[$i]."','".$ExtractStatus[$i]."','".$Extractot[$i]."','".$ExtracShift[$i]."','$add_date','$CreatedDate')"))
              {
                    
              }
              else{
                echo 0;
              }
        }
        else{
            if(mysqli_query($con,"UPDATE tblAttendance SET Shift='".$ExtracShift[$i]."' , AttStatus='".$ExtractStatus[$i]."' , ot='".$Extractot[$i]."' WHERE id='".$RowAtten['id']."'"))
              {
                    
              }
              else{
                echo 0;
                // echo mysqli_error($con);
              }
        }
  }
  
}
?>
