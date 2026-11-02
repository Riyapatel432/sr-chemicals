<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);

$SqliStock=mysqli_query($con,"SELECT * FROM tblOrder WHERE Status='1' AND SessionType='A' AND SessionId='".$_SESSION['Admin']."' AND AddedDate between '$from_date' AND '$to_date'");
$CountStock=mysqli_num_rows($SqliStock);
  if($CountStock > 0)
  {
     echo'<table id="example23" class="table display table-bordered table-striped no-wrap">
         <thead>
             <tr>
               <th>SrNo</th>
               <th>Dispatch Date</th>
               <th>PO Date</th>
               <th>PO Number</th>
               <th>Party Name</th>
               <th>Amount</th>
               <th>Payment Method</th>
             </tr>
         </thead>
         <tbody>';
         $SrNo='';
         while($RowPurchase=mysqli_fetch_array($SqliStock))
         {
             $SrNo++;
             $ExtractAmount = explode("$$",$RowPurchase['Rate']);
            $totalAmount='0';
            for($i=0;$i < sizeof($ExtractAmount);$i++)
            {
                $totalAmount+=$ExtractAmount[$i];
            }
            
             echo'<tr>
               <td>'.$SrNo.'</td>
               <td>'.$RowPurchase['Dispatch'].'</td>
               <td>'.$RowPurchase['podate'].'</td>
               <td>'.$RowPurchase['ponumber'].'</td>
               <td>'.$RowPurchase['Name'].' ('.$RowPurchase['Narration'].')</td>
               <td>'.$totalAmount.'</td>
               <td>'.$RowPurchase['Payment'].'</td>
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
