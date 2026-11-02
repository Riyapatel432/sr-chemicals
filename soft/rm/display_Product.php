<?php
include("../config.php");
$SqlProduct=mysqli_query($con,"SELECT * FROM tblProduct WHERE Status='0' ORDER BY CreatedDate DESC");
$CountProduct=mysqli_num_rows($SqlProduct);
if($CountProduct > 0)
{
   echo'<table id="config-table" class="table display table-striped">
       <thead>
           <tr>
               <th>SrNo</th>
               <th>Name</th>
               <th>CreatedDate</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>';
       $SrNo=0;
       while($RowProduct=mysqli_fetch_array($SqlProduct))
       {
           $SrNo++;
           
           echo'<tr>
               <td>'.$SrNo.'</td>
               <td>'.$RowProduct['Name'].'</td>
               <td>'.$RowProduct['CreatedDate'].'</td>
               <td><div class="btn-group">
                   <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="ti-settings"></i>
                   </button>
                   <div class="dropdown-menu animated flipInX">
                       <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#EditDepartment" onclick="EditModel('.$RowProduct['id'].')">Edit</a>
                       <a class="dropdown-item" href="javascript:void(0)" onclick="DeleteModel('.$RowProduct['id'].')" data-toggle="modal" data-target="#delete_modal">Delete</a>
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
              <h4 class="modal-title" id="longmodal">View Product</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>Product Info</h4>
              <div id="viewmodalfoProduct"></div>
          </div>
      </div>
  </div>
</div>
<div class="modal long-modal" id="EditDepartment" tabindex="-1" role="dialog" aria-labelledby="longmodal" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="longmodal">Edit Product</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>Product Info</h4>
              <div id="editmodalfoProduct"></div>
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
			    <foProduct id="deletefoProduct" name="deletefoProduct" class="foProduct-horizontal">
                  <div class="foProduct-body">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="foProduct-group row">
                                  <div class="col-md-12"> 
                                    <h3>Are you sure you want to delete </h3>  
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <hr>
                  <div class="foProduct-actions">
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
              </foProduct>
			</div>
		</div>
	</div>
</div>
<script>
$('#config-table').DataTable({
    responsive: true
});
function ViewModel(ProductId)
{
  $.ajax({
         url:'view_Product_modal',
         type:'POST',
         data:{
           ProductId:ProductId
         },
         success:function(data){
          $("#viewmodalfoProduct").html(data);
         }
      });
}
function EditModel(ProductId)
{
  $.ajax({
         url:'edit_Product_modal',
         type:'POST',
         data:{
           ProductId:ProductId
         },
         success:function(data){
          $("#editmodalfoProduct").html(data);
         }
      });
}
function DeleteModel(ProductId)
{
  $.ajax({
     url:'delete_model',
     type:'POST',
     data:{
      ProductId:ProductId,
      Flag : "Delete Product"
     },
     success:function(data){
      $("#DeleteModel").html(data);
     }
  });
}
</script>
