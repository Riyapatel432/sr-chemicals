<?php
include("header.php");
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Task List</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Task List</li>
                    </ol>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#AddDepartment" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
                </div>
            </div>
        </div>
        
        <div class="chat-rbox ps ps--theme_default ps--active-y" data-ps-id="cc9752f2-54de-ad3b-8a03-73f4b9125fc6" style="height: 50vh;">
            <ul class="chat-list p-3">
                <?php
                $SqlTask=mysqli_query($con,"SELECT * FROM tblTask WHERE Status='0' AND (SenderType='AC' OR UserType='AC') AND (Sender='".$_SESSION['Accounter']."' OR User='".$_SESSION['Accounter']."') ORDER BY CreatedDate DESC");
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
                    if($RowTask['UserType'] == 'S'){
                        $User = 'Super Admin';
                        $UserType = '<span class="badge badge-pill badge-info">Super Admin</span>';     
                    }
                    if($RowTask['SenderType'] == 'AC' && $RowTask['Sender'] == $_SESSION['Accounter']){
                        
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
                }
                ?>
            </ul>
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px; height: 142px;">
                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 29px;"></div>
            </div>
        </div>
        <!--<div class="row">-->
        <!--    <div class="col-12">-->
        <!--        <div class="card">-->
        <!--            <div class="card-body">-->
        <!--                <h4 class="card-title">Task Details</h4>-->
        <!--                <div class="table-responsive m-t-40">-->
        <!--                  <div id="TaskDeatils"></div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</div>
<div class="modal long-modal" id="AddDepartment" tabindex="-1" role="dialog" aria-labelledby="longmodal" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="longmodal">Add Task</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <form id="loginform" name="loginform" class="form-horizontal">
                  <div class="form-body">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Select User</label>
                                  <div class="col-md-9">
                                      <select class="form-control required" name="User" id="User">
                                          <option value="">--Select User--</option>
                                          <option value="0,S">SuperAdmin</option>
                                          <?php  
                                          $SqliAdmin=mysqli_query($con,"SELECT * FROM tblAdmin WHERE Status='0'");
                                          while($RowAdmin=mysqli_fetch_array($SqliAdmin))
                                          {
                                            echo'<option value="'.$RowAdmin['id'].',A">'.$RowAdmin['Name'].' (Admin)</option>';
                                          }
                                          $SqliAccounter=mysqli_query($con,"SELECT * FROM tblAccounter WHERE Status='0'");
                                          while($RowAccounter=mysqli_fetch_array($SqliAccounter))
                                          {
                                            echo'<option value="'.$RowAccounter['id'].',AC">'.$RowAccounter['Name'].' (Accounter)</option>';
                                          }
                                          $Sqlirm=mysqli_query($con,"SELECT * FROM tblRM WHERE Status='0'");
                                          while($Rowrm=mysqli_fetch_array($Sqlirm))
                                          {
                                            echo'<option value="'.$Rowrm['id'].',R">'.$Rowrm['Name'].' (RM)</option>';
                                          }
                                          ?>
                                        </select>
                                  </div>
                              </div>
                              
                              
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Task</label>
                                  <div class="col-md-9">
                                      <textarea type="text" class="form-control required" placeholder="Task" name="Task" id="Task"></textarea>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <hr>
                  <div class="form-actions"> 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                  <img src="images/loader.gif" style="margin-top:-70px;display:none;" id="saveloader">
                                  <button type="button" class="btn btn-info waves-effect waves-light m-t-10 Savedata">Save</button>
                                  <button type="button" class="btn btn-danger waves-effect waves-light m-t-10 submit" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12"> </div>
                    </div>
                </div>
              </form>
          </div>
      </div>
  </div>
</div>
<?php
include("footer.php");
?>
<script>
function DisplayTask()
{
    $.ajax({
        url:'display_Task',
        type:'GET',
        dataType:'html',
        success:function(data){
         $("#TaskDeatils").html(data);
        }
     });
}

$(document).ready(function(){
  $(".Savedata").click(function(){
    var failed = false;
    $(".required").each(function(){
      if ($(this).val() == "") {
        failed = true;
      }
    });

    if (failed) {
      const TYPES = ['error'],
                 TITLES = {
                     'error': 'Doh!'
                 },
                 CONTENT = {
                     'error': 'All fields are required!'
                 };
             var type = TYPES[Math.floor(Math.random() * TYPES.length)],
                 content = CONTENT[type];
             $.snack(type, content);
             setTimeout(function(){
                $(".toast").hide();
            },2000);
    }
    else {
      SaveData();
    }
  });
});

function SaveData()
{
  var User = $("#User").val();
  var Task = $("#Task").val();
  
      var div= document.createElement("div");
        div.className += "overlay";
        document.body.appendChild(div);
        $('.submit').hide();
        $('.Savedata').hide();
        $('#saveloader').show();
    $.ajax({
     url:'Task_form',
     type:'POST',
     data:{
        User:User,
        Task:Task
     },
     success:function(data){
        if(data==1){
            const TYPES = ['success'],
          TITLES = {
              'success': 'Awesome!'
          },
          CONTENT = {
              'success': 'Task Add Successfully'
          };
      var type = TYPES[Math.floor(Math.random() * TYPES.length)],
          content = CONTENT[type];
      $.snack(type, content);
         setTimeout(function(){
          $(".submit").show();
          $(".Savedata").show();
            $('#saveloader').hide();
            $(".toast").hide();
            $('.overlay').hide();
            document.getElementById("loginform").reset();
            $("#AddDepartment").hide();
            $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();
          window.location.reload();
        },500);
        }
        else if(data=='2'){
             const TYPES = ['error'],
             TITLES = {
                'error': 'Awesome!'
              },
              CONTENT = {
                  'error': 'Task Already Exists'
              };
              var type = TYPES[Math.floor(Math.random() * TYPES.length)],
                  content = CONTENT[type];
              $.snack(type, content);
                 setTimeout(function(){
                  $(".submit").show();
                  $(".Savedata").show();
                    $('#saveloader').hide();
                    $(".toast").hide();
                    $('.overlay').hide();
                  DisplayTask();
                },1500);
            }
         else{
             const TYPES = ['error'],
             TITLES = {
                'error': 'Awesome!'
              },
              CONTENT = {
                  'error': 'Something went wrong'
              };
              var type = TYPES[Math.floor(Math.random() * TYPES.length)],
                  content = CONTENT[type];
              $.snack(type, content);
                 setTimeout(function(){
                  $(".submit").show();
                  $(".Savedata").show();
                    $('#saveloader').hide();
                    $(".toast").hide();
                    $('.overlay').hide();
                  DisplayTask();
                },500);
            }
     }
  });
}
</script>
