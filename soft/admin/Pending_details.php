<?php
include("header.php");
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Pending Report</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Pending Report</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pending Report</h4>
                        <form id="loginform" name="loginform" class="form-horizontal">
                            <div class="form-body">
                                <h3 class="box-title">Info</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">From Date</label>
                                            <div class="col-md-9">
                                              <input type="date" class="form-control" placeholder="From Date" name="from_date" id="from_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">To Date</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" placeholder="To Date" name="to_date" id="to_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div id="message"></div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                              <img src="images/loader.gif" style="margin-top:-70px;display:none;" id="loader">
                                                <button type="button" class="btn btn-success submit" onclick="SerchReport()">Search</button>
                                                <button type="button" class="btn btn-inverse" onclick="ResetForm()">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> </div>
                                </div>
                            </div>
                        </form>
                        <br>
                        <div class="table-responsive m-t-40">
                          <div id="PendingDetails"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>

<script>
function ResetForm()
{
  document.getElementById("loginform").reset();
}
function GetSeller()
{
  var name = $("#name").val();
  $.ajax({
      type: "POST",
      url: "get_seller.php",
      data: {
          name: name
      },
      success: function(result) {
          $("#seller").html(result);
      }
  });
}
function SerchReport()
{
  var from_date = $("#from_date").val();
  var to_date = $("#to_date").val();
  
  if(from_date == '')
     {
     		$("#message").html("<div class='alert alert-warning'>Please Select From Date</div>");
     		$("#from_date").focus();
     		setTimeout(function(){
     			 $("#message").html("");
     	 },2000);
    }
    else if(to_date == '')
     {
     		$("#message").html("<div class='alert alert-warning'>Please Select To Date</div>");
     		$("#to_date").focus();
     		setTimeout(function(){
     			 $("#message").html("");
     	 },2000);
    }
    else
    {
     var seller = $("#seller").val();
     var div= document.createElement("div");
     div.className += "overlay";
     document.body.appendChild(div);
     $('.submit').hide();
     $('#loader').show();
     $.ajax({
          url:'search_Pending_report.php',
          type:'POST',
          data:{
             from_date:from_date,
             to_date:to_date
          },
          success:function(data){
              $("#PendingDetails").html(data);
              $(".submit").show();
              $('#loader').hide();
              $('.overlay').hide();
          }
       });
    }
}
</script>
