<link href="../assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
<?php
include("../config.php");
extract($_POST);
$SqliAttendance=mysqli_query($con,"SELECT * FROM tblEmployee WHERE Status='0'");
echo'
    <div class="row">
        <table id="config-table" class="table display table-bordered table-striped no-wrap">
            <thead>
                <tr>
                    <th>Employee</th>
                    <th>Code</th>
                    <th>Shift</th>
                    <th>Status</th>
                    <th>OT</th>
                </tr>
            </thead>
            <tbody>';
            while($RowAttendance=mysqli_fetch_array($SqliAttendance))
            {
                $SqliDesignation=mysqli_query($con,"SELECT * FROM tblDesignation WHERE id='".$RowAttendance['Designation']."'");
                $RowDesignation=mysqli_fetch_array($SqliDesignation);
                $SqliAtten=mysqli_query($con,"SELECT * FROM tblAttendance WHERE Employee='".$RowAttendance['id']."' AND selectDate='".$selectDate."'");
                $RowAtten=mysqli_fetch_array($SqliAtten);
                if($RowAtten['AttStatus']=='1'){
                    $status='1';
                }
                else{
                    $status='0';
                }
            echo'
                <tr>
                    <td><input type="text" name="Employee12[]" id="Employee12" class="form-control Employee12 required" placeholder="--Employee--" value="'.$RowAttendance['Name'].' ('.$RowDesignation['Name'].')" readonly><input type="hidden" name="Employee[]" id="Employee" value="'.$RowAttendance['id'].'" readonly></td>
                    <td><input type="text" name="Code[]" id="Code" class="form-control Code required" placeholder="--Code--" value="'.$RowAttendance['Code'].'" readonly></td>
                    <td>
                        <select class="form-control" name="Shift[]" id="Shift">
                            <option value="D" '; if($RowAtten['Shift'] == 'D'){echo 'selected';} echo'>Day</option>
                            <option value="N" '; if($RowAtten['Shift'] == 'N'){echo 'selected';} echo'>Night</option>
                        </select>
                    </td>
                    <td><input type="checkbox" name="Status[]" id="Status" value="'.$status.'" class="js-switch Status" data-color="#009efb" '.(($status=='1')?' checked ':"").' /></td>
                    <td><input type="number" name="ot[]" id="ot" class="form-control ot" value="'.$RowAtten['ot'].'" placeholder="--OT--"></td>
                </tr>';
            }
                echo'
            </tbody>
            <input type="hidden" id="myEmployeehide" name="myEmployeehide">
            <input type="hidden" id="myCodehide" name="myCodehide">
            <input type="hidden" id="myStatushide" name="myStatushide">
            <input type="hidden" id="myothide" name="myothide">
            <input type="hidden" id="myShifthide" name="myShifthide">
        </table>
    </div><hr>
<div>
    <img src="images/loader.gif" style="margin-top:-70px;display:none;" id="saveloader">
    <button type="button" class="btn btn-success savedata"> <i class="fa fa-check"></i> Save</button>
    <button type="button" class="btn btn-dark cancel" onclick="cancel()">Cancel</button>
</div>';
?>
<script src="../assets/node_modules/switchery/dist/switchery.min.js"></script>
<script>
$(function () {
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    $('.js-switch').each(function () {
        new Switchery($(this)[0], $(this).data());
    });
    $('#config-table').DataTable({
        responsive: true,
        "paging": false
    });
});

$("#config-table").on('change', '.Status', function (){
     var $this = $(this);
     if ($this.is(':checked')) {
         $this.closest("tr").find(".Status").val(1);
        // $(".Status").val('1');
    } else {
        $this.closest("tr").find(".Status").val(0);
        //  $(".Status").val('0');
    }
});


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
</script>