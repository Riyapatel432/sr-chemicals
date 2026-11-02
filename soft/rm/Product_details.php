<?php
include("header.php");
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Product List</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ol>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#AddDepartment" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Product Details</h4>
                        <div class="table-responsive m-t-40">
                          <div id="ProductDeatils"></div>
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
              <h4 class="modal-title" id="longmodal">Add Product</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h4>Product Info</h4>
              <form id="loginform" name="loginform" class="form-horizontal">
                  <div class="form-body">
                      <hr class="m-t-0 m-b-40">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Product Name</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control required" placeholder="Product Name" name="Name" id="Name">
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
                                  <button type="button" class="btn btn-info waves-effect waves-light m-t-10 Savedata">Save</button>
                                  <button type="button" class="btn btn-danger waves-effect waves-light m-t-10 submit" data-dismiss="modal" aria-hidden="true">Cancel</button>
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
DisplayProduct();
function DisplayProduct()
{
    $.ajax({
        url:'display_Product',
        type:'GET',
        dataType:'html',
        success:function(data){
         $("#ProductDeatils").html(data);
        }
     });
}

function DeleteData(ProductId)
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
      ProductId:ProductId,
      Flag : "Delete Product"
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
          DisplayProduct();
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
function EditData(Product_Id)
{
  var Name1 = $("#Name1").val();
  
      var div= document.createElement("div");
        div.className += "overlay";
        document.body.appendChild(div);
        $('.editsubmit').hide();
        $(".editCancelsubmit").hide();
        $('#editloader').show();
    $.ajax({
     url:'edit_Product_form',
     type:'POST',
     data:{
          Name1:Name1,
          Product_Id:Product_Id
     },
     success:function(data){
        if(data=='1'){
            const TYPES = ['success'],
          TITLES = {
              'success': 'Awesome!'
          },
          CONTENT = {
              'success': 'Product Edit Successfully'
          };
      var type = TYPES[Math.floor(Math.random() * TYPES.length)],
          content = CONTENT[type];
        $.snack(type, content);
        $("#EditDepartment").hide();
        $('body').removeClass('modal-open');
         setTimeout(function(){
          $(".editsubmit").show();
          $(".editCancelsubmit").show();
            $('#editloader').hide();
            $(".toast").hide();
            $('.overlay').hide();
            $("#Editform").hide();
            $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();
          DisplayProduct();
        },900);
        }
          
        else if(data=='2'){
                const TYPES = ['error'],
             TITLES = {
                'error': 'Awesome!'
              },
              CONTENT = {
                  'error': 'Username Already Exists'
              };
              var type = TYPES[Math.floor(Math.random() * TYPES.length)],
                  content = CONTENT[type];
              $.snack(type, content);
                 setTimeout(function(){
                    $(".editCancelsubmit").show();
                    $(".editsubmit").show();
                    $('#editloader').hide();
                    $(".toast").hide();
                    $('.overlay').hide();
                },1500); 
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
                    $(".editCancelsubmit").show();
                    $(".editsubmit").show();
                    $('#editloader').hide();
                    $(".toast").hide();
                    $('.overlay').hide();
                },900);
            }
     }
  });
}

$(document).ready(function(){
  $(".Savedata").click(function(){
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

function SaveData()
{
  var Name = $("#Name").val();
  
      var div= document.createElement("div");
        div.className += "overlay";
        document.body.appendChild(div);
        $('.submit').hide();
        $('.Savedata').hide();
        $('#saveloader').show();
    $.ajax({
     url:'Product_form',
     type:'POST',
     data:{
        Name:Name
     },
     success:function(data){
        if(data==1){
            const TYPES = ['success'],
          TITLES = {
              'success': 'Awesome!'
          },
          CONTENT = {
              'success': 'Product Add Successfully'
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
            document.getElementById("loginform").reset();
            $("#AddDepartment").hide();
            $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();
          DisplayProduct();
        },500);
        }
        else if(data=='2'){
             const TYPES = ['error'],
             TITLES = {
                'error': 'Awesome!'
              },
              CONTENT = {
                  'error': 'Product Already Exists'
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
                  DisplayProduct();
                },1500);
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
                  DisplayProduct();
                },500);
            }
     }
  });
}
</script>
