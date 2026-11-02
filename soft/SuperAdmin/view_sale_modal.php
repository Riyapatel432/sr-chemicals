<?php
include("../config.php");
if(isset($_POST))
{
extract($_POST);
$SqlPurchase=mysqli_query($con,"SELECT * FROM tblOrder WHERE id='".$PurchaseId."'");
$CountPurchase=mysqli_num_rows($SqlPurchase);
$RowPurchase=mysqli_fetch_array($SqlPurchase);
$ExtractProduct = explode("$$",$RowPurchase['Product']);
$ExtractQty = explode("$$",$RowPurchase['Qty']);
$ExtractRate = explode("$$",$RowPurchase['Rate']);
$ExtractUnit = explode("$$",$RowPurchase['Unit']);
echo'
    <form class="form-horizontal mt-4" id="savedata">
    <fieldset disabled>
        <div class="row">
            <div class="form-group col-md-3"></div>
            <div class="form-group col-md-3"></div>
            <div class="form-group col-md-3">
                <lable>Payment Method</lable>
                <input type="text" name="Payment" id="Payment" class="form-control required" placeholder="Payment Method" value="'.$RowPurchase['Payment'].'">
            </div>
            <div class="form-group col-md-3">
                <lable>Dispatch Date</lable>
                <input type="date" name="Dispatch" id="Dispatch" class="form-control" value="'.$RowPurchase['Dispatch'].'">
            </div>
            <div class="form-group col-md-3">
                <lable>PO Number</lable>
                <input type="text" name="ponumber" id="ponumber" class="form-control" value="'.$RowPurchase['ponumber'].'" placeholder="PO Number">
            </div>
            <div class="form-group col-md-3">
                <lable>PO Date</lable>
                <input type="date" name="podate" id="podate" class="form-control" value="'.$RowPurchase['podate'].'">
            </div>
            <div class="form-group col-md-3">
                <lable>Party Name</lable>
                <input type="text" name="Name" id="Name" class="form-control" placeholder="Party Name" value="'.$RowPurchase['Name'].'">
            </div>
            <div class="form-group col-md-3">
                <lable>Narration</lable>
                <input type="text" name="Narration" id="Narration" class="form-control" placeholder="Narration" value="'.$RowPurchase['Narration'].'">
            </div>
        </div>
        <table id="myTable1" class="table display table-bordered table-striped no-wrap">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Unit</th>
                    <th>Qty</th>
                    <th>Rate</th>
                </tr>
            </thead>
            <tbody>';
            for($i=0;$i < sizeof($ExtractProduct);$i++)
            {

            echo'
                <tr>
                    <td>
                        <select class="select2 form-control Product required" name="Product[]" id="Product" >';
                            $SqliProduct=mysqli_query($con,"SELECT * FROM tblProduct WHERE id='".$ExtractProduct[$i]."'");
                            while($RowProduct=mysqli_fetch_array($SqliProduct))
                            {
                                echo'<option value="'.$RowProduct['id'].'">'.$RowProduct['Name'].'</option>';
                            }
                            echo'
                        </select>
                    </td>
                    <td><input type="text" name="Unit[]" id="Unit" value="'.$ExtractUnit[$i].'" class="form-control Unit required" placeholder="--Unit--"></td>
                    <td><input type="text" name="Qty[]" id="Qty" value="'.$ExtractQty[$i].'" class="form-control Qty required" placeholder="--Qty--"></td>
                    <td><input type="text" name="Rate[]" id="Rate" value="'.$ExtractRate[$i].'" class="form-control Rate required" placeholder="--Rate--"></td>
                </tr>';
            }
            echo'
            </tbody>
        </table>
        <input type="hidden" name="bill_no" id="bill_no">
        <input type="hidden" name="financ_year" id="financ_year">
    </fieldset>
    </form>';
 }
?>