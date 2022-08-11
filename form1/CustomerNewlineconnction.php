   <?php
include 'db1.php';
?>
<?php
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$kebele = $_POST['kebele'];
$housenumber = $_POST['housenumber'];
$idnumber = $_POST['idnumber'];
$phonenumber = $_POST['phonenumber'];
$metersize = $_POST['metersize'];
$request = $_POST['request'];

$result = mysql_query("select * from  newcustomerlineconection where id='$id' or housenumber='$housenumber'") or die(                    mysql_error());
                                $count = mysql_num_rows($result);

                                if ($count > 0) {
                                    ?><?php
     echo '<script>alert("Data Already Exist or Its Duplicate Entry!")</script>';
	echo '<script>windows: location=" CustomerNewlineconnctionform.php"</script>';
									?>
                                    <?php
                                } else {
mysql_query("INSERT INTO     newcustomerlineconection  (id, firstname, lastname, kebele, housenumber, idnumber, phonenumber,metersize, request)
        VALUES ('$id', '$firstname', '$lastname', '$kebele', '$housenumber', '$idnumber', '$phonenumber','$metersize', '$request')");

echo '<script>alert("Data inserted successfully")</script>';
echo '<script>windows: location=" CustomerNewlineconnctionform.php"</script>';
}
?>


 
