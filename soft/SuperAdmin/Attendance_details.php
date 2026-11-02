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
                                    <div class="form-group col-md-3">
                                        <input type="date" name="selectDate" id="selectDate" class="form-control required" placeholder="--selectDate--" value="<?php echo date('Y-m-d');?>" onchange="orderdata()">
                                    </div>
                                </div>
                                <div  id="AttendanceDeatilsform"></div>
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
orderdata();
function orderdata(){
    var selectDate = $("#selectDate").val();
    $.ajax({
        url:'display_Attendance_form',
        type:'POST',
        data:{
            selectDate:selectDate
        },
        success:function(data){
         $("#AttendanceDeatilsform").html(data);
        //  GetOrderNo();
        }
     });
}
    
function SaveData()
{
  var selectDate = $("#selectDate").val();
  var Employee =document.getElementsByName('Employee[]');
  var Codes =document.getElementsByName('Code[]');
  var Status =document.getElementsByName('Status[]');
  var ot =document.getElementsByName('ot[]');
  var Shift =document.getElementsByName('Shift[]');
  
    var length=Employee.length;
    var myEmployee=[];
    var myCode=[];
    var myStatus=[];
    var myot=[];
    var myShift= [];
    
    for(var i=0; i < length; i++)
    {
        myEmployee.push(Employee[i].value);
        myCode.push(Codes[i].value);
        myStatus.push(Status[i].value);
        myot.push(ot[i].value);
        myShift.push(Shift[i].value);
    }
    
    var HiddenmyEmployee = myEmployee.join('$$');
    var HiddenmyCode = myCode.join('$$');
    var HiddenmyStatus = myStatus.join('$$');
    var Hiddenmyot = myot.join('$$');
    var HiddenmyShift = myShift.join('$$');
    
    $("#myEmployeehide").val(HiddenmyEmployee);
    $("#myCodehide").val(HiddenmyCode);
    $("#myStatushide").val(HiddenmyStatus);
    $("#myothide").val(Hiddenmyot);
    $("#myShifthide").val(HiddenmyShift);
    var formData = new FormData($("#savedata")[0]);
   
      var div= document.createElement("div");
        div.className += "overlay";
        document.body.appendChild(div);
        $('.submit').hide();
        $('.gfgf').hide();
        $('#saveloader').show();
        $('.overlay').show();
    $.ajax({
     url:'Attendance_form',
     type:'POST',
     data: formData,
          processData: false,
          contentType: false,
     success:function(data){
        if(data!='0'){
            const TYPES = ['success'],
          TITLES = {
              'success': 'Awesome!'
          },
          CONTENT = {
              'success': 'Attendanceorder Add Successfully'
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