<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>

<?php
		
		include("headerr.php");
	
?>
<?php
	include('connection.php');

	$sq20="select * from stock ,store where store.drugID=stock.drugID";
	   
	$sq20=mysql_query($sq20,$con);
	while($row=mysql_fetch_array($sq20))
	{
		$qty=$row['transfer_quantity'];
		$stockid=$row['stock_id'];
		$sk=$row['sellingPrice'];

	}
?>
<?php
	include('connection.php');

	$sq50="select * from stock,store WHERE stock.drugID=store.drugID and transfer_quantity >0";
	   
	$sq2=mysql_query($sq50,$con);
	if($sq50)
	{
	}
	else
	{
		echo "Error";
	
	}
	$uid=$_SESSION['login_user'];
		$sq0="select * from user_account WHERE userName='$uid'";
		$sq54=mysql_query($sq0,$con);
		while($row=mysql_fetch_array($sq54))
		{
			$userid=$row['user_id'];
		}

?>

 

<html>
<head>

<title>PHARMACY</title>

<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body>
<table  border="0" align="center" width="750px">
<!--Header-->

<tr>
<td width="700px" colspan="3" height="120px">
<p><img src="img/9.png" align="left" width="150px"  style="margin-top:20px;">
<table style=" margin-bottom:0px;margin-top:20px;border-radius:0px; align:center; width:700px;background:url(images/Capture1.jpg);	 height:150px;" >
<tr>
		<th>
			
			<p><font style="color:white; font-family:timesnewroman; font-size:35px; font-weight:bold;">PHARMACY MANAGEMENT SYSTEM</p>
		</th>		
		
	</tr>

</table>
</p>
</td>
</tr>

<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3" width="750px">
<div id="sse2">
        <?php 
		include("menu.php");
		?>
    </div>
</td>
</tr>
<!--End of main menus-->

<?php 
		include("cashier_menu.php");
		?>


</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br><br>
<table align="center" style="border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;width:440px;"> <tr><td>
<div style="background-color:#336699;border-radius:0px; color:#000000; padding:5px; height:22px;"> 
 
 
<strong><font color="white" size="4px" face="times new romman"; ><center>Shopping Cart</center></font></strong>
 </div><br>
<center><table  cellpadding="5" border="1" style="margin-top:2%;">
	        
	     <tr style="background-color:#336699;border-radius:0px; color:#000000; padding:5px; height:22px;">
			<td><strong><font color="white" size="3px" face="times new romman"; >Item Name</td>
			<th width="1"></th>
			<th><font color="white" size="3px" face="times new romman"; >unit price</th>
			<th><font color="white" size="3px" face="times new romman"; >Quantity</th>
			<th><font color="white" size="3px" face="times new romman"; >Total</th></font></strong>
			</tr>
           <?php
		   
	     if(!empty($_SESSION['cart'])) 
		 {
			 $totalCost=0;
			 foreach($_SESSION['cart'] as $key=>$value)
			 {
			 
				 
				 ?>
				 <form action="cart.php?action=ToCart&id=<?php echo $value["serial_number"];?>'" method="POST">
				

	    <tr>
		
		      <td><?php echo $value["item_name"];?><td>
			  <td><?php echo $value["item_price"]." Birr";?></td>
			  <td><?php echo $value["item_quantity"];?></td>
			  
			  <td ><?php echo ($value["item_quantity"]*$value["item_price"])." Birr";?></td>
			 
		</tr>
             <tr>		  			 
				 <?php
				 $totalCost = $totalCost+($value["item_quantity"]*$value["item_price"]);
				 $_SESSION['tp']= $totalCost;
				 $_SESSION['item_name']=$value["item_name"];
				 $_SESSION['item_price']=$value["item_price"];
				 $_SESSION['item_quntity']=$value["item_quantity"];
			 }
			 
				 
	                		?>
							
							
			<tr>
			<td style="font-weight:bold;text-align:center;font-size:18px;color:red">Total Price: <?php echo "    ".$totalCost." Birr";?> </td>
			<td colspan="4">
			<p style="float:left; text-dicoration:none;"><a href='customer_order.php?action=buy&id=<?php echo $value["item_id"];?>'><span class="btn">Make Bill</u></span></a>  </p>
			<p style="float:left; text-dicoration:none;" ><a href='cart.php?action=clear&id=<?php echo $item_name;?>'><span class="btn">clear </span></a></p>
			<form action="print_bill.php" method='POST'>
</td>
</form>
			
			
                                  </td>
			</tr>	
                      <?php			
		 }			 
			?>  
                    </form>	
									
	       </table></center><br>				
				
			</td>
			</tr>
    </table>
 
 
 
 
 
 
 
 
 
					</table>
					</tr></td>



	

</td>
</tr>
</table>
 
<!--End Body of section-->

<!--Footer-->

<?php
include("footer.php");
?>

<!--End of Footer-->
                                                                        
</body>
</html>

















			
	
		
