<?php
include 'db1.php';
?>
<?php
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$kebele = $_POST['kebele'];
$housenumber = $_POST['housenumber'];
$customer_id = $_POST['customer_id'];
$meterid = $_POST['meterid'];
$Date = $_POST['Date'];
$Month = $_POST['Month'];
$Year = $_POST['Year'];
$previous_Reading = $_POST['Previous_Reading'];
$present_Reading = $_POST['Present_Reading'];
$price = $_POST['price'];    
	 $result = mysql_query("select * from consumtionpayedcustomer where customer_id='$customer_id' or housenumber='$housenumber'") or die(                    mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
     echo '<script>alert("Data Already Exist or Its Duplicate Entry!")</script>';
	echo '<script>windows: location="billofficerrecordconsumptionform.php"</script>';
									?>
                                    <?php
                                } else {
mysql_query("INSERT INTO  consumtionpayedcustomer  ( customerfirstname, customerlastname,meterid, customer_id,housenumber, kebele,   Date, Month, Year, previous_Reading, present_Reading, price)
        VALUES ( '$firstname', '$lastname','$meterid', '$customer_id','$housenumber','$kebele',   '$Date', '$Month', '$Year', $previous_Reading, $present_Reading, $price)");

echo '<script>alert("Data inserted successfully")</script>';
echo '<script>windows: location="billofficerrecordconsumptionform.php"</script>';
}
?>

