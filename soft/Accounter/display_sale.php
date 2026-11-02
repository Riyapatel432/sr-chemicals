<?php
include("../config.php");?>
<style>
#modal-dialog {
    max-width: 90%;
}
</style>
<?php 
$SqlPurchase=mysqli_query($con,"SELECT * FROM tblOrder WHERE Status='0' ORDER BY CreatedDate DESC");
$CountPurchase=mysqli_num_rows($SqlPurchase);
if($CountPurchase > 0)
{
   echo'<table id="config-table" class="table display table-striped">
       <thead>
           <tr>
               <th>SrNo</th>
               <th>User</th>
               <th>Dispatch Date</th>
               <th>PO Date</th>
               <th>PO Number</th>
               <th>Party Name</th>
               <th>Amount</th>
               <th>Payment Method</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>';
       $SrNo=0;
        while($RowPurchase=mysqli_fetch_array($SqlPurchase)){
            $SrNo++;
            $ExtractAmount = explode("$$",$RowPurchase['Rate']);
            $totalAmount='0';
            for($i=0;$i < sizeof($ExtractAmount);$i++)
            {
                $totalAmount+=$ExtractAmount[$i];
            }
            if($RowPurchase['SessionType'] == 'A'){
                $user='<span class="label label-success">Admin</span>';
            }
            else if($RowPurchase['SessionType'] == 'AC'){
                $user='<span class="label label-info">Accountant</span>';
            }
            else if($RowPurchase['SessionType'] == 'R'){
                $user='<span class="label label-warning">RM</span>';
            }
            else{
                $user='<span class="label label-danger">SuperAdmin</span>';
            }
           
           echo'<tr>
               <td>'.$SrNo.'</td>
               <td>'.$user.'</td>
               <td>'.$RowPurchase['Dispatch'].'</td>
               <td>'.$RowPurchase['podate'].'</td>
               <td>'.$RowPurchase['ponumber'].'</td>
               <td>'.$RowPurchase['Name'].' ('.$RowPurchase['Narration'].')</td>
               <td>'.$totalAmount.'</td>
               <td>'.$RowPurchase['Payment'].'</td>
               <td><div class="btn-group">
                   <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="ti-settings"></i>
                   </button>
                   <div class="dropdown-menu animated flipInX">
                       <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#ViewDepartment" onclick="ViewModel('.$RowPurchase['id'].')">View</a>
                       <a class="dropdown-item" href="javascript:void(0)" onclick="DeleteModel('.$RowPurchase['id'].')" data-toggle="modal" data-target="#delete_modal">Delete</a>
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
<div class="modal long-modal" id="ViewDepartment" tabindex="-1" role="dialog" aria-labelledby="longmodal" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" id="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="longmodal">View Sale</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>Sale Info</h4>
              <div id="viewmodalform"></div>
          </div>
      </div>
  </div>
</div>
<div class="modal long-modal" id="EditDepartment" tabindex="-1" role="dialog" aria-labelledby="longmodal" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" id="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="longmodal">Edit Purchase</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>Purchase Info</h4>
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
function ViewModel(PurchaseId)
{
  $.ajax({
         url:'view_sale_modal',
         type:'POST',
         data:{
           PurchaseId:PurchaseId
         },
         success:function(data){
          $("#viewmodalform").html(data);
         }
      });
}
function EditModel(PurchaseId)
{
  $.ajax({
         url:'edit_Purchase_modal',
         type:'POST',
         data:{
           PurchaseId:PurchaseId
         },
         success:function(data){
          $("#editmodalform").html(data);
         }
      });
}
function DeleteModel(PurchaseId)
{
  $.ajax({
     url:'delete_model',
     type:'POST',
     data:{
      PurchaseId:PurchaseId,
      Flag : "Delete Sale"
     },
     success:function(data){
      $("#DeleteModel").html(data);
     }
  });
}
</script>
