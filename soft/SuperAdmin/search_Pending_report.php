<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);

$SqliStock=mysqli_query($con,"SELECT * FROM tblPurchase WHERE Status='0' AND selectDate between '$from_date' AND '$to_date'");
$CountStock=mysqli_num_rows($SqliStock);
  if($CountStock > 0)
  {
     echo'<table id="example23" class="table display table-bordered table-striped no-wrap">
         <thead>
             <tr>
                 <th>SrNo.</th>
                 <th>Invoice No.</th>
                 <th>SaleDate</th>
                 <th>Party Name</th>
             </tr>
         </thead>
         <tbody>';
         $SrNo='';
         while($RowStock=mysqli_fetch_array($SqliStock))
         {
             $SrNo++;
            
             echo'<tr>
                 <td>'.$SrNo.'</td>
                 <td>'.$RowStock['orderno'].'</td>
                 <td>'.$RowStock['selectDate'].'</td>
                 <td>'.$RowStock['PartyName'].'</td>
             </tr>';
         }
             echo'
        </tbody>
     </table>';
  }
  else{
    echo'<center><h4>Oopps! Data Not Found</h4></center>';
  }
}
?>
<script>
$('#example23').DataTable({
    dom: 'Bfrtip',
    "ordering": false,
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
} );
$('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
</script>
