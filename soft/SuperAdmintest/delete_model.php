<?php
include("../config.php");
if(isset($_POST))
{
extract($_POST);
    
        if($Flag=='Delete Admin'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$AdminId.')">Delete</button>';}
        
        if($Flag=='Delete RM'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$RMId.')">Delete</button>';}
        
        if($Flag=='Delete Accounter'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$AccounterId.')">Delete</button>';}
        
        if($Flag=='Approve Purchase'){
        echo'<button type="button" class="btn btn-success waves-effect waves-light m-t-10 deletesubmit" onclick="ApproveData('.$PurchaseId.')">Approve</button>';}

 }
?>