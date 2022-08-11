<?php
include 'db1.php';
$user_id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM consumtionpayedcustomer WHERE id  = '$user_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;         
				$firstname=$test['firstname'] ;
				$lastname=$test['lastname'] ;
				$meterid=$test['meterid'] ;
				$customer_id=$test['customer_id'] ;
				$housenumber=$test['housenumber'] ;
				$kebele=$test['kebele'] ;
				$Date=$test['Date'] ;
				$Month=$test['Month'] ;
				$Year=$test['Year'] ;
				$previous_Reading=$test['previous_Reading'] ;
				$present_Reading=$test['present_Reading'] ;
				$price=$test['price'] ;
				

?>
<table width="500" height="350" border="0">
<tr><td><td>
<h3>burie CITY WATER SUPPLY SURVICE RESIT OF PAYEMENT!</h3>
</center>
<div id="context">
<p><strong>Bill Owners are:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#990033"><?php echo $firstname.'&nbsp;'.$lastname; ?></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Meter Id:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $meterid;  ?></font><br />  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Kebele:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#990033"><?php echo $kebele; ?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Customer Id:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $customer_id; ?></font>
<br /><strong>House Number:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#990033"><?php echo $housenumber; ?></font>
<br />
</p>
<center><strong>Consumtion Month:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $Date; ?>/<?php echo $Month; ?>/<?php echo $Year; ?></font></center><br />
<center><strong>Date of Payment:<b></font><font color="#990033" size="+1">&nbsp;
								 <?php
                                $Today=date('y:m:d');
                                $new=date('l, F d, Y',strtotime($Today));
                             echo $new; ?></font></center><br />
<p>
<strong>Previous Reading:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $previous_Reading;?></font>&nbsp;&nbsp;<font color="#000066">Meter Cube</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
<strong>Present Reading:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $present_Reading; ?></font>&nbsp;&nbsp;<font color="#000066">Meter Cube</font> <br /><br />
<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Consumption:</strong><font color="#990033">&nbsp;&nbsp;<?php echo $consumtion;?>&nbsp;&nbsp;<font color="#000066">Meter Cube</font>-->
<h4 align="center">Bill Amount Was Payed:&nbsp;&nbsp;<font color="#990033"><strong><?php echo $price; ?></strong></font>&nbsp;&nbsp;<font color="#000066">Birr</font>&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/4.gif" height="100" width="100" /></h4>
</table>