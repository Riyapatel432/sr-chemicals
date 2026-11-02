<?php include('header.php');
$Sql=mysqli_query($con,"SELECT * FROM tblAccounter WHERE id='".$_SESSION['Accounter']."'");
$Row=mysqli_fetch_array($Sql);
?>
    <div class="page-wrapper">
        <div class="container-fluid">
                 <div class="row page-titles">
                     <div class="col-md-5 align-self-center">
                         <h4 class="text-themecolor">Profile </h4>
                     </div>
                     <div class="col-md-7 align-self-center text-right">
                         <div class="d-flex justify-content-end align-items-center">
                             <ol class="breadcrumb">Phone
                                 <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                 <li class="breadcrumb-item active">Profile </li>
                             </ol>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <!-- Column -->
                     <div class="col-lg-4 col-xlg-3 col-md-5">
                         <div class="card">
                             <div class="card-body">
                                 <center class="m-t-30">  <img src="../logo.jpg" class="" style="width: 260px;height: 160px;object-fit: contain;" alt="logo"/>
                                     <h4 class="card-title m-t-10"><?php echo $Row['Name'];?></h4>
                                 </center>
                             </div>
                             <div>
                                 <hr />  </div>
                             <div class="card-body">
                             </div>
                         </div>
                     </div>
                     <!-- Column -->
                     <!-- Column -->
                     <div class="col-lg-8 col-xlg-9 col-md-7">
                         <div class="card">
                             <!-- Nav tabs -->
                             <ul class="nav nav-tabs profile-tab" role="tablist">
                                 <li class="nav-item">  <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Profile </a>  </li>
                                 <li class="nav-item">  <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings </a>  </li>
                                 <li class="nav-item">  <a class="nav-link" data-toggle="tab" href="#password" role="tab">Change Password </a>  </li>
                             </ul>
                             <!-- Tab panes -->
                             <div class="tab-content">
                                 <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                         <div class="row">
                                                        <p class="col-sm-2 ">Name</p>
                                                        <p class="col-sm-10"><b><?php echo $Row['Name'];?></b></p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm-2">Mobile</p>
                                                        <p class="col-sm-10"><b><?php echo $Row['Phone'];?></b></p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm-2">UserName</p>
                                                        <p class="col-sm-10"><b><?php echo $Row['UserName'];?></b></p>
                                                    </div>
                                         <hr />
                                     </div>
                                 </div>
                                 <div class="tab-pane" id="settings" role="tabpanel">
                                     <div class="card-body">
                                         <form class="form-horizontal form-material">
                                             <div class="form-group">
                                                 <label class="col-md-12">Name </label>
                                                 <div class="col-md-12">
                                                     <input type="text" placeholder="Name" class="form-control form-control-line" name="name" id="name" value="<?php echo $Row['Name'];?>" />
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <label class="col-md-12">Phone</label>
                                                 <div class="col-md-12">
                                                     <input type="text" placeholder="Phone" class="form-control form-control-line" name="Phone" id="Phone" value="<?php echo $Row['Phone'];?>" />
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <label class="col-md-12">E-mail</label>
                                                 <div class="col-md-12">
                                                     <input type="text" placeholder="E-mail" class="form-control form-control-line" name="email" id="email" value="<?php echo $Row['email'];?>" />
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <label class="col-md-12">User Name </label>
                                                 <div class="col-md-12">
                                                     <input type="text" placeholder="User Name" class="form-control form-control-line" name="user_name" id="user_name" value="<?php echo $Row['UserName'];?>" />
                                                 </div>
                                             </div>
                                            <div id="message1"></div>
                                            <img src="../assets/images/loader.gif" style="margin-top:-70px;display:none;" id="loader">
                                             <div class="form-group">
                                                 <div class="col-sm-12">
                                                     <button class="btn btn-success profile_submit submit1" type="button" onclick="ProfileUpdate()">Update Profile </button>
                                                 </div>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                                 <div class="tab-pane" id="password" role="tabpanel">
                                     <div class="card-body">
                                         <form name="myform" id="myform">
                                                        <div class="form-group">
                                                            <label>Old Password</label>
                                                            <input type="password" class="form-control" name="currentpassword" id="currentpassword">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>New Password</label>
                                                            <input type="password" class="form-control" name="newpassword" id="newpassword">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Confirm Password</label>
                                                            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword">
                                                        </div>
                                                        <div class="form-group">
                                                            <div id="message"></div>
                                                        </div>
                                                        <img src="images/loader.gif" style="margin-top:-70px;display:none;" id="profileloader">
                                                        <button class="btn btn-success submit" type="button" onclick="ChangePassword()">Save Changes</button>
                                                    </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
    </div>
<?php include('footer.php');?>
<script>
function ProfileUpdate(){
  var name = $('#name').val();
  var Phone = $('#Phone').val();
  var email = $("#email").val();
  var user_name = $('#user_name').val();
 
    if (name=="")
    {
        $("#message1").html("<div class='alert alert-danger'>Please Enter Fild</div>");
        $("#name").focus();
        setTimeout(function()
        {
          $("#message1").html("");
        }, 3000);
    }
    else if (Phone=="")
    {
        $("#message1").html("<div class='alert alert-danger'>Please Enter Fild</div>");
        $("#Phone").focus();
        setTimeout(function()
        {
          $("#message1").html("");
        }, 3000);
    }
    else if (user_name=="")
    {
        $("#message1").html("<div class='alert alert-danger'>Please Enter Fild</div>");
        $("#user_name").focus();
        setTimeout(function()
        {
          $("#message1").html("");
        }, 3000);
    }

        else {
       $('.submit1').hide();
       $('#profileloader').show();
       
      $.ajax({
        type:"post",
        url:"Profile_backend",
        data :{
    	    name : name,
            Phone : Phone,
            email : email,
            user_name : user_name
    },
        success: function(data){
            // alert(data);
            if(data == 1)
            {
                 $('.submit1').show();
                 $('#profileloader').hide();
                 $("#message1").html("<div class='alert alert-success'>added successfully</div>");
                 setTimeout(function()
                 {
                  $("#message1").html("");
                   window.location.href="profile";
                  viewlist();                  
                 }, 2000);
            }
            else{
                $('.submit1').show();
                 $('#profileloader').hide();
                 $("#message1").html("<div class='alert alert-danger'>something went wrong please try again</div>");
                 setTimeout(function()
                 {
                  $("#message1").html("");
                  viewlist();                  
                 }, 2000);
            }
         
        }
      });
        }

}

function ChangePassword()
{
  var currentpassword = $("#currentpassword").val();
  var newpassword = $("#newpassword").val();
  var confirmpassword = $("#confirmpassword").val();

  if(currentpassword == "")
  {
    $("#message").html("<div class='alert alert-warning'>Please Enter Current Password</div>");
    $("#currentpassword").focus();
    setTimeout(function(){
       $("#message").html("");
    },2000);
  }
  else if(newpassword == "")
  {
    $("#message").html("<div class='alert alert-warning'>Please Enter New Password</div>");
    $("#newpassword").focus();
    setTimeout(function(){
       $("#message").html("");
    },2000);
  }
  else if(confirmpassword == "")
  {
    $("#message").html("<div class='alert alert-warning'>Please Enter Confirm Password</div>");
    $("#confirmpassword").focus();
    setTimeout(function(){
       $("#message").html("");
    },2000);
  }
  else if(newpassword != confirmpassword)
  {
    $("#message").html("<div class='alert alert-warning'>Confirm Password Is Not Same As Your New Password</div>");
    $("#newpassword").focus();
    setTimeout(function(){
       $("#message").html("");
    },2000);
  }
  else {
    $("#message").html("");
    var div= document.createElement("div");
    div.className += "overlay";
    document.body.appendChild(div);
    $('.submit').hide();
    $('#loader1').show();
    $.ajax({
      type: 'post',
      url: 'change_pwd.php',
      data: {
          currentpassword : currentpassword,
          newpassword : newpassword
      },
      success: function (data) {
        $('.overlay').hide();
        $('#loader1').hide();
        $('.submit').show();
        if(data == 1)
        {
          document.getElementById("myform").reset();
          $("#message").html("<div class='alert alert-success'>Password Change Successfully</div>");
            setTimeout(function(){
                 $("#message").html("");
           },2000);
        }
        else {
          $("#message").html("<div class='alert alert-warning'>Something Went To Wrong!</div>");
          setTimeout(function(){
             $("#message").html("");
         },2000);
        }
          }
      });
  }

}
</script>