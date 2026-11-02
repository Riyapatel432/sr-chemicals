<?php
include("../config.php");
if(isset($_POST))
{
extract($_POST);
    
        if($Flag=='Delete CompanyStore'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$CompanyStoreId.')">Delete</button>';}
        
        else if($Flag=='Delete Account'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$AccountId.')">Delete</button>';}
        
        else if($Flag=='Delete item'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$itemId.')">Delete</button>';}
        
        else if($Flag=='Delete PurchaseOrder'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$PurchaseOrderId.')">Delete</button>';}
        
        else if($Flag=='Delete PurchaseChallan'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$PurchaseChallanId.')">Delete</button>';}
        
        else if($Flag=='Delete Purchase'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$PurchaseId.')">Delete</button>';}
        
        else if($Flag=='Delete PurchaseReturn'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$PurchaseReturnId.')">Delete</button>';}
        
        else if($Flag=='Delete PurchaseReturnChallan'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$PurchaseReturnChallanId.')">Delete</button>';}
        
        else if($Flag=='Delete Category'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$CategoryId.')">Delete</button>';}
        
        else if($Flag=='Delete Product'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$ProductId.')">Delete</button>';}
        
        else if($Flag=='Delete Stock'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$StockId.')">Delete</button>';}
        
        else if($Flag=='Approve Order'){
        echo'<button type="button" class="btn btn-success waves-effect waves-light m-t-10 deletesubmit" onclick="ApproveData('.$OrderId.')">Approve</button>';}
        
        else if($Flag=='Decline Order'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeclineData('.$OrderId.')">Decline</button>';}
        
        else if($Flag=='Delete SellOrder'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$SellOrderId.')">Delete</button>';}
        
        else if($Flag=='Delete SellChallan'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$SellChallanId.')">Delete</button>';}
        
        else if($Flag=='Delete Sell'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$SellId.')">Delete</button>';}
        
        else if($Flag=='Delete SellReturn'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$SellReturnId.')">Delete</button>';}
        
        else if($Flag=='Delete SellReturnChallan'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$SellReturnChallanId.')">Delete</button>';}
        
        else if($Flag=='Delete useditem'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$itemId.')">Delete</button>';}
        

        else{ }
 }
?>