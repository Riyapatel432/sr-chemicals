<?php
include("../config.php");?>
<style>
#modal-dialog {
    max-width: 90%;
}
</style>
<?php 

   echo'<div>
   <div class="chat-rbox ps ps--theme_default ps--active-y" data-ps-id="cc9752f2-54de-ad3b-8a03-73f4b9125fc6" style="height: 50vh;">
            <ul class="chat-list p-3">';
            
                $SqlTask=mysqli_query($con,"SELECT * FROM tblTask WHERE Status='0' ORDER BY CreatedDate DESC");
                while($RowTask=mysqli_fetch_array($SqlTask)){
                    
                    $SqliAdmin=mysqli_query($con,"SELECT * FROM tblAdmin WHERE id='".$RowTask['User']."'");
                    $RowAdmin=mysqli_fetch_array($SqliAdmin);
                    $SqliAccounter=mysqli_query($con,"SELECT * FROM tblAccounter WHERE id='".$RowTask['User']."'");
                    $RowAccounter=mysqli_fetch_array($SqliAccounter);
                    $Sqlirm=mysqli_query($con,"SELECT * FROM tblRM WHERE id='".$RowTask['User']."'");
                    $Rowrm=mysqli_fetch_array($Sqlirm);
                    if($RowTask['UserType'] == 'A'){
                        $User = $RowAdmin['Name'];
                        $UserType = '<span class="badge badge-pill badge-info">Admin</span>';
                    }
                    if($RowTask['UserType'] == 'AC'){
                        $User = $RowAccounter['Name'];
                        $UserType = '<span class="badge badge-pill badge-info">Accounter</span>'; 
                    }
                    if($RowTask['UserType'] == 'R'){
                        $User = $Rowrm['Name'];
                        $UserType = '<span class="badge badge-pill badge-info">RM</span>';     
                    }
                    if($RowTask['Sender'] == 'S' && $RowTask['SenderType'] == $_SESSION['SuperAdmin']){
                        
                        echo'<li class="reverse">
                            <div class="chat-content">
                                <div class="box bg-light-info" style="width: 120vh;text-align: left;">
                                    <h5>to : '.$User.' <b style="font-size: 12px;">'.$UserType.'</b></h5>
                                    <div class="chat-time" style="margin: 0px;">2023-11-08 14:51:34</div><br>
                                    '.$RowTask['Task'].'
                                </div>
                            </div>
                        </li>';
                        
                    }
                    else{
                        echo'<li>
                            <div class="chat-content">
                                <div class="box bg-light-info" style="width: 120vh;">
                                    <h5>from : '.$User.' <b style="font-size: 12px;">'.$UserType.'</b></h5>
                                    <div class="chat-time" style="margin: 0px;">2023-11-08 14:51:34</div><br>
                                    '.$RowTask['Task'].'
                                </div>
                            </div>
                        </li>';
                    }
                }echo'
            </ul>
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px; height: 142px;">
                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 29px;"></div>
            </div>
        </div></div>';
?>
