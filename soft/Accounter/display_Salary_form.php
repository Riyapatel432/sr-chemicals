<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
$TotalStock=0;

    $SqlStock=mysqli_query($con,"SELECT * FROM tblAttendance WHERE Status='0' AND AttStatus='1' AND Employee='$name' AND selectDate between '$from_date' AND '$to_date'");
    $CountStock=mysqli_num_rows($SqlStock);
    $Sqliloan=mysqli_query($con,"SELECT * FROM tblLoan WHERE Employee='$name' AND Loan >='1'");
    $Countloan=mysqli_num_rows($Sqliloan);
    $Rowloan=mysqli_fetch_array($Sqliloan);
    $SqliEmployee=mysqli_query($con,"SELECT * FROM tblEmployee WHERE id='$name'");
    $RowEmployee=mysqli_fetch_array($SqliEmployee);
    $SqliDesignation=mysqli_query($con,"SELECT * FROM tblDesignation WHERE id='".$RowEmployee['Designation']."'");
    $RowDesignation=mysqli_fetch_array($SqliDesignation);
 
//   if($CountStock > 0)
//   {
    echo'<div class="row">
        <div class="col-md-3">
            <select class="form-control required" name="month" id="month">
                <option selected value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
        </div>
        <div class="col-md-7"></div>
        <div class="col-md-2">';
        if($Countloan > 0){
        echo'
            <br><h5 style="color : red"> Loan Value : '.$Rowloan['Loan'].'</h5>
            <input type="hidden" id="Loan" value="'.$Rowloan['Loan'].'">';
        }
        else{}
        echo'
        </div>
        </div><br>';
     echo'<table class="table display table-bordered table-striped no-wrap">
         <thead>
             <tr>
                 <th>Name</th>
                 <th>'.$RowEmployee['Name'].' ('.$RowDesignation['Name'].')</th>
             </tr>
         </thead>
         <tbody>';
            while($RowStock=mysqli_fetch_array($SqlStock))
            {
                if($RowStock['ot']==""){
                    $otdaays = 0 ;
                }
                else{
                    $otdaays += $RowStock['ot'];
                }
                // $otdaays += $RowStock['ot'];
                $salary=$CountStock * $RowEmployee['Rate'];
                $ottotalrate=$otdaays * $RowEmployee['OtRate'];
            }
            $toatl = $salary + $ottotalrate;
             echo'<tr>
                 <td>Attended Days</td>
                 <td>'.$CountStock.'</td>
                 </tr>
                 <tr>
                 <td>OT Hours</td>
                 <td>'.$otdaays.'</td>
                 </tr>
                 <tr>
                 <td>Salary</td>
                 <td>'.$salary.'</td>
                 </tr>
                 <tr>
                 <td>OT Rate</td>
                 <td>'.$ottotalrate.'</td>
                 </tr>';
                 if($Countloan > 0){
                    echo '<td>EMI </td>
                        <td><input type="text" class="form-control required" placeholder="EMI" name="emi" id="emi" onkeyup="emicount()"></td>
                    </tr>';
                 }
                 else{
                     
                 }
                 echo'
                 <tr>
                <th>Total Salary</th>
                    <th>'.$toatl.'</th>
                </tr>
         </tbody>
     </table><hr>
     <div class="form-actions">
        <div class="row">
        <div class="col-md-10"> </div>
            <div class="col-md-2">
              <img src="images/loader.gif" style="margin-top:-70px;display:none;" id="lsaveoader">
                <button type="button" class="btn btn-success savesubmit" onclick="Savedata()">Save</button>
                <button type="button" class="btn btn-inverse savecancel" >Cancel</button>
            </div>
        </div>
    </div><br><br>';
//   }
//   else{
//     echo'<center><h4>Oopps! Data Not Found</h4></center>';
//   }
}
?>
<script>
function emicount(){
    var Loan = $("#Loan").val();
    var emi = $("#emi").val();
    
    if(parseInt(emi) <= parseInt(Loan)){
      $('.savesubmit').show();
      $('.savecancel').show();
      $('#lsaveoader').hide();
      $(".toast").hide();
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
          $('.savesubmit').hide();
          $('.savecancel').hide();
          $('#lsaveoader').show();
        }
}

function Savedata()
{
  var name = $("#name").val();
  var from_date = $("#from_date").val();
  var to_date = $("#to_date").val();
  var emi = $("#emi").val();
  var month = $("#month").val();
  
  if(from_date == '')
     {
     		$("#message").html("<div class='alert alert-warning'>Please Select From Date</div>");
     		$("#from_date").focus();
     		setTimeout(function(){
     			 $("#message").html("");
     	 },2000);
    }
    else if(to_date == '')
     {
     		$("#message").html("<div class='alert alert-warning'>Please Select To Date</div>");
     		$("#to_date").focus();
     		setTimeout(function(){
     			 $("#message").html("");
     	 },2000);
    }
    else if(name == '')
     {
     		$("#message").html("<div class='alert alert-warning'>Please Select Employee</div>");
     		$("#name").focus();
     		setTimeout(function(){
     			 $("#message").html("");
     	 },2000);
    }
    else
    {
     var div= document.createElement("div");
     div.className += "overlay";
     document.body.appendChild(div);
     $('.savesubmit').hide();
     $('#lsaveoader').show();
     $.ajax({
          url:'Salary_form.php',
          type:'POST',
          data:{
             name:name,
             from_date:from_date,
             to_date:to_date,
             emi:emi,
             month:month
          },
          success:function(data){
            setTimeout(function(){
              $('.savesubmit').show();
              $('.savecancel').hide();
              $('#lsaveoader').hide();
              $('.overlay').hide();
              SerchReport();
            },900);
          }
      });
    }
}
</script>
