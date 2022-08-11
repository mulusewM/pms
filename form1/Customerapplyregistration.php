<?php
include 'db1.php';
?>
<?php
//$customerid = $_POST['customerid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$kebele = $_POST['kebele'];
$housenumber = $_POST['housenumber'];
$username = $_POST['username'];
$password = ($_POST['password']);
//$pinnumber = $_POST['pinnumber'];
	  $result = mysql_query("select * from registration where id='$id' or house_number='$housenumber'") or die(                    mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
     echo '<script>alert("Data Already Exist or Its Duplicate Entry!")</script>';
	echo '<script>windows: location="Customerapplyregistrationform.php"</script>';
									?>
                                    <?php
                                } else {
mysql_query("INSERT INTO  registration  (first_name, last_name, kebele, house_number, user_name, password)
        VALUES ('$firstname', '$lastname', '$kebele', '$housenumber', '$username', '$password')");

echo '<script>alert("Data inserted successfully")</script>';
echo '<script>windows: location="Customerapplyregistrationform.php"</script>';
}
?>

