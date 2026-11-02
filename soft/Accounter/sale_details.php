<?php
include("header.php");
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Sale List</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Sale List</li>
                    </ol>
                    <a href="add_sale" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sale Details</h4>
                        <div class="table-responsive m-t-40">
                          <div id="saleDeatils"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal long-modal" id="AddDepartment" tabindex="-1" role="dialog" aria-labelledby="longmodal" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="longmodal">Add sale</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>sale Info</h4>
              <form id="loginform" name="loginform" class="form-horizontal">
                  <div class="form-body">
                      <hr class="m-t-0 m-b-40">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Name</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control required" placeholder="Name" name="Name" id="Name">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Phone</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control required" placeholder="Phone" name="Phone" id="Phone" maxlength="10">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">UserName</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control required" placeholder="UserName" name="UserName" id="UserName">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Password</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control required" placeholder="Password" name="Password" id="Password">
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
                                  <img src="images/loader.gif" style="margin-top:-70px;display:none;" id="saveloader">
                                  <button type="button" class="btn btn-danger waves-effect waves-light m-t-10 submit" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                    <button type="button" class="btn btn-info waves-effect waves-light m-t-10 Savedata">Save</button>
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
<?php
include("footer.php");
?>
<script>
Displaysale();
function Displaysale()
{
    $.ajax({
        url:'display_sale',
        type:'GET',
        dataType:'html',
        success:function(data){
         $("#saleDeatils").html(data);
        }
     });
}

 function DeleteData(saleId)
{     
    var div= document.createElement("div");
        div.className += "overlay";
        document.body.appendChild(div);
        $('.deletesubmit').hide();
        $('#deleteloader').show();
    $.ajax({
     url:'delete_form',
     type:'POST',
     data:{
      saleId:saleId,
      Flag : "Delete sale"
     },
     success:function(data){
         
        if(data=='1'){
            const TYPES = ['success'],
          TITLES = {
              'success': 'Awesome!'
          },
          CONTENT = {
              'success': 'Delete Successfully'
          };
      var type = TYPES[Math.floor(Math.random() * TYPES.length)],
          content = CONTENT[type];
      $.snack(type, content);
      $("#delete_modal").hide();
      $('body').removeClass('modal-open');
         setTimeout(function(){
            $('#deleteloader').hide();
            $(".deletesubmit").show();
            $(".toast").hide();
            $('.overlay').hide();
          $('.modal-backdrop').remove();
          Displaysale();
        },900);
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
          $(".deletesubmit").show();
            $('#deleteloader').hide();
            $(".toast").hide();
            $('.overlay').hide();
        },900);
        }
     }
  });
}
function EditData(sale_Id)
{
  var Dealer = $("#Dealer").val();
  var Item =document.getElementsByName('Item[]');
  var qty =document.getElementsByName('qty[]');
  var Unit =document.getElementsByName('Unit[]');
  var price =document.getElementsByName('price[]');
  var tax =document.getElementsByName('tax[]');
  var total =document.getElementsByName('total[]');
  
    var length=Item.length;
    var myItem=[];
    var myqty=[];
    var myUnit=[];
    var myprice=[];
    var mytax=[];
    var mytotal=[];
    
    for(var i=0; i < length; i++)
    {
        myItem.push(Item[i].value);
        myqty.push(qty[i].value);
        myUnit.push(Unit[i].value);
        myprice.push(price[i].value);
        mytax.push(tax[i].value);
        mytotal.push(total[i].value);
    }
    
    var HiddenmyItem = myItem.join('$$');
    var Hiddenmyqty = myqty.join('$$');
    var HiddenmyUnit = myUnit.join('$$');
    var Hiddenmyprice = myprice.join('$$');
    var Hiddenmytax = mytax.join('$$');
    var Hiddenmytotal = mytotal.join('$$');
    
    $("#myItemhide").val(HiddenmyItem);
    $("#myqtyhide").val(Hiddenmyqty);
    $("#myUnithide").val(HiddenmyUnit);
    $("#mypricehide").val(Hiddenmyprice);
    $("#mytaxhide").val(Hiddenmytax);
    $("#mytotalhide").val(Hiddenmytotal);
    var formData = new FormData($("#savedata")[0]);
   
      var div= document.createElement("div");
        div.className += "overlay";
        document.body.appendChild(div);
        $('.submit').hide();
        $('.Savedata').hide();
        $('#saveloader').show();
        $('.overlay').show();
    $.ajax({
     url:'edit_sale_form',
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
              'success': 'sale Add Successfully'
          };
      var type = TYPES[Math.floor(Math.random() * TYPES.length)],
          content = CONTENT[type];
      $.snack(type, content);
        $("#EditDepartment").hide();
        $('body').removeClass('modal-open');
         setTimeout(function(){
          $(".submit").show();
          $(".Savedata").show();
            $('#saveloader').hide();
            $(".toast").hide();
            $('.overlay').hide();
            $("#Editform").hide();
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
            document.getElementById("savedata").reset();
            Displaysale();
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
                  $(".Savedata").show();
                    $('#saveloader').hide();
                    $(".toast").hide();
                    $('.overlay').hide();
                },500);
            }
     }
  });
}
</script>
