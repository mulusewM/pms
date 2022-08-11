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
<br>
<?php

include("connection.php");
$ctrl = $_REQUEST['enable'];
$SQL = "select * from customer_bill, customer_buy_drugs,sold_drugs,store,stock WHERE customer_bill.cus_id=customer_buy_drugs.cuss_id and 
customer_buy_drugs.solddrug_id = sold_drugs.sold_drug_id and sold_drugs.stock_id = stock.stock_id and stock. drugId=store.drugId and customer_buy_drugs.cuss_id='$ctrl'";
$ss=mysql_query($SQL);
 ?>
			<center><h4><u>Customer Detail Bill Information</u></h4></center>
			
	         <table class="datatable"border="3" width="600px">
						   <tr>
						    <th bgcolor='#336699'><font color='white'>Drug Name</th>
						   <th bgcolor='#336699'><font color='white'>Quantity</th>
						   <th bgcolor='#336699'><font color='white'>Payment</th>
						   
						    
 <?php						  
while($row = mysql_fetch_array($ss))
				  {
				 
						   
					     
						  
							  
			                   echo'<tr>';
							   echo'<td>';echo$row['drugName'];echo'</td>';
			                   print ("<td><font size='2'>" . $row['sold_drug_quantity'] . "</td>");	
			                   echo'<td>';echo$row['price'];echo'</td>';  
							   	
                               $t=$row['total'];   							   
				                $_SESSION['ty']=$t;
				  
				   echo'</tr>';
				    
					}
				
					
					 echo'<tr>';
echo'<td style="font-weight:bold;font-size:18px;color:red">';echo "Total price = ";echo $_SESSION['ty'];echo'</td>';


?>

<td colspan=2 style="font-weight:bold;text-align:center;font-size:18px;"><center><a href="view_customer_bill.php" ">BACK</a></td>;
<?php
 echo'</tr>';
 ?>
<div class="accdiv">


  
</table> 
	
  
<!--Php Script-->  
	


</td>
</tr>
</table>
<!--End Body of section-->
</table>

<!--Footer-->
<?php
include("footer.php");
?>
<!--End of Footer-->
                                                                        
</body>
</html>




























