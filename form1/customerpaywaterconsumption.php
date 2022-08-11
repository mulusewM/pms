<?php
include 'db1.php';
$user_id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM consumtionpayedcustomer WHERE id  = '$user_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'];
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
				$price=$test['price'] ;

?>
<style type="text/css">
#data { margin: 0 auto; width:600px; }

</style>
<div id="data">
<center>
<h3>Burie CITY WATER SUPPLY SERVICE <br />Payment Form!</h3>
</center>
<form  method="post">
Account Number:&nbsp;&nbsp;&nbsp;<input type="text" name="accountnumber" id="accountnumber"placeholder="Insert Account Number!"><br><br>
&nbsp;&nbsp;&nbsp;Bank Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select  name="bank_Name" id="bank_Name">
            <option>--Bank Name--</option>
               <?php
		         include 'db1.php';
		      $query = mysql_query("select * from bankaccount") or die(mysql_error());
               while ($row = mysql_fetch_array($query)) {
                   ?>
             <option><?php echo $row['bank_Name']; ?></option>
			 <?php } ?>
	</select><br /><br />
&nbsp;&nbsp;&nbsp;Bank Branch:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="bank_Branch" id="bank_Branch">
            <option>--Bank Branch--</option>
               <?php
		         include 'db1.php';
		      $query = mysql_query("select * from bankaccount") or die(mysql_error());
               while ($row = mysql_fetch_array($query)) {
                   ?>
             <option><?php echo $row['bank_Branch']; ?></option>
			 <?php } ?>
	</select><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password"  id="password" placeholder="Inset Password!"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Pay">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Clear">
</form>
</div>
<?php
include 'db1.php';
if(isset($_POST['submit']))
{
$accountnumber=$_POST["accountnumber"];  
$password=$_POST["password"];
$bank_Name=$_POST["bank_Name"];
$bank_Branch=$_POST["bank_Branch"];

$result = mysql_query("select * from bankaccount where accountnumber= '$accountnumber' and account_password='$password' and bank_Name= '$bank_Name' and bank_Branch='$bank_Branch'") or die(mysql_error());
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
	echo '<script>alert("You have innum_rows(sefficent balance!")</script>';
	  }
	else 
	  {
mysql_query("INSERT INTO consumtionpayedcustomer (firstname, lastname, meterid, customer_id, housenumber, kebele, Date, Month, Year, previous_Reading, present_Reading, consumtion, price) VALUES ('$firstname', '$lastname', '$meterid', '$customer_id', '$housenumber', '$kebele', '$Date', '$Month', '$Year', '$previous_Reading', '$present_Reading', '$price')");

mysql_query("INSERT INTO reportconsumtionpayedcustomer (firstname, lastname, meterid, customer_id, Date, Month, Year, price) VALUES ('$firstname', '$lastname', '$meterid', '$customer_id', '$Date', '$Month', '$Year', '$price')");
	  
	  	mysql_query("UPDATE bankaccount SET balance ='$balance' WHERE accountnumber = '$accountnumber'");
		 echo '<script>alert("Water bill is payed Successfully!")</script>';
		 ?>
		 <center>
<h4>------------------------------------------------------------------------------------------------------------------------------</h4>
<h3>BURIE CITY WATER SUPPLY SURVICE RESIT OF PAYEMENT!</h3>
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
<h4>------------------------------------------------------------------------------------------------------------------------------</h4>
<CENTER><form><input type="button" onclick="window.print()" value="Print page" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../phome.php">Back</a></form></CENTER>
</p>
       	 <?php
		 $user_id =$_REQUEST['id'];
	mysql_query("DELETE from  consumtionpayedcustomer WHERE id='$user_id'");	
		 ?>
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
		  
		  