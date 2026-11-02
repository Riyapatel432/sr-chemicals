<?php
include("../config.php");
if(isset($_POST))
{
extract($_POST);
$SqlPurchase=mysqli_query($con,"SELECT * FROM tblPurchase WHERE id='".$PurchaseId."'");
$CountPurchase=mysqli_num_rows($SqlPurchase);
$RowPurchase=mysqli_fetch_array($SqlPurchase);
$ExtractProduct = explode("$$",$RowPurchase['Product']);
$ExtractQty = explode("$$",$RowPurchase['Qty']);
$ExtractDate = explode("$$",$RowPurchase['Date']);
$ExtractNarration = explode("$$",$RowPurchase['Narration']);
$ExtractUnit = explode("$$",$RowPurchase['Unit']);
echo'
  <form class="form-horizontal mt-4" id="savedata">
  <fieldset disabled>
    <div class="row">                        
        <div class="form-group col-md-3">
            <input type="date" name="selectDate" id="selectDate" class="form-control required" value="'.$RowPurchase['selectDate'].'" onchange="GetOrderNo()">
        </div>
        <div class="form-group col-md-3">
            <input type="text" name="InvoiceNo" id="InvoiceNo" class="form-control required" placeholder="--PurchaseNo--" value="'.$RowPurchase['orderno'].'" readonly>
        </div>
        <div class="form-group col-md-6">
            <input type="text" name="Name" id="Name" class="form-control required" placeholder="Party Name" value="'.$RowPurchase['PartyName'].'">
        </div>
    </div>
    <div class="row">
        <table id="myTable1" class="table display table-bordered table-striped no-wrap">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Unit</th>
                    <th>Qty</th>
                    <th>Date</th>
                    <th>Narration</th>
                </tr>
            </thead>
            <tbody>';
            for($i=0;$i < sizeof($ExtractProduct);$i++)
            {

            echo'
                <tr>
                    <td>
                        <select class="select2 form-control Product required" name="Product[]" id="Product" >
                            <option value="">--Select Product--</option>';
                            $SqliProduct=mysqli_query($con,"SELECT * FROM tblProduct WHERE id='".$ExtractProduct[$i]."'");
                            $RowProduct=mysqli_fetch_array($SqliProduct);
                            echo'<option value="'.$RowProduct['id'].'" selected>'.$RowProduct['Name'].'</option>';
                            echo'
                        </select>
                    </td>
                    <td><input type="text" name="Unit[]" id="Unit" class="form-control Unit required" placeholder="--Unit--" value="'.$ExtractUnit[$i].'"></td>
                    <td><input type="text" name="Qty[]" id="Qty" class="form-control Qty required" placeholder="--Qty--" value="'.$ExtractQty[$i].'"></td>
                    <td><input type="date" name="reqDate[]" id="reqDate" class="form-control reqDate required" placeholder="--Date--" value="'.$ExtractDate[$i].'"></td>
                    <td><input type="text" name="Narration[]" id="Narration" class="form-control Narration required" placeholder="--Narration--" value="'.$ExtractNarration[$i].'"></td>
                </tr>';
            }
            echo'
            </tbody>
        </table>
        </fieldset>
</form>';
 }
?>