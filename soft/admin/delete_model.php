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
        
        if($Flag=='Delete Purchase'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$PurchaseId.')">Delete</button>';}
        
        if($Flag=='Delete Employee'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$EmployeeId.')">Delete</button>';}
        
        if($Flag=='Delete Designation'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$DesignationId.')">Delete</button>';}
        
        if($Flag=='Delete Sale'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$SaleId.')">Delete</button>';}
        
        if($Flag=='Approve Sale'){
        echo'<button type="button" class="btn btn-success waves-effect waves-light m-t-10 deletesubmit" onclick="ApproveData('.$SaleId.')">Approve</button>';}
        
        
 }
?>