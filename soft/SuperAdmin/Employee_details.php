<?php
include("header.php");
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Employee List</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Employee List</li>
                    </ol>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#AddDepartment" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Employee Details</h4>
                        <div class="table-responsive m-t-40">
                          <div id="EmployeeDeatils"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal long-modal" id="AddDepartment" tabindex="-1" role="dialog" aria-labelledby="longmodal" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="longmodal">Add Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>Employee Info</h4>
              <form id="loginform" name="loginform" class="form-horizontal">
                  <div class="form-body">
                      <hr class="m-t-0 m-b-40">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Designation</label>
                                  <div class="col-md-9">
                                    <select class="form-control required" name="Designation" id="Designation" >
                                        <option value="">--Select Designation--</option><?php
                                        $SqliDesignation=mysqli_query($con,"SELECT * FROM tblDesignation WHERE Status='0'");
                                        while($RowDesignation=mysqli_fetch_array($SqliDesignation))
                                        {
                                            echo'<option value="'.$RowDesignation['id'].'">'.$RowDesignation['Name'].'</option>';
                                        }
                                        ?>
                                    </select>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Name</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control required" placeholder="Name" name="Name" id="Name">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Phone</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control" placeholder="Phone" name="Phone" id="Phone">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Employee Code</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control required" placeholder="Employee Code" name="Code" id="Code">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Description</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control" placeholder="Description" name="Description" id="Description">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Rate Per Day</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control required" placeholder="Rate Per Day" name="Rate" id="Rate" onKeyup="countot()">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <input type="hidden" name="OtRate" id="OtRate">
                                  <div id="otrateDiv"></div>
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
DisplayEmployee();
function DisplayEmployee()
{
    $.ajax({
        url:'display_Employee',
        type:'GET',
        dataType:'html',
        success:function(data){
         $("#EmployeeDeatils").html(data);
        }
     });
}
function countot(){
    var Rate = $("#Rate").val();
    otrate12=Rate/8;
    otrate=Math.round(otrate12)
    $("#OtRate").val(otrate);
    $("#otrateDiv").html("<p style='color:red'> Per Hour OT Rate (According to your salary) : " + otrate + "</p>");
}

function DeleteData(EmployeeId)
{     
    var div= document.createElement("div");
        div.className += "overlay";
        document.body.appendChild(div);
        $('.deletesubmit').hide();
        $('#deleteloader').show();
    $.ajax({
     url:'delete_form',
     type:'POST',
     data:{
      EmployeeId:EmployeeId,
      Flag : "Delete Employee"
     },
     success:function(data){
        if(data=='1'){
            const TYPES = ['success'],
          TITLES = {
              'success': 'Awesome!'
          },
          CONTENT = {
              'success': 'Delete Successfully'
          };
      var type = TYPES[Math.floor(Math.random() * TYPES.length)],
          content = CONTENT[type];
      $.snack(type, content);
      $("#delete_modal").hide();
      $('body').removeClass('modal-open');
         setTimeout(function(){
            $('#deleteloader').hide();
            $(".deletesubmit").show();
            $(".toast").hide();
            $('.overlay').hide();
          $('.modal-backdrop').remove();
          DisplayEmployee();
        },900);
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
          $(".deletesubmit").show();
            $('#deleteloader').hide();
            $(".toast").hide();
            $('.overlay').hide();
        },900);
        }
     }
  });
}
function EditData(Employee_Id)
{
  var Name1 = $("#Name1").val();
  var Phone1 = $("#Phone1").val();
  var Description1 = $("#Description1").val();
  var Code1 = $("#Code1").val();
  var Rate1 = $("#Rate1").val();
  var OtRate1 = $("#OtRate1").val();
  var Designation1 = $("#Designation1").val();
  
      var div= document.createElement("div");
        div.className += "overlay";
        document.body.appendChild(div);
        $('.editsubmit').hide();
        $(".editCancelsubmit").hide();
        $('#editloader').show();
    $.ajax({
     url:'edit_Employee_form',
     type:'POST',
     data:{
          Name1:Name1,
          Phone1:Phone1,
          Description1:Description1,
          Code1:Code1,
          Rate1:Rate1,
          OtRate1:OtRate1,
          Designation1:Designation1,
          Employee_Id:Employee_Id
     },
     success:function(data){
        if(data=='1'){
            const TYPES = ['success'],
          TITLES = {
              'success': 'Awesome!'
          },
          CONTENT = {
              'success': 'Employee Edit Successfully'
          };
      var type = TYPES[Math.floor(Math.random() * TYPES.length)],
          content = CONTENT[type];
        $.snack(type, content);
        $("#EditDepartment").hide();
        $('body').removeClass('modal-open');
         setTimeout(function(){
          $(".editsubmit").show();
          $(".editCancelsubmit").show();
            $('#editloader').hide();
            $(".toast").hide();
            $('.overlay').hide();
            $("#Editform").hide();
            $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();
          DisplayEmployee();
        },900);
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
                    $(".editCancelsubmit").show();
                    $(".editsubmit").show();
                    $('#editloader').hide();
                    $(".toast").hide();
                    $('.overlay').hide();
                },900);
            }
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
  var Name = $("#Name").val();
  var Phone = $("#Phone").val();
  var Description = $("#Description").val();
  var Code = $("#Code").val();
  var Rate = $("#Rate").val();
  var OtRate = $("#OtRate").val();
  var Designation = $("#Designation").val();
  
      var div= document.createElement("div");
        div.className += "overlay";
        document.body.appendChild(div);
        $('.submit').hide();
        $('.Savedata').hide();
        $('#saveloader').show();
    $.ajax({
     url:'Employee_form',
     type:'POST',
     data:{
        Name:Name,
        Phone:Phone,
        Description:Description,
        Code:Code,
        Rate:Rate,
        OtRate:OtRate,
        Designation:Designation
     },
     success:function(data){
        if(data==1){
            const TYPES = ['success'],
          TITLES = {
              'success': 'Awesome!'
          },
          CONTENT = {
              'success': 'Employee Add Successfully'
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
          DisplayEmployee();
        },500);
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
                  DisplayEmployee();
                },500);
            }
     }
  });
}
</script>
