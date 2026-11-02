<?php
include("../config.php");
extract($_POST);
echo'
    <div class="row">
        <table id="myTable" class="table display table-bordered table-striped no-wrap">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Unit</th>
                    <th>Qty</th>
                    <th>Date</th>
                    <th>Narration</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select class="select2 form-control Product required" name="Product[]" id="Product" >
                            <option value="">--Select Product--</option>';
                            $SqliProduct=mysqli_query($con,"SELECT * FROM tblProduct WHERE Status='0'");
                            while($RowProduct=mysqli_fetch_array($SqliProduct))
                            {
                                echo'<option value="'.$RowProduct['id'].'">'.$RowProduct['Name'].'</option>';
                            }
                            echo'
                        </select>
                    </td>
                    <td><input type="text" name="Unit[]" id="Unit" class="form-control Unit required" placeholder="--Unit--"></td>
                    <td><input type="text" name="Qty[]" id="Qty" class="form-control Qty required" placeholder="--Qty--"></td>
                    <td><input type="date" name="reqDate[]" id="reqDate" class="form-control reqDate required" placeholder="--Date--"></td>
                    <td><input type="text" name="Narration[]" id="Narration" class="form-control Narration" placeholder="--Narration--"></td>
                    <td><button type="button" class="btn btn-warning AddMore"><i class="fa fa-plus"></i></button></td>
                </tr>
            </tbody>
            <input type="hidden" id="myProducthide" name="myProducthide">
            <input type="hidden" id="myQtyhide" name="myQtyhide">
            <input type="hidden" id="myreqDatehide" name="myreqDatehide">
            <input type="hidden" id="myNarrationhide" name="myNarrationhide">
            <input type="hidden" id="myUnithide" name="myUnithide">
        </table>
    </div><hr>
<div>
    <img src="images/loader.gif" style="margin-top:-70px;display:none;" id="saveloader">
    <button type="button" class="btn btn-success savedata"> <i class="fa fa-check"></i> Save</button>
    <button type="button" class="btn btn-dark cancel" onclick="cancel()">Cancel</button>
</div>';
?>
<script>
$(document).ready(function(){
  $(".savedata").click(function(){
    var failed = false;
    $(".required").each(function(){
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
      SaveData();
    }
  });
});
$(".select2").select2();
$("#myTable").on('change', '.brand', function (){
  var $this = $(this);
    $.ajax({
        type : "POST",
        url : "select_Product",
        data : {
            id : $this.val(),
        },
        success:function(data){
            $this.closest("tr").find(".Product").html(data);
            var Product = $this.closest("tr").find(".Product").val();
            $this.closest("tr").find(".Colour").val("");
            $this.closest("tr").find(".imei").val("");
            $this.closest("tr").find(".qty").val("");
            $this.closest("tr").find(".Price").val("");
            $this.closest("tr").find(".Tax").val("");
            $this.closest("tr").find(".Total").val("");
        }
    });
});
$("#myTable").on('keyup', '.Price', function (){
  var $this = $(this);
  var Price = $this.closest("tr").find(".Price").val();
  $this.closest("tr").find(".Total").val(Price);
});
</script>