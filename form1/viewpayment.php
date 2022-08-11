    <?php
	session_start();
$session=$_SESSION['id'];
include 'db1.php';
$result = mysql_query("SELECT * FROM   creataccountbillofficer where id= '$session'");
while($row = mysql_fetch_array($result))
  {
  $first_name=$row['first_name'];  
  $last_name=$row['last_name'];
  $email=$row['email'];
  }     
?>
<?php
include 'db1.php';
@$id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM  consumtionpayedcustomer WHERE id  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$customerfirstname=$test['customerfirstname'] ;
				$customerlastname=$test['customerlastname'] ;
				$meterid=$test['meterid'] ;
				$customer_id=$test['customer_id'] ;
				$housenumber=$test['housenumber'] ;
				$kebele=$test['kebele'] ;
				$Date=$test['Date'] ;
				$Month=$test['Month'] ;
				$Year=$test['Year'] ;
				$previous_Reading=$test['previous_Reading'] ;
				$present_Reading=$test['present_Reading'] ;
				$consumtion=$test['consumtion'] ;
				$price=$test['price'] ;

?>

<style type="text/css">
#data { margin: 0 auto; width:600px; }

</style>
<div id="data">
<center>
<h3>BURE CITY WATER SUPPLY SURVICE</h3>
<p><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Casher:</strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $first_name.'&nbsp;'.$last_name; ?></h4></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email:</strong>&nbsp;&nbsp;&nbsp;<?php echo $email; ?> </p>
<p><strong>Phone:</strong>&nbsp;&nbsp;0921344356</p>
</center>
<div id="context">
<p><strong>Bill Owners are:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#990033"><?php echo $customerfirstname.'&nbsp;'.$customerlastname; ?></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Meter Id:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $meterid;  ?></font><br />  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Kebele:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#990033"><?php echo $kebele; ?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Customer Id:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $customer_id; ?></font><br>
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
<CENTER><form><input type="button" onclick="window.print()" value="Print page" /></form><a href="billoficerviewmeterreaderreport.php">Back</a></CENTER>
</div>


</div>
