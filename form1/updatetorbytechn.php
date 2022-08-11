<?php
include 'db1.php';
$customer_id =$_REQUEST['customer_id'];
										  
	$customer_id = $_POST['customer_id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$select = $_POST['Kebele'];
	$meterid = $_POST['meterid'];
	$Date = $_POST['Date'];
	$Month = $_POST['Month'];
	$Year = $_POST['Year'];
	$task = $_POST['task'];
	
	$result = mysql_query("SELECT * FROM   technicalreport where customer_id= '$customer_id'") or die(mysql_error());
$count = mysql_num_rows($result);
if ($count > 0) 
   {
   while($row = mysql_fetch_array($result))
  {
  $firstname=$row['firstname'];  				
  $lastname=$row['lastname'];
  $select=$row['Kebele'];
  $housenumber=$row['housenumber'];
  }

	mysql_query("UPDATE technicalreport SET customer_id ='$customer_id', firstname ='$firstname', lastname ='$lastname', Kebele = '$select', housenumber = '$housenumber', customer_id = '$customer_id', meterid ='$meterid', Date='$Date', Month='$Month', Year='$Year', task='$task'  WHERE customer_id = '$customer_id'");
			
         echo '<script>alert("One Row Updated Successfully!")</script>';
		 echo "<script>windows: location='ViewRegisteredReportbytechnichian.php'</script>";	
		 }
		 else{
	    echo '<script>alert("Data Is Not Exist or Cusomer Id Is Not Correct!")</script>';
		echo '<script>windows: location="ViewRegisteredReportbytechnichian.php"</script>';
	     }			
		?>