<?php
include 'db1.php';
$accountnumber=$_POST["accountnumber"];
$password=$_POST["password"];
$price=$_POST["price"];

$result = mysql_query("SELECT * FROM   bankaccount where accountnumber= '$accountnumber' and account_password='$password'") or die(mysql_error());
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
    echo '<script>windows: location="customerpaywaterconsumption.php"</script>';
	  }
	  else
	  {
	  	mysql_query("UPDATE bankaccount SET balance ='$balance' WHERE accountnumber = '$accountnumber'");
		 echo '<script>alert("Water bill is payed Successfully!")</script>';
		 echo "<script>windows: location='transferedfor.php'</script>";	
	  }  
      }
   else{
		echo '<script>windows: location="CustSearchPayment.php?err"</script>';
	     }
          ?>