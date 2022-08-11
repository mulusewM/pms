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

<style type="text/css">
#data { margin: 0 auto; width:600px; }

</style>
<div id="data">
<center>
<h3>bb  CITY WATER SUPPLY SURVICE</h3>
</center>
<div id="context">
<p><strong>Bill Owners are:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#990033"><?php echo $customerfirstname.'&nbsp;'.$customerlastname; ?></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Meter Id:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $meterid;
  ?></font><br />  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<strong>Kebele:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#990033"><?php echo $kebele; 
?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Customer Id:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $customer_id; ?></font>
<strong>House Number:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#990033"><?php echo $housenumber; ?></font>
<br /> <br />
</p>
<center><strong>Consumtion Month:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $Date; ?>/<?php echo $Month; ?>/<?php echo $Year; ?></font></center>
<p>
<strong>Previous Reading:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $previous_Reading;?></font>&nbsp;&nbsp;<font color="#000066">Meter Cube</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><br />
<strong>Present Reading:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $present_Reading; ?></font>&nbsp;&nbsp;<font color="#000066">Meter Cube</font> <br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Consumption:</strong><font color="#990033">&nbsp;&nbsp;<?php echo $consumtion;?>&nbsp;&nbsp;<font color="#000066">Meter Cube</font>
<h4 align="center">Bill Amount:&nbsp;&nbsp;<font color="#990033"><strong><?php echo $price; ?></strong></font>&nbsp;&nbsp;<font color="#000066">Birr</font> </h4><br /><br />

</p>
<CENTER><a href="billofficersearchpayementinformation.php">Back</a></CENTER>
</div>


</div>
