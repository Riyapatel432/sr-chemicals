<?php
include("../config.php");
if(isset($_POST))
{
extract($_POST);
$SqlEmployee=mysqli_query($con,"SELECT * FROM tblEmployee WHERE id='".$EmployeeId."'");
$CountEmployee=mysqli_num_rows($SqlEmployee);
$RowEmployee=mysqli_fetch_array($SqlEmployee);
echo'
  <form id="Editform" name="Editform" class="form-horizontal">
      <div class="form-body">
          <hr class="m-t-0 m-b-40">
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="control-label text-right col-md-3">Designation</label>
                      <div class="col-md-9">
                        <select class="form-control" name="Designation1" id="Designation1" >
                            <option value="">--Select Designation--</option>';
                            $SqliDesignation=mysqli_query($con,"SELECT * FROM tblDesignation WHERE Status='0'");
                            while($RowDesignation=mysqli_fetch_array($SqliDesignation))
                            {
                                echo'<option value="'.$RowDesignation['id'].'"';if($RowDesignation['id']==$RowEmployee['Designation']){echo'selected';}echo'>'.$RowDesignation['Name'].'</option>';
                            }
                            echo'
                        </select>
                      </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="control-label text-right col-md-3">Name</label>
                      <div class="col-md-9">
                          <input type="text" class="form-control" placeholder="Name" name="Name1" id="Name1" value="'.$RowEmployee['Name'].'">
                      </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="control-label text-right col-md-3">Phone</label>
                      <div class="col-md-9">
                          <input type="text" class="form-control" placeholder="Phone" name="Phone1" id="Phone1" value="'.$RowEmployee['Phone'].'">
                      </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="control-label text-right col-md-3">Employee Code</label>
                      <div class="col-md-9">
                          <input type="text" class="form-control" placeholder="Employee Code" name="Code1" id="Code1" value="'.$RowEmployee['Code'].'">
                      </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="control-label text-right col-md-3">Description</label>
                      <div class="col-md-9">
                          <input type="text" class="form-control" placeholder="Description" name="Description1" id="Description1" value="'.$RowEmployee['Description'].'">
                      </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="control-label text-right col-md-3">Rate Per Day</label>
                      <div class="col-md-9">
                          <input type="text" class="form-control required" placeholder="Rate Per Day" name="Rate1" id="Rate1" onKeyup="countot1()" value="'.$RowEmployee['Rate'].'">
                      </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group row">
                      <input type="hidden" name="OtRate1" id="OtRate1">
                      <div id="otrateDiv1"></div>
                  </div>
              </div>
          </div>
      </div>
      <hr>
      <input type="hidden" class="form-control editrequired" name="Employee_Id" id="Employee_Id" value="'.$EmployeeId.'">
      <div class="form-actions">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                      <img src="images/loader.gif" style="margin-top:-70px;display:none;" id="editloader">
                      <button type="button" class="btn btn-info waves-effect waves-light m-t-10 editsubmit">Save</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light m-t-10 editCancelsubmit" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-md-12"> </div>
        </div>
    </div>
  </form>';
 }
?>
<script>
    $(document).ready(function(){
  $(".editsubmit").click(function(){
    var failed = false;
    var Employee_Id = $('#Employee_Id').val();
    $(".editrequired").each(function(){
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
      EditData(Employee_Id);
    }
  });
});
countot1();
function countot1(){
    var Rate1 = $("#Rate1").val();
    otrate121=Rate1/8;
    otrate1=Math.round(otrate121)
    $("#OtRate1").val(otrate1);
    $("#otrateDiv1").html("<p style='color:red'> Per Hour OT Rate (According to your salary) : " + otrate1 + "</p>");
}
</script>