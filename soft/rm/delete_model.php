<?php
include("../config.php");
if(isset($_POST))
{
extract($_POST);
    
        if($Flag=='Delete Product'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$ProductId.')">Delete</button>';}
        
        if($Flag=='Delete Purchase'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$PurchaseId.')">Delete</button>';}
        
        if($Flag=='Delete Sale'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$SaleId.')">Delete</button>';}

 }
?>