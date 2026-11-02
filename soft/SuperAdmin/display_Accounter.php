<?php
include("../config.php");
$SqlAccounter=mysqli_query($con,"SELECT * FROM tblAccounter WHERE Status='0' ORDER BY CreatedDate DESC");
$CountAccounter=mysqli_num_rows($SqlAccounter);
if($CountAccounter > 0)
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
       while($RowAccounter=mysqli_fetch_array($SqlAccounter))
       {
           $SrNo++;
           
           echo'<tr>
               <td>'.$SrNo.'</td>
               <td>'.$RowAccounter['Name'].'</td>
               <td>'.$RowAccounter['Phone'].'</td>
               <td>'.$RowAccounter['UserName'].'</td>
               <td>'.$RowAccounter['CreatedDate'].'</td>
               <td><div class="btn-group">
                   <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="ti-settings"></i>
                   </button>
                   <div class="dropdown-menu animated flipInX">
                       <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#EditDepartment" onclick="EditModel('.$RowAccounter['id'].')">Edit</a>
                       <a class="dropdown-item" href="javascript:void(0)" onclick="DeleteModel('.$RowAccounter['id'].')" data-toggle="modal" data-target="#delete_modal">Delete</a>
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
              <h4 class="modal-title" id="longmodal">View Accounter</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>Accounter Info</h4>
              <div id="viewmodalfoAccounter"></div>
          </div>
      </div>
  </div>
</div>
<div class="modal long-modal" id="EditDepartment" tabindex="-1" role="dialog" aria-labelledby="longmodal" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="longmodal">Edit Accounter</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>Accounter Info</h4>
              <div id="editmodalfoAccounter"></div>
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
			    <foAccounter id="deletefoAccounter" name="deletefoAccounter" class="foAccounter-horizontal">
                  <div class="foAccounter-body">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="foAccounter-group row">
                                  <div class="col-md-12"> 
                                    <h3>Are you sure you want to delete </h3>  
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <hr>
                  <div class="foAccounter-actions">
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
              </foAccounter>
			</div>
		</div>
	</div>
</div>
<script>
$('#config-table').DataTable({
    responsive: true
});
function ViewModel(AccounterId)
{
  $.ajax({
         url:'view_Accounter_modal',
         type:'POST',
         data:{
           AccounterId:AccounterId
         },
         success:function(data){
          $("#viewmodalfoAccounter").html(data);
         }
      });
}
function EditModel(AccounterId)
{
  $.ajax({
         url:'edit_Accounter_modal',
         type:'POST',
         data:{
           AccounterId:AccounterId
         },
         success:function(data){
          $("#editmodalfoAccounter").html(data);
         }
      });
}
function DeleteModel(AccounterId)
{
  $.ajax({
     url:'delete_model',
     type:'POST',
     data:{
      AccounterId:AccounterId,
      Flag : "Delete Accounter"
     },
     success:function(data){
      $("#DeleteModel").html(data);
     }
  });
}
</script>
