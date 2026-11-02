<?php
include("../config.php");
if($_SESSION['SuperAdmin'] == '')
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
    <link rel="icon" type="image/png" sizes="16x16" href="../logo.jpg">
    <title>S.R.Chemical</title>
    <link href="dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">S.R.Chemical</p>
        </div>
    </div>
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(../assets/images/background/login-register.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material text-center" id="loginform">
                    <a href="javascript:void(0)" class="text-center db"><img src="../logo.jpg" alt="Super Admin" style="height: auto;width: 41%;"/><br /></a>
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
                    <p><center>Design And Development By<a href="https://techomaxsolution.com/"> Techomax Solution</a></center></p>
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
                $.ajax({
                type: 'post',
                url: 'log_in.php',
                data: $('#loginform').serialize(),
                success: function (data){
                  $("#loader").hide();
                  $("#submit").show();
                  if(data==1)
                  {
                       document.getElementById("loginform").reset();

                    window.location.href="dashboard";
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
      });

    </script>
 </body>

 </html>
    
</body>
</html>