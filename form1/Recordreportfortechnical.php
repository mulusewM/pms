    <?php
	session_start();
$session=$_SESSION['id'];
include 'db1.php';
$result = mysql_query("SELECT * FROM  creataccounttechnicalsupervisor where id= '$session'");
while($row = mysql_fetch_array($result))
  {
  $first_name=$row['first_name'];
  $last_name=$row['last_name'];
  }
?>	
<?php
$customer_id=$_POST["customer_id"];
$meterid=$_POST["meterid"];
$day=$_POST["day"];
$month=$_POST["month"];
$year=$_POST["year"];
$task=$_POST["task"];

$result = mysql_query("SELECT * FROM   registration where customer_id= '$customer_id'") or die(mysql_error());
$count = mysql_num_rows($result);
if ($count > 0) 
   {
   while($row = mysql_fetch_array($result))
  {
  $customerfirstname=$row['first_name'];  				
  $customerlastname=$row['last_name'];
  $select=$row['kebele'];
  $housenumber=$row['house_number'];
  }
             $result = mysql_query("select * from technicalreport where Date='$day' and Month='$month' and Year='$year' and task='$task'") or die(mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
                                    echo '<script>alert("Data Already Exist or Its Duplicate Entry!")</script>';
									echo '<script>windows: location="Recordreportfortechnicalform.php"</script>';
									?>
                                    <?php
                                } else{
       mysql_query("INSERT INTO technicalreport (firstname, lastname, customerfirstname, customerlastname, Kebele, housenumber, customer_id, meterid, Date, Month, Year, task) VALUES ('$first_name', '$last_name', '$customerfirstname', '$customerlastname', '$select','$housenumber','$customer_id', '$meterid', '$day', '$month', '$year','$task')");
	   
echo '<script>alert("Data Inserted Successfully")</script>';
echo '<script>windows: location="Recordreportfortechnicalform.php"</script>';
}
}
   else{
	    echo '<script>alert("Data Is Not Exist or Cusomer Id Is Not Correct!")</script>';
		echo '<script>windows: location="Recordreportfortechnicalform.php"</script>';
	     }
?>




 
