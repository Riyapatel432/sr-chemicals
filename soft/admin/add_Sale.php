<?php  include('header.php');?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <form class="form-horizontal mt-4" id="savedata">
                                <div class="row">
                                    <div class="form-group col-md-3"></div>
                                    <div class="form-group col-md-3"></div>
                                    <div class="form-group col-md-3">
                                        <lable>Payment Method</lable>
                                        <input type="text" name="Payment" id="Payment" class="form-control" placeholder="Payment Method">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <lable>Dispatch Date</lable>
                                        <input type="date" name="Dispatch" id="Dispatch" class="form-control required">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <lable>PO Number</lable>
                                        <input type="text" name="ponumber" id="ponumber" class="form-control required" placeholder="PO Number">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <lable>PO Date</lable>
                                        <input type="date" name="podate" id="podate" class="form-control required">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <lable>Party Name</lable>
                                        <input type="text" name="Name" id="Name" class="form-control" placeholder="Party Name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <lable>Narration</lable>
                                        <input type="text" name="Narration" id="Narration" class="form-control" placeholder="Narration">
                                    </div>
                                </div>
                                <div  id="PurchaseDeatilsform"></div>
                                <input type="hidden" name="bill_no" id="bill_no">
                                <input type="hidden" name="financ_year" id="financ_year">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
<?php include('footer.php');?>
<script>
orderdata12();
function orderdata12(){
    var Dealer = $("#Dealer").val();
    $.ajax({
        url:'display_Sale_form',
        type:'POST',
        data:{
            Dealer:Dealer
        },
        success:function(data){
         $("#PurchaseDeatilsform").html(data);
         GetOrderNo();
        }
     });
}
function GetOrderNo(){
  var selectDate = $("#selectDate").val();
  $.ajax({
      url:'get_order_no',
      type:'POST',
      data:{
        selectDate : selectDate,
        Flag : "Find Purchase No"
      },
      success:function(data){
        data = data.split(',');
        $("#bill_no").val(data[0]);
        $("#financ_year").val(data[1]);
        $("#InvoiceNo").val(data[2]);
      }
   });
}
$(document).on('click','.AddMore', function(){
    var $this = $(this);
    var parentDiv = $(this).closest("tr");
    emptyInputs=parentDiv.find(".required").filter(function(){
            return !this.value;
    });
          $this.closest("tr").find(".AddMore").hide();
          $(".select2").select2();
          $('#myTable tbody').append('<tr><td><select class="select2 form-control Product required" name="Product[]" id="Product" ><option value="">--Select Product--</option><?php $SqliProduct=mysqli_query($con,"SELECT * FROM tblProduct WHERE Status='0'");while($RowProduct=mysqli_fetch_array($SqliProduct)){ echo'<option value="'.$RowProduct['id'].'">'.$RowProduct['Name'].'</option>';}?></select></td><td><input type="text" name="Unit[]" id="Unit" class="form-control Unit required" placeholder="--Unit--"></td><td><input type="text" name="Qty[]" id="Qty" class="form-control Qty required" placeholder="--Qty--"></td><td><input type="text" name="Rate[]" id="Rate" class="form-control Rate required" placeholder="--Rate--"></td><td><button type="button" class="btn btn-warning AddMore"><i class="fa fa-plus"></i></button> <button type="button" class="btn btn-danger removeRegular"><i class="ti-trash"></i></button></td></tr>');
           $(".select2").select2();
            
});
$(document).on('click','.removeRegular', function(){
    $(".select2").select2();
      var $this = $(this);
     $(this).parents('tr').prev().find(".AddMore").show();
     $(this).closest('tr').remove();
     $(".select2").select2();
});

function SaveData()
{
  var Payment = $("#Payment").val();
  var Dispatch = $("#Dispatch").val();
  var ponumber = $("#ponumber").val();
  var podate = $("#podate").val();
  var Name = $("#Name").val();
  var Narration = $("#Narration").val();
  var Product =document.getElementsByName('Product[]');
  var Qty =document.getElementsByName('Qty[]');
  var Rate =document.getElementsByName('Rate[]');
  var Unit =document.getElementsByName('Unit[]');
  
    var length=Product.length;
    var myProduct=[];
    var myQty=[];
    var myRate=[];
    var myUnit=[];
    
    for(var i=0; i < length; i++)
    {
        myProduct.push(Product[i].value);
        myQty.push(Qty[i].value);
        myRate.push(Rate[i].value);
        myUnit.push(Unit[i].value);
    }
    
    var HiddenmyProduct = myProduct.join('$$');
    var HiddenmyQty = myQty.join('$$');
    var HiddenmyRate = myRate.join('$$');
    var HiddenmyUnit = myUnit.join('$$');
    
    $("#myProducthide").val(HiddenmyProduct);
    $("#myQtyhide").val(HiddenmyQty);
    $("#myRatehide").val(HiddenmyRate);
    $("#myUnithide").val(HiddenmyUnit);
    var formData = new FormData($("#savedata")[0]);
   
      var div= document.createElement("div");
        div.className += "overlay";
        document.body.appendChild(div);
        $('.submit').hide();
        $('.gfgf').hide();
        $('#saveloader').show();
        $('.overlay').show();
    $.ajax({
     url:'Sale_form',
     type:'POST',
     data: formData,
          processData: false,
          contentType: false,
     success:function(data){
        if(data!=''){
            const TYPES = ['success'],
          TITLES = {
              'success': 'Awesome!'
          },
          CONTENT = {
              'success': ' Add Successfully'
          };
      var type = TYPES[Math.floor(Math.random() * TYPES.length)],
          content = CONTENT[type];
      $.snack(type, content);
         setTimeout(function(){
          $(".submit").show();
          $(".gfgf").show();
            $('#saveloader').hide();
            $(".toast").hide();
            $('.overlay').hide();
            window. location. reload();
        },500);
        }
         else{
             const TYPES = ['error'],
             TITLES = {
                'error': 'Awesome!'
              },
              CONTENT = {
                  'error': 'Something went wrong'
              };
              var type = TYPES[Math.floor(Math.random() * TYPES.length)],
                  content = CONTENT[type];
              $.snack(type, content);
                 setTimeout(function(){
                  $(".submit").show();
                  $(".gfgf").show();
                    $('#saveloader').hide();
                    $(".toast").hide();
                    $('.overlay').hide();
                },500);
            }
     }
  });
}
</script>