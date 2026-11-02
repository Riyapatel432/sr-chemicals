<?php
include("../config.php");
$SqlDesignation=mysqli_query($con,"SELECT * FROM tblDesignation WHERE Status='0' ORDER BY CreatedDate DESC");
$CountDesignation=mysqli_num_rows($SqlDesignation);
if($CountDesignation > 0)
{
   echo'<table id="config-table" class="table display table-striped">
       <thead>
           <tr>
               <th>SrNo</th>
               <th>Designation</th>
               <th>CreatedDate</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>';
       $SrNo=0;
       while($RowDesignation=mysqli_fetch_array($SqlDesignation))
       {
           $SrNo++;
           
           echo'<tr>
               <td>'.$SrNo.'</td>
               <td>'.$RowDesignation['Name'].'</td>
               <td>'.$RowDesignation['CreatedDate'].'</td>
               <td><div class="btn-group">
                   <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="ti-settings"></i>
                   </button>
                   <div class="dropdown-menu animated flipInX">
                       <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#EditDepartment" onclick="EditModel('.$RowDesignation['id'].')">Edit</a>
                       <a class="dropdown-item" href="javascript:void(0)" onclick="DeleteModel('.$RowDesignation['id'].')" data-toggle="modal" data-target="#delete_modal">Delete</a>
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
              <h4 class="modal-title" id="longmodal">View Designation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>Designation Info</h4>
              <div id="viewmodalfoDesignation"></div>
          </div>
      </div>
  </div>
</div>
<div class="modal long-modal" id="EditDepartment" tabindex="-1" role="dialog" aria-labelledby="longmodal" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="longmodal">Edit Designation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>Designation Info</h4>
              <div id="editmodalfoDesignation"></div>
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
			    <foDesignation id="deletefoDesignation" name="deletefoDesignation" class="foDesignation-horizontal">
                  <div class="foDesignation-body">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="foDesignation-group row">
                                  <div class="col-md-12"> 
                                    <h3>Are you sure you want to delete </h3>  
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <hr>
                  <div class="foDesignation-actions">
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
              </foDesignation>
			</div>
		</div>
	</div>
</div>
<script>
$('#config-table').DataTable({
    responsive: true
});
function ViewModel(DesignationId)
{
  $.ajax({
         url:'view_Designation_modal',
         type:'POST',
         data:{
           DesignationId:DesignationId
         },
         success:function(data){
          $("#viewmodalfoDesignation").html(data);
         }
      });
}
function EditModel(DesignationId)
{
  $.ajax({
         url:'edit_Designation_modal',
         type:'POST',
         data:{
           DesignationId:DesignationId
         },
         success:function(data){
          $("#editmodalfoDesignation").html(data);
         }
      });
}
function DeleteModel(DesignationId)
{
  $.ajax({
     url:'delete_model',
     type:'POST',
     data:{
      DesignationId:DesignationId,
      Flag : "Delete Designation"
     },
     success:function(data){
      $("#DeleteModel").html(data);
     }
  });
}
</script>
