<?php
include("../config.php");
if(isset($_POST))
{
extract($_POST);
$SqlDesignation=mysqli_query($con,"SELECT * FROM tblDesignation WHERE id='".$DesignationId."'");
$CountDesignation=mysqli_num_rows($SqlDesignation);
$RowDesignation=mysqli_fetch_array($SqlDesignation);
echo'
  <form id="Editform" name="Editform" class="form-horizontal">
      <div class="form-body">
          <hr class="m-t-0 m-b-40">
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="control-label text-right col-md-3">Designation Name</label>
                      <div class="col-md-9">
                          <input type="text" class="form-control editrequired" placeholder="Designation Name" name="Name1" id="Name1" value="'.$RowDesignation['Name'].'">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <hr>
      <input type="hidden" class="form-control editrequired" name="Designation_Id" id="Designation_Id" value="'.$DesignationId.'">
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
    var Designation_Id = $('#Designation_Id').val();
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
      EditData(Designation_Id);
    }
  });
});
</script>