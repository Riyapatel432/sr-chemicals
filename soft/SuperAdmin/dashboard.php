<?php include('header.php');
$SqlPurchase=mysqli_query($con,"SELECT * FROM tblPurchase WHERE Status='0'  ORDER BY CreatedDate DESC");
$CountPurchase=mysqli_num_rows($SqlPurchase);
$SqlPurchase12=mysqli_query($con,"SELECT * FROM tblPurchase WHERE Status='1'  ORDER BY CreatedDate DESC");
$CountPurchase12=mysqli_num_rows($SqlPurchase12);
$SqlSale=mysqli_query($con,"SELECT * FROM tblOrder WHERE Status='0'  ORDER BY CreatedDate DESC");
$CountSale=mysqli_num_rows($SqlSale);
$SqlSale12=mysqli_query($con,"SELECT * FROM tblOrder WHERE Status='1'  ORDER BY CreatedDate DESC");
$CountSale12=mysqli_num_rows($SqlSale12);
?>

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-note"></i></h3>
                                            <p class="text-muted">-	Pending Purchase </p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-primary"><?= $CountPurchase ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-doc"></i></h3>
                                            <p class="text-muted">-	Approved Purchase</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-cyan"><?= $CountPurchase12 ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-note"></i></h3>
                                            <p class="text-muted">-	Pending Sale </p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-purple"><?= $CountSale ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-doc"></i></h3>
                                            <p class="text-muted">-	Approved Sale </p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-success"><?= $CountSale12 ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
<?php include('footer.php');?>
<script>
Displaymess();
function Displaymess()
{
    $.ajax({
        url:'display_mess',
        type:'GET',
        dataType:'html',
        success:function(data){
         $("#messdisplay").html(data);
        }
     });
}

function DailyNote(){

    var mess = $("#mess").val();
    if(mess==""){
        
    }
    else{
        $.ajax({
            url:'mess_form',
            type:'POST',
            data:{
                mess:mess
            },
            success:function(data){
                $("#mess").val("");
                Displaymess();
            }
         });   
    }
}

function removemess(id)
{
  $.ajax({
     url:'delete_form',
     type:'POST',
     data:{
      id:id,
      Flag : "Delete mess"
     },
     success:function(data){
         Displaymess();
     }
  });
}
</script>