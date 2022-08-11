
<?php
include 'db1.php';
?>
<?php
$customerid = $_POST['customerid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$kebele = $_POST['kebele'];
$housenumber = $_POST['housenumber'];
$username = $_POST['username'];
$password = $_POST['password'];
$pinnumber = $_POST['pinnumber'];
$meterid = $_POST['meterid'];
$Day = $_POST['Day'];
$Month = $_POST['Month'];
$Year = $_POST['Year'];
$metersize = $_POST['metersize'];
$result = mysql_query("select * from customer where customer_id='$customerid' or housenumber='$housenumber'") or die(mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
     echo '<script>alert("Data Already Exist or Its Duplicate Entry!")</script>';
	echo '<script>windows: location="billofficercustomerrigistrationform.php"</script>';
									?>
                                    <?php
                                } else {
mysql_query("INSERT INTO  customer  (customer_id, customerfirstname , customerlastname,password,user_name,  kebele, housenumber,   pinnumber,meterid,Day,Month,Year,metersize)
        VALUES ('$customerid', '$firstname', '$lastname','$password','$username', '$kebele', '$housenumber',  '$pinnumber','$meterid','$Day','$Month','$Year','$metersize')");

echo '<script>alert("Data inserted successfully")</script>';
echo '<script>windows: location="billofficercustomerrigistrationform.php"</script>';
}
?>



 
