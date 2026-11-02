<?php
include("../config.php");
$SqlLoan=mysqli_query($con,"SELECT * FROM tbLoan_ledger WHERE Status='0' AND ToUser!='0' ORDER BY CreatedDate DESC");
$CountLoan=mysqli_num_rows($SqlLoan);
if($CountLoan > 0)
{
   echo'<table id="config-table" class="table display table-striped">
       <thead>
           <tr>
               <th>SrNo</th>
               <th>Employee</th>
               <th>Loan</th>
               <th>CreatedDate</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>';
       $SrNo=0;
       while($RowLoan=mysqli_fetch_array($SqlLoan))
       {
           $SrNo++;
            $SqliEmployee=mysqli_query($con,"SELECT * FROM tblEmployee WHERE id='".$RowLoan['ToUser']."'");
            $RowEmployee=mysqli_fetch_array($SqliEmployee);
            $SqliDesignation=mysqli_query($con,"SELECT * FROM tblDesignation WHERE id='".$RowEmployee['Designation']."'");
            $RowDesignation=mysqli_fetch_array($SqliDesignation);
           
           echo'<tr>
               <td>'.$SrNo.'</td>
               <td>'.$RowEmployee['Name'].' ('.$RowDesignation['Name'].')</td>
               <td>'.$RowLoan['Amount'].'</td>
               <td>'.$RowLoan['CreatedDate'].'</td>
               <td><div class="btn-group">
                   <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="ti-settings"></i>
                   </button>
                   <div class="dropdown-menu animated flipInX">
                       <a class="dropdown-item" href="javascript:void(0)" onclick="DeleteModel('.$RowLoan['id'].')" data-toggle="modal" data-target="#delete_modal">Delete</a>
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
              <h4 class="modal-title" id="longmodal">View Loan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>Loan Info</h4>
              <div id="viewmodalfoLoan"></div>
          </div>
      </div>
  </div>
</div>
<div class="modal long-modal" id="EditDepartment" tabindex="-1" role="dialog" aria-labelledby="longmodal" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="longmodal">Edit Loan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>Loan Info</h4>
              <div id="editmodalfoLoan"></div>
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
			    <foLoan id="deletefoLoan" name="deletefoLoan" class="foLoan-horizontal">
                  <div class="foLoan-body">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="foLoan-group row">
                                  <div class="col-md-12"> 
                                    <h3>Are you sure you want to delete </h3>  
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <hr>
                  <div class="foLoan-actions">
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
              </foLoan>
			</div>
		</div>
	</div>
</div>
<script>
$('#config-table').DataTable({
    responsive: true
});
function ViewModel(LoanId)
{
  $.ajax({
         url:'view_Loan_modal',
         type:'POST',
         data:{
           LoanId:LoanId
         },
         success:function(data){
          $("#viewmodalfoLoan").html(data);
         }
      });
}
function EditModel(LoanId)
{
  $.ajax({
         url:'edit_Loan_modal',
         type:'POST',
         data:{
           LoanId:LoanId
         },
         success:function(data){
          $("#editmodalfoLoan").html(data);
         }
      });
}
function DeleteModel(LoanId)
{
  $.ajax({
     url:'delete_model',
     type:'POST',
     data:{
      LoanId:LoanId,
      Flag : "Delete Loan"
     },
     success:function(data){
      $("#DeleteModel").html(data);
     }
  });
}
</script>
