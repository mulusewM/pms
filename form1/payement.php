<?php
include 'db1.php';
if(isset($_POST['submit']))
{
$id=$_GET['id'];
$accountnumber=$_POST["accountnumber"];  
$password=$_POST["password"];
$bank_Name=$_POST["bank_Name"];
$bank_Branch=$_POST["bank_Branch"];

$result = mysql_query("SELECT * FROM   bankaccount where accountnumber= '$accountnumber' and account_password='$password' and bank_Name= '$bank_Name' and bank_Branch='$bank_Branch'") or die(mysql_error());
$count = mysql_num_rows($result);
if ($count > 0) 
   {
   while($row = mysql_fetch_array($result))
  {
  $accountnumber=$row['accountnumber'];  				
  $balance=$row['balance'];     			
  }
  $balance=$balance - $price;
    if($balance <0)
	  {
	echo '<script>alert("You have insefficent balance!")</script>';
	  }
	else 
	  {
mysql_query("INSERT INTO consumtionpayedcustomer (customerfirstname, customerlastname, meterid, customer_id, Date, Month, Year, price) VALUES ('$customerfirstname', '$customerlastname', '$meterid', '$customer_id', '$Date', '$Month', '$Year', '$price')");
	  
	  	mysql_query("UPDATE bankaccount SET balance ='$balance' WHERE accountnumber = '$accountnumber'");
		 echo '<script>alert("Water bill is payed Successfully!")</script>';
		 ?>
		 <center>
<h3>BURE CITY WATER SUPPLY SURVICE RESIT OF PAYEMENT!</h3>
</center>
<div id="context">
<p><strong>Bill Owners are:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#990033"><?php echo $customerfirstname.'&nbsp;'.$customerlastname; ?></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Meter Id:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $meterid;  ?></font><br />  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Kebele:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#990033"><?php echo $kebele; ?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Customer Id:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $customer_id; ?></font>
<br /><strong>House Number:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#990033"><?php echo $housenumber; ?></font>
<br /> <br />
</p>
<center><strong>Consumtion Month:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $Date; ?>/<?php echo $Month; ?>/<?php echo $Year; ?></font></center><br />
<center><strong>Date of Payment:<b></font><font color="#990033" size="+1">&nbsp;
								 <?php
                                $Today=date('y:m:d');
                                $new=date('l, F d, Y',strtotime($Today));
                             echo $new; ?></font></center><br />
<p>
<strong>Previous Reading:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $previous_Reading;?></font>&nbsp;&nbsp;<font color="#000066">Meter Cube</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><br />
<strong>Present Reading:</strong>&nbsp;&nbsp;<font color="#990033"><?php echo $present_Reading; ?></font>&nbsp;&nbsp;<font color="#000066">Meter Cube</font> <br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Consumption:</strong><font color="#990033">&nbsp;&nbsp;<?php echo $consumtion;?>&nbsp;&nbsp;<font color="#000066">Meter Cube</font>
<h4 align="center">Bill Amount:&nbsp;&nbsp;<font color="#990033"><strong><?php echo $price; ?></strong></font>&nbsp;&nbsp;<font color="#000066">Birr</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/4.gif" height="100" width="100" /></h4><br /><br />
<CENTER><form><input type="button" onclick="window.print()" value="Print page" /></form><a href="billoficerviewmeterreaderreport.php">Back</a></CENTER>
</p>
		 
		 <?php
		 $result = mysql_query("SELECT * FROM  dtcwssaccount WHERE id = '1'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['1'] ;
				$accountbalance=$test['accountbalance'] ;
				
				$a=$accountbalance + $price;
					mysql_query("UPDATE dtcwssaccount SET accountbalance ='$a' WHERE id = '1'");
		
	  } 
	  }
	  else
	  {
	  echo '<script>alert("Please Insert Correct Account Information!")</script>'; 
      }
	  }
          ?>