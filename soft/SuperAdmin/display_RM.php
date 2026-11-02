<?php
include("../config.php");
$SqlRM=mysqli_query($con,"SELECT * FROM tblRM WHERE Status='0' ORDER BY CreatedDate DESC");
$CountRM=mysqli_num_rows($SqlRM);
if($CountRM > 0)
{
   echo'<table id="config-table" class="table display table-striped">
       <thead>
           <tr>
               <th>SrNo</th>
               <th>Name</th>
               <th>Phone</th>
               <th>UserName</th>
               <th>CreatedDate</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>';
       $SrNo=0;
       while($RowRM=mysqli_fetch_array($SqlRM))
       {
           $SrNo++;
           
           echo'<tr>
               <td>'.$SrNo.'</td>
               <td>'.$RowRM['Name'].'</td>
               <td>'.$RowRM['Phone'].'</td>
               <td>'.$RowRM['UserName'].'</td>
               <td>'.$RowRM['CreatedDate'].'</td>
               <td><div class="btn-group">
                   <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="ti-settings"></i>
                   </button>
                   <div class="dropdown-menu animated flipInX">
                       <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#EditDepartment" onclick="EditModel('.$RowRM['id'].')">Edit</a>
                       <a class="dropdown-item" href="javascript:void(0)" onclick="DeleteModel('.$RowRM['id'].')" data-toggle="modal" data-target="#delete_modal">Delete</a>
                   </div>
               </div></td> 
            </tr>';
         }
       echo'</tbody>
   </table>';
}
else{
  echo'<center><h4>Oopps! Data Not Found</h4></center>';
}
?>
<div class="modal long-modal" id=" ViewDepartment" tabindex="-1" role="dialog" aria-labelledby="longmodal" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="longmodal">View RM</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>RM Info</h4>
              <div id="viewmodalform"></div>
          </div>
      </div>
  </div>
</div>
<div class="modal long-modal" id="EditDepartment" tabindex="-1" role="dialog" aria-labelledby="longmodal" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="longmodal">Edit RM</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>RM Info</h4>
              <div id="editmodalform"></div>
          </div>
      </div>
  </div>
</div>
<div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document" >
		<div class="modal-content">
		    <div class="modal-header">
              <h4 class="modal-title" id="longmodal">Delete</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
			<div class="modal-body">
			    <form id="deleteform" name="deleteform" class="form-horizontal">
                  <div class="form-body">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <div class="col-md-12"> 
                                    <h3>Are you sure you want to delete </h3>  
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
                                  <img src="images/loader.gif" style="margin-top:-70px;display:none;" id="deleteloader">
                                    <div id="DeleteModel"></div>
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
<script>
$('#config-table').DataTable({
    responsive: true
});
function ViewModel(RMId)
{
  $.ajax({
         url:'view_RM_modal',
         type:'POST',
         data:{
           RMId:RMId
         },
         success:function(data){
          $("#viewmodalform").html(data);
         }
      });
}
function EditModel(RMId)
{
  $.ajax({
         url:'edit_RM_modal',
         type:'POST',
         data:{
           RMId:RMId
         },
         success:function(data){
          $("#editmodalform").html(data);
         }
      });
}
function DeleteModel(RMId)
{
  $.ajax({
     url:'delete_model',
     type:'POST',
     data:{
      RMId:RMId,
      Flag : "Delete RM"
     },
     success:function(data){
      $("#DeleteModel").html(data);
     }
  });
}
</script>
