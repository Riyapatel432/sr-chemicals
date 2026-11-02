<?php 
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
  $CreatedDate=date("Y-m-d H:i:s");
  $add_date=date("Y-m-d");
  
  $ExtractUser = explode(",",$User);
  
  
  $SqliAdmin=mysqli_query($con,"SELECT * FROM tblAdmin WHERE id='".$ExtractUser[0]."'");
    $RowAdmin=mysqli_fetch_array($SqliAdmin);
    $SqliAccounter=mysqli_query($con,"SELECT * FROM tblAccounter WHERE id='".$ExtractUser[0]."'");
    $RowAccounter=mysqli_fetch_array($SqliAccounter);
    $Sqlirm=mysqli_query($con,"SELECT * FROM tblRM WHERE id='".$ExtractUser[0]."'");
    $Rowrm=mysqli_fetch_array($Sqlirm);
    $Sqlisuperadmin=mysqli_query($con,"SELECT * FROM tblSuperAdmin");
    $RowSuperAdmin=mysqli_fetch_array($Sqlisuperadmin);
    
  
  if($ExtractUser[1] == 'A'){
        $User = $RowAdmin['Name'];
        $UserMail = $RowAdmin['email'];
        $UserType = '<span class="badge badge-pill badge-info">Admin</span>';
    }
    if($ExtractUser[1] == 'AC'){
        $User = $RowAccounter['Name'];
        $UserMail = $RowAccounter['email'];
        $UserType = '<span class="badge badge-pill badge-info">Accounter</span>'; 
    }
    if($ExtractUser[1] == 'R'){
        $User = $Rowrm['Name'];
        $UserMail = $Rowrm['email'];
        $UserType = '<span class="badge badge-pill badge-info">RM</span>';     
    }
    if($ExtractUser[1] == 'S'){
        $User = $RowSuperAdmin['UserName'];
        $UserMail = $RowSuperAdmin['email'];
        $UserType = '<span class="badge badge-pill badge-info">Super Admin</span>';     
    }
    
    $SqliAdmin12=mysqli_query($con,"SELECT * FROM tblAccounter WHERE id='".$_SESSION['Accounter']."'");
    $RowAdmin12=mysqli_fetch_array($SqliAdmin12);
    
    $User12 = $RowAdmin12['Name'];
    $UserMail12 = $RowAdmin12['email'];
    $UserType12 = '<span class="badge badge-pill badge-info">Admin</span>';
    
    
  
 if(mysqli_query($con,"INSERT INTO tblTask (SenderType,Sender,User,UserType,Task,AddedDate,CreatedDate) VALUES ('AC','".$_SESSION['Accounter']."','".$ExtractUser[0]."','".$ExtractUser[1]."','$Task','$add_date','$CreatedDate')"))
  {
        $insertId=mysqli_insert_id($con);
        
        $to =  $UserMail ;
        $subject = "Task From S. R. Chemical";
        
        $message = "
        <html>
        <head>
        <title>Message From S. R. Chemical</title>
        </head>
        <body>
        <p>From : $User12 ( $UserType12 )  </p>
        <p>To : $User ( $UserType )  </p>
        <p>message : $Task</p>
        </body>
        </html>
        ";
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: '.$UserMail12.'' . "\r\n";
        
        mail($to,$subject,$message,$headers);
        
        echo 1 ;
  }
  else{
    echo mysqli_error($con);
  }   
  
}
?>
