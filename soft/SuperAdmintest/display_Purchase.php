<?php
include("../config.php");?>
<style>
#modal-dialog {
    max-width: 90%;
}
</style>
<?php 
$SqlPurchase=mysqli_query($con,"SELECT * FROM tblPurchase WHERE Status='0' ORDER BY CreatedDate DESC");
$CountPurchase=mysqli_num_rows($SqlPurchase);
if($CountPurchase > 0)
{
   echo'<table id="config-table" class="table display table-striped">
       <thead>
           <tr>
               <th>SrNo</th>
               <th>Date</th>
               <th>Order No.</th>
               <th>Party Name</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>';
       $SrNo=0;
        while($RowPurchase=mysqli_fetch_array($SqlPurchase)){
            $SrNo++;
           
           echo'<tr>
               <td>'.$SrNo.'</td>
               <td>'.$RowPurchase['selectDate'].'</td>
               <td>'.$RowPurchase['orderno'].'</td>
               <td>'.$RowPurchase['PartyName'].'</td>
               <td><div class="btn-group">
                   <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="ti-settings"></i>
                   </button>
                   <div class="dropdown-menu animated flipInX">
                       <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#ViewDepartment" onclick="ViewModel('.$RowPurchase['id'].')">View</a>
                       <a class="dropdown-item" href="javascript:void(0)" onclick="ApproveModel('.$RowPurchase['id'].')" data-toggle="modal" data-target="#approve_modal">Approve </a>
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
              <h4 class="modal-title" id="longmodal">View Purchase</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <div id="viewmodalform"></div>
          </div>
      </div>
  </div>
</div>
<div class="modal fade" id="approve_modal" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		    <div class="modal-header">
              <h4 class="modal-title" id="longmodal">Approve</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
			<div class="modal-body">
			    <form id="Approveform" name="Approveform" class="form-horizontal">
                  <div class="form-body">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <div class="col-md-12"> 
                                    <h3>You want to Approve </h3>  
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
                                  <img src="images/loader.gif" style="margin-top:-70px;display:none;" id="Approveloader">
                                    <div id="ApproveModel"></div>
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
         url:'view_Purchase_modal',
         type:'POST',
         data:{
           PurchaseId:PurchaseId
         },
         success:function(data){
          $("#viewmodalform").html(data);
         }
      });
}

function ApproveModel(PurchaseId)
{
  $.ajax({
     url:'delete_model',
     type:'POST',
     data:{
      PurchaseId:PurchaseId,
      Flag : "Approve Purchase"
     },
     success:function(data){
      $("#ApproveModel").html(data);
     }
  });
}
</script>
