<?php
include("../config.php");
if(isset($_POST))
{
  extract($_POST);
    $CreatedDate=date("Y-m-d H:i:s");
    $AddedDate=date("Y-m-d");
  
  if($Flag=='Delete CompanyStore'){
     if(mysqli_query($con,"UPDATE tblcompanystore SET Status='2' WHERE id='$CompanyStoreId'"))
      {
        echo 1 ;
      }
      else{
        echo mysqli_error($con);
      } 
  }
  else if($Flag=='Delete Account'){
         if(mysqli_query($con,"UPDATE tblaccount SET Status='2' WHERE id='$AccountId'"))
          {
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }
  else if($Flag=='Delete Item'){
         if(mysqli_query($con,"UPDATE tblitem SET Status='2' WHERE id='$ItemId'"))
          {
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }
  else if($Flag=='Delete PurchaseOrder'){
         if(mysqli_query($con,"UPDATE tblPurchaseorder SET Status='2' WHERE id='$PurchaseOrderId'"))
          {
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }
  else if($Flag=='Delete PurchaseChallan'){
         if(mysqli_query($con,"UPDATE tblPurchasechallan SET Status='2' WHERE id='$PurchaseChallanId'"))
          {
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }
  else if($Flag=='Delete Purchase'){
        if(mysqli_query($con,"UPDATE tblPurchase SET Status='2' WHERE id='$PurchaseId'"))
         {
            $sqlistockentry=mysqli_query($con,"UPDATE tblstockentry SET Status='2' WHERE Purchase='$PurchaseId'");
            $SqlPurchase=mysqli_query($con,"SELECT * FROM tblPurchase WHERE id='".$PurchaseId."'");
            $RowPurchase=mysqli_fetch_array($SqlPurchase);
            $ExtractItem12 = explode("$$",$RowPurchase['Item']);
            $ExtractUnit12 = explode("$$",$RowPurchase['Unit']);
            $Extractqty12 = explode("$$",$RowPurchase['qty']);
            for($i=0;$i < sizeof($ExtractItem12);$i++)
            {
                $Sqlistock=mysqli_query($con,"SELECT * FROM tblstock WHERE Item='".$ExtractItem12[$i]."'");
                $Rowstock=mysqli_fetch_array($Sqlistock);
                if($ExtractUnit12[$i]=='KG' || $ExtractUnit12[$i]=='L'){
                    $oldqty=$Extractqty12[$i]*1000;
                }
                else{
                    $oldqty=$Extractqty12[$i];
                }
                $minustotal=$Rowstock['qty']-$oldqty;
                $sqlistocktotal=mysqli_query($con,"UPDATE tblstock SET qty='$minustotal'  WHERE Item='".$ExtractItem12[$i]."'"); 
            }
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }
  else if($Flag=='Delete PurchaseReturn'){
         if(mysqli_query($con,"UPDATE tblPurchaseReturn SET Status='2' WHERE id='$PurchaseReturnId'"))
          {
            $sqlistockentry=mysqli_query($con,"UPDATE tblstockentry SET Status='2' WHERE Purchase='$PurchaseId'");
            $SqlPurchaseReturn=mysqli_query($con,"SELECT * FROM tblPurchaseReturn WHERE id='".$PurchaseReturnId."'");
            $RowPurchaseReturn=mysqli_fetch_array($SqlPurchaseReturn);
            $ExtractItem12 = explode("$$",$RowPurchaseReturn['Item']);
            $ExtractUnit12 = explode("$$",$RowPurchaseReturn['Unit']);
            $Extractqty12 = explode("$$",$RowPurchaseReturn['qty']);
            for($i=0;$i < sizeof($ExtractItem12);$i++)
            {
                $Sqlistock=mysqli_query($con,"SELECT * FROM tblstock WHERE Item='".$ExtractItem12[$i]."'");
                $Rowstock=mysqli_fetch_array($Sqlistock);
                if($ExtractUnit12[$i]=='KG' || $ExtractUnit12[$i]=='L'){
                    $oldqty=$Extractqty12[$i]*1000;
                }
                else{
                    $oldqty=$Extractqty12[$i];
                }
                $minustotal=$Rowstock['qty']+$oldqty;
                $sqlistocktotal=mysqli_query($con,"UPDATE tblstock SET qty='$minustotal'  WHERE Item='".$ExtractItem12[$i]."'"); 
            }
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }
  else if($Flag=='Delete PurchaseReturnChallan'){
         if(mysqli_query($con,"UPDATE tblPurchaseReturnChallan SET Status='2' WHERE id='$PurchaseReturnChallanId'"))
          {
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }
  else if($Flag=='Delete Category'){
         if(mysqli_query($con,"UPDATE tblCategory SET Status='2' WHERE id='$CategoryId'"))
          {
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }
  else if($Flag=='Delete Product'){
         if(mysqli_query($con,"UPDATE tblProduct SET Status='2' WHERE id='$ProductId'"))
          {
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }
  else if($Flag=='Delete Stock'){
         if(mysqli_query($con,"UPDATE tblcoldstorageEntry SET Status='2' WHERE id='$StockId'"))
          {
            $SqlcoldStock=mysqli_query($con,"SELECT * FROM tblcoldstorageEntry WHERE id='$StockId'");
            $RowcoldStock=mysqli_fetch_array($SqlcoldStock);
            $Sqlcoldtotal=mysqli_query($con,"SELECT * FROM tblcoldstoragetotal WHERE Product='".$RowcoldStock['Product']."'");
            $Rowcoldtotal=mysqli_fetch_array($Sqlcoldtotal);
            $totalstock=$Rowcoldtotal['Stock']-$RowcoldStock['Stock'];
            $sqliedit=mysqli_query($con,"UPDATE tblcoldstoragetotal SET Stock='$totalstock' WHERE id='".$Rowcoldtotal['id']."'");
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }
  else if($Flag=='Approve Order'){
      $SqlStockentry=mysqli_query($con,"SELECT * FROM tblOrder WHERE id='$OrderId'");
    $RowStockentry=mysqli_fetch_array($SqlStockentry);
  
    if(mysqli_query($con,"UPDATE tblOrder SET Approve='1' WHERE id='$OrderId'"))
      {
        echo 1 ;
      }
    else{
        echo mysqli_error($con);
      }
      }
  else if($Flag=='Decline Order'){
         if(mysqli_query($con,"UPDATE tblOrder SET Approve='3' WHERE id='$OrderId'"))
          {
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }
  else if($Flag=='Delete SellOrder'){
         if(mysqli_query($con,"UPDATE tblSellorder SET Status='2' WHERE id='$SellOrderId'"))
          {
            $sqli=mysqli_query($con,"UPDATE tblOrder SET Status='2' WHERE Sellorder='$SellOrderId'");
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }
      
  else if($Flag=='Delete SellChallan'){
         if(mysqli_query($con,"UPDATE tblSellchallan SET Status='2' WHERE id='$SellChallanId'"))
          {
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }
  else if($Flag=='Delete Sell'){
         if(mysqli_query($con,"UPDATE tblSell SET Status='2' WHERE id='$SellId'"))
          {     
                $Sqlisell=mysqli_query($con,"SELECT * FROM tblSell WHERE id='$SellId'");
                $Rowsell=mysqli_fetch_array($Sqlisell);
                $ExtractCategory = explode("$$",$Rowsell['Category']);
                $ExtractProduct = explode("$$",$Rowsell['Product']);
                $ExtractStock = explode("$$",$Rowsell['Stock']);
                $ExtractPrice = explode("$$",$Rowsell['Price']);
                for($i=0;$i < sizeof($ExtractCategory);$i++)
                {
                    $Sqlistock=mysqli_query($con,"SELECT * FROM tblFranchiseStock WHERE Franchise='".$Rowsell['customer']."' AND Category='$ExtractCategory[$i]' AND Product='$ExtractProduct[$i]'");
                    $Countstock=mysqli_num_rows($Sqlistock);
                    $Rowstock=mysqli_fetch_array($Sqlistock);
                    $qty22=$Rowstock['Stock']-$ExtractStock[$i];
                    $sqlistocktotal=mysqli_query($con,"UPDATE tblFranchiseStock SET Stock='".$qty22."' WHERE id='".$Rowstock['id']."'");
                    echo 1 ;
                }
          }
          else{
            echo mysqli_error($con);
          } 
      }
      
  else if($Flag=='Delete SellReturn'){
         if(mysqli_query($con,"UPDATE tblSellreturn SET Status='2' WHERE id='$SellReturnId'"))
          {     
                $Sqlisell=mysqli_query($con,"SELECT * FROM tblSellreturn WHERE id='$SellReturnId'");
                $Rowsell=mysqli_fetch_array($Sqlisell);
                $ExtractCategory = explode("$$",$Rowsell['Category']);
                $ExtractProduct = explode("$$",$Rowsell['Product']);
                $ExtractStock = explode("$$",$Rowsell['Stock']);
                $ExtractPrice = explode("$$",$Rowsell['Price']);
                for($i=0;$i < sizeof($ExtractCategory);$i++)
                {
                    $Sqlistock=mysqli_query($con,"SELECT * FROM tblFranchiseStock WHERE Franchise='".$Rowsell['customer']."' AND Category='$ExtractCategory[$i]' AND Product='$ExtractProduct[$i]'");
                    $Countstock=mysqli_num_rows($Sqlistock);
                    $Rowstock=mysqli_fetch_array($Sqlistock);
                    $qty22=$Rowstock['Stock']+$ExtractStock[$i];
                    $sqlistocktotal=mysqli_query($con,"UPDATE tblFranchiseStock SET Stock='".$qty22."' WHERE id='".$Rowstock['id']."'");
                    echo 1 ;
                }
          }
          else{
            echo mysqli_error($con);
          } 
      }
  else if($Flag=='Delete SellReturnChallan'){
         if(mysqli_query($con,"UPDATE tblSellreturnChallan SET Status='2' WHERE id='$SellReturnChallanId'"))
          {
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }

  else if($Flag=='Delete UsedItem'){
         if(mysqli_query($con,"UPDATE tbluseditem SET Status='2' WHERE id='$itemId'"))
          {
            $Sqlitem=mysqli_query($con,"SELECT * FROM tbluseditem WHERE id='$itemId'");
            $Rowitem=mysqli_fetch_array($Sqlitem);
            $Sqlistock=mysqli_query($con,"SELECT * FROM tblstock WHERE Item='".$Rowitem['Item']."'");
            $Rowistock=mysqli_fetch_array($Sqlistock);
            $qty12=$Rowistock['qty']-$Rowitem['qty'];
            $sqli=mysqli_query($con,"UPDATE tblstock SET qty='$qty12' WHERE id='".$Rowistock['id']."'");
            echo 1 ;
          }
          else{
            echo mysqli_error($con);
          } 
      }
      
  else{}
}
?>
