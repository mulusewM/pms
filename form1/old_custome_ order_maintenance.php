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
$meterid = $_POST['meterid'];
$phonenumber = $_POST['phonenumber'];
$request = $_POST['request'];

$result = mysql_query("select * from oldcustomeordermaintenance where id='$id' or housenumber='$housenumber'") or die(                    mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
     echo '<script>alert("Data Already Exist or Its Duplicate Entry!")</script>';
	echo '<script>windows: location="old_custome_ order_maintenance form.php"</script>';
									?>
                                    <?php
                                } else {
mysql_query("INSERT INTO    oldcustomeordermaintenance  (id, firstname, lastname, kebele, housenumber, customerid,meterid, phonenumber, request)
        VALUES ('$id', '$firstname', '$lastname', '$kebele', '$housenumber', '$customerid','$meterid', '$phonenumber', '$request')");

echo '<script>alert("Data inserted successfully")</script>';
echo '<script>windows: location="old_custome_ order_maintenance form.php"</script>';
}
?>


 
