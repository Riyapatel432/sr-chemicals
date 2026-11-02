<?php
include("../config.php");
if($_SESSION['companystore'] == '')
{
	
}
else
{
   header('location:dashboard');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Creamy Heaven</title>
    <link href="dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">E-sankalan</p>
        </div>
    </div>
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(../assets/images/Indian_Flag-removebg-preview.png);">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material text-center" id="loginform">
                    <a href="javascript:void(0)" class="text-center db"><img src="../image/CreamyHeavenlogo2.png" alt="Super Admin" style="height: auto;width: 41%;"/><br /></a>
                    <div class="row m-t-40">
                        <div class="col-sm-6">
          					<div class="form-group">
          						<input type="radio" value="super_admin" name="type" id="super_admin">
                                <label for="male" class="text-center">Super Admin</label>
          					</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
          						<input type="radio" value="CompanyStore" name="type" id="CompanyStore" checked>
                                <label for="male" class="text-center">Company Store</label>
          					</div>
          				</div>
      					<div class="col-sm-6">
          					<div class="form-group">
          						<input type="radio" value="Franchise" name="type" id="Franchise">
                                <label for="male" class="text-center">Franchise</label>
          					</div>
                        </div>
                        <div class="col-sm-6">
          					<div class="form-group">
          						<input type="radio" value="Seller" name="type" id="Seller">
                                <label for="male" class="text-center">Seller</label>
          					</div>
                        </div>
                    </div>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" id="username" name="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <img src="images/loader.gif" style="margin-top:-70px;display:none;" id="loader">
                        <div class="col-xs-12" id="message"></div>
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded submit" id="submit" type="submit">Log In</button>
                        </div>
                    </div>
                    <p style="margin-top: 98%;"><center>Design And Development By<a href="https://techomaxsolution.com/"> Techomax Solution</a></center></p>
                </form>
            </div>
        </div>
    </section>
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
    //     $(function() {
    //         $(".preloader").fadeOut();
    //     });
    //     $(function() {
    //         $('[data-toggle="tooltip"]').tooltip()
    //     });
    //     $('#to-recover').on("click", function() {
    //         $("#loginform").slideUp();
    //         $("#recoverform").fadeIn();
    //     });
    </script>
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
     <!-- Bootstrap tether Core JavaScript -->
     <script src="../assets/node_modules/popper/popper.min.js"></script>
     <script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
     <!--Custom JavaScript -->
     <script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script>
        $("#loginform").validate({

        rules: {
        username:{
               required: true
            },
       password:{
                 required: true
              }

        },

        messages: {

      username: {
          required: "The field is required."
            },
      password: {
        required: "The field is required."
              }
        },

        submitHandler: function(form) {
            $("#submit").hide();
            $("#loader").show();
            var id = $('input[name="type"]:checked').val();
            if(id=='super_admin'){
                $.ajax({
                type: 'post',
                url: '../super_admin/log_in.php',
                data: $('#loginform').serialize(),
                success: function (data) {
                  $("#loader").hide();
                  $("#submit").show();
                  if(data==1)
                  {
                       document.getElementById("loginform").reset();

                    window.location.href="../super_admin/dashboard";
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
            else if(id=='CompanyStore'){
                $.ajax({
                type: 'post',
                url: '../Company_Store/log_in.php',
                data: $('#loginform').serialize(),
                success: function (data) {
                  $("#loader").hide();
                  $("#submit").show();
                  if(data==1)
                  {
                       document.getElementById("loginform").reset();

                    window.location.href="../Company_Store/dashboard";
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
            else if(id=='Franchise'){
                $.ajax({
                type: 'post',
                url: '../Franchise/log_in.php',
                data: $('#loginform').serialize(),
                success: function (data) {
                  $("#loader").hide();
                  $("#submit").show();
                  if(data==1)
                  {
                       document.getElementById("loginform").reset();

                    window.location.href="../Franchise/dashboard";
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
            else{
                $.ajax({
                type: 'post',
                url: '../Seller/log_in.php',
                data: $('#loginform').serialize(),
                success: function (data) {
                  $("#loader").hide();
                  $("#submit").show();
                  if(data==1)
                  {
                       document.getElementById("loginform").reset();

                    window.location.href="../Seller/dashboard";
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
      });

    </script>
 </body>

 </html>
    
</body>
</html>