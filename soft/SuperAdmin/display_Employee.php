<?php
include("../config.php");
$SqlEmployee=mysqli_query($con,"SELECT * FROM tblEmployee WHERE Status='0' ORDER BY CreatedDate DESC");
$CountEmployee=mysqli_num_rows($SqlEmployee);
if($CountEmployee > 0)
{
   echo'<table id="config-table" class="table display table-striped">
       <thead>
           <tr>
               <th>SrNo</th>
               <th>Designation</th>
               <th>Name</th>
               <th>Phone</th>
               <th>Description</th>
               <th>Code</th>
               <th>Rate</th>
               <th>OT</th>
               <th>CreatedDate</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>';
       $SrNo=0;
       while($RowEmployee=mysqli_fetch_array($SqlEmployee))
       {
           $SrNo++;
           $SqliDesignation=mysqli_query($con,"SELECT * FROM tblDesignation WHERE id='".$RowEmployee['Designation']."'");
           $RowDesignation =mysqli_fetch_array($SqliDesignation);
           
           echo'<tr>
               <td>'.$SrNo.'</td>
               <td>'.$RowDesignation['Name'].'</td>
               <td>'.$RowEmployee['Name'].'</td>
               <td>'.$RowEmployee['Phone'].'</td>
               <td>'.$RowEmployee['Description'].'</td>
               <td>'.$RowEmployee['Code'].'</td>
               <td>'.$RowEmployee['Rate'].'</td>
               <td>'.$RowEmployee['OtRate'].'</td>
               <td>'.$RowEmployee['CreatedDate'].'</td>
               <td><div class="btn-group">
                   <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="ti-settings"></i>
                   </button>
                   <div class="dropdown-menu animated flipInX">
                       <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#EditDepartment" onclick="EditModel('.$RowEmployee['id'].')">Edit</a>
                       <a class="dropdown-item" href="javascript:void(0)" onclick="DeleteModel('.$RowEmployee['id'].')" data-toggle="modal" data-target="#delete_modal">Delete</a>
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
              <h4 class="modal-title" id="longmodal">View Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>Employee Info</h4>
              <div id="viewmodalfoEmployee"></div>
          </div>
      </div>
  </div>
</div>
<div class="modal long-modal" id="EditDepartment" tabindex="-1" role="dialog" aria-labelledby="longmodal" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="longmodal">Edit Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>Employee Info</h4>
              <div id="editmodalfoEmployee"></div>
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
			    <foEmployee id="deletefoEmployee" name="deletefoEmployee" class="foEmployee-horizontal">
                  <div class="foEmployee-body">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="foEmployee-group row">
                                  <div class="col-md-12"> 
                                    <h3>Are you sure you want to delete </h3>  
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <hr>
                  <div class="foEmployee-actions">
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
              </foEmployee>
			</div>
		</div>
	</div>
</div>
<script>
$('#config-table').DataTable({
    responsive: true
});
function ViewModel(EmployeeId)
{
  $.ajax({
         url:'view_Employee_modal',
         type:'POST',
         data:{
           EmployeeId:EmployeeId
         },
         success:function(data){
          $("#viewmodalfoEmployee").html(data);
         }
      });
}
function EditModel(EmployeeId)
{
  $.ajax({
         url:'edit_Employee_modal',
         type:'POST',
         data:{
           EmployeeId:EmployeeId
         },
         success:function(data){
          $("#editmodalfoEmployee").html(data);
         }
      });
}
function DeleteModel(EmployeeId)
{
  $.ajax({
     url:'delete_model',
     type:'POST',
     data:{
      EmployeeId:EmployeeId,
      Flag : "Delete Employee"
     },
     success:function(data){
      $("#DeleteModel").html(data);
     }
  });
}
</script>
