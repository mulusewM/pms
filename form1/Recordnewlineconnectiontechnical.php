    <?php
include 'db1.php';
?>
<?php
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$kebele = $_POST['kebele'];
$housenumber = $_POST['housenumber'];
$customerid = $_POST['customerid'];
$phonenumber = $_POST['phonenumber'];
$metersize = $_POST['metersize'];


$result = mysql_query("select * from newcustomerlineconection where id='$id' or housenumber='$housenumber'") or die(                    mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
     echo '<script>alert("Data Already Exist or Its Duplicate Entry!")</script>';
	echo '<script>windows: location="Recordnewlineconnectionbytechnicalform.php"</script>';
									?>
                                    <?php
                                } else {
mysql_query("INSERT INTO  newcustomerlineconection  (id, first_name, last_name, kebele, house_number, customer_id, phonenumber, metersize)
        VALUES ('$id', '$firstname', '$lastname', '$kebele', '$housenumber', '$customerid', '$phonenumber', '$metersize')");

echo '<script>alert("Data inserted successfully")</script>';
echo '<script>windows: location="Recordnewlineconnectionbytechnicalform.php"</script>';
}
?>




 
