<?php
include("../config.php");
if(isset($_POST))
{
extract($_POST);
    
        if($Flag=='Delete Employee'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$EmployeeId.')">Delete</button>';}
        
        if($Flag=='Delete Designation'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$DesignationId.')">Delete</button>';}
        
        if($Flag=='Delete Purchase'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$PurchaseId.')">Delete</button>';}
        
        if($Flag=='Delete Loan'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$LoanId.')">Delete</button>';}
        
        if($Flag=='Delete Sale'){
        echo'<button type="button" class="btn btn-danger waves-effect waves-light m-t-10 deletesubmit" onclick="DeleteData('.$PurchaseId.')">Delete</button>';}
        
        
 }
?>