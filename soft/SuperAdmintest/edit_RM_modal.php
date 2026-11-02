<?php
include("../config.php");
if(isset($_POST))
{
extract($_POST);
$SqlRM=mysqli_query($con,"SELECT * FROM tblRM WHERE id='".$RMId."'");
$CountRM=mysqli_num_rows($SqlRM);
$RowRM=mysqli_fetch_array($SqlRM);
echo'
  <form id="Editform" name="Editform" class="form-horizontal">
      <div class="form-body">
          <hr class="m-t-0 m-b-40">
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="control-label text-right col-md-3">Name</label>
                      <div class="col-md-9">
                          <input type="text" class="form-control editrequired" placeholder="Name" name="Name1" id="Name1" value="'.$RowRM['Name'].'">
                      </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="control-label text-right col-md-3">Phone</label>
                      <div class="col-md-9">
                          <input type="text" class="form-control editrequired" placeholder="Phone" name="Phone1" id="Phone1" value="'.$RowRM['Phone'].'">
                      </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="control-label text-right col-md-3">UserName</label>
                      <div class="col-md-9">
                          <input type="text" class="form-control editrequired" placeholder="UserName" name="UserName1" id="UserName1" value="'.$RowRM['UserName'].'">
                      </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="control-label text-right col-md-3">Password</label>
                      <div class="col-md-9">
                          <input type="text" class="form-control editrequired" placeholder="Password" name="Password1" id="Password1" value="'.$RowRM['Password'].'">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <hr>
      <input type="hidden" class="form-control editrequired" name="RM_Id" id="RM_Id" value="'.$RMId.'">
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
    var RM_Id = $('#RM_Id').val();
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
      EditData(RM_Id);
    }
  });
});
</script>