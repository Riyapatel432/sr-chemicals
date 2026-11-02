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
                                    <div class="form-group col-md-3"></div>                         
                                    <div class="form-group col-md-3">
                                        <input type="date" name="selectDate" id="selectDate" class="form-control required" placeholder="--selectDate--" value="<?php echo date('Y-m-d');?>" onchange="GetOrderNo()">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="Name" id="Name" class="form-control required" placeholder="Party Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="InvoiceNo" id="InvoiceNo" class="form-control required" placeholder="--PurchaseNo--" readonly>
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
        url:'display_Purchase_form',
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
        Flag : "Find Invoice No"
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
          $('#myTable tbody').append('<tr><td><select class="select2 form-control Product required" name="Product[]" id="Product" ><option value="">--Select Product--</option><?php $SqliProduct=mysqli_query($con,"SELECT * FROM tblProduct WHERE Status='0'");while($RowProduct=mysqli_fetch_array($SqliProduct)){ echo'<option value="'.$RowProduct['id'].'">'.$RowProduct['Name'].'</option>';}?></select></td><td><input type="text" name="Unit[]" id="Unit" class="form-control Unit required" placeholder="--Unit--"></td><td><input type="text" name="Qty[]" id="Qty" class="form-control Qty required" placeholder="--Qty--"></td><td><input type="date" name="reqDate[]" id="reqDate" class="form-control reqDate required" placeholder="--Date--"></td><td><input type="text" name="Narration[]" id="Narration" class="form-control Narration" placeholder="--Narration--"></td><td><button type="button" class="btn btn-warning AddMore"><i class="fa fa-plus"></i></button> <button type="button" class="btn btn-danger removeRegular"><i class="ti-trash"></i></button></td></tr>');
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
  var selectDate = $("#selectDate").val();
  var Name = $("#Name").val();
  var InvoiceNo = $("#InvoiceNo").val();
  var Product =document.getElementsByName('Product[]');
  var Qty =document.getElementsByName('Qty[]');
  var reqDate =document.getElementsByName('reqDate[]');
  var Narration =document.getElementsByName('Narration[]');
  
    var length=Product.length;
    var myProduct=[];
    var myQty=[];
    var myreqDate=[];
    var myNarration=[];
    
    for(var i=0; i < length; i++)
    {
        myProduct.push(Product[i].value);
        myQty.push(Qty[i].value);
        myreqDate.push(reqDate[i].value);
        myNarration.push(Narration[i].value);
    }
    
    var HiddenmyProduct = myProduct.join('$$');
    var HiddenmyQty = myQty.join('$$');
    var HiddenmyreqDate = myreqDate.join('$$');
    var HiddenmyNarration = myNarration.join('$$');
    
    $("#myProducthide").val(HiddenmyProduct);
    $("#myQtyhide").val(HiddenmyQty);
    $("#myreqDatehide").val(HiddenmyreqDate);
    $("#myNarrationhide").val(HiddenmyNarration);
    var formData = new FormData($("#savedata")[0]);
   
      var div= document.createElement("div");
        div.className += "overlay";
        document.body.appendChild(div);
        $('.submit').hide();
        $('.gfgf').hide();
        $('#saveloader').show();
        $('.overlay').show();
    $.ajax({
     url:'Purchase_form',
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
              'success': 'Purchaseorder Add Successfully'
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