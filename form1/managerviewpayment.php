<?php
include 'db1.php';
$id =$_REQUEST['id'];
$result = mysql_query("SELECT * FROM bill where id='$id'");
while($row = mysql_fetch_array($result))
  {
	  $prev=$row['prev'];
	  $owners_id=$row['owners_id'];
	  $pres=$row['pres'];
	  $price=$row['price'];
	  $totalcons=$pres - $prev;
	  $bill=$totalcons * $price;
	  $date=$row['date'];
 
  }

?>

<?php
  
include 'db1.php';


$result = mysql_query("SELECT * FROM waterconsumtion WHERE id  = '$owners_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$customerfirstname= $test['customerfirstname'] ;					
				$customerlastname=$test['customerlastname'] ;
				$meterid=$test['meterid'] ;
				$kebele=$test['kebele'] ;
				$phonenumber=$test['phonenumber'] ;

?>

<style type="text/css">
#data { margin: 0 auto; width:700px; }

</style>
<div id="data">
<center>
<h3>JIGJIGA CITY WATER SUPPLY SURVICE</h3>
<p><h3>JIGJIGA City</h3></p>
<p><h4>Bill Officer. Anguach Yenealem</h4></p>
<p>Phone:0921344356 </p>
</center>
<div id="context">
<p>Customer Name: <?php echo $customerfirstname.'&nbsp;'.$customerlastname; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meter Id: <?php echo $meterid;  ?>
<br /><br />
Kebele: <?php echo $kebele; ?>
<br /> <br />
</p>
<center>Date: <?php echo $date; ?> </center>
<p>
Previous Reading : <?php echo $prev;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price: <?php echo $price; ?><br /><br />
Present Reading : <?php echo $pres; ?> <br /><br />
Consuption: <?php echo $totalcons;?>
<h4 align="center">Bill Amount:Birr <?php echo $bill; ?> </h4><br /><br />

</p>
<CENTER></form><a href="managerviewbilloficerreport.php">Back</a></CENTER>
</div>


</div>